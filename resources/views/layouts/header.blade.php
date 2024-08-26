<header class="sticky top-0 z-[9999] h-[90px] bg-white shadow-xl">
    <div class="container mx-auto flex h-full items-center justify-between">
        {{-- Logo --}}
        <a href="#" class="flex items-center gap-3">
            <img src="{{ asset("images/logo.jpg") }}" class=" w-20 h-20" />
            <p class="font-bold text-secondary">EDU Spectrum Myanmar</p>
        </a>

        {{-- nav --}}
        <nav>
            {{-- nav mobild trigger --}}
            <div class="cursor-pointer lg:hidden" id="nav_trigger_btn">
                <i class="ri-menu-4-line text-4xl text-primary"></i>
            </div>
            <ul class="fixed inset-x-0 top-[90px] flex h-0 w-full flex-col gap-10 overflow-hidden border-t bg-white p-0 transition-all duration-300 lg:relative lg:top-0 lg:h-full lg:flex-row lg:border-none lg:p-0" id="nav_menu">
                <li><a href="{{ route("home") }}">Home</a></li>
                <li><a href="{{ route("about") }}">About</a></li>
                <li><a href="{{ route("course") }}">Courses</a></li>
                <li><a href="{{ route("teachers") }}">Teachers</a></li>
                <li><a href="{{ route("contact") }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
