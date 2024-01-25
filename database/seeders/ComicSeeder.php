<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_comic = config("comics");

        foreach ($array_comic as $comic_item) {
            $new_comic = new Comic();
            $new_comic->title = $comic_item["title"];
            $new_comic->description = $comic_item["description"];
            $new_comic->type = $comic_item["type"];
            $new_comic->image = $comic_item["thumb"];
            $new_comic->price = $comic_item["price"];
            $new_comic->save();
        }
    }
}
