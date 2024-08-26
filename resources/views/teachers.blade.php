@extends("layouts.main")
@section("content")
    <section class="news relative z-20 mt-[80px] xl:mt-[150px]">
        <div class="container mx-auto px-0">
            <div class="news__grid grid grid-cols-1 gap-[27px] xl:grid-cols-2">
                {{-- Card --}}
                <div class="group h-[500px] w-[500px] cursor-pointer" style="perspective: 1000px">
                    {{-- Inner card --}}
                    <div class="relative h-full w-full animate-rotateY text-center transition-all duration-500" style="transform-style: preserve-3d">
                        {{-- Front --}}
                        <div class="h-full w-full" style="backface-visibility: hidden">
                            <img src="{{ asset("images/logoprivate.png") }}" class="h-full w-full rounded-xl object-cover" />
                        </div>
                        {{-- Back --}}
                        <div class="absolute left-0 top-0 h-full w-full rounded-xl [transform:rotateY(180deg)]" style="backface-visibility: hidden">
                            <img src="{{ asset("images/logois.png") }}" class="h-full w-full rounded-xl object-cover" />
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="news__title h2 mb-3">Welcome to EDU Spectrum Myanmar</h2>
                    <p class="text-sm">At <span class="font-bold">EDU Spectrum Myanmar</span>,we are providing dedicated services to quickly enhance the educational qualifications and personal skills of students through modern technologies based on traditional education methods.</p>
                    <p class="text-sm">At <span class="font-bold">EDU Spectrum Private High School</span>, we are authorized in accordance with the National Education Law of Myanmar and are teaching based on the curricula of the Myanmar Department of Basic Education. In line with our school's objectives, we are also providing additional instruction in subjects such as Computing, English 4 Skills, Music, Arts, Sports, and others.</p>
                    <p class="text-sm">At <span class="font-bold">EDU Spectrum Private High School</span>, we are authorized in accordance with the National Education Law of Myanmar and are teaching according to the international curricula of Pearson Edexcel, UK. Following the guidelines of the Department of Basic Education, we also provide instruction in Myanmar Language, Myanmar History, Myanmar Geography, and Social Studies. In line with our school's objectives, we offer additional instruction in ICT (Computing), Music, Arts, and Sports subjects.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="news relative z-20 mt-[80px] xl:mt-[150px]">
        <div class="px-0">
            <div class="flex flex-col items-center pb-[110px] pt-[88px]">
                <h2 class="testimonial__title h2 mb-9 text-center">Meet Our Teachers</h2>
            </div>
            <div class="news__grid grid grid-cols-1 gap-[27px] lg:grid-cols-2 xl:grid-cols-4">
                <div class="w-full h-[600px] bg-contains bg-no-repeat rounded-3xl border relative group overflow-hidden" style="background-image: url('{{ asset("images/teachers/tm1.jpg") }}')">
                    <div class="absolute inset-x-0 bottom-0">
                        <p class="font-bold p-5 absolute top-0 -translate-y-full bg-white rounded-tr-3xl text-xl">Tr. Zaw Zaw</p>
                        <p class="bg-white group-hover:py-5 px-5 group-hover:h-fit transition-all duration-500 h-0 overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, tenetur natus nobis ducimus corrupti provident aliquam soluta quos quia quibusdam. Eos soluta quas sapiente magnam? Blanditiis vitae aspernatur porro reiciendis.</p>
                    </div>
                </div>

                <div class="w-full h-[600px] bg-contains bg-no-repeat rounded-3xl border relative group overflow-hidden" style="background-image: url('{{ asset("images/teachers/tm2.jpg") }}')">
                    <div class="absolute inset-x-0 bottom-0">
                        <p class="font-bold p-5 absolute top-0 -translate-y-full bg-white rounded-tr-3xl text-xl">Tr. Su Su</p>
                        <p class="bg-white group-hover:py-5 px-5 group-hover:h-fit transition-all duration-500 h-0 overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, tenetur natus nobis ducimus corrupti provident aliquam soluta quos quia quibusdam. Eos soluta quas sapiente magnam? Blanditiis vitae aspernatur porro reiciendis.</p>
                    </div>
                </div>

                <div class="w-full h-[600px] bg-contains bg-no-repeat rounded-3xl border relative group overflow-hidden" style="background-image: url('{{ asset("images/teachers/tm3.jpg") }}')">
                    <div class="absolute inset-x-0 bottom-0">
                        <p class="font-bold p-5 absolute top-0 -translate-y-full bg-white rounded-tr-3xl text-xl">Tr. Myo Myo</p>
                        <p class="bg-white group-hover:py-5 px-5 group-hover:h-fit transition-all duration-500 h-0 overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, tenetur natus nobis ducimus corrupti provident aliquam soluta quos quia quibusdam. Eos soluta quas sapiente magnam? Blanditiis vitae aspernatur porro reiciendis.</p>
                    </div>
                </div>

                <div class="w-full h-[600px] bg-contains bg-no-repeat rounded-3xl border relative group overflow-hidden" style="background-image: url('{{ asset("images/teachers/tm4.jpg") }}')">
                    <div class="absolute inset-x-0 bottom-0">
                        <p class="font-bold p-5 absolute top-0 -translate-y-full bg-white rounded-tr-3xl text-xl">Toe Lwin Myint</p>
                        <p class="bg-white group-hover:py-5 px-5 group-hover:h-fit transition-all duration-500 h-0 overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, tenetur natus nobis ducimus corrupti provident aliquam soluta quos quia quibusdam. Eos soluta quas sapiente magnam? Blanditiis vitae aspernatur porro reiciendis.</p>
                    </div>
                </div>

                <div class="w-full h-[600px] bg-contains bg-no-repeat rounded-3xl border relative group overflow-hidden" style="background-image: url('{{ asset("images/teachers/tm1.jpg") }}')">
                    <div class="absolute inset-x-0 bottom-0">
                        <p class="font-bold p-5 absolute top-0 -translate-y-full bg-white rounded-tr-3xl text-xl">Toe Lwin Myint</p>
                        <p class="bg-white group-hover:py-5 px-5 group-hover:h-fit transition-all duration-500 h-0 overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, tenetur natus nobis ducimus corrupti provident aliquam soluta quos quia quibusdam. Eos soluta quas sapiente magnam? Blanditiis vitae aspernatur porro reiciendis.</p>
                    </div>
                </div>

                <div class="w-full h-[600px] bg-contains bg-no-repeat rounded-3xl border relative group overflow-hidden" style="background-image: url('{{ asset("images/teachers/tm2.jpg") }}')">
                    <div class="absolute inset-x-0 bottom-0">
                        <p class="font-bold p-5 absolute top-0 -translate-y-full bg-white rounded-tr-3xl text-xl">Toe Lwin Myint</p>
                        <p class="bg-white group-hover:py-5 px-5 group-hover:h-fit transition-all duration-500 h-0 overflow-hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, tenetur natus nobis ducimus corrupti provident aliquam soluta quos quia quibusdam. Eos soluta quas sapiente magnam? Blanditiis vitae aspernatur porro reiciendis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
