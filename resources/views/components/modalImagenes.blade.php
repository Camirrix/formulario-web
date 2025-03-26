<!-- Modal toggle -->
<button data-modal-target="default-modal-{{ $identificador }}" data-modal-toggle="default-modal-{{ $identificador }}" class="block text-blue-500 hover:underline focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 text-center" type="button">
  (Ver clasificación)
</button>

<!-- Simplified Main modal: solo se muestra la imagen -->
<div id="default-modal-{{ $identificador }}" tabindex="-1" aria-hidden="true" class="hidden modal-fix fixed inset-0 flex justify-center items-center">
    @if(isset($direccion) && !empty($direccion))
        <img src="{{ asset('images/'.$direccion) }}" alt="Imagen del modal" class="max-w-full max-h-full object-contain" onerror="this.style.display='none'">
    @else
        <p class="text-center text-gray-500">Imagen no disponible</p>
    @endif
</div>
