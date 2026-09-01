{{-- NAVBAR --}}
<nav>
    <div class="nav-left">
        <a href="{{ url('/') }}">
        <img src="{{ asset('images/ITELEC2.png') }}" alt="logo">
        </a>

        <a href="{{ url('/') }}"
        class="{{ request()->is('/') ? 'active' : '' }}">
            Home
        </a>

        <div class="nav-trainings-wrapper">
            <a href="{{ url('/trainings') }}"
            class="{{ request()->is('trainings') ? 'active' : '' }}">
                Trainings<i class="nav-arrow bi bi-caret-down-fill"></i>
            </a>
            <x-navbar.nav-trainings-hover />
        </div>

        <a href="{{ url('/about') }}"
        class="{{ request()->is('about') ? 'active' : '' }}">
            About us
        </a>

        <a href="{{ url('/blogs') }}"
        class="{{ request()->is('blogs') ? 'active' : '' }}">
            Blogs
        </a>
    </div>
    <div class="nav-right">
        <select>
            <option value="gb">ENG</option>
            <option value="fr">FR</option>
            <option value="sa">ARB</option>
        </select>
        <a class="contact-number" href="{{ url('/blogs') }}">Call us  06 57 68 53 24</a>
        <x-navbar.navbar-button href="{{ url('/trainings') }}">Explore Trainings</x-navbar.navbar-button>
    </div>
</nav>
