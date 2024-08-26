@extends("layouts.main")
@section("content")
    <section class="news relative z-20 mt-[80px] xl:mt-[100px]">
        <div class="px-0 container mx-auto">
            <div class="flex flex-col items-center pb-[110px] pt-[88px]">
                <h2 class="testimonial__title h2 mb-9 text-center">Private High School Time Tables</h2>
            </div>
            <div class="news__grid grid grid-cols-1 gap-[27px] lg:grid-cols-2 xl:grid-cols-3 place-items-center">
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
        </div>
    </section>

    <section class="news relative z-20 mt-[80px] xl:mt-[100px]">
        <div class="px-0 container mx-auto">
            <div class="flex flex-col items-center pb-[110px] pt-[88px]">
                <h2 class="testimonial__title h2 mb-9 text-center">International School Time Tables</h2>
            </div>
            <div class="news__grid grid grid-cols-1 gap-[27px] lg:grid-cols-2 xl:grid-cols-3 place-items-center">
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
        </div>
    </section>
@endsection
