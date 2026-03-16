<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'CatetCash')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
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
    </style>
</head>

<body class="bg-gray-50">

    @yield('content')

</body>

</html>
