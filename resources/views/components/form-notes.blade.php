@props(['id'=>'', 'notes'=>''])



<div class="flex  justify-between my-6 px-12 mx-6">
    <div class="px-5">
        <label for="notes-end" ><input class="px-5" type="checkbox" id="{{ $id }}" onclick="showBox('{{ $notes }}','{{ $id }}')"/>{{ $where }}</label>
    </div>
    
    <div  style="display:none" id="{{ $notes }}">
        <h3>{{ $slot }}</h3>
        <textarea name="{{ $id }}" cols="30" rows="10"></textarea><x-forms.error></x-forms.error>
    </div>
</div>
