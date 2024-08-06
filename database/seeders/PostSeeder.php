<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $table=new Post();

        $table->content = 'aaaaaa';
        $table->title = 'Prueba';
        $table->category = 'Prueba';
        $table->slug = 'gaas';
        $table->tags = 'prueba';
        $table->author = '1';
        $table->image = '1';
        
        $table->save();
    }
}
