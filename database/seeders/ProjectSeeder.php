<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {

            $new_project = new Project();
            $new_project->name = $faker->name();
            $new_project->type = $faker->name();
            $new_project->admin = $faker->name();
            $new_project->bio = $faker->paragraph();
            $new_project->thumb = ('	
            https://api.lorem.space/image/movie?w=150&amp;amp;amp;amp;h=220');
            $new_project->save();
        }
    }
}
