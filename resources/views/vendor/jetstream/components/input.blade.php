@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 bg-gray-700 focus:border-indigo-300 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 text-white rounded-md shadow-sm']) !!}>
