@props(['name'=> '', 'parent'=>'', 'selection' => ''])





@php
  $array = Illuminate\Support\Facades\DB::table($name)->pluck('name');
      


@endphp



<div class="flex row justify-between my-6 px-12 mx-6">

    <div>
        <label for="">{{ $slot }}</label>
    </div>

    <div>
        <div id="{{ $selection }}">
        

        
        
        </div>
        
        <input type="text" id='{{ $name }}' onkeyup="myFunction('{{ $name }}', {{ $array }}, '{{ $parent }}', '{{ $selection }}')" autocomplete="off" class="px-2">
        <ul id='{{ $parent }}' role="listbox">
    
        </ul>

    </div>
    
</div>

{{-- <script>
    function myFunction(id, arr, parent) {
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
        var list = document.getElementById(parent);
        console.log(parent);

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
            node.setAttribute("onClick", "selectItem(event, '{{ $selection }}')") //and adding the select function to each <li>
            node.setAttribute("id", `${element}`)
            node.innerHTML = ``;
            node.innerHTML += `${element}`
            list.appendChild(node);

            


        }
                
        

        
    }

    function selectItem(event, selection) {
        //Listening to the event
        var id = document.getElementById(event.target.id)
        
        var selected = document.createElement("p")
        selected.setAttribute("id", `${event.target.id}`)
        selected.setAttribute("onclick", "removeFromSelection(event, '{{ $selection }}')")
        var selection = document.getElementById(selection)

        selected.innerHTML=``
        selected.innerHTML= `${event.target.id} <input name="{{ $selection }}[]" autocomplete="off" style="display:none" value="${event.target.id}">`

        selection.appendChild(selected)


        var list = document.getElementById('parent');
        if(list.hasChildNodes()) {

            while (list.firstChild) {
                list.removeChild(list.lastChild);
            }

        }

    }

    function removeFromSelection(event, selection) {
        var id = event.target.id
        console.log(id)
        var item = document.getElementById(id);
        console.log(item)
        var selection = document.getElementById(selection);
        console.log(selection)

        selection.removeChild(item);
        
    }

    

    

    
</script> --}}

