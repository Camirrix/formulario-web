
<div>
    <label for="{{ $name ?? '' }}" class="pl-2 pb-4 block mb-2 text-md font-medium text-gray-900 dark:text-white">{{ $label ?? '' }}</label>
    @foreach($options as $option)
        <div class="flex items-center mb-6 pl-2">
            <input id="{{ $option['value'] }}" type="checkbox" name="{{ $name }}" value="{{ $option['value'] }}" class="w-4 h-4 text-blue-600 bg-gray-300 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="{{ $option['value'] }}" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $option['label'] }}</label>
        </div>
    @endforeach
</div>
