const navTriggerBtn = document.getElementById("nav_trigger_btn");
const navMenu = document.getElementById("nav_menu");

navTriggerBtn.addEventListener("click", () => {
    navMenu.classList.toggle("nav-is-open");
});

//Counter
const counters = document.querySelectorAll(".counters span");
const counterContainer = document.querySelector(".counters");
let activated = false;

window.addEventListener("scroll", () => {
    if (window.scrollX > counterContainer.offsetTop - counterContainer.offsetHeight - 2000 && activated === false) {
        counters.forEach((counter) => {
            counter.innerHTML = 0;
            let count = 0;
            function updateCount() {
                const target = parseInt(counter.dataset.count);
                if (count < target) {
                    count++;
                    counter.innerText = count;
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                }
            }
            updateCount();
            activated = true;
        });
    } else if (pageYOffset < counterContainer.offsetTop - counterContainer.offsetHeight - 500 || (pageYOffset === 0 && activated === true)) {
        counters.forEach((counter) => {
            counter.innerText = 0;
        });
        activated = false;
    }
});

//Swiper
const swiper = new Swiper(".swiper", {
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    //breakpoint
    slidesPerView: 3,
    spaceBetween: 20,
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        960: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        },
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});

// Scroll reveal animations
const sr = ScrollReveal({
    origin: "bottom",
    distance: "60px",
    duration: 3000,
    delay: 600,
    reset: true,
});

//hero
sr.reveal(".hero__text", { origin: "top" });

sr.reveal(".steps__step", { distance: "100px", interval: 100 });

sr.reveal(".about__text", { origin: "left" });
sr.reveal(".about__img", { origin: "right", delay: 800 });

sr.reveal(".testimonial__bg", { delay: 800 });
sr.reveal(".testimonial__title");
sr.reveal(".testimonial__slider", { delay: 1000 });

sr.reveal(".work__title");
sr.reveal(".work__subtitle", { delay: 800 });
sr.reveal(".work__grid", { delay: 1000 });

sr.reveal(".stats");
sr.reveal(".stats__item", { distance: "50px", interval: 100 });

sr.reveal(".news__title");
sr.reveal(".news__subtitle", { delay: 800 });

sr.reveal(".news__item", {
    distance: "100px",
    interval: 100,
    delay: 1000,
});

sr.reveal(".contact__container");
sr.reveal(".contect__text", { delay: 800 });

sr.reveal(".footer__item", {
    distance: "100px",
    interval: 100,
});

sr.reveal(".footer__copyright");
