<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use App\Models\Technology;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 5; $i++) {
            $newProject = new Project();
            $newProject->title = $faker->sentence(3);
            $newProject->author = $faker->name();
            $newProject->description = $faker->sentence(7);
            $newProject->content = $faker->paragraph();
            
            $newProject->type_id = rand(1, 5);
            $newProject->save();

            $technologies = Technology::inRandomOrder()->limit(rand(1,3))->pluck('id');
            $newProject->technologies()->attach($technologies);
        }
    }
}
