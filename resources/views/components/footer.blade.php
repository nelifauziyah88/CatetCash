<footer style="background: #030712; color: #fff;">
    <div class="max-w-6xl mx-auto px-6 pt-16">

        <div class="grid md:grid-cols-3 gap-12 pb-12 border-b" style="border-color: rgba(255,255,255,.07)">

            <div>
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="logo-ring w-10 h-10 flex-shrink-0">
                        <div class="logo-inner">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"
                                    fill="#dcfce7" />
                                <path
                                    d="M13.5 7h-3v1.5c-1.5.35-2.5 1.4-2.5 2.7 0 1.6 1.4 2.6 3.5 3.1 1.5.4 1.8.9 1.8 1.4 0 .6-.5 1-1.8 1s-2-.6-2.1-1.5H7.5c.1 1.7 1.3 2.7 3 3.05V20h3v-1.75c1.6-.35 2.8-1.3 2.8-2.9 0-1.7-1.2-2.7-3.5-3.2-1.5-.4-1.8-.85-1.8-1.35 0-.55.5-.95 1.8-.95 1.1 0 1.7.55 1.8 1.15h1.9c-.05-1.45-1-2.45-2.5-2.8V7z"
                                    fill="#16a34a" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex flex-col leading-none">
                        <span
                            class="font-display font-bold text-[18px] tracking-tight text-white group-hover:text-green-700 transition-colors">
                            Catet<span class="text-green-600">Cash</span>
                        </span>
                        <span
                            class="text-[10px] text-gray-400 font-medium tracking-[.1em] uppercase mt-0.5 group-hover:text-green-500 transition-colors">
                            Personal Finance
                        </span>
                    </div>
                </a>

                <p class="text-sm leading-relaxed mb-6 mt-6 max-w-[240px]" style="color: rgba(255,255,255,.4)">
                    Track your daily expenses, set monthly budgets, and export to Excel. Simple, free, and ready to use.
                </p>

                <div class="flex gap-2">
                    <a href="https://github.com/nelifauziyah88" target="_blank" class="footer-social-btn"
                        title="GitHub">
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                        </svg>
                    </a>
                    <a href="mailto:basehub35@gmail.com" class="footer-social-btn" title="Email">
                        <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="1.8"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="font-display font-bold text-[11px] uppercase tracking-[.1em] mb-5"
                    style="color: rgba(255,255,255,.25)">Page</h4>
                <ul class="flex flex-col gap-3">
                    <li><a href="{{ route('home') }}" class="footer-nav-link">Home</a></li>
                    <li><a href="{{ route('features') }}" class="footer-nav-link">Features</a></li>
                    <li><a href="{{ route('about') }}" class="footer-nav-link">About</a></li>
                    <li><a href="{{ route('terms') }}" class="footer-nav-link">Terms & Conditions</a></li>
                    <li><a href="{{ route('privacy') }}" class="footer-nav-link">Privacy Policy</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-display font-bold text-[11px] uppercase tracking-[.1em] mb-5"
                    style="color: rgba(255,255,255,.25)">Contact</h4>
                <ul class="flex flex-col gap-3">
                    <li>
                        <a href="https://github.com/nelifauziyah88" target="_blank"
                            class="footer-nav-link footer-nav-link--icon">
                            <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
                            </svg>
                            Profile GitHub
                        </a>
                    </li>
                    <li>
                        <a href="mailto:basehub35@gmail.com" class="footer-nav-link footer-nav-link--icon">
                            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.8"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            basehub35@gmail.com
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="flex items-center justify-between py-5 text-xs" style="color: rgba(255,255,255,.70)">
            <span>© {{ date('Y') }} CatetCash. Made with ❤️.</span>
            <span>v1.0.0</span>
        </div>

    </div>
</footer>


<style>
    .footer-social-btn {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, .1);
        background: rgba(255, 255, 255, .05);
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgba(255, 255, 255, .45);
        transition: all .18s;
        text-decoration: none;
    }

    .footer-social-btn:hover {
        background: rgba(74, 222, 128, .15);
        border-color: rgba(74, 222, 128, .4);
        color: #4ade80;
    }

    .footer-nav-link {
        font-size: 13.5px;
        color: rgba(255, 255, 255, .45);
        text-decoration: none;
        transition: color .18s;
    }

    .footer-nav-link:hover {
        color: #4ade80;
    }

    .footer-nav-link--icon {
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
</style>
