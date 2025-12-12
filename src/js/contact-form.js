document.addEventListener("DOMContentLoaded", function() {
    const free = document.querySelector('input[name="inquiry-type"][value="無料採寸ご予約"]');
    const reorder = document.querySelector('input[name="inquiry-type"][value="再オーダー"]');
    const block = document.querySelector('.js-preferred-date');

    function toggle() {
        if (free.checked) {
            block.style.display = 'block';
        } else {
            block.style.display = 'none';
        }
    }

    free?.addEventListener('change', toggle);
    reorder?.addEventListener('change', toggle);
    
    toggle(); // 初期状態
});