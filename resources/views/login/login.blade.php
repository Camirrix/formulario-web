<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-sm">
        <h1 class="text-xl font-bold mb-4 text-center">Iniciar sesión</h1>
        @if($errors->any())
            <div class="mb-4 text-red-600">
                {{ $errors->first('login') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login.perform') }}">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Usuario</label>
                <input id="username" name="username" type="text" required class="mt-1 p-2 border border-gray-300 rounded w-full">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Contraseña</label>
                <input id="password" name="password" type="password" required class="mt-1 p-2 border border-gray-300 rounded w-full">
            </div>
            <button type="submit" class="w-full bg-indigo-600 text-white p-2 rounded hover:bg-indigo-500">
                Iniciar sesión
            </button>
        </form>
    </div>
</body>
</html>

