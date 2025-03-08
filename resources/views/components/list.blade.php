<div class="overflow-x-auto shadow-md sm:rounded-lg items-center justify-center p-5 max-w-5xl mx-auto">
    <h1 class="text-xl font-bold text-gray-800 mb-5 text-center uppercase w-full">Detalles del pacientes</h1>
    <table class="w-full table-auto text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Campo
                </th>
                <th scope="col" class="px-6 py-3">
                    Respuesta
                </th>
                <th scope="col" class="px-6 py-3 hidden sm:table-cell">
                    Editar
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($paciente->toArray() as $campo => $valor)
                @if (!in_array($campo, ['id', 'created_at', 'updated_at']))
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th name="{{ $campo }}" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ ucwords(str_replace('_', ' ', $campo)) }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $valor ?? 'No se rellenó' }}
                        </td>
                        <td class="px-6 py-4 text-right hidden sm:table-cell">
                            <a href="javascript:void(0)" onclick="openModal('{{ $campo }}', '{{ $valor }}')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal para editar -->
<div id="editModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <form id="editForm" method="POST" action="#">
                @csrf
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div>
                        <label id="campoLabel" class="block pl-2 mb-2 text-md font-medium text-gray-900 dark:text-white"></label>
                        <input id="campoInput" name="valor" type="text" class="cols-span-4 md:cols-span-2 bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 sm:ml-3 sm:w-auto sm:text-sm">
                        Guardar
                    </button>
                    <button type="button" onclick="closeModal()" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancelar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function openModal(campo, valor) {
        // Configura los valores en el modal
        document.getElementById('campoLabel').innerText = 'Editar ' + campo;
        document.getElementById('campoInput').value = valor;
        // Abre el modal
        document.getElementById('editModal').classList.remove('hidden');
    }

    function closeModal() {
        // Cierra el modal
        document.getElementById('editModal').classList.add('hidden');
    }
</script>
