import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);



(function () {

  const gallery = Array.from(document.querySelectorAll('.light-box-gallery img'));
  const lb = document.querySelector('.lightbox');
  const lbBg = document.querySelector('.lightbox-bg');
  const lbImg = document.querySelector('.lightbox-img');
  const lbCaption = document.querySelector('.caption');
  const btnPrev = document.querySelector('.prev');
  const btnNext = document.querySelector('.next');


  let currentIndex = 0;

  // --- Lightbox必須要素が揃ってなかったら何もせず終了 ---
  if (gallery.length === 0 || !lb || !lbBg || !lbImg) {
    return;
  }


  // 表示
  function openLightbox(index) {
    currentIndex = index;
    const img = gallery[index];

    lbImg.src = img.src;
    lbCaption.textContent = img.dataset.caption || "";

    lb.style.display = 'grid';

    gsap.fromTo(lbBg, { opacity: 0 }, { opacity: 1, duration: 0.4 });
    gsap.fromTo(lbImg, { opacity: 0, scale: 0.85 }, { opacity: 1, scale: 1, duration: 0.4 });
  }

  // 閉じる
  function closeLightbox() {
    gsap.to(lbImg, { opacity: 0, scale: 0.85, duration: 0.3 });
    gsap.to(lbBg, { opacity: 0, duration: 0.3, onComplete: () => lb.style.display = 'none' });
  }

  lbBg.addEventListener('click', closeLightbox);

  // 次へ
  function next() {
    currentIndex = (currentIndex + 1) % gallery.length;
    switchImage();
  }

  // 前へ
  function prev() {
    currentIndex = (currentIndex - 1 + gallery.length) % gallery.length;
    switchImage();
  }

  // 共通：画像切り替えアニメーション
  function switchImage() {
    const img = gallery[currentIndex];
    gsap.to(lbImg, {
      opacity: 0, scale: 0.9, duration: 0.25, onComplete: () => {
        lbImg.src = img.src;
        lbCaption.textContent = img.dataset.caption || "";
        gsap.fromTo(lbImg, { opacity: 0, scale: 1.05 }, { opacity: 1, scale: 1, duration: 0.3 });
      }
    });
  }

  // クリックイベント
  gallery.forEach((img, i) =>
    img.addEventListener('click', () => openLightbox(i))
  );

  // 矢印
  btnNext.addEventListener('click', next);
  btnPrev.addEventListener('click', prev);

  // キーボード操作
  document.addEventListener('keydown', e => {
    if (lb.style.display !== 'grid') return;
    if (e.key === 'ArrowRight') next();
    if (e.key === 'ArrowLeft') prev();
    if (e.key === 'Escape') closeLightbox();
  });

  // スワイプ（スマホ対応）
  let startX = 0;
  lb.addEventListener('touchstart', e => {
    startX = e.touches[0].clientX;
  });

  lb.addEventListener('touchend', e => {
    let endX = e.changedTouches[0].clientX;
    let diff = endX - startX;

    if (Math.abs(diff) > 50) {
      diff < 0 ? next() : prev();
    }
  });

})();
