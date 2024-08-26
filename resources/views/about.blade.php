<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ env("APP_NAME", "Laravel") }}</title>
        
        @vite("resources/css/app.css")
        
        <link rel="icon" href="{{ asset("images/logo.jpg") }}" type="image/jpg" />

        {{-- Font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

        <style>
            .containers {
                position: absolute;
                width: 100vw;
                height: 90vh;
                overflow: hidden;
                display: flex;
                justify-content: center;
                align-items: center;
            }
    
            .slider {
                position: absolute;
                inset: 80px 200px 80px 80px;
                border-radius: 20px;
            }
    
            .slider .slides {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 240px;
                height: 320px;
                background: var(--img);
                background-size: cover;
                background-position: center;
                border-radius: 20px;
                transition: 0.5s;
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
                display: flex;
                justify-content: flex-start;
                align-items: flex-end;
            }
    
            .slider .slides:nth-child(1),
            .slider .slides:nth-child(2) {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                transform: translateY(0);
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0);
                background-size: cover;
            }
    
            .slider .slides:nth-child(3) {
                left: calc(50% + 240px);
                background-size: cover;
            }
    
            .slider .slides:nth-child(4) {
                left: calc(50% + 500px);
                background-size: cover;
            }
    
            .slider .slides:nth-child(5) {
                left: calc(50% + 760px);
                background-size: cover;
            }
    
            .slider .slides:nth-child(6) {
                left: calc(50% + 1020px);
                background-size: cover;
                opacity: 0;
            }
    
            .buttons {
                position: absolute;
                bottom: 15px;
                display: flex;
                gap: 20px;
            }
    
            .buttons span {
                position: relative;
                width: 50px;
                height: 50px;
                background: #111;
                cursor: pointer;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50%;
            }
    
            .buttons span::before {
                content: '';
                position: absolute;
                width: 15px;
                height: 15px;
                border-top: 4px solid #fff;
                border-left: 4px solid #fff;
                transform: rotate(315deg) translate(2px, 2px);
            }
            .buttons span:nth-child(2)::before {
                transform: rotate(135deg) translate(2px, 2px);
            }
    
            .buttons span:active {
                opacity: 0.5;
            }
    
            .content h2 {
                font-size: 4em;
                color: #fff;
            }
    
            .content p {
                color: #fff;
            }
            .content {
                position: relative;
                padding: 40px;
                max-width: 600px;
                transition: 0.25s;
                transition-delay: 0s;
                transform: translateY(40px);
                z-index: -1000;
                opacity: 0;
            }
            .slider .slides:nth-child(1) .content,
            .slider .slides:nth-child(2) .content {
                opacity: 1;
                transform: translateY(0);
                transition-delay: 0.5s;
            }
    
            @media (max-width: 900px) {
                .slider {
                    position: absolute;
                    inset: 40px 40px 200px 40px;
                }
    
                .slider .slides {
                    width: 100px;
                    height: 100px;
                    bottom: -170px;
                    top: initial;
                    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.25);
                }
    
                .slider .slides:nth-child(1),
                .slider .slides:nth-child(2) {
                    top: initial;
                    bottom: 0px;
                }
    
                .slider .slides:nth-child(3) {
                    left: 0;
                }
    
                .slider .slides:nth-child(4) {
                    left: 120px;
                }
    
                .slider .slides:nth-child(5) {
                    left: 240px;
                }
    
                .slider .slides:nth-child(6) {
                    left: 360px;
                }
            }
        </style>
    </head>
    <body class="">
        @include("layouts.header")
        <div class="containers">
            <div class="slider">
                <div class="slides" style="--img: url('{{ asset("images/about/img7.png") }}')">
                    <div class="content">
                        <h2>Slide 01</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corporis voluptatum enim aliquam ad consectetur quis, similique numquam sed distinctio mollitia et? Quibusdam officia doloremque voluptatum vero dolorum labore explicabo.</p>
                    </div>
                </div>
    
                <div class="slides" style="--img: url('{{ asset("images/about/img4.png") }}')">
                    <div class="content">
                        <h2>Slide 02</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corporis voluptatum enim aliquam ad consectetur quis, similique numquam sed distinctio mollitia et? Quibusdam officia doloremque voluptatum vero dolorum labore explicabo.</p>
                    </div>
                </div>
    
                <div class="slides" style="--img: url('{{ asset("images/about/img11.png") }}')">
                    <div class="content">
                        <h2>Slide 03</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corporis voluptatum enim aliquam ad consectetur quis, similique numquam sed distinctio mollitia et? Quibusdam officia doloremque voluptatum vero dolorum labore explicabo.</p>
                    </div>
                </div>
    
                <div class="slides" style="--img: url('{{ asset("images/about/img12.png") }}')">
                    <div class="content">
                        <h2>Slide 04</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corporis voluptatum enim aliquam ad consectetur quis, similique numquam sed distinctio mollitia et? Quibusdam officia doloremque voluptatum vero dolorum labore explicabo.</p>
                    </div>
                </div>
    
                <div class="slides" style="--img: url('{{ asset("images/about/img14.jpeg") }}')">
                    <div class="content">
                        <h2>Slide 05</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corporis voluptatum enim aliquam ad consectetur quis, similique numquam sed distinctio mollitia et? Quibusdam officia doloremque voluptatum vero dolorum labore explicabo.</p>
                    </div>
                </div>
    
                <div class="slides" style="--img: url('{{ asset("images/about/img15.png") }}')">
                    <div class="content">
                        <h2>Slide 06</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corporis voluptatum enim aliquam ad consectetur quis, similique numquam sed distinctio mollitia et? Quibusdam officia doloremque voluptatum vero dolorum labore explicabo.</p>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <span class="prev"></span>
                <span class="next"></span>
            </div>
        </div>
    
        <script>
            let next = document.querySelector('.next');
            let prev = document.querySelector('.prev');
            let slider = document.querySelector('.slider');
    
            next.addEventListener('click', () => {
                let slides = document.querySelectorAll('.slides');
                slider.appendChild(slides[0]);
            });
    
            prev.addEventListener('click', () => {
                let slides = document.querySelectorAll('.slides');
                slider.prepend(slides[slides.length - 1]);
            });
        </script>
    </body>

    {{-- Scroll Reveal --}}
    <script src="{{ asset("js/scrollreveal.min.js") }}"></script>

    {{-- Swiper CSS1 JS1 --}}
    <script src="{{ asset("js/swiper-bundle.min.js") }}"></script>

    {{-- Main JS --}}
    <script src="{{ asset("js/main.js") }}"></script>
</html>
