@props(['routeName'])
<a
{{ $attributes->merge(['class' => 'block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent text-white' . (Route::currentRouteName() === $routeName ? ' md:text-blue-700' : '')]) }}>{{ $slot }}</a>
