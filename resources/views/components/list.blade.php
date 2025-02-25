
<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-5 max-w-4xl mx-auto">
<h1 class="text-xl font-bold text-gray-800 mb-5 text-center uppercase">Listado de pacientes</h1>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Campo
                </th>
                <th scope="col" class="px-6 py-3">
                    Respuesta
                </th>
                <th scope="col" class="px-6 py-3">
                    Editar
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($paciente->toArray() as $campo => $valor)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th name="{{ $campo}}" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ ucwords(str_replace('_', ' ', $campo)) }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $valor ?? 'No se rellenó' }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
