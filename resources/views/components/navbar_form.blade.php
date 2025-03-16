<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="/" class="flex items-center space-x-3">
            <img src="{{ asset('images/DrLuis.jpg') }}" class="h-8" alt="Flowbite Logo" />
            <span class=" text-gray-700 self-center text-md md:text-2xl font-semibold whitespace-nowrap dark:text-white">Dr. Luis Silva Cisneros</span>
        </a>
        <div class=" flex items-center justify-end gap-x-6">
            <!-- <button href="/login/registrarse" type="button" id="signup" class="rounded-md px-3 py-2 text-sm font-semibold text-gray-600 dark:text-white shadow-xs border-2 border-gray-400 hover:bg-gray-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrarse</button>-->
            <a href="{{ route('login.login') }}" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Iniciar sesión
            </a>
        </div>
    </div>
</nav>
