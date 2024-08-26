<footer class="footer relative z-20 mt-[80px] xl:mt-[150px]">
    <div class="container mx-auto px-0">
        <div class="flex flex-col xl:mb-[150px] xl:flex-row xl:gap-[100px]">
            <div class="footer__item mx-auto mb-8 w-full max-w-[400px] text-center xl:text-left">
                {{-- Logo --}}
                <a href="#" class="mb-8 flex justify-center xl:justify-start">
                    <img src="{{ asset("images/logo.jpg") }}" class="h-40 w-40" />
                </a>
                <p class="mb-8 text-xl">INTELLIGENCE PLUS CHARACTER - THAT IS THE GOAL OF TRUE EDUCATION.</p>
                {{-- Socials --}}
                <ul class="flex justify-center gap-[54px] text-primary xl:justify-start">
                    <li>
                        <a href="#"><i class="ri-facebook-fill"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ri-twitter-fill"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ri-linkedin-fill"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ri-instagram-fill"></i></a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-1 flex-col gap-12 text-center xl:flex-row xl:justify-end xl:gap-[100px] xl:text-left">
                <div class="footer__item">
                    <h3 class="h3 mb-3">Pages</h3>
                    <ul class="flex flex-col gap-4">
                        <li><a href="{{ route("home") }}">Home</a></li>
                        <li><a href="{{ route("about") }}">About</a></li>
                        <li><a href="{{ route("course") }}">Courses</a></li>
                        <li><a href="{{ route("teachers") }}">Teachers</a></li>
                        <li><a href="{{ route("contact") }}">Contact</a></li>
                    </ul>
                </div>

                <div class="footer__item mx-auto max-w-[260px] xl:mx-0">
                    <h3 class="h3 mb-3">Contact</h3>
                    <div class="flex flex-col gap-6 text-[20px]">
                        <p>No 990, Sayar San St, Between Mahar Bandu La & Hlaing Yadanar, 31 Ward, North Dagon Tsp, Yangon</p>
                        <p>info@eduspectrum.edu.mm</p>
                        <p>(123) 456 - 7890</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<p class="footer__copyright bg-white py-10 text-center text-lg xl:border-t">Copyright &copy; EDUSpectrum . All rights reserved.</p>
