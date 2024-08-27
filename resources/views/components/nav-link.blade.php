@props(['active' => false,'type' => "a"]) 


    <a class="{{ $active? 'bg-dark text-white' : 'text-white hover:bg-blue hover:text-light'}} rounded-md px-3 py-2 text-sm font-medium" 
aria-current="{{ $active? 'page' : 'false'}}"
{{ $attributes }}>

    {{ $slot }}
        
</a>


{{-- <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">{{ $slot }}</a> --}}

