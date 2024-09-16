@props(['active' => false,'type' => "a"]) 

@if ($type === "button")

<div>
    <button class="{{ $active? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium" 
    aria-current="{{ $active ? 'page' : 'false'}}"
    {{ $attributes }}>

        {{ $slot }}
    
</button>

</div>



@else

<div>
    <a class="{{ $active? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium" 
    aria-current="{{ $active ? 'page' : 'false'}}"
    {{ $attributes }}>

        {{ $slot }}
    
</a>

</div>


  
@endif


{{-- <a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="#">{{ $slot }}</a> --}}

