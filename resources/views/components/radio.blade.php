<div class="pl-2 mb-2 col-span-4">
    <label for="{{ $identificador ?? '' }}" class="block mb-4 text-md font-medium text-gray-900 dark:text-white">{{ $label ?? '' }}</label>
        <div class="flex items-center mb-4">
            <input id="{{ $identificador ?? '' }}{{ $opcion1 ?? '' }}" type="radio" value="{{ $opcion1 ?? '' }}" name="{{ $identificador ?? '' }}" class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="{{ $identificador ?? '' }}{{ $opcion1 ?? '' }}" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $opcion1 ?? '' }}</label>
        </div>
        <div class="flex items-center">
            <input id="{{ $identificador ?? '' }}{{ $opcion2 ?? '' }}" type="radio" value="{{ $opcion2 ?? '' }}" name="{{ $identificador ?? '' }}" class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="{{ $identificador ?? '' }}{{ $opcion2 ?? '' }}" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $opcion2 ?? '' }}</label>
        </div>
</div>
