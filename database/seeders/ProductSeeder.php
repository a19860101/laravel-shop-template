<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('tag_product')->truncate();
        Product::truncate();
        Category::truncate();
        Tag::truncate();
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        // return;
        Category::create(['title'=>'露營桌','slug'=>'table']);
        Category::create(['title'=>'野營椅','slug'=>'chair']);
        Category::create(['title'=>'露營床','slug'=>'bed']);
        Category::create(['title'=>'拖車','slug'=>'car']);
        Category::create(['title'=>'背包及登山杖','slug'=>'backpack']);
        Category::create(['title'=>'生活百貨','slug'=>'生活百貨']);

        // for($i=0;$i<30;$i++){
        //     Product::create([
        //         'title' => Str::random(10),
        //         'cover' => 'https://picsum.photos/id/'.rand(1,100).'/500',
        //         'desc' => Str::random(100),
        //         'category_id'=> rand(1,9),
        //         'price' => rand(100,9999),
        //         'sale' => rand(100,9999),
        //     ]);
        // }
        // Tag::create(['title' => 'Sony',]);
        // Tag::create(['title' => 'Panasonic',]);
        // Tag::create(['title' => 'LG',]);
        // Tag::create(['title' => 'Dyson',]);
        // Tag::create(['title' => 'Sharp',]);

        // for($i=0;$i<30;$i++){
        //     DB::table('tag_product')->insert([
        //         'product_id' => $i+1,
        //         'tag_id' => rand(1,5)
        //     ]);
        // }

    }
}
