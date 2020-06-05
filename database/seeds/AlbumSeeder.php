
<?php

use App\Album;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // faker library instantiëren, om te gebruiken
        $faker = Faker\Factory::create();

        // nieuwe instantie van Room-model
        $album = new Album();

        // willekeurig nummer en naam
        $album->title = $faker->word();
        $album->artist =  $faker->firstName().' '.$faker->lastName();
        $album->description = $faker->paragraph();
        $album->released =  $faker->date() .' '. $faker->time();
        $album->created_at = time();
        $album->img_url = $faker->imageUrl();

        // bewaren
        $album->save();
    }
}







