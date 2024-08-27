<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Chapter;
use App\Models\Work;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'work_id'=> Work::factory(),
            'author_id'=>User::factory(),
            'chapter_id'=>Chapter::factory(),
            'comment'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae mi at lorem congue ornare. Aenean malesuada ullamcorper faucibus. Praesent consequat, mauris nec finibus dictum, risus lorem placerat arcu, quis rutrum libero nibh placerat lorem. Nulla gravida, massa non commodo rhoncus, arcu mauris porta dolor, eu tempor dolor lectus vestibulum erat. Vestibulum orci lorem, interdum id suscipit vel, laoreet ac purus. Ut at lacus sollicitudin, pellentesque turpis non, elementum dui. Mauris nec urna rutrum, varius dolor sit amet, elementum tellus. Curabitur eget odio condimentum, fringilla dui nec, pretium enim. Donec vitae elit non velit pretium interdum ut non felis. Suspendisse potenti. Nam vestibulum, justo sit amet tempus blandit, elit justo maximus dolor, sit amet sollicitudin ipsum dolor eu erat. Ut pulvinar varius sapien, eu consequat nisi rhoncus vitae. Curabitur feugiat faucibus purus eget auctor.'
            
        ];
    }
}


