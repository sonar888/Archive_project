<?php

namespace Database\Factories;

use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chapter>
 */
class ChapterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> 'Chapter title',
            'work_id'=> 4,
            'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae mi at lorem congue ornare. Aenean malesuada ullamcorper faucibus. Praesent consequat, mauris nec finibus dictum, risus lorem placerat arcu, quis rutrum libero nibh placerat lorem. Nulla gravida, massa non commodo rhoncus, arcu mauris porta dolor, eu tempor dolor lectus vestibulum erat. Vestibulum orci lorem, interdum id suscipit vel, laoreet ac purus. Ut at lacus sollicitudin, pellentesque turpis non, elementum dui. Mauris nec urna rutrum, varius dolor sit amet, elementum tellus. Curabitur eget odio condimentum, fringilla dui nec, pretium enim. Donec vitae elit non velit pretium interdum ut non felis. Suspendisse potenti. Nam vestibulum, justo sit amet tempus blandit, elit justo maximus dolor, sit amet sollicitudin ipsum dolor eu erat. Ut pulvinar varius sapien, eu consequat nisi rhoncus vitae. Curabitur feugiat faucibus purus eget auctor. Donec sit amet mattis leo, sit amet ullamcorper felis. Phasellus interdum non mauris eu varius.'
            
        ];
    }
}
