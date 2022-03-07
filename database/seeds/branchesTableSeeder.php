<?php

use App\Branch;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class branchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) { 
           
            $branch = new Branch();
            $branch->test = $faker->boolean(2);
            $branch->owner= $faker->text(10);
            $branch->day= $faker->date('2022/07/02');
            $branch->save();
        }
        
    }
}
