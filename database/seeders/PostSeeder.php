<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
use App\Models\post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    // PostFactoryクラスで定義した内容にもとづいてダミーデータを5つ生成し、postsテーブルに追加する
      Post::factory()->count(5)->create();
        
    }
    
    
}
