@extends('layouts.auth')

@section('title', 'Login')

@section('content')

    <div class="min-h-screen flex">
        <div class="hidden lg:flex lg:w-1/2 bg-gray-900 flex-col justify-between p-12 relative overflow-hidden">
            <div class="absolute -top-20 -right-20 w-96 h-96 bg-emerald-400 rounded-full opacity-20 blur-3xl"></div>
            <div class="absolute -bottom-16 -left-16 w-80 h-80 bg-sky-500 rounded-full opacity-20 blur-3xl"></div>
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
                <div class="relative z-10">
                    <h1 class="text-5xl font-extrabold text-white leading-tight tracking-tight mb-5">
                        Record every<br>
                        <span class="text-emerald-400">rupiah</span><br>
                        with ease.
                    </h1>

                    <p class="text-white/50 text-sm leading-relaxed max-w-xs">
                        Manage your daily finances smarter. Track income, expenses,
                        and savings in one simple dashboard.
                    </p>
                </div>
            </div>
        </div>

        <div class="flex-1 flex items-center justify-center px-6 py-12 bg-gray-50">
            <div class="w-full max-w-md">

                <div class="flex items-center gap-2 mb-8 lg:hidden">
                    <div class="w-8 h-8 bg-emerald-400 rounded-lg flex items-center justify-center">
                        <svg class="w-4 h-4 fill-white" viewBox="0 0 24 24">
                            <path
                                d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z" />
                        </svg>
                    </div>
                    <span class="text-gray-900 text-lg font-extrabold tracking-tight">
                        Catet<span class="text-emerald-500">Cash</span>
                    </span>
                </div>

                <div class="mb-8">
                    <p class="text-emerald-500 text-xs font-semibold uppercase tracking-widest mb-2">Welcome Back!</p>
                    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Sign in to your account</h2>
                    <p class="text-gray-400 text-sm mt-1">Please enter your username and password.</p>
                </div>

                @if (session('status'))
                    <div
                        class="flex items-start gap-2 bg-emerald-50 border border-emerald-200 text-emerald-700 text-sm rounded-xl px-4 py-3 mb-5">
                        <svg class="w-4 h-4 mt-0.5 shrink-0 fill-emerald-500" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        {{ session('status') }}
                    </div>
                @endif

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

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <div>
                        <label for="username" class="block text-sm font-medium text-gray-700 mb-1.5">
                            Username
                        </label>

                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 fill-gray-400" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                </svg>
                            </span>

                            <input id="username" type="text" name="username" value="{{ old('username') }}"
                                placeholder="Enter your username" autocomplete="username" autofocus required
                                class="w-full pl-10 pr-4 py-3 border rounded-xl text-sm text-gray-900 bg-white placeholder-gray-400 outline-none transition focus:ring-2 focus:ring-emerald-400 focus:border-emerald-400 {{ $errors->has('username') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                        </div>
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

                            <input id="password" type="password" name="password"
                                placeholder="Enter your password"
                                autocomplete="current-password" required
                                class="w-full pl-10 pr-12 py-3 border rounded-xl text-sm text-gray-900 bg-white placeholder-gray-400 outline-none transition focus:ring-2 focus:ring-emerald-400 focus:border-emerald-400 {{ $errors->has('password') ? 'border-red-400 bg-red-50' : 'border-gray-200' }}">
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <label class="flex items-center gap-2 cursor-pointer select-none">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}
                                class="w-4 h-4 rounded accent-emerald-500 cursor-pointer">
                            <span class="text-sm text-gray-600">Remember me</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-sm text-emerald-500 font-medium hover:underline">
                                Forgot password?
                            </a>
                        @endif
                    </div>

                    <button type="submit"
                        class="w-full py-3 bg-emerald-400 hover:bg-emerald-500 active:scale-[.98] text-white text-sm font-bold rounded-xl transition-all shadow-lg shadow-emerald-200 tracking-wide">
                        Sign In
                    </button>
                </form>

                <div class="flex items-center gap-3 my-6">
                    <div class="flex-1 h-px bg-gray-200"></div>
                    <span class="text-xs text-gray-400">or</span>
                    <div class="flex-1 h-px bg-gray-200"></div>
                </div>

                <p class="text-center text-sm text-gray-400">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-emerald-500 font-semibold hover:underline ml-1">
                        Sign up for free
                    </a>
                </p>

            </div>
        </div>

    </div>

@endsection