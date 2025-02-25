    <div class=" overflow-x-auto shadow-md sm:rounded-lg items-center justify-center p-5 max-w-4xl mx-auto">
    <h1 class="text-xl font-bold text-gray-800 mb-5">Detalle del paciente</h1>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombres y Apellidos
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Historia
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Edad
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Teléfono
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Dirección
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Detalles
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($pacientes as $paciente)
                <tr class="bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $paciente->nombres ?? '' }} {{ $paciente->apellidos ?? '' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $paciente->historia ?? 'Sin historia' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $paciente->edad ?? 'Sin edad' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $paciente->telefono ?? 'Sin teléfono' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $paciente->direccion ?? 'Sin dirección' }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('admin.pacientes.show', $paciente->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
