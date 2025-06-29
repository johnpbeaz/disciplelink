<nav x-data="{ open: false }" class="bg-white dark:bg-gray-900 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        Dashboard
                    </x-nav-link>
                    <x-nav-link :href="route('groups.index')" :active="request()->routeIs('groups.*')">
                        Groups
                    </x-nav-link>
                    <x-nav-link :href="route('journals.index')" :active="request()->routeIs('journals.*')">
                        Journals
                    </x-nav-link>
                    <x-nav-link :href="route('reading-plan.index')" :active="request()->routeIs('reading-plan.*')">
                        Reading Plan
                    </x-nav-link>

                    <!-- Admin Dropdown -->
                    @if(auth()->user() && auth()->user()->roles && auth()->user()->roles->contains('name', 'super_admin'))
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" class="inline-flex items-center px-3 py-2 text-sm leading-5 font-medium text-gray-700 dark:text-gray-200 hover:text-gray-900 dark:hover:text-white focus:outline-none transition">
                            <span>Admin</span>
                            <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.188l3.71-3.96a.75.75 0 111.1 1.02l-4.25 4.53a.75.75 0 01-1.1 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div
                            x-show="open"
                            @click.away="open = false"
                            x-transition
                            class="absolute mt-2 w-48 rounded-md shadow-lg z-50 bg-white dark:bg-gray-800 ring-1 ring-black ring-opacity-5 focus:outline-none"
                        >
                            <div class="py-1">
                                <x-dropdown-link :href="route('admin.dashboard')">
                                    Admin Dashboard
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('admin.communities.index')">
                                    Communities
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('admin.groups.index')">
                                    Groups
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('admin.members.index')">
                                    Members
                                </x-dropdown-link>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 dark:text-gray-200 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                    <path d="M5.516 7.548L10 12.032l4.484-4.484z"/>
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <x-dropdown-link :href="route('profile.edit')">
                            Profile
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                Log Out
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-200 hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                Dashboard
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('groups.index')" :active="request()->routeIs('groups.*')">
                Groups
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('journals.index')" :active="request()->routeIs('journals.*')">
                Journals
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('reading-plan.index')" :active="request()->routeIs('reading-plan.*')">
                Reading Plan
            </x-responsive-nav-link>

            @if(auth()->user()->roles->contains('name', 'super_admin'))
                <x-responsive-nav-link :href="route('admin.dashboard')">Admin Dashboard</x-responsive-nav-link>
                <x-responsive-nav-link :href="route('admin.communities.index')">Communities</x-responsive-nav-link>
                <x-responsive-nav-link :href="route('admin.groups.index')">Groups</x-responsive-nav-link>
                <x-responsive-nav-link :href="route('admin.members.index')">Members</x-responsive-nav-link>
            @endif
        </div>
    </div>
</nav>
