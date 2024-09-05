<div {{ $attributes->merge(["class"=>"flex row ui-widget justify-between my-6 px-12 mx-6"]) }}>
    <div>
        <label for="rating">{{ $slot }}</label>
    </div>
    <div>
        <select id="rating" name="rating" class="px-1">
          <option value="not-rated">Not rated</option>
          <option value="general-audiences">General Audiences</option>
          <option value="teen-and-up">Teen And Up Audiences</option>
          <option value="mature">Mature</option>
          <option value="explicit">Explicit</option>
        </select>
    </div>

</div>
