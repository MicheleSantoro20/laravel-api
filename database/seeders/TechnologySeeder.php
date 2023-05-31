<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $technologies = ['Elettrica','Meccanica','Medica','Trasporto'];

            foreach($technologies as $technology){
                $newTechnology = new Technology();
                $newTechnology->name = $technology;
                $newTechnology->slug = Str::slug($technology,'-');
                $newTechnology->save();
        };
    }   
}
