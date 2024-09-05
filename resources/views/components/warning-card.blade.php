
<div {{ $attributes->merge(["class"=>"flex row ui-widget justify-between my-6 px-12 mx-6"]) }}>
    <div>
        <label for="rating">{{ $slot }}</label>
    </div>
    <div id="warnings" class="bg-light">
        <div><input type="checkbox" id="1" value="not-to-use" name="warnings[]">
            <label for="1">Choose Not To Use Archive Warnings</label></div>
        
            <div><input type="checkbox" id="2" value="graphic-violence" name="warnings[]" >
            <label for="2">Graphic Depiction Of Violence</label></div>
        
            <div><input type="checkbox" id="3" value="major-death" name="warnings[]" >
            <label for="3">Major Character Death</label></div>
        
            <div><input type="checkbox" id="4" value="no-warnings" name="warnings[]" >
            <label for="4">No Archive Warnings Apply</label></div>     
    </div>

</div>