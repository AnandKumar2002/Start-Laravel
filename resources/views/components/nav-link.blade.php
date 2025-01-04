@props(['href', 'action' => false])

<a href="{{ $href }}" 
   class="text-white font-medium hover:text-gray-300 
   {{ request()->is($href) ? 'border-b-2 border-blue-500' : '' }} py-2">
    {{ $slot }}
</a>
