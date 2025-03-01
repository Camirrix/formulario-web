<div class="col-span-4 md:col-span-2">
    <label for="{{ $identificador ?? '' }}" class="pl-2 block mb-2 text-md font-medium text-gray-900 dark:text-white">{{ $label ?? '' }}</label>
    <input type="{{ $type ?? '' }}" id="{{ $identificador ?? '' }}" name="{{ $identificador ?? '' }}" class="cols-span-4 md:cols-span-2 bg-gray-50 border border-gray-500 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
</div>
