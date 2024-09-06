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
    <div id="selection">

        
        
    </div>
    <label for=""></label>
    <input type="text" id='myId' onkeyup="myFunction('myId')">
    <ul id='parent' role="listbox">

    </ul>
</div>

<script>
    function myFunction(id, arr) {
        var array = arr

        //Get the value from the input
        var myId = document.getElementById(id);
        var str = myId.value;
        console.log(str);

        //Change both the str and the array from the DB to uppercase for comparison
        var upArr = array.map((element)=> element.toUpperCase())
        console.log(upArr)
        upStr = str.toUpperCase();
        console.log(upStr)

        
        //Return a new array with the matching string/input
        var newArr = [];
        var newArr = upArr.filter((rel)=>
        rel.includes(upStr)
        );
        console.log(newArr)

        
        //Adding and removing the html with the key input
        var list = document.getElementById('parent');
        console.log(list);

            //Checking to see if the parent node has no children in order to prevent infinite loop
            if(list.hasChildNodes()) {

                while (list.firstChild) {
                    list.removeChild(list.lastChild);
                }

            }
  
        //Creating a new li element for each match 
        for (var i = 0; i < newArr.length; i++) {

            var element = newArr[i]
            const node = document.createElement("li");
            node.setAttribute("role", "option")
            node.setAttribute("onClick", "selectItem(event)") //and adding the select function to each <li>
            node.setAttribute("id", `${element}`)
            node.innerHTML = ``;
            node.innerHTML += `${element}`
            list.appendChild(node);

            


        }
                
        

        
    }

    function selectItem(event) {
        //Listening to the event
        var id = document.getElementById(event.target.id)
        
        var selected = document.createElement("p")
        selected.setAttribute("id", `${event.target.id}`)
        selected.setAttribute("onclick", "removeFromSelection(event)")
        var selection =document.getElementById('selection')

        selected.innerHTML=``
        selected.innerHTML= `${event.target.id} <input name="relationships[]" autocomplete="off" style="display:none" value="${event.target.id}">`

        selection.appendChild(selected)


        var list = document.getElementById('parent');
        if(list.hasChildNodes()) {

            while (list.firstChild) {
                list.removeChild(list.lastChild);
            }

        }

    }

    function removeFromSelection(event) {
        var id = event.target.id
        console.log(id)
        var item = document.getElementById(id);
        console.log(item)
        var selection = document.getElementById("selection");
        console.log(selection)

        selection.removeChild(item);
        
    }

    

    

    
</script>