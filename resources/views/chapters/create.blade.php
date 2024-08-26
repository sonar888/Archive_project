<x-layout>
  
    <form method="POST" action="/works/{{ $work->id }}/chapters">
      @csrf
        <x-input type='text' name='title'>Title</x-input>
        <x-input type='text' name='body'>body</x-input>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </form>
      
    
    
    </x-layout>