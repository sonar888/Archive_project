<x-layout>

  <form action="/works" method="POST">
    @csrf

    <div class="container mx-auto">

      <x-form-card>
        <x-slot:heading>Tags</x-slot:heading>
    
          <x-rating-card>Rating</x-rating-card>
          <x-error name='rating'/>

          <x-warning-card>Archive Warnings</x-warning-card>
          <x-error name='warnings'/>
          
          <x-dynamic name='relationships' parent='relationships-parent' selection='relationships-selection'>Relationships</x-dynamic>
          <x-error name='relationships-selection'/>

          <x-dynamic name='fandoms' parent='fandoms-parent' selection='fandoms-selection'>Fandoms</x-dynamic>
          <x-error name='fandoms-selection'/>
          <x-error name='fandoms'/>

          <x-dynamic name='characters' parent='characters-parent' selection='characters-selection'>Characters</x-dynamic>
          <x-error name='characters-selection'/>
        
      </x-form-card>
    
    
      <x-form-card>
        <x-slot:heading>Preface</x-slot:heading>
       
        
          <x-not-dynamic id='work_title'>Work Title</x-not-dynamic>
          <x-error name='work_title'/>

          <x-not-dynamic id="summary" type='textarea'>Summary</x-not-dynamic>
          <x-error name='sumary'/>
      
          <div class="flex row ui-widget justify-between my-6 px-12 mx-6">
            <div>
              <h2>Notes</h2>     
            </div>
            <div>
              <x-form-notes id="start-notes" notes="start-notes-box">
                <x-slot:where> at the beginning</x-slot:where>
                Notes
              </x-form-notes>
              <x-error name='start-notes'/>
      
              <x-form-notes id="end-notes" notes="end-notes-box">
                <x-slot:where> at the end</x-slot:where>
                End Notes
              </x-form-notes> 
              <x-error name='end-notes'/>   

            </div>
          </div>
      </x-form-card>
    
    
      <x-form-card>
        <x-slot:heading>Associations</x-slot:heading>
    
        <x-not-dynamic id='language'>Language</x-not-dynamic>
        Multiple work and series
    
        
      </x-form-card>
    
    
      <x-form-card>
        <x-slot:heading>Work Text</x-slot:heading>
          <x-not-dynamic id='work' type='textarea'>Work Text</x-not-dynamic>
          <x-error name='work'/>
        
      </x-form-card>
  
  
          <button type='submit' class="">Submit</button>

    
    
    </div>
  
    
        

  </form>

  

  
 






</x-layout>















  
  
   
 
