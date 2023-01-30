<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Technology;

class ProjectsTechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 0;
        while($i < 200){
            $project = Project::inRandomOrder()->first();

            $technology_id = Technology::inRandomOrder()->first()->id;

            $project_to_compare = Project::where('id', $project->id)->with(['technology'])->first();

            if(count($project_to_compare->technology) < 3){
                $exist = false;
                foreach($project_to_compare->technology as $tech){
                    if($tech->id == $technology_id) {
                        $exist = true;
                    }
                }
                if(!$exist){
                    $project->technology()->attach($technology_id);
                    $i++;
                }
            }
        }
    }
}
