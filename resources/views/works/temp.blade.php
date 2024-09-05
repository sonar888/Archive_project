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
          </div>
  
            <div id="warnings" class="bg-light" >
              <div><input type="checkbox" id="1" value="not-to-use" name="warnings[]">
              <label for="1">Choose Not To Use Archive Warnings</label></div>
  
              <div><input type="checkbox" id="2" value="graphic-violence" name="warnings[]" >
              <label for="2">Graphic Depiction Of Violence</label></div>
  
              <div><input type="checkbox" id="3" value="major-death" name="warnings[]" >
              <label for="3">Major Character Death</label></div>
  
              <div><input type="checkbox" id="4" value="no-warnings" name="warnings[]" >
              <label for="4">No Archive Warnings Apply</label></div>
            </div>
            <x-forms.error></x-forms.error>
  
            {{-- <label for="cars">Choose a car:</label>
            <select name="cars" id="cars" multiple>
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="opel">Opel</option>
              <option value="audi">Audi</option>
            </select> --}}
  
            {{-- https://medium.com/@yangcar/validation-for-a-multiple-checkboxes-question-in-form-bf69e73cf13c
            <select 
                name="zones[]" 
                class="selectpicker" 
                data-title="Select All That Apply" 
                data-style="form-control" 
                id="zones" multiple>
                <option type='checkbox' value="3328">California</option>
                <option value="3334">Florida</option>
                <option value="3373">Texas</option>
            </select> --}}
  
  
            {{-- <div style="position: relative;">
              <div style="background: white; position: relative;  z-index: 10;">
                  <input type="checkbox" id="hobby1" name="hobby">
                  <label for="hobby1">Dance</label>
                  <input type="checkbox" id="hobby2" name="hobby">
                  <label for="hobby2">Writing</label>
                  <br />
                  <input type="checkbox" id="hobby3" name="hobby">
                  <label for="hobby3">Painting</label>
                  <input type="checkbox" id="hobby4" name="hobby">
                  <label for="hobby4">Cooking</label>
              </div>
              <input type="checkbox" id="hidden_checkbox" name="hidden_checkbox"
                  style="position: absolute; bottom: 0px; left: 0;" required>
          </div> --}}
  
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
  
      <div id="associations" class="container bg-light py-7 px-7 mx-auto my-3">
        <h2>Associations</h2>
        <div>
          <label for="multiple-chapters"><input type="checkbox" name="multiple-chapters" id="multiple-chapters" onclick="showNoteBox( 'chapters', 'multiple-chapters')">This Work has multiple chapters</label>
        </div>
  
        <div style="display:none" id="chapters" >
          <div>
           <p>Chapter 1 of</p> <span><input type="text" value="?" name="chapter-count"></span> 
           <p>Chapter title</p> <span><input type="text" name="chapter-title" ></span> 
          </div>
        </div>
  
      </div>
  
      <div id="work" class='container bg-light py-7 px-7 mx-auto my-3'>
        <h2>Work Text</h2>
        <textarea name="chapter" id="" cols="30" rows="10" value="this is my new chapter yolo"></textarea><x-forms.error></x-forms.error>
  
      </div>
  
      <x-forms.button>Submit</x-forms.button>
  
    </form>
    
  
  
  </x-layout>
  
  