import './bootstrap';


console.log('hello world')

function showBox(notes, id) {
  var checkBox = document.getElementById(id)
  var text = document.getElementById(notes)

  if(checkBox.checked) {
    text.style.display = "block";
  } else {
    text.style.display = "none";
  }

  // console.log(checkBox, text)
}


window.showBox = showBox


