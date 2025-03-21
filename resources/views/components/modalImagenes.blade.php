<!-- Modal toggle -->
<button data-modal-target="default-modal-{{ $identificador }}" data-modal-toggle="default-modal-{{ $identificador }}" class="block text-blue-500 hover:underline focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  (Ver clasificación)
</button>

<!-- Main modal -->
<div id="default-modal-{{ $identificador }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-3xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-end p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal-{{ $identificador }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <!-- Se agrega la imagen al modal -->
                <img src="{{ asset('images/' . $direccion) }}" alt="Imagen del modal" class="w-full mb-4">
            </div>
            <!-- Modal footer -->
            <div class="justify-end flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal-{{ $identificador }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Entendido</button>
            </div>
        </div>
    </div>
</div>
