<x-layout>

  <form action="/works" method="POST">
    @csrf

    <div class="container mx-auto">

      <x-form-card>
        <x-slot:heading>Tags</x-slot:heading>
    
        <x-rating-card>Rating</x-rating-card>
        <x-warning-card>Archive Warnings</x-warning-card>
        <x-dynamic name='relationships'>Relationships</x-dynamic>
        {{-- <x-dynamic name='fandoms'>Fandoms</x-dynamic>
        <x-dynamic name='characters'>Characters</x-dynamic>
        <x-dynamic name='additional-tags'>Additional Tags</x-dynamic> --}}
      </x-form-card>
    
    
      <x-form-card>
        <x-slot:heading>Preface</x-slot:heading>
       
        
        <x-not-dynamic id='work_title'>Work Title</x-not-dynamic>
        <x-not-dynamic id="summary" type='textarea'>Summary</x-not-dynamic>
    
        <div class="flex row ui-widget justify-between my-6 px-12 mx-6">
          <div>
            <h2>Notes</h2>     
          </div>
          <div>
            <x-form-notes id="start-notes" notes="start-notes-box">
              <x-slot:where> at the beginning</x-slot:where>
              Notes
            </x-form-notes>
    
            <x-form-notes id="end-notes" notes="end-notes-box">
              <x-slot:where> at the end</x-slot:where>
              End Notes
            </x-form-notes>     
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
        <x-not-dynamic id='body' type='textarea'>Work Text</x-not-dynamic>
        
      </x-form-card>
  
  
          <button type='submit' class="">Submit</button>

    
    
    </div>
  
    
        

  </form>

  

  
 






</x-layout>















  
  
   
 
