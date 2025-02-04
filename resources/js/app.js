import './bootstrap';


// A function to show a hidden field when tha box is checked (used to show start and end notes in the create form)

function showBox(notes, id) {
  var checkBox = document.getElementById(id)
  var text = document.getElementById(notes)

  if(checkBox.checked) {
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }

}



// A function to dynamically display existing tags for the user to select

function myFunction(id, arr, parent, selection) {
    var array = arr // We use the array from PHP input in the blade views

    //Get the value from the input
    var myId = document.getElementById(id);
    var str = myId.value;
    console.log(str);

    //Change both the str and the array from the DB to uppercase for comparison
    var upArr = array.map((element)=> element.toUpperCase())
    console.log(upArr)
    var upStr = str.toUpperCase()
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
        // node.setAttribute("onClick", "selectItem(event)") //and adding the select function to each <li>

        node.setAttribute("id", `${element}`)
        node.addEventListener('click', selectItem, false )
        node.mySelection = selection
        node.innerHTML = ``;
        node.innerHTML += `${element}`
        list.appendChild(node);

        
        // const someInput = document.querySelector('button');
        // someInput.addEventListener('click', myFunc, false);
        // someInput.myParam = 'This is my parameter';
        // function myFunc(evt)
        // {
        //   window.alert(evt.currentTarget.myParam);
        // }

    }
            
    

    
}

function selectItem(event) {
    //Listening to the event

    console.log(event.target.mySelection)
    var id = event.target.mySelection
    
    
    var selected = document.createElement("p")
    selected.setAttribute("id", `${event.target.id}`)
    

    selected.addEventListener('click', removeFromSelection, false )
    selected.myParam = id
    var selectionNode = document.getElementById(id)
    

    selected.innerHTML=``
    selected.innerHTML= `${event.target.id} <input name="${id}[]" autocomplete="off" style="display:none" value="${event.target.id}">`

    selectionNode.appendChild(selected)
    console.log(selectionNode)
    console.log(selected)


    // var list = document.getElementById('parent');
    // if(list.hasChildNodes()) {

    //     while (list.firstChild) {
    //         list.removeChild(list.lastChild);
    //     }

    // }

}

function removeFromSelection(event) {
    var id = event.target.id
    var param = event.target.myParam
    console.log(id)
    var item = document.getElementById(id);
    console.log(item)
    var mySelection = document.getElementById(param);
    console.log(mySelection)

    mySelection.removeChild(item);
    
}

    

    

    




window.showBox = showBox
window.myFunction = myFunction
window.removeFromSelection = removeFromSelection
window.selectItem = selectItem


