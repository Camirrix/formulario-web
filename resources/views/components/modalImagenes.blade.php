<!-- Modal toggle -->
<button data-modal-target="default-modal-{{ $identificador }}" data-modal-toggle="default-modal-{{ $identificador }}" class="block text-blue-500 hover:underline focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 text-center" type="button">
  (Ver clasificación)
</button>

<!-- Main modal -->
<div id="default-modal-{{ $identificador }}" tabindex="-1" aria-hidden="true" class="hidden modal-fix overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[99999] justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <!-- Backdrop -->
    <div class="relative p-4 w-full max-w-3xl max-h-full z-10">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm">
            <!-- Modal header -->
            <div class="flex items-center justify-end p-4 md:p-5 border-b rounded-t border-gray-200">
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center" data-modal-hide="default-modal-{{ $identificador }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                @if(isset($direccion) && !empty($direccion))
                    <img src="{{ asset('images/'.$direccion) }}" alt="Imagen del modal" class="w-full mb-4 object-contain max-h-[80vh]" onerror="this.style.display='none'">
                @else
                    <p class="text-center text-gray-500">Imagen no disponible</p>
                @endif
            </div>
            <!-- Modal footer -->
            <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                <button data-modal-hide="default-modal-{{ $identificador }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Entendido</button>
            </div>
        </div>
    </div>
</div>

<script>
// filepath: c:\laragon\www\Dr-Manuel-Laravel\resources\views\components\modalImagenes.blade.php
document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById("default-modal-{{ $identificador }}");
    if(modal && modal.parentNode !== document.body) {
        // Mover el modal fuera de cualquier contenedor con overflow:hidden
        document.body.appendChild(modal);
    }
});
</script>
