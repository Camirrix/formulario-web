<div class="col-span-4 md:col-span-{{ $clase ?? '2' }}">
    <div class="flex items-center">
        <label for="{{ $identificador ?? '' }}" class="pl-2 inline-block mb-2 text-md font-medium text-gray-900 dark:text-white">{{ $label ?? '' }}</label>
        @if(isset($enlace))
            <a href="{{ $enlace ?? '' }}" target="_blank" rel="noopener noreferrer" class="ml-2 mb-2 text-blue-500 hover:underline focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-2 text-center dark:focus:ring-blue-800">(Calcular)</a>
        @endif
    </div>
    <input type="{{ $type ?? '' }}" id="{{ $identificador ?? '' }}" name="{{ $identificador ?? '' }}" class="cols-span-4 md:cols-span-2 bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
</div>
