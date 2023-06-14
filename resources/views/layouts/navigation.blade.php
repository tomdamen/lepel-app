<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <div>
        <div>
            <div class="flex-space-between">
                <!-- Logo -->
                <a href="{{ route('dashboard') }}">
                    <x-application-logo />
                </a>

                <!-- Navigation Links -->
                <div class="flex-align-center">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('overview')" :active="request()->routeIs('overview')">
                        {{ __('Overview') }}
                    </x-nav-link>
                </div>


                <!-- Settings Dropdown -->
                <div>
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button>
                                <div>{{ Auth::user()->name }}</div>

                                <div>
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>

                            <form method="GET" action="{{ route('dashboard') }}">
                                @csrf

                                <x-dropdown-link :href="route('dashboard')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Dashboard') }}
                                </x-dropdown-link>
                            </form>

                            <form method="GET" action="{{ route('overview') }}">
                                @csrf

                                <x-dropdown-link :href="route('overview')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Overview') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div>
            <div>
                <div>{{ Auth::user()->name }}</div>
                <div>{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
