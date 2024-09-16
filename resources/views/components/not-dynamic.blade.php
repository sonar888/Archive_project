 @props(['type'=>'input', 'id'=>''])



@if ($type == 'textarea')

    <div class="flex row  justify-between my-6 px-12 mx-6">
        <div>
            <label for="{{ $id }}"><h2>{{ $slot }}</h2></label>
        </div>
        <div>
            <textarea name="{{ $id }}" id="{{ $id }}" cols="100" rows="20"></textarea>
        </div>
    </div>

@else

<div class="flex row  justify-between my-6 px-12 mx-6">
    <div>
        <label for="{{ $id }}"><h2>{{ $slot }}</h2></label>
    </div>
    <div>
        <input type="{{ $type }}" name="{{ $id }}" id="{{ $id }}" class="px-2">
    </div>
</div>

    

     
 @endif
 
 