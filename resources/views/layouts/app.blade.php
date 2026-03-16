<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'CatetCash')</title>

    <meta name="description" content="CatetCash adalah aplikasi pencatatan keuangan pribadi yang mudah dan gratis.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Bricolage+Grotesque:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'DM Sans', sans-serif;
        }

        .font-display {
            font-family: 'Bricolage Grotesque', sans-serif;
        }

        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #16a34a, #22c55e, #84cc16);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Glass card */
        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.95);
        }
    </style>

</head>

<body class="bg-green-50 text-gray-900">

    @include('components.navbar')

    @yield('content')

    @include('components.footer')

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const nav = document.getElementById('mainNav');

            window.addEventListener('scroll', () => {
                if (window.scrollY > 24) {
                    nav.classList.add('bg-white', 'shadow');
                } else {
                    nav.classList.remove('bg-white', 'shadow');
                }
            });

        });
    </script>

</body>

</html>
