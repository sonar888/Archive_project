@props([ 'name']) 



@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full',
        'value' => old($name)
    ];
@endphp

<x-forms.field :$name>
    <input {{ $attributes($defaults) }}>
</x-forms.field>
