<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-200">
    <header>
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                <a href="/admin" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('images/DrLuis.jpg') }}" class="h-8" alt="Flowbite Logo" />
                    <span class=" text-black self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Dr. Luis Silva Cisneros</span>
                </a>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <script src="{{ asset('js/hide.js') }}"></script>
    <script src="{{ asset('js/multipaso.js') }}"></script>
    <script src="{{ asset('js/Scroll.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
