<div class="mb-2 col-span-4 md:col-span-2">
    <div class="flex items-center mb-2">
        <label for="{{ $identificador ?? '' }}" class="mr-4 pl-2 text-md font-medium text-gray-900 dark:text-white">
            {{ $label ?? '' }}
        </label>
        @if(isset($modal) && $modal === 'si')
            <x-modalImagenes direccion="{{ $direccion ?? '' }}" :modal="$modal" identificador="{{ $identificador ?? '' }}" />
        @endif
    </div>
    <select id="{{ $identificador ?? '' }}" name="{{ $identificador ?? '' }}" class="bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="0" class="text-gray-500">Selecciona una opción</option>
        @foreach($options as $option)
            <option value="{{ $option['value'] }}">{{ $option['label_opcion'] }}</option>
        @endforeach
    </select>
</div>


