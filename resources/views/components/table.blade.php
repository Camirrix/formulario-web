<div class="overflow-x-auto shadow-md sm:rounded-lg items-center justify-center p-5 max-w-5xl mx-auto">
    <h1 class="text-xl font-bold text-gray-800 mb-5 text-center uppercase">Listado de pacientes</h1>
    <!-- Nuevo filtro global -->
    <div class="mb-4">
        <input type="text" id="global-filter" placeholder="Buscar en todos los campos" class="w-full px-2 py-1">
    </div>
    <table id="pagination-table" class="w-full table-auto">
        <thead>
            <tr>
                <th class="pb-4">
                    <span class="flex items-center px-3 md:px-6">
                        Nombre completo
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                        </svg>
                    </span>
                </th >
                <th class="hidden sm:table-cell pb-4">
                    <span class="flex items-center px-3 md:px-6">
                        Historia
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                        </svg>
                    </span>
                </th>
                <th class="hidden sm:table-cell pb-4">
                    <span class="flex items-center px-3 md:px-6">
                        Cédula
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                        </svg>
                    </span>
                </th>
                <th class="hidden 3xl:table-cell pb-4">
                    <span class="flex items-center px-3 md:px-6">
                        Revisión
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                        </svg>
                    </span>
                </th>
                <th class="hidden md:table-cell pb-4">
                    <span class="flex items-center px-3 md:px-6">
                        Fecha de cirugía
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                        </svg>
                    </span>
                </th>
                <th class="hidden lg:table-cell pb-4">
                    <span class="flex items-center px-3 md:px-6">
                        Clínica
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                        </svg>
                    </span>
                </th>
                <th class="pb-4">
                    <span class="flex items-center px-3 md:px-6">
                        Detalles
                        <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4"/>
                        </svg>
                    </span>
                </th>
            </tr>
        </thead>
        <tbody>
                @foreach($pacientes as $paciente)
                    <tr class="bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $paciente->nombres ?? '' }} {{ $paciente->apellidos ?? '' }}
                        </td>
                        <td class="px-3 sm:px-6 py-4 hidden sm:table-cell">
                            {{ $paciente->historia ?? 'Sin historia' }}
                        </td>
                        <td class="px-3 sm:px-6 py-4 hidden sm:table-cell">
                            {{ $paciente->cedula ?? 'Sin cedula' }}
                        </td>
                        <td class="px-3 md:px-6 py-4 hidden 3xl:table-cell">
                            {{ $paciente->tipoCirugia ?? 'Sin cirugia' }}
                        </td>
                        <td class="px-3 md:px-6 py-4 hidden md:table-cell">
                            {{ $paciente->fechaCirugia ?? 'Sin fecha' }}
                        </td>
                        <td class="px-6 py-4 hidden lg:table-cell">
                            {{ $paciente->clinica ?? 'Sin dirección' }}
                        </td>
                        <td class="px-3 md:pl-4 py-4">
                            <a href="{{ route('admin.pacientes.show', $paciente->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">VER</a>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const globalFilter = document.getElementById('global-filter');
            globalFilter.addEventListener('input', function () {
                const query = this.value.toLowerCase();
                document.querySelectorAll('#pagination-table tbody tr').forEach(row => {
                    let found = false;
                    row.querySelectorAll('td').forEach(cell => {
                        if (cell.textContent.toLowerCase().includes(query)) {
                            found = true;
                        }
                    });
                    row.style.display = found ? '' : 'none';
                });
            });
        });
    </script>
</div>
