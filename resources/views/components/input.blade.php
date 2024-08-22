<div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
    <div class="sm:col-span-3">
      <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">{{ $slot }}</label>
      <div class="mt-2">
        <input {{ $attributes->merge(["class"=>"block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"]) }}>
      </div>
    </div>
</div>