@extends('layouts.auth')

@section('title', 'Daftar')

@section('content')

    <div class="min-h-screen flex">

        <div class="flex-1 flex items-center justify-center px-6 py-12 bg-gray-50">
            <div class="w-full max-w-md">

                <div class="flex items-center gap-2 mb-8 lg:hidden">
                    <div class="logo-ring w-9 h-9 flex-shrink-0">
                        <div class="logo-inner">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"
                                    fill="#dcfce7" />
                                <path
                                    d="M13.5 7h-3v1.5c-1.5.35-2.5 1.4-2.5 2.7 0 1.6 1.4 2.6 3.5 3.1 1.5.4 1.8.9 1.8 1.4 0 .6-.5 1-1.8 1s-2-.6-2.1-1.5H7.5c.1 1.7 1.3 2.7 3 3.05V20h3v-1.75c1.6-.35 2.8-1.3 2.8-2.9 0-1.7-1.2-2.7-3.5-3.2-1.5-.4-1.8-.85-1.8-1.35 0-.55.5-.95 1.8-.95 1.1 0 1.7.55 1.8 1.15h1.9c-.05-1.45-1-2.45-2.5-2.8V7z"
                                    fill="#16a34a" />
                            </svg>
                        </div>
                    </div>
                    <span class="font-display font-extrabold text-lg tracking-tight text-gray-900">
                        Catet<span class="text-green-600">Cash</span>
                    </span>
                </div>

                <div class="mb-8">
                    <span
                        class="inline-flex items-center gap-1.5 bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full mb-4">
                        <svg class="w-3 h-3 fill-green-500" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                                clip-rule="evenodd" />
                        </svg>
                        Free Forever
                    </span>
                    <h2 class="font-display text-3xl font-extrabold text-gray-900 tracking-tight leading-tight">
                        Create new<br>account 
                    </h2>
                    <p class="text-gray-400 text-sm mt-2">Start recording your finances today, without a credit card.</p>
                </div>

                @if ($errors->any())
                    <div
                        class="flex items-start gap-2 bg-red-50 border border-red-200 text-red-600 text-sm rounded-xl px-4 py-3 mb-5">
                        <svg class="w-4 h-4 mt-0.5 shrink-0 fill-red-500" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>{{ $errors->first() }}</span>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf

                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-1.5">
                            Username
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 fill-gray-400" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <input id="username" type="text" name="username" value="{{ old('username') }}"
                                placeholder="Example: budi123" autocomplete="username" autofocus required
                                class="w-full pl-10 pr-4 py-3 border rounded-xl text-sm text-gray-900 bg-white placeholder-gray-400 outline-none transition focus:ring-2 focus:ring-green-400 focus:border-green-400 {{ $errors->has('username') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                        </div>
                        @error('username')
                            <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">
                             Email
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 fill-gray-400" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </span>
                            <input id="email" type="email" name="email" value="{{ old('email') }}"
                                placeholder="name@email.com" autocomplete="email" required
                                class="w-full pl-10 pr-4 py-3 border rounded-xl text-sm text-gray-900 bg-white placeholder-gray-400 outline-none transition focus:ring-2 focus:ring-green-400 focus:border-green-400 {{ $errors->has('email') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                        </div>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1.5">
                            Password
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 fill-gray-400" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <input id="password" type="password" name="password" placeholder="Minimum 8 characters"
                                autocomplete="new-password" required
                                class="w-full pl-10 pr-12 py-3 border rounded-xl text-sm text-gray-900 bg-white placeholder-gray-400 outline-none transition focus:ring-2 focus:ring-green-400 focus:border-green-400 {{ $errors->has('password') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                            <button type="button" onclick="togglePassword('password', 'eye-icon-pw')"
                                class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-gray-400 hover:text-gray-600 transition">
                                <svg id="eye-icon-pw" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd"
                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-2 flex gap-1" id="strength-bars">
                            <div class="h-1 flex-1 rounded-full bg-gray-200 transition-all" id="bar-1"></div>
                            <div class="h-1 flex-1 rounded-full bg-gray-200 transition-all" id="bar-2"></div>
                            <div class="h-1 flex-1 rounded-full bg-gray-200 transition-all" id="bar-3"></div>
                            <div class="h-1 flex-1 rounded-full bg-gray-200 transition-all" id="bar-4"></div>
                        </div>
                        <p id="strength-label" class="text-xs text-gray-400 mt-1">Enter your password</p>
                        @error('password')
                            <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1.5">
                            Confirm Password
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 fill-gray-400" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <input id="password_confirmation" type="password" name="password_confirmation"
                                placeholder="Re-enter password" autocomplete="new-password" required
                                class="w-full pl-10 pr-12 py-3 border rounded-xl text-sm text-gray-900 bg-white placeholder-gray-400 outline-none transition focus:ring-2 focus:ring-green-400 focus:border-green-400 border-gray-200">
                            <button type="button" onclick="togglePassword('password_confirmation', 'eye-icon-confirm')"
                                class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-gray-400 hover:text-gray-600 transition">
                                <svg id="eye-icon-confirm" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd"
                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-start gap-2.5 pt-1">
                        <input type="checkbox" id="terms" name="terms" required
                            class="mt-0.5 w-4 h-4 rounded accent-green-500 cursor-pointer shrink-0">
                        <label for="terms" class="text-sm text-gray-500 leading-snug cursor-pointer">
                            I agree
                            <a href="#" class="text-green-600 font-medium hover:underline">Terms & Conditions</a>
                            and
                            <a href="#" class="text-green-600 font-medium hover:underline">Privacy Policy</a>
                            of CatetCash.
                        </label>
                    </div>

                    <button type="submit"
                        class="w-full py-3 text-white text-sm font-bold rounded-xl transition-all shadow-lg shadow-green-200 hover:shadow-green-300 hover:-translate-y-0.5 active:scale-[.98] tracking-wide mt-2"
                        style="background: linear-gradient(135deg, #16a34a, #22c55e)">
                        Create Account
                    </button>
                </form>

                <div class="flex items-center gap-3 my-5">
                    <div class="flex-1 h-px bg-gray-200"></div>
                    <span class="text-xs text-gray-400">atau</span>
                    <div class="flex-1 h-px bg-gray-200"></div>
                </div>

                <p class="text-center text-sm text-gray-400">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-green-600 font-semibold hover:underline ml-1">
                        Log in here
                    </a>
                </p>

            </div>
        </div>

        <div class="hidden lg:flex lg:w-1/2 bg-gray-900 flex-col justify-between p-12 relative overflow-hidden">

            <div class="absolute -top-24 -left-24 w-96 h-96 bg-green-500 rounded-full opacity-20 blur-3xl"></div>
            <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-emerald-300 rounded-full opacity-15 blur-3xl"></div>
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-teal-500 rounded-full opacity-10 blur-3xl">
            </div>

            <div class="absolute inset-0 opacity-5"
                style="background-image: linear-gradient(rgba(255,255,255,1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,1) 1px, transparent 1px); background-size: 48px 48px;">
            </div>

            <a href="{{ route('home') }}" class="relative z-10 flex items-center gap-3 group">
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
                        class="font-display font-bold text-[18px] tracking-tight text-white group-hover:text-green-400 transition-colors">
                        Catet<span class="text-green-500">Cash</span>
                    </span>
                    <span
                        class="text-[10px] text-gray-400 font-medium tracking-[.1em] uppercase mt-0.5 group-hover:text-green-500 transition-colors">
                        Personal Finance
                    </span>
                </div>
            </a>

            <div class="flex-1 flex items-center">
                <div class="relative z-10 space-y-5 max-w-sm">

                    <p class="text-white/40 text-xs font-semibold uppercase tracking-widest mb-6">
                        Why CatetCash?
                    </p>

                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 rounded-xl bg-green-500/20 border border-green-500/30 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 fill-green-400" viewBox="0 0 20 20">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-white font-semibold text-sm">Real-time Reports</p>
                            <p class="text-white/45 text-xs mt-0.5 leading-relaxed">
                                Monitor your finances anytime through easy-to-understand interactive charts.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 rounded-xl bg-green-500/20 border border-green-500/30 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 fill-green-400" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-white font-semibold text-sm">Record in Seconds</p>
                            <p class="text-white/45 text-xs mt-0.5 leading-relaxed">
                                Add transactions quickly. No hassle, everything is recorded and organized instantly.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div
                            class="w-10 h-10 rounded-xl bg-green-500/20 border border-green-500/30 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 fill-green-400" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-white font-semibold text-sm">Secure Privacy</p>
                            <p class="text-white/45 text-xs mt-0.5 leading-relaxed">
                                Your financial data is encrypted and secure. Only you can access it.
                            </p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

    @push('scripts')
        <script>
            function togglePassword(fieldId, iconId) {
                const input = document.getElementById(fieldId);
                const icon = document.getElementById(iconId);
                const isHidden = input.type === 'password';
                input.type = isHidden ? 'text' : 'password';
                icon.innerHTML = isHidden ?
                    `<path fill-rule="evenodd" d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z" clip-rule="evenodd"/><path d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z"/>` :
                    `<path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>`;
            }

            const pwInput = document.getElementById('password');
            const bars = [
                document.getElementById('bar-1'),
                document.getElementById('bar-2'),
                document.getElementById('bar-3'),
                document.getElementById('bar-4'),
            ];
            const label = document.getElementById('strength-label');

            const strengthColors = ['bg-red-400', 'bg-orange-400', 'bg-yellow-400', 'bg-green-500'];
            const strengthLabels = ['Sangat lemah', 'Lemah', 'Cukup kuat', 'Kuat 💪'];

            pwInput.addEventListener('input', function() {
                const val = this.value;
                let score = 0;
                if (val.length >= 8) score++;
                if (/[A-Z]/.test(val)) score++;
                if (/[0-9]/.test(val)) score++;
                if (/[^A-Za-z0-9]/.test(val)) score++;

                bars.forEach((bar, i) => {
                    bar.className = 'h-1 flex-1 rounded-full transition-all ';
                    bar.className += i < score ? strengthColors[score - 1] : 'bg-gray-200';
                });

                if (val.length === 0) {
                    label.textContent = 'Masukkan kata sandi';
                    label.className = 'text-xs text-gray-400 mt-1';
                } else {
                    label.textContent = strengthLabels[score - 1] ?? 'Masukkan kata sandi';
                    const labelColors = ['text-red-500', 'text-orange-500', 'text-yellow-600', 'text-green-600'];
                    label.className = `text-xs mt-1 ${labelColors[score - 1] ?? 'text-gray-400'}`;
                }
            });
        </script>
    @endpush

@endsection
