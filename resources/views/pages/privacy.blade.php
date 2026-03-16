@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')

    <section class="pt-28 pb-20 text-center"
        style="background: radial-gradient(ellipse 100% 70% at 50% 0%, #bbf7d0, #f9fafb 55%)">

        <div class="max-w-2xl mx-auto px-6">

            <span class="inline-block font-display text-[11px] font-bold text-green-600 tracking-[.1em] uppercase bg-green-50 border border-green-200 px-4 py-1.5 rounded-full mb-6">
                Legal Document
            </span>

            <h1 class="font-display font-extrabold text-gray-900 tracking-tight mb-6"
                style="font-size: clamp(36px,5vw,52px); line-height:1.08">
                Privacy<br>
                <span style="background: linear-gradient(135deg,#15803d,#22c55e); -webkit-background-clip:text; -webkit-text-fill-color:transparent">
                    Policy.
                </span>
            </h1>

            <p class="text-gray-500 leading-relaxed text-[17px]">
                We keep things simple — your data belongs to you, and we're fully transparent about how we handle it.
            </p>

            <p class="text-gray-400 text-xs mt-4">
                Last updated: <span class="text-gray-500 font-medium">Maret 16, 2026</span>
            </p>

        </div>
    </section>

    <section class="bg-gray-50 py-16">
        <div class="max-w-3xl mx-auto px-6">

            <div class="bg-white border border-gray-100 rounded-2xl p-6 mb-10 shadow-sm">
                <p class="text-xs font-semibold text-gray-400 uppercase tracking-widest mb-4">Table of Contents</p>
                <nav class="space-y-2">
                    @foreach ([
                        ['#collected',    '1. Information We Collect'],
                        ['#usage',        '2. How We Use Your Data'],
                        ['#storage',      '3. Data Storage & Security'],
                        ['#sharing',      '4. Data Sharing'],
                        ['#cookies',      '5. Cookies'],
                        ['#rights',       '6. Your Rights'],
                        ['#children',     '7. Children\'s Privacy'],
                        ['#contact',      '8. Contact Us'],
                    ] as $item)
                        <a href="{{ $item[0] }}" class="flex items-center gap-2 text-sm text-gray-500 hover:text-green-600 transition-colors group">
                            <span class="w-1.5 h-1.5 rounded-full bg-gray-300 group-hover:bg-green-400 transition-colors shrink-0"></span>
                            {{ $item[1] }}
                        </a>
                    @endforeach
                </nav>
            </div>

            <div class="space-y-8">

                <div id="collected" class="bg-white border border-gray-100 rounded-2xl p-7 shadow-sm scroll-mt-24">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-9 h-9 rounded-xl bg-green-50 border border-green-100 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 fill-green-500" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h2 class="font-display text-lg font-bold text-gray-900">1. Information We Collect</h2>
                    </div>
                    <div class="space-y-3 text-sm text-gray-500 leading-relaxed">
                        <p>When you create an account, we collect your <strong class="text-gray-700">name, email address, and password</strong> (encrypted). We do not collect payment information since CatetCash is completely free.</p>
                        <p>We also collect the financial data you voluntarily enter into the app — such as transaction records, categories, and notes — solely to provide the service to you.</p>
                        <ul class="space-y-2 mt-3">
                            @foreach ([
                                'Account info: name, username, email',
                                'Financial entries you create inside the app',
                                'Basic usage data: pages visited, features used',
                                'Device info: browser type, operating system',
                            ] as $item)
                                <li class="flex items-center gap-2.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-400 shrink-0"></span>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div id="usage" class="bg-white border border-gray-100 rounded-2xl p-7 shadow-sm scroll-mt-24">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-9 h-9 rounded-xl bg-green-50 border border-green-100 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 fill-green-500" viewBox="0 0 20 20">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"/>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"/>
                            </svg>
                        </div>
                        <h2 class="font-display text-lg font-bold text-gray-900">2. How We Use Your Data</h2>
                    </div>
                    <div class="space-y-3 text-sm text-gray-500 leading-relaxed">
                        <p>Your data is used exclusively to operate and improve CatetCash. We use it to authenticate your account, display your financial records, and send essential service-related emails.</p>
                        <p>We do <strong class="text-gray-700">not</strong> use your financial data for advertising, profiling, or any purpose beyond running the service you signed up for.</p>
                    </div>
                </div>

                <div id="storage" class="bg-white border border-gray-100 rounded-2xl p-7 shadow-sm scroll-mt-24">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-9 h-9 rounded-xl bg-green-50 border border-green-100 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 fill-green-500" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h2 class="font-display text-lg font-bold text-gray-900">3. Data Storage & Security</h2>
                    </div>
                    <div class="space-y-3 text-sm text-gray-500 leading-relaxed">
                        <p>All data is stored on secured servers with industry-standard encryption (AES-256). Passwords are hashed using bcrypt and are never stored in plain text.</p>
                        <p>We maintain regular backups to prevent data loss. However, no system is 100% immune to breaches — we encourage you to use a strong, unique password for your account.</p>
                    </div>
                </div>

                <div id="sharing" class="bg-white border border-gray-100 rounded-2xl p-7 shadow-sm scroll-mt-24">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-9 h-9 rounded-xl bg-green-50 border border-green-100 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 fill-green-500" viewBox="0 0 20 20">
                                <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z"/>
                            </svg>
                        </div>
                        <h2 class="font-display text-lg font-bold text-gray-900">4. Data Sharing</h2>
                    </div>
                    <div class="space-y-3 text-sm text-gray-500 leading-relaxed">
                        <p>We do <strong class="text-gray-700">not sell, rent, or share</strong> your personal data with third parties for marketing or commercial purposes. Period.</p>
                        <p>We may share limited data only in these specific cases:</p>
                        <ul class="space-y-2 mt-2">
                            @foreach ([
                                'With service providers who help us operate the app (e.g. hosting), under strict confidentiality agreements.',
                                'When required by law or a valid court order.',
                                'To protect the rights and safety of CatetCash and its users.',
                            ] as $item)
                                <li class="flex items-start gap-2.5">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-400 mt-1.5 shrink-0"></span>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div id="cookies" class="bg-white border border-gray-100 rounded-2xl p-7 shadow-sm scroll-mt-24">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-9 h-9 rounded-xl bg-green-50 border border-green-100 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 fill-green-500" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h2 class="font-display text-lg font-bold text-gray-900">5. Cookies</h2>
                    </div>
                    <div class="space-y-3 text-sm text-gray-500 leading-relaxed">
                        <p>CatetCash uses cookies strictly for keeping you logged in and maintaining your session. We do not use tracking cookies or third-party advertising cookies of any kind.</p>
                        <p>You can disable cookies in your browser settings, but doing so may affect your ability to log in and use the app properly.</p>
                    </div>
                </div>

                <div id="rights" class="bg-white border border-gray-100 rounded-2xl p-7 shadow-sm scroll-mt-24">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-9 h-9 rounded-xl bg-green-50 border border-green-100 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 fill-green-500" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h2 class="font-display text-lg font-bold text-gray-900">6. Your Rights</h2>
                    </div>
                    <div class="text-sm text-gray-500 leading-relaxed">
                        <p class="mb-3">You have full control over your personal data. At any time, you can:</p>
                        <ul class="space-y-2">
                            @foreach ([
                                'Access and review all data stored in your account.',
                                'Update or correct your personal information.',
                                'Export your financial data in a readable format.',
                                'Request permanent deletion of your account and all associated data.',
                            ] as $item)
                                <li class="flex items-start gap-2.5">
                                    <svg class="w-4 h-4 fill-green-400 mt-0.5 shrink-0" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                        <p class="mt-3">To exercise any of these rights, simply contact us at the email below.</p>
                    </div>
                </div>

                <div id="children" class="bg-white border border-gray-100 rounded-2xl p-7 shadow-sm scroll-mt-24">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-9 h-9 rounded-xl bg-green-50 border border-green-100 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 fill-green-500" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h2 class="font-display text-lg font-bold text-gray-900">7. Children's Privacy</h2>
                    </div>
                    <div class="space-y-3 text-sm text-gray-500 leading-relaxed">
                        <p>CatetCash is not intended for children under the age of 13. We do not knowingly collect personal data from anyone under 13.</p>
                        <p>If you believe a child has provided us with personal information, please contact us immediately and we will delete the data as soon as possible.</p>
                    </div>
                </div>

                <div id="contact" class="bg-gradient-to-br from-gray-900 to-gray-800 border border-gray-700 rounded-2xl p-7 shadow-sm scroll-mt-24 relative overflow-hidden">
                    <div class="absolute -top-8 -right-8 w-32 h-32 bg-green-500 rounded-full opacity-10 blur-2xl pointer-events-none"></div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-9 h-9 rounded-xl bg-green-500/20 border border-green-500/30 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 fill-green-400" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                        </div>
                        <h2 class="font-display text-lg font-bold text-white">8. Contact Us</h2>
                    </div>
                    <p class="text-white/55 text-sm leading-relaxed mb-5">
                        Have a question or concern about this Privacy Policy? We'd love to hear from you.
                    </p>
                    <a href="mailto:basehub@gmail.com"
                       class="inline-flex items-center gap-2 bg-green-500 hover:bg-green-400 transition-colors text-white text-sm font-semibold px-5 py-2.5 rounded-xl">
                        <svg class="w-4 h-4 fill-white" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                        basehub@gmail.com
                    </a>
                </div>

            </div>

            <div class="mt-10 text-center">
                <p class="text-gray-400 text-sm mb-4">Ready to start tracking your finances?</p>
                <a href="{{ route('register') }}"
                   class="inline-flex items-center gap-2 text-white text-sm font-bold px-6 py-3 rounded-full shadow-lg shadow-green-200 hover:shadow-green-300 hover:-translate-y-0.5 transition-all"
                   style="background: linear-gradient(135deg, #16a34a, #22c55e)">
                    Create Free Account
                    <svg class="w-3.5 h-3.5 fill-white" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </a>
                <p class="text-gray-400 text-xs mt-3">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-green-600 font-medium hover:underline">Sign in here</a>
                </p>
            </div>

        </div>
    </section>

@endsection