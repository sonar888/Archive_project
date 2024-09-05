@props(['name'=> 'relationships'])





@php
  $array = Illuminate\Support\Facades\DB::table($name)->pluck('name');
      
 echo $array;


  
//   echo "<script>
//         $( function() {
//         var availableTags = $array
//         $( '#tags ').autocomplete({
//             source: availableTags
//         });
//         } );
//     </script>";

    


@endphp

{{-- <div {{ $attributes->merge(["class"=>"flex row justify-between my-6 px-12 mx-6"]) }}>
    <div class="ui-widget">
        <label for="{{ $name }}">{{ $slot }} </label>
    </div>
    <div>
        <input name="{{ $name }}" id="{{ $name }}" class="px-2" autocomplete="off">
    </div>
</div> --}}

<div>
    <label for=""></label>
    <input type="text" onkeyup="myFunction()">
</div>

<script>
    function myFunction() {
        var array = ["Harry&Ginny","Harry\/Ginny","Ron\/Hermione","Harry & The Dursleys","Molly Weasley\/Arthur Weasly"]

        for (let index = 0; index < array.length; ++index) {
        var element = array[index];
        console.log(element)
}
    }
</script>