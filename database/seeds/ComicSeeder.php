<?php

use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ComicSeeder::class);
        $comics = config('comics');

        foreach($comics as $comic){
            $new_comic = new Comic();
            $new_comic-> fill($comic);
        }
    }
}
