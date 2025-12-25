//**************************************************************
// 日付部分の表示・非表示
//**************************************************************
document.addEventListener("DOMContentLoaded", function() {
    const free = document.querySelector('input[name="inquiry-type"][value="無料採寸ご予約"]');
    const reorder = document.querySelector('input[name="inquiry-type"][value="再オーダー"]');
    const block = document.querySelector('.js-preferred-date');

    // 必要な要素が無ければ何もしない
    if (!free || !block) return;

    function toggle() {
        block.style.display = free.checked ? 'block' : 'none';
    }

    free.addEventListener('change', toggle);
    reorder?.addEventListener('change', toggle);

    toggle(); // 初期状態
});


//**************************************************************
// 土日を選択できないようにする
//**************************************************************
document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('input[type="date"]').forEach(input => {
    input.addEventListener('change', () => {
      const day = new Date(input.value).getDay();
      if (day === 0 || day === 6) {
        alert('土日祝はご予約いただけません');
        input.value = '';
      }
    });
  });
});


//**************************************************************
// 製品詳細ページを見ていた場合の商品名・URL取得
//**************************************************************
document.addEventListener('DOMContentLoaded', () => {
  const params = new URLSearchParams(window.location.search);

  const productTitle = params.get('product_title');
  const productUrl   = params.get('product_url');

  const box = document.querySelector('.js-selected-product');
  if (!box) return;

  // フィールド取得
  const styleInput = document.getElementById('selected-style');
  const urlInput   = document.getElementById('selected-url');

  const styleHidden = document.getElementById('selected-style-hidden');
  const urlHidden   = document.getElementById('selected-url-hidden');

  // パラメータが無ければ非表示
  if (!productTitle || !productUrl) {
    box.style.display = 'none';
    return;
  }

  // 表示用
  styleInput.value = productTitle;
  urlInput.value   = productUrl;

  // 送信用
  styleHidden.value = productTitle;
  urlHidden.value   = productUrl;

  // セクション表示
  box.style.display = 'block';
});


//**************************************************************
// 住所検索のjs
//**************************************************************
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.zip-search-btn').forEach((btn) => {
    btn.addEventListener('click', async () => {
      // このボタンが属する住所ブロック内だけを対象にする
      const wrap = btn.closest('.address-fields');
      if (!wrap) return;

      const zip1El = wrap.querySelector('input[name="zip-1"]');
      const zip2El = wrap.querySelector('input[name="zip-2"]');
      const prefEl = wrap.querySelector('input[name="prefecture"]');
      const cityEl = wrap.querySelector('input[name="city"]');
      const addr1El = wrap.querySelector('input[name="address-1"]');

      if (!zip1El || !zip2El || !prefEl || !cityEl || !addr1El) {
        console.warn('住所検索：フィールドが見つからない');
        return;
      }

      const zip1 = (zip1El.value || '').trim();
      const zip2 = (zip2El.value || '').trim();

      // 3桁+4桁のチェック（CF7側のmaxlengthだけに依存しない）
      if (!/^\d{3}$/.test(zip1) || !/^\d{4}$/.test(zip2)) {
        alert('郵便番号を3桁-4桁で入力してください');
        return;
      }

      const zipcode = zip1 + zip2;

      try {
        const res = await fetch(`https://zipcloud.ibsnet.co.jp/api/search?zipcode=${zipcode}`);
        const data = await res.json();

        if (data.status !== 200 || !data.results || !data.results[0]) {
          alert('住所が見つかりませんでした');
          return;
        }

        const r = data.results[0];

        // address1=都道府県, address2=市区町村, address3=町域
        prefEl.value = r.address1 || '';
        cityEl.value = r.address2 || '';
        addr1El.value = r.address3 || '';

        // 次の入力へ誘導
        addr1El.focus();

      } catch (e) {
        alert('住所検索に失敗しました（通信エラー）');
        console.error(e);
      }
    });
  });
});