@extends("layouts.main")
@section("content")
    <section class="hero relative z-20 h-[640px] overflow-hidden bg-hero bg-fixed bg-center bg-no-repeat lg:bg-cover xl:h-[840px] xl:rounded-bl-[290px]">
        <div class="flex h-full items-center justify-center bg-primary/50 xl:justify-start">
            <div class="hero__text mx-auto flex flex-col items-center text-center">
                <h1 class="h1 mb-8 font-bold text-white">EDU Spectrum Myanmar</h1>
                <p class="mb-8 text-white">INTELLIGENCE PLUS CHARACTER - THAT IS THE GOAL OF TRUE EDUCATION.</p>
            </div>
        </div>
    </section>

    {{-- Stats --}}
    <section class="stats relative z-20 mt-[80px] bg-accent-secondary py-[80px] xl:mt-[150px] xl:py-[150px]">
        <div class="container mx-auto">
            <div class="counters grid grid-cols-1 gap-12 xl:grid-cols-4">
                <div class="stats__item text-center xl:border-r xl:border-accent">
                    <h3 class="h1 font-primary text-accent">
                        <span data-count="20">0</span>
                        +
                    </h3>
                    <p>Years Of Experience</p>
                </div>

                <div class="stats__item text-center xl:border-r xl:border-accent">
                    <h3 class="h1 font-primary text-accent">
                        <span data-count="1000">0</span>
                        +
                    </h3>
                    <p>Students</p>
                </div>

                <div class="stats__item text-center xl:border-r xl:border-accent">
                    <h3 class="h1 font-primary text-accent">
                        <span data-count="100">0</span>
                        +
                    </h3>
                    <p>Teachers</p>
                </div>

                <div class="stats__item text-center">
                    <h3 class="h1 font-primary text-accent">
                        <span data-count="10">0</span>
                        +
                    </h3>
                    <p>Campuses</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section class="steps relative z-20 mt-[80px] xl:mt-[200px]">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-12 xl:grid-cols-3">
                {{-- Step 1 --}}
                <div class="steps__step flex h-36 w-full cursor-pointer items-center justify-center gap-3 rounded-2xl border border-transparent bg-accent p-5 shadow-xl transition-all duration-300 hover:border-accent hover:bg-transparent hover:text-primary">
                    <div class="">
                        <i class="ri-compasses-2-line text-5xl"></i>
                    </div>
                    <p class="text-lg font-semibold">Innovative Teaching Styles</p>
                </div>

                <div class="steps__step flex h-36 w-full cursor-pointer items-center justify-center gap-3 rounded-2xl border border-transparent bg-accent p-5 shadow-xl transition-all duration-300 hover:border-accent hover:bg-transparent hover:text-primary">
                    <div class="">
                        <i class="ri-magic-line text-5xl"></i>
                    </div>
                    <p class="text-lg font-semibold">Advanced Facilities and Resources</p>
                </div>

                <div class="steps__step flex h-36 w-full cursor-pointer items-center justify-center gap-3 rounded-2xl border border-transparent bg-accent p-5 shadow-xl transition-all duration-300 hover:border-accent hover:bg-transparent hover:text-primary">
                    <div class="">
                        <i class="ri-service-line text-5xl"></i>
                    </div>
                    <p class="text-lg font-semibold">Strong Community and Parental Engagement</p>
                </div>

                <div class="steps__step flex h-36 w-full cursor-pointer items-center justify-center gap-3 rounded-2xl border border-transparent bg-accent p-5 shadow-xl transition-all duration-300 hover:border-accent hover:bg-transparent hover:text-primary">
                    <div class="">
                        <i class="ri-empathize-line text-5xl"></i>
                    </div>
                    <p class="text-lg font-semibold">Comprehensive Student Support Services</p>
                </div>

                <div class="steps__step flex h-36 w-full cursor-pointer items-center justify-center gap-3 rounded-2xl border border-transparent bg-accent p-5 shadow-xl transition-all duration-300 hover:border-accent hover:bg-transparent hover:text-primary">
                    <div class="">
                        <i class="ri-user-2-line text-5xl"></i>
                    </div>
                    <p class="text-lg font-semibold">Highly Qualified and Diverse Faculty</p>
                </div>

                <div class="steps__step flex h-36 w-full cursor-pointer items-center justify-center gap-3 rounded-2xl border border-transparent bg-accent p-5 shadow-xl transition-all duration-300 hover:border-accent hover:bg-transparent hover:text-primary">
                    <div class="">
                        <i class="ri-shake-hands-line text-5xl"></i>
                    </div>
                    <p class="text-lg font-semibold">Engagement Beyond the Classroom</p>
                </div>
            </div>
        </div>
    </section>

    {{-- About --}}
    <section class="about rleative z-20 mt-[80px] xl:mt-[200px]">
        <div class="container mx-auto xl:px-0">
            <div class="flex flex-col items-center justify-between gap-8 text-center xl:flex-row xl:gap-[74px] xl:text-left">
                {{-- Text --}}
                <div class="about__text order-2 flex max-w-xl flex-1 flex-col items-center gap-8 xl:order-none xl:max-w-[] xl:items-start">
                    <h2 class="h2">Empowering Global Minds, Inspiring Future Leaders</h2>
                    <p>We believe that education extends beyond the classroom. We are dedicated to shaping well-rounded individuals who are not only academically accomplished but also culturally aware and socially responsible.</p>
                    {{-- Phone --}}

                    <button class="btn btn-primary">
                        View More
                        <i class="ri-arrow-right-line text-accent"></i>
                    </button>
                </div>

                {{-- Image --}}
                <div class="about__img order-1 mx-auto h-full min-h-[600px] w-full max-w-[500px] flex-none rounded-bl-[80px] rounded-tr-[250px] bg-center bg-no-repeat lg:bg-cover xl:order-none xl:mx-0" style="background-image: url('{{ asset("images/about/img.jpg") }}')">
                    {{-- <img src="{{ asset("images/about/img.jpg") }}" class="object-cover" /> --}}
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonial --}}
    <section class="testimonial relative z-20 mt-[80px] xl:mt-[200px]">
        <div class="testimonial__bg container mx-auto rounded-[70px] bg-accent-secondary px-6">
            <div class="flex flex-col items-center pb-[110px] pt-[88px]">
                <h2 class="testimonial__title h2 mb-9 text-center">What students say</h2>
            </div>
            {{-- Slider --}}
            <div class="w-full">
                <div class="testimonial__slider swiper h-[400px]">
                    <div class="swiper-wrapper">
                        {{-- Slide1 --}}
                        <div class="swiper-slide">
                            {{-- Item --}}
                            <div class="testimonial__item mx-auto flex h-[340px] w-full max-w-[450px] flex-col justify-center rounded-[30px] bg-white p-9">
                                <div class="mb-6 flex gap-4">
                                    <img src="{{ asset("images/testimonial/01.png") }}" />
                                    <div>
                                        <h3 class="h3">Toe Lwin Myint</h3>
                                        <div>Secondary 1</div>
                                    </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the typesetting industry. Ipsum has been.</p>
                            </div>
                        </div>

                        {{-- Slide1 --}}
                        <div class="swiper-slide">
                            {{-- Item --}}
                            <div class="testimonial__item mx-auto flex h-[340px] w-full max-w-[370px] flex-col justify-center rounded-[30px] bg-white p-9">
                                <div class="mb-6 flex gap-4">
                                    <img src="{{ asset("images/testimonial/01.png") }}" />
                                    <div>
                                        <h3 class="h3">Oak Soe Aung</h3>
                                        <div>Secondary 3</div>
                                    </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the typesetting industry. Ipsum has been.</p>
                            </div>
                        </div>

                        {{-- Slide1 --}}
                        <div class="swiper-slide">
                            {{-- Item --}}
                            <div class="testimonial__item mx-auto flex h-[340px] w-full max-w-[370px] flex-col justify-center rounded-[30px] bg-white p-9">
                                <div class="mb-6 flex gap-4">
                                    <img src="{{ asset("images/testimonial/01.png") }}" />
                                    <div>
                                        <h3 class="h3">Thuta Zaw</h3>
                                        <div>Primary 1</div>
                                    </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the typesetting industry. Ipsum has been.</p>
                            </div>
                        </div>

                        {{-- Slide4 --}}
                        <div class="swiper-slide">
                            {{-- Item --}}
                            <div class="testimonial__item mx-auto flex h-[340px] w-full max-w-[370px] flex-col justify-center rounded-[30px] bg-white p-9">
                                <div class="mb-6 flex gap-4">
                                    <img src="{{ asset("images/testimonial/01.png") }}" />
                                    <div>
                                        <h3 class="h3">Nyi Nyi Maung</h3>
                                        <div>Primary 6</div>
                                    </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the typesetting industry. Ipsum has been.</p>
                            </div>
                        </div>
                    </div>
                    {{-- Swiper pagination --}}
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Timetables --}}
    <section class="work relative z-20 mt-[80px] xl:mt-[150px]">
        <div class="container mx-auto xl:px-0">
            <div class="mb-24 text-center">
                <h2 class="work__title h2 mb-4">Follow Our Classes Timetables</h2>
                <p class="work__subtitle mx-auto max-w-3xl">The timetable is more than just a schedule—it's a carefully crafted pathway that balances rigorous academics, diverse extracurriculars, and personal growth, guiding students to excel in a globalized world."</p>
            </div>
            {{-- Grid --}}
            <div class="work__grid grid grid-cols-1 gap-x-[104px] gap-y-[56px] xl:grid-cols-3">
                <div class="relative flex h-[400px] w-80 flex-col justify-between">
                    <!-- ImageBox -->
                    <div class="relative h-60 w-full rounded-2xl bg-cover before:absolute before:bottom-0 before:left-1/2 before:h-[20px] before:w-[20px] before:rounded-full before:shadow-[-10px_10px_0_#fff] before:content-[''] after:absolute after:bottom-[70px] after:left-0 after:h-[20px] after:w-[20px] after:rounded-full after:bg-transparent after:shadow-[-10px_10px_0_#fff] after:content-['']" style="background-image: url('{{ asset("images/hero/bg.jpg") }}')"></div>

                    <!-- Content -->
                    <div class="relative h-[150px] w-full rounded-2xl rounded-tl-none bg-primary">
                        <!-- Price -->
                        <span class="absolute -top-20 h-20 w-1/2 rounded-tr-3xl border-r-8 border-t-8 border-white bg-primary before:absolute before:h-[25px] before:w-[25px] before:rounded-full before:bg-transparent before:shadow-[-10px_-10px_0_#fff] before:content-[''] after:absolute after:-right-[25px] after:bottom-0 after:h-[25px] after:w-[25px] after:rounded-full after:bg-transparent after:shadow-[-10px_10px_0_#163020] after:content-['']">
                            <a href="#" class="relative m-[15px] block rounded-lg bg-white px-[15px] py-[10px] font-medium text-primary text-sm">Secondary 1</a>
                        </span>
                        <ul class="grid gap-5 px-[35px] py-5 text-white">
                            <li class="flex items-center gap-5">
                                <i class="ri-calendar-2-line"></i>
                                <span>Mon - Fri</span>
                            </li>

                            <li class="flex items-center gap-5">
                                <i class="ri-time-line"></i>
                                <span>9:00AM - 4:00PM</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="relative flex h-[400px] w-80 flex-col justify-between">
                    <!-- ImageBox -->
                    <div class="relative h-60 w-full rounded-2xl bg-cover before:absolute before:bottom-0 before:left-1/2 before:h-[20px] before:w-[20px] before:rounded-full before:shadow-[-10px_10px_0_#fff] before:content-[''] after:absolute after:bottom-[70px] after:left-0 after:h-[20px] after:w-[20px] after:rounded-full after:bg-transparent after:shadow-[-10px_10px_0_#fff] after:content-['']" style="background-image: url('{{ asset("images/hero/bg.jpg") }}')"></div>

                    <!-- Content -->
                    <div class="relative h-[150px] w-full rounded-2xl rounded-tl-none bg-primary">
                        <!-- Price -->
                        <span class="absolute -top-20 h-20 w-1/2 rounded-tr-3xl border-r-8 border-t-8 border-white bg-primary before:absolute before:h-[25px] before:w-[25px] before:rounded-full before:bg-transparent before:shadow-[-10px_-10px_0_#fff] before:content-[''] after:absolute after:-right-[25px] after:bottom-0 after:h-[25px] after:w-[25px] after:rounded-full after:bg-transparent after:shadow-[-10px_10px_0_#163020] after:content-['']">
                            <a href="#" class="relative m-[15px] block rounded-lg bg-white px-[15px] py-[10px] font-medium text-primary text-sm">Secondary 1</a>
                        </span>
                        <ul class="grid gap-5 px-[35px] py-5 text-white">
                            <li class="flex items-center gap-5">
                                <i class="ri-calendar-2-line"></i>
                                <span>Mon - Fri</span>
                            </li>

                            <li class="flex items-center gap-5">
                                <i class="ri-time-line"></i>
                                <span>9:00AM - 4:00PM</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="relative flex h-[400px] w-80 flex-col justify-between">
                    <!-- ImageBox -->
                    <div class="relative h-60 w-full rounded-2xl bg-cover before:absolute before:bottom-0 before:left-1/2 before:h-[20px] before:w-[20px] before:rounded-full before:shadow-[-10px_10px_0_#fff] before:content-[''] after:absolute after:bottom-[70px] after:left-0 after:h-[20px] after:w-[20px] after:rounded-full after:bg-transparent after:shadow-[-10px_10px_0_#fff] after:content-['']" style="background-image: url('{{ asset("images/hero/bg.jpg") }}')"></div>

                    <!-- Content -->
                    <div class="relative h-[150px] w-full rounded-2xl rounded-tl-none bg-primary">
                        <!-- Price -->
                        <span class="absolute -top-20 h-20 w-1/2 rounded-tr-3xl border-r-8 border-t-8 border-white bg-primary before:absolute before:h-[25px] before:w-[25px] before:rounded-full before:bg-transparent before:shadow-[-10px_-10px_0_#fff] before:content-[''] after:absolute after:-right-[25px] after:bottom-0 after:h-[25px] after:w-[25px] after:rounded-full after:bg-transparent after:shadow-[-10px_10px_0_#163020] after:content-['']">
                            <a href="#" class="relative m-[15px] block rounded-lg bg-white px-[15px] py-[10px] font-medium text-primary text-sm">Secondary 1</a>
                        </span>
                        <ul class="grid gap-5 px-[35px] py-5 text-white">
                            <li class="flex items-center gap-5">
                                <i class="ri-calendar-2-line"></i>
                                <span>Mon - Fri</span>
                            </li>

                            <li class="flex items-center gap-5">
                                <i class="ri-time-line"></i>
                                <span>9:00AM - 4:00PM</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-10">
                <a href="" class="btn btn-primary">
                    View More
                    <i class="ri-arrow-right-line text-accent"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- News --}}
    <section class="news relative z-20 mt-[80px] xl:mt-[150px]">
        <div class="container mx-auto px-0">
            <div class="mx-auto mb-[52px] max-w-[810px] text-center">
                <h2 class="news__title h2 mb-3">Meet Our Teachers</h2>
                <p class="news__subtitle">It is a long established fact that a reader will be distracted by the of readable content of a page when lookings at its layouts the points of using.</p>
            </div>
            <div class="news__grid grid grid-cols-1 gap-[27px] xl:grid-cols-3">
                <div class="w-full h-[600px] bg-cover bg-no-repeat rounded-3xl border relative group overflow-hidden" style="background-image: url('{{ asset("images/teachers/tm1.jpg") }}')">
                    <div class="absolute inset-x-0 bottom-0">
                        <p class="font-bold p-5 absolute top-0 -translate-y-full bg-white rounded-tr-3xl text-xl">Toe Lwin Myint</p>
                        <p class="bg-white group-hover:py-5 px-5 group-hover:h-fit transition-all duration-500 h-0 overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, tenetur natus nobis ducimus corrupti provident aliquam soluta quos quia quibusdam. Eos soluta quas sapiente magnam? Blanditiis vitae aspernatur porro reiciendis.</p>
                    </div>
                </div>
                <div class="w-full h-[600px] bg-cover bg-no-repeat rounded-3xl border relative group overflow-hidden" style="background-image: url('{{ asset("images/teachers/tm2.jpg") }}')">
                    <div class="absolute inset-x-0 bottom-0">
                        <p class="font-bold p-5 absolute top-0 -translate-y-full bg-white rounded-tr-3xl text-xl">Oak Soe Aung</p>
                        <p class="bg-white group-hover:py-5 px-5 group-hover:h-fit transition-all duration-500 h-0 overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, tenetur natus nobis ducimus corrupti provident aliquam soluta quos quia quibusdam. Eos soluta quas sapiente magnam? Blanditiis vitae aspernatur porro reiciendis.</p>
                    </div>
                </div>
                <div class="w-full h-[600px] bg-cover bg-no-repeat rounded-3xl border relative group overflow-hidden" style="background-image: url('{{ asset("images/teachers/tm3.jpg") }}')">
                    <div class="absolute inset-x-0 bottom-0">
                        <p class="font-bold p-5 absolute top-0 -translate-y-full bg-white rounded-tr-3xl text-xl">Nyi Nyi Maung</p>
                        <p class="bg-white group-hover:py-5 px-5 group-hover:h-fit transition-all duration-500 h-0 overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, tenetur natus nobis ducimus corrupti provident aliquam soluta quos quia quibusdam. Eos soluta quas sapiente magnam? Blanditiis vitae aspernatur porro reiciendis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contacts --}}
    <section class="contact relative z-20 mt-[80px] xl:mt-[150px]">
        <div class="contact__container container mx-auto bg-primary py-[80px] sm:rounded-[70px]">
            <div class="contact__text mx-auto max-w-[640px] text-center">
                <h2 class="h2 mb-4 text-white">Do you want to join EDU Spectrum?</h2>
                <p class="mx-auto mb-8 max-w-sm text-white xl:max-w-none">It is a long established fact will be distracted.</p>
                <button class="btn btn-accent mx-auto">
                    Connect with us
                    <i class="ri-arrow-right-line text-primary"></i>
                </button>
            </div>
        </div>
    </section>
@endsection
