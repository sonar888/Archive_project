
@props(['id' => ""])


<div {{ $attributes ->merge([]) }}>

    <h2 class="form-title">{{ $heading }}</h2>

    <div class="bg-light py-2">
        
        <div>
            {{ $slot }}
        </div>

    </div>

    


</div>