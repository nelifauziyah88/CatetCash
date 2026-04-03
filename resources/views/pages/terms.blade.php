@extends('layouts.app')

@section('title', 'Terms & Conditions')

@section('content')

    <section class="pt-28 pb-20 text-center"
        style="background: radial-gradient(ellipse 100% 70% at 50% 0%, #bbf7d0, #f9fafb 55%)">

        <div class="max-w-2xl mx-auto px-6">

            <span
                class="inline-block font-display text-[11px] font-bold text-green-600 tracking-[.1em] uppercase bg-green-50 border border-green-200 px-4 py-1.5 rounded-full mb-6">
                Legal Document
            </span>

            <h1 class="font-display font-extrabold text-gray-900 tracking-tight mb-6"
                style="font-size: clamp(36px,5vw,52px); line-height:1.08">
                Terms &<br>
                <span
                    style="background: linear-gradient(135deg,#15803d,#22c55e); -webkit-background-clip:text; -webkit-text-fill-color:transparent">
                    Conditions.
                </span>
            </h1>

            <p class="text-gray-500 leading-relaxed text-[17px]">
                By using CatetCash, you agree to the terms below. Please read carefully.
            </p>

            <p class="text-gray-400 text-xs mt-4">
                Last updated: <span class="text-gray-500 font-medium">January 1, 2025</span>
            </p>

        </div>
    </section>

    <section class="bg-gray-50 py-16">
        <div class="max-w-3xl mx-auto px-6">

            <div class="bg-white border border-gray-100 rounded-2xl p-6 mb-10 shadow-sm">
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-widest mb-4">Table of Contents</p>
                <nav class="space-y-2">
                    @foreach ([['#penggunaan', '1. Use of Service'], ['#akun', '2. Account & Security'], ['#data', '3. Data & Privacy'], ['#konten', '4. User Content'], ['#larangan', '5. Prohibited Use'], ['#pembatasan', '6. Limitation of Liability'], ['#perubahan', '7. Service Changes'], ['#kontak', '8. Contact Us']] as $item)
                        <a href="{{ $item[0] }}"
                            class="flex items-center gap-2 text-sm text-gray-500 hover:text-green-600 transition-colors group">
                            <span
                                class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-green-400 transition-colors shrink-0"></span>
                            {{ $item[1] }}
                        </a>
                    @endforeach
                </nav>
            </div>

            <div class="space-y-8">

                <div id="penggunaan" class="bg-white border border-gray-100 rounded-2xl p-7 shadow-sm scroll-mt-24">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-9 h-9 rounded-xl bg-green-50 border border-green-100 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 fill-green-500" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h2 class="font-display text-lg font-bold text-gray-900">1. Use of Service</h2>
                    </div>
                    <div class="space-y-3 text-sm text-gray-500 leading-relaxed">
                        <p>CatetCash is a free personal finance tracking app. By registering, you confirm you are at least
                            17 years old and legally capable of accepting this agreement.</p>
                        <p>This service is provided "as is" for personal use only. Commercial, corporate, or illegal use
                            without written permission is strictly prohibited.</p>
                    </div>
                </div>

                <div id="akun" class="bg-white border border-gray-100 rounded-2xl p-7 shadow-sm scroll-mt-24">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-9 h-9 rounded-xl bg-green-50 border border-green-100 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 fill-green-500" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h2 class="font-display text-lg font-bold text-gray-900">2. Account & Security</h2>
                    </div>
                    <div class="space-y-3 text-sm text-gray-500 leading-relaxed">
                        <p>You are responsible for keeping your password confidential and for all activity under your
                            account. Notify us immediately if you suspect unauthorized access.</p>
                        <p>CatetCash is not liable for losses resulting from negligence, including sharing your credentials
                            with others.</p>
                    </div>
                </div>

                <div id="data" class="bg-white border border-gray-100 rounded-2xl p-7 shadow-sm scroll-mt-24">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-9 h-9 rounded-xl bg-green-50 border border-green-100 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 fill-green-500" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h2 class="font-display text-lg font-bold text-gray-900">3. Data & Privacy</h2>
                    </div>
                    <div class="space-y-3 text-sm text-gray-500 leading-relaxed">
                        <p>We collect only what's needed to operate the service — your name, email, and transaction data. We
                            never sell or share your data with third parties without consent.</p>
                        <p>Your data is stored on encrypted, secure servers. You may request full account deletion at any
                            time by contacting our team.</p>
                    </div>
                </div>

                <div id="larangan" class="bg-white border border-gray-100 rounded-2xl p-7 shadow-sm scroll-mt-24">
                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-9 h-9 rounded-xl bg-red-50 border border-red-100 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 fill-red-400" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M13.477 14.89A6 6 0 015.11 6.524L13.477 14.89zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h2 class="font-display text-lg font-bold text-gray-900">5. Prohibited Use</h2>
                    </div>
                    <div class="text-sm text-gray-500 leading-relaxed">
                        <p class="mb-3">The following actions are strictly prohibited on CatetCash:</p>
                        <ul class="space-y-2">
                            @foreach (['Reverse engineering, decompiling, or modifying the application.', 'Using bots, scrapers, or automated tools to access the service.', 'Creating fake accounts or impersonating other users.', 'Attempting to access another user\'s data without authorization.', 'Using the service for any illegal activity or fraud.'] as $item)
                                <li class="flex items-start gap-2.5">
                                    <svg class="w-4 h-4 fill-red-400 mt-0.5 shrink-0" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div id="kontak"
                    class="bg-gradient-to-br from-gray-900 to-gray-800 border border-gray-700 rounded-2xl p-7 shadow-sm scroll-mt-24 relative overflow-hidden">

                    <div class="flex items-center gap-3 mb-4">
                        <div
                            class="w-9 h-9 rounded-xl bg-green-500/20 border border-green-500/30 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 fill-green-400" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </div>
                        <h2 class="font-display text-lg font-bold text-white">8. Contact Us</h2>
                    </div>

                    <p class="text-white/55 text-sm leading-relaxed mb-5">
                        Questions about these terms? We're happy to help.
                    </p>

                    <a href="mailto:basehub@gmail.com"
                        class="inline-flex items-center gap-2 bg-green-500 hover:bg-green-400 transition-colors text-white text-sm font-semibold px-5 py-2.5 rounded-xl">
                        basehub@gmail.com
                    </a>

                </div>

            </div>

            <div class="mt-10 text-center">
                <p class="text-gray-400 text-sm mb-4">Have you read and agreed to the terms above?</p>

                <a href="{{ route('register') }}"
                    class="inline-flex items-center gap-2 text-white text-sm font-bold px-6 py-3 rounded-xl shadow-lg shadow-green-200 hover:shadow-green-300 hover:-translate-y-0.5 transition-all"
                    style="background: linear-gradient(135deg, #16a34a, #22c55e)">
                    Register Now, Free!
                </a>

                <p class="text-gray-400 text-xs mt-3">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-green-600 font-medium hover:underline">
                        Sign in here
                    </a>
                </p>
            </div>

        </div>
    </section>

@endsection
