@extends("layouts.main")
@section("content")
    <section class="news relative z-20 mt-[80px] xl:mt-[150px]">
        <div class="px-0 container mx-auto">
            <div class="flex flex-col items-center pb-[110px] pt-[88px]">
                <h2 class="testimonial__title h2 mb-9 text-center">Contact Us</h2>
            </div>
            <div class="news__grid grid grid-cols-1 gap-[27px] lg:grid-cols-2 xl:grid-cols-2">
                <div class="border rounded-3xl border-accent p-5 flex flex-col gap-9 items-center">
                    <div>
                        <img src="{{ asset("images/logois.png") }}" class="w-40 h-40" />
                    </div>
                    <div>
                        <h4 class="h3">EDU Spectrum International School</h4>
                    </div>
                    <div class="space-y-10">
                        <div class="flex items-center gap-10">
                            <div class="w-16 h-16 bg-accent flex-none flex items-center justify-center rounded-full"><i class="ri-map-2-line"></i></div>
                            <span>No 990, Sayar San St, Between Mahar Bandu La & Hlaing Yadanar, 31 Ward, North Dagon Tsp, Yangon</span>
                        </div>
                        <div class="flex items-center gap-10">
                            <div class="w-16 h-16 bg-accent flex-none flex items-center justify-center rounded-full"><i class="ri-smartphone-line"></i></div>
                            <span>09 941 052 083</span>
                        </div>
                    </div>
                </div>

                <div class="border rounded-3xl border-purple-300 p-5 flex flex-col gap-9 items-center">
                    <div>
                        <img src="{{ asset("images/logoprivate.png") }}" class="w-40 h-40" />
                    </div>
                    <div>
                        <h4 class="h3">EDU Spectrum Private High School</h4>
                    </div>
                    <div class="space-y-10">
                        <div class="flex items-center gap-10">
                            <div class="w-16 h-16 bg-purple-300 flex-none flex items-center justify-center rounded-full"><i class="ri-map-2-line"></i></div>
                            <span>No 990, Sayar San St, Between Mahar Bandu La & Hlaing Yadanar, 31 Ward, North Dagon Tsp, Yangon</span>
                        </div>
                        <div class="flex items-center gap-10">
                            <div class="w-16 h-16 bg-purple-300 flex-none flex items-center justify-center rounded-full"><i class="ri-smartphone-line"></i></div>
                            <span>09 941 052 083</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
