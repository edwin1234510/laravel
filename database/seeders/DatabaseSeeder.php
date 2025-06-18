<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\category;
use App\Models\image;
use App\Models\post;
use App\Models\product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\Attributes\PostCondition;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        post::factory(78)->create()->each(
            function(post $post){
                image::factory()->create([
                    'imageable_id'=>$post->id,
                    'imageable_type'=>post::class
                ]);
            }
        );
        category::factory(10)->create();
        
        product::factory(50)->create()->each(
            function(product $product){
                image::factory(4)->create([
                    'imageable_id'=> $product->id,
                    'imageable_type'=>product::class,
                ]);
            }
        );
    }
}
