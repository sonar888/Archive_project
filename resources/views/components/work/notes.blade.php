@props(["notes" => ""])


@if ($notes === "start")
    <div class="pb-2">
        <h2 class="font-serif text-lg my-2 border-b-2">Notes:</h2>
        <blockquote class="m-3">
            <p class="my-3">These are the start notes</p>
            <x-work.translation></x-work.translation>
        </blockquote>
        <p class="mt-5 mb-2"> (See the end of the work for <a href="" class="underline">other works inspired by this one</a> ) </p> 
        
    </div>

@else

    <div class="px-3 pt-3">
        <h2 class="font-serif text-lg my-3 border-b-2">Notes:</h2>
        <blockquote class="m-3">
            <p class="my-3">These are the end notes</p>
            <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sem dolor, porta quis ante hendrerit, pharetra viverra felis. Ut convallis placerat lorem, sit amet rhoncus sem condimentum quis. Aliquam ac gravida nunc. Donec ut dapibus risus. Proin elementum, neque a aliquam sollicitudin, felis sapien pharetra nisi, non finibus eros mauris a mauris. Phasellus varius mollis libero. Quisque nec elit finibus ipsum vulputate dapibus. Pellentesque rutrum commodo lorem, at scelerisque mi suscipit ac. Suspendisse potenti. Maecenas tempor lacus in lectus rhoncus pellentesque. Morbi mollis dolor enim, vel euismod nisl tempor eu.</p>
        </blockquote>
    </div>
    
@endif