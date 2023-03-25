<nav>
    <div class="relative py-6 flex w-100 max-w-none">
        <button class="rounded-full focus:text-primary group">
            <div class="flex items-center">
                <img src="{{ asset('storage/images/') . '/' . Auth::user()->img }}" alt=""
                    class="rounded-full w-12 h-12">
                <span class="pl-2 pr-4 text-xl font-light">Hello,
                    {{ ucfirst(strtolower(strtok(Auth::user()->name, ' '))) }}</span>
            </div>
            <div
                class="z-10 absolute hidden text-text items-start top-full rounded-lg shadow-md bg-white group-focus-within:block">
                <div class="flex flex-col px-4 pt-1">
                    <span>{{ '@' . Auth::user()->username }}</span>
                    <span>{{ Auth::user()->email }}</span>
                </div>
                <ul class="font-light flex flex-col items-start">
                    <li class="pt-2 pb-1 px-4 hover:text-primary">
                        <a href="{{ route('home', Auth::user()->username) }}">
                            Beranda
                        </a>
                    </li>
                    <li class="py-1 px-4 hover:text-primary">
                        <a href="{{ route('history') }}">
                            Pengeluaran
                        </a>
                    </li>
                    <li class="py-1 px-4 hover:text-primary">
                        <a href="{{ route('student.edit', Auth::user()->username) }}">
                            Edit Profile
                        </a>
                    </li>
                    @if (Auth::user()->is_admin)
                        <li class="py-1 pb-2 px-4 hover:text-primary">
                            <a href="{{ route('admin.tools') }}">
                                Admin Tools
                            </a>
                        </li>
                    @endif
                    <li class="py-1 pb-2 px-4 hover:text-primary">
                        <a href="{{ route('logout') }}">
                            Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </button>
    </div>
</nav>
