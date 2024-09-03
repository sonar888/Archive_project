<x-layout>

  <h1>Post New Work</h1>
  
  <form action="/works" method="POST">
    @csrf


    <div id="tags" class="container bg-light py-7 px-7 mx-auto my-3">
      <div class="bg-white w-6 h-6" >
        <h2 class="float" >Tags</h2>
      </div>

      <div class="flex col justify-between ">
        <div class="">
          <div>
            <h3 for="rating">Rating</h3>
          </div>
          <div><h3 for="warnings">Archive Warning</h3></div>
          <div><h3 for="fandoms">Fandoms</h3></div>
          <div><h3 for="">Categories</h3></div>
          <div><h3 for="">Relationships</h3></div>
          <div><h3 for="">Characters</h3></div>
          <div><h3 for="">Additional Tags</h3></div>
        </div>
        <div>
          <div>
              <select id="rating" name="rating">
                <option value="not-rated">Not rated</option>
                <option value="general-audiences">General Audiences</option>
                <option value="teen-and-up">Teen And Up Audiences</option>
                <option value="mature">Mature</option>
                <option value="explicit">Explicit</option>
              </select>
          </div>

          <div id="warnings" class="bg-light">
            <div><input type="checkbox" id="1" name="not-to-use" value="Choose Not To Use Archive Warnings" >
            <label for="1">Choose Not To Use Archive Warnings</label></div>

            <div><input type="checkbox" id="2" name="graphic-violence" value="Graphic Depiction Of Violence" >
            <label for="2">Graphic Depiction Of Violence</label></div>

            <div><input type="checkbox" id="3" name="major-death" value="Major Character Death" >
            <label for="3">Major Character Death</label></div>

            <div><input type="checkbox" id="4" name="no-warnings" value="No Archive Warnings Apply" >
            <label for="4">No Archive Warnings Apply</label></div>
          </div>
          <x-forms.error></x-forms.error>

          <div>
            <input id="fandoms" name="fandoms" type="text">
            <x-forms.error></x-forms.error>
          </div>
          

          <div>
            <input id="categories" name='categories' type="text">
            <x-forms.error></x-forms.error>
          </div>

          <div>
            <input id="relationships"  name='relationships' type="text">
            <x-forms.error></x-forms.error>
          </div>

          <div>
            <input id="characters"  name='characters' type="text">
            <x-forms.error></x-forms.error>
          </div>

          <div>
            <input id="tags"  name='tags' type="text">
            <x-forms.error></x-forms.error>
          </div>

        </div>

      </div>

    </div>

    <div id="preface" class="container bg-light py-7 px-7 mx-auto my-3">
      <h2>Preface</h2>
      <div class="flex justify-between col">
        <div>
          <h3>Work Title</h3>
          <h3>Summary</h3>
          <h3>Notes</h3>

        </div>
  
        <div>
          <div><input name="title" type="text" value="This is a title for testing"><x-forms.error></x-forms.error></div>
          
          <div><textarea name="summary" id="" cols="30" rows="10" value='some sumary text for testing'></textarea><x-forms.error></x-forms.error></div>

          <div>
            <div>
              <label for="notes-start"><input type="checkbox" id='myCheck' onclick="showNoteBox('start-notes','myCheck')"> at the beginning</label>
            </div>
            
            <div style="display:none" id="start-notes">
              <h3>Notes</h3>
              <textarea  name="start-notes" id="notes-start" cols="30" rows="10" value="start notes go here"></textarea><x-forms.error></x-forms.error>
            </div>
           
            <script>
              function showNoteBox($notes, $id) {
                var checkBox = document.getElementById($id)
                var text = document.getElementById($notes)
            
                if(checkBox.checked) {
                  text.style.display = "block";
                } else {
                  text.style.display = "none";
                }
              }
            
            </script>


            <div>
              <label for="notes-end"><input type="checkbox" id='myCheck2' onclick="showNoteBox('end-notes','myCheck2')"/>at the end</label>
            

            </div>
            
            <div  style="display:none" id="end-notes">
              <h3>End Notes</h3>
              <textarea name="end-notes"   cols="30" rows="10" value="my end notes "></textarea><x-forms.error></x-forms.error>
            </div>
            
          </div>
  
        </div>

      </div>
      

    </div>

    <div id="privacy">

    </div>

    <div id="work" class='container bg-light py-7 px-7 mx-auto my-3'>
      <h2>Work Text</h2>
      <textarea name="chapter" id="" cols="30" rows="10" value="this is my new chapter yolo"></textarea><x-forms.error></x-forms.error>

    </div>

    <x-forms.button>Submit</x-forms.button>

  </form>
  


</x-layout>

