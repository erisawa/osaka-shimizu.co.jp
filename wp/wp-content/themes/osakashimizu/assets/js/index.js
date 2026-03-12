//import Swiper from "swiper/bundle";
//import "swiper/swiper-bundle.css";
//import "./styles.css";

window.addEventListener('load', () => {
  const loader = document.getElementById('loader');
  if (!loader) return;

  setTimeout(() => {
    loader.classList.add('loaded');
  }, 1000);
});

//top_business_slide
const swiper = new Swiper(".top_business_slide", {
  // Optional parameters
  loop: true,
  allowTouchMove: false,
  speed: 800,
  spaceBetween: 20,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination"
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },

  slidesPerView: 1, // 表示するスライドの枚数
  centeredSlides : true, // スライドを中央揃えを有効化
  effect: "coverflow",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 1,
    scale: 0.8,
    slideShadows: false
  },
  breakpoints: {
    640: {
    spaceBetween:  10,
      slidesPerView: 1.1,
    }
  },
});

//top_recruit_slide01
const mySwiper = new Swiper('.top_recruit_slide01', {
  loop: true,
  slidesPerView: 2,
  centeredSlides: false,
  spaceBetween: 10,
  slideToClickedSlide: true,

  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
    waitForTransition: true,
    pauseOnMouseEnter: true,
  },

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    type: 'bullets',
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  on: {
    init: function () {
      const activeSlide = this.slides[this.activeIndex];
      if (activeSlide) {
        activeSlide.classList.add('is-flipped');
      }
    },
    slideChangeTransitionStart: function () {
      this.slides.forEach(slide => {
        slide.classList.remove('is-flipped');
      });
    },
    slideChangeTransitionEnd: function () {
      const activeSlide = this.slides[this.activeIndex];
      if (activeSlide) {
        activeSlide.classList.add('is-flipped');
      }
    }
  },
  breakpoints: {
    640: {
      spaceBetween: 20,
      slidesPerView: 3.4,
    }
  },
});

//パララックスふわっと
(() => {
  const targets = document.querySelectorAll('.pic-mamo');
  if (!targets.length) return;

  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          obs.unobserve(entry.target);
        }
      });
    },
    {
      root: null,
      threshold: 0.4,
    }
  );

  targets.forEach(el => observer.observe(el));
})();

//パララックス
(() => {
  const gallery = document.querySelector('.mamo_gallery');
  if (!gallery) return;

  // 動きを減らすユーザーは最初から何もしない
  const mqlReduce = window.matchMedia('(prefers-reduced-motion: reduce)');
  if (mqlReduce.matches) return;

  const items = Array.from(gallery.querySelectorAll('.pic-mamo'));
  if (!items.length) return;

  const RANGE = 400;
  items.forEach(el => el._speed = parseFloat(el.dataset.speed || '0'));

  let vh = window.innerHeight;
  let start = 0, end = 1;
  let active = false;     // 画面内にあるときだけtrue
  let ticking = false;    // rAF多重防止

  const clamp01 = v => (v < 0 ? 0 : v > 1 ? 1 : v);

  function measure() {
    const rect = gallery.getBoundingClientRect();
    const top = window.scrollY + rect.top;
    start = top - vh;
    end   = top + gallery.offsetHeight + vh; // 1画面分の先読み
  }

  function compute() {
    if (!active) return;
    const sY = window.scrollY;
    const t = clamp01((sY - start) / (end - start));
    const base = (t - 0.5) * 2; // -1..1
    for (let i = 0; i < items.length; i++) {
      const el = items[i];
      const y = base * el._speed * RANGE;
      el.style.transform = `translate3d(0, ${y.toFixed(1)}px, 0)`;
    }
  }

  function schedule() {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(() => { ticking = false; compute(); });
  }

  function onResize() {
    vh = window.innerHeight;
    measure();
    schedule();
  }

  // 画面内/外の監視
  const io = new IntersectionObserver((entries) => {
    const nowActive = entries.some(e => e.isIntersecting);
    if (nowActive !== active) {
      active = nowActive;
      document.body.classList.toggle('is-parallaxActive', active);
      if (active) { measure(); schedule(); }
    }
  }, { root: null, rootMargin: '200px 0px', threshold: 0 });

  io.observe(gallery);

  // イベント軽量化
  window.addEventListener('scroll', schedule, { passive: true });
  window.addEventListener('resize', onResize);
  window.addEventListener('load', () => { measure(); schedule(); });
  window.addEventListener('pageshow', () => { measure(); schedule(); });

  // 閲覧中にOS設定が変わったら停止（対応ブラウザ）
  mqlReduce.addEventListener?.('change', e => {
    if (e.matches) {
      items.forEach(el => el.style.transform = 'none');
      document.body.classList.remove('is-parallaxActive');
      io.disconnect();
      window.removeEventListener('scroll', schedule);
      window.removeEventListener('resize', onResize);
    }
  });
})();

//トップコピー
(() => {
  const words = ['情熱', '真実', '誇り', '現実', '毎日'];
  const target = document.querySelector('.js-switch-text');

  if (!target) return;

  let index = 0;
  const interval = 3000; // 切り替え間隔（ms）

  setInterval(() => {
    // フェードアウト
    target.classList.add('is-hidden');

    setTimeout(() => {
      index = (index + 1) % words.length;
      target.textContent = words[index];

      // フェードイン
      target.classList.remove('is-hidden');
    }, 400);
  }, interval);
})();