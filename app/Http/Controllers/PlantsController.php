<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlantsController extends Controller
{
    public function index(){

        $plants= [[
            'id'=>1,
            'name'=>'Strawberry',
            'description'=>'Strawberries are renowned for their succulent and sweetly flavorsome fruits.
            Strawberries are commonly grown in temperate regions. In warmer regions, they are often grown as annuals.',
            'age'=>10,
            'url_image'=>env('APP_URL').'/storage/strawberry.png',
            'soil_ph'=>[
                'minimum'=>5.5,
                'maximum'=>6.5
            ],
            'fertilizer_quantity'=>[
                'value'=>1,
                'type'=>'inch'
            ],
            
            'repeat_fertilizing'=>'Every 2 week',
            'sunlight '=>[
                'minimum'=>0,
                'maximum'=>0
            ],
            'water_quantity'=>[
                'value'=>1,
                'type'=>'inch'
            ],
            
            'soil_moister'=>[
                'minimum'=>40,
                'maximum'=>60
            ],
            
            'repeat_watering'=>'Every 3 days',
            'temperature'=>[
                'minimum'=>15,
                'maximum'=>25
            ],
            'sunlight '=>[
                'minimum'=>900,
                'maximum'=>999
            ],
            
        ],
        [
            'id'=>2,
            'name'=>'Mint',
            'description'=>'Mentha is a genus of plants in the family Lamiaceae. 
            The mints comprise
           a large group of creeping perennials, with many and varied forms, all characterized by highly aromatic foliage and pinkish flowers. 
           ',
           'age'=>12,
           'url_image'=>env('APP_URL').'/storage/mint.png',
            'soil_ph'=>[
                'minimum'=>6 ,
                'maximum'=>7.5
            ],
            'fertilizer_quantity'=>[
                'value'=>2,
                'type'=>'inch'
            ],
            
            'repeat_fertilizing'=>'Every month',
            'water_quantity'=>[
                'value'=>2 ,
                'type'=>'inch'
            ],
            
            'soil_moister'=>[
                'minimum'=>35 ,
                'maximum'=>null
            ],
            
            'repeat_watering'=>'Every 3 days',
            'temperature'=>[
                'minimum'=>20 ,
                'maximum'=>30 
            ],
            'sunlight '=>[
                'minimum'=>900,
                'maximum'=>999
            ]
            
        ],
        [
            'id'=>3,
            'name'=>'Basil',
            'description'=>'Ocimum basilicum 
            is a strongly aromatic herb with leaves producing a clovelike flavor .Common or sweet basil has oval, bright-green leaves and whorls of small, white flowers from summer. It originates in tropical Asia, so should be grown as a tender annual.
           ',
           'age'=>15,
           'url_image'=>env('APP_URL').'/storage/basil.png',
            'soil_ph'=>[
                'minimum'=>5.1 ,
                'maximum'=>8.5
            ],
            'fertilizer_quantity'=>[
                'value'=>1 ,
                'type'=>'inch'
            ],
            
            'repeat_fertilizing'=>'Every month',
            'water_quantity'=>[
                'value'=>1 ,
                'type'=>'inch'
            ],
            
            'soil_moister'=>[
                'minimum'=>40,
                'maximum'=>null
            ],
            
            'repeat_watering'=>'Every week',
            'temperature'=>[
                'minimum'=>26 ,
                'maximum'=>32 
            ],
            'sunlight '=>[
                'minimum'=>900,
                'maximum'=>999
            ],
            
        ]];
        return JsonResource::collection($plants);
    }
}
