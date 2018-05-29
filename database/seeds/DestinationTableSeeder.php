<?php

use Illuminate\Database\Seeder;
use App\Destination;

class DestinationTableSeeder extends Seeder
{
    public function run()
    {
        $destinations = [
            [
              'name' => "New York City", 
              'image' => "https://images.pexels.com/photos/700974/pexels-photo-700974.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940", 
              'location' => "United States", 
              'description' =>[
                   "en" => "This is New York City",
                   "fr" => "C'est New York",
                   "de" => "Dies ist New York"
                ]
            ],
            [
              'name' => "Eiffel Tower", 
              'image' => "https://images.pexels.com/photos/5463/people-eiffel-tower-france-landmark.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940", 
              'location' => "United States", 
              'description' => [
                   "en" => "This is the Eiffel Tower",
                   "fr" => "C'est la tour Eiffel.",
                   "de" => "Das ist der Eiffelturm."
                ]
            ]           
        ];

        foreach ($destinations as $destination) {
                Destination::create($destination);
        }
    }
}
