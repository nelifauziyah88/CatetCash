<style>
    .font-display {
        font-family: 'Syne', sans-serif;
    }

    .nav-glass {
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-bottom: 1px solid rgba(220, 252, 231, 0.8);
    }

    .logo-ring {
        background: conic-gradient(from 180deg, #16a34a, #4ade80, #86efac, #16a34a);
        padding: 2px;
        border-radius: 14px;
    }

    .logo-inner {
        background: white;
        border-radius: 12px;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .nav-link {
        position: relative;
        font-size: 14px;
        font-weight: 500;
        color: #4b5563;
        padding: 7px 16px;
        border-radius: 100px;
        transition: all .2s;
        text-decoration: none;
        display: inline-block;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 4px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 2px;
        background: #22c55e;
        border-radius: 2px;
        transition: width .25s cubic-bezier(.4, 0, .2, 1);
    }

    .nav-link:hover {
        color: #16a34a;
        background: rgba(240, 253, 244, 0.8);
    }

    .nav-link:hover::after {
        width: 24px;
    }

    .nav-link.active {
        color: #16a34a;
        background: rgba(220, 252, 231, 0.7);
        font-weight: 600;
    }

    .nav-link.active::after {
        width: 24px;
    }
</style>

<nav id="mainNav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 py-3 px-6">
    <div class="max-w-6xl mx-auto flex items-center justify-between">

        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <div class="logo-ring w-10 h-10 flex-shrink-0">
                <div class="logo-inner">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z" fill="#dcfce7" />
                        <path
                            d="M13.5 7h-3v1.5c-1.5.35-2.5 1.4-2.5 2.7 0 1.6 1.4 2.6 3.5 3.1 1.5.4 1.8.9 1.8 1.4 0 .6-.5 1-1.8 1s-2-.6-2.1-1.5H7.5c.1 1.7 1.3 2.7 3 3.05V20h3v-1.75c1.6-.35 2.8-1.3 2.8-2.9 0-1.7-1.2-2.7-3.5-3.2-1.5-.4-1.8-.85-1.8-1.35 0-.55.5-.95 1.8-.95 1.1 0 1.7.55 1.8 1.15h1.9c-.05-1.45-1-2.45-2.5-2.8V7z"
                            fill="#16a34a" />
                    </svg>
                </div>
            </div>
            <div class="flex flex-col leading-none">
                <span
                    class="font-display font-bold text-[18px] tracking-tight text-gray-900 group-hover:text-gray-700 transition-colors">
                    Catet<span class="text-green-600">Cash</span>
                </span>
                <span
                    class="text-[10px] text-gray-400 font-medium tracking-[.1em] uppercase mt-0.5 group-hover:text-green-500 transition-colors">
                    Personal Finance
                </span>
            </div>
        </a>

        <ul class="hidden md:flex items-center gap-1">
            <li>
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('features') }}" class="nav-link {{ request()->routeIs('features') ? 'active' : '' }}">
                    Features
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                    About
                </a>
            </li>
        </ul>

        <div class="hidden md:flex items-center gap-2">
            <a href="{{ route('login') }}"
                class="font-display px-5 py-2 text-sm font-semibold text-gray-700 border border-gray-200 rounded-full hover:border-green-300 hover:text-green-700 hover:bg-green-50 transition-all">
                Sign In
            </a>
            <a href="{{ route('register') }}"
                class="font-display inline-flex items-center gap-2 px-5 py-2 text-sm font-bold text-white rounded-full transition-all hover:-translate-y-0.5 shadow-lg shadow-green-200 hover:shadow-green-300"
                style="background: linear-gradient(135deg, #16a34a, #22c55e)">
                Get Started
            </a>
        </div>

    </div>

</nav>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const nav = document.getElementById('mainNav');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 20) {
                    nav.classList.add('nav-glass', 'py-2');
                    nav.classList.remove('py-3');
                } else {
                    nav.classList.remove('nav-glass', 'py-2');
                    nav.classList.add('py-3');
                }
            });

            const btn = document.getElementById('hamburgerBtn');
            const menu = document.getElementById('mobileMenu');
            const l1 = document.getElementById('hLine1');
            const l2 = document.getElementById('hLine2');
            const l3 = document.getElementById('hLine3');
            let isOpen = false;

            btn.addEventListener('click', () => {
                isOpen = !isOpen;
                menu.classList.toggle('hidden', !isOpen);
                l1.style.transform = isOpen ? 'translateY(6.5px) rotate(45deg)' : '';
                l2.style.opacity = isOpen ? '0' : '1';
                l3.style.transform = isOpen ? 'translateY(-6.5px) rotate(-45deg)' : '';
                l3.style.width = isOpen ? '18px' : '12px';
            });

            document.addEventListener('click', (e) => {
                if (isOpen && !nav.contains(e.target)) {
                    isOpen = false;
                    menu.classList.add('hidden');
                    l1.style.transform = '';
                    l2.style.opacity = '1';
                    l3.style.transform = '';
                    l3.style.width = '12px';
                }
            });

        });
    </script>
@endpush
