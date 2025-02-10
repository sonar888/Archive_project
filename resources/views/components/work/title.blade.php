@props(['title'=> ''])


@if ($title == "work")

    <h2 class="font-serif text-3xl my-3 place-self-center ">{{ $slot }}</h2>

@else

    <h2 class="font-serif text-lg my-3 place-self-center ">{{ $slot }}</h2>

@endif
