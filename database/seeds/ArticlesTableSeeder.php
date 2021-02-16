<?php

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Generator as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 20 ; $i++) {

        $newArticle = new Article();

        $newArticle->title = $faker->words(5, true);
        $newArticle->subtitle = $faker->sentence(5);
        $newArticle->blog_content = $faker->paragraphs(3, true);
        $newArticle->author = $faker->name();
        $newArticle->date_pubblication = $faker->dateTime();

        $newArticle->save();
      }
    }
}
