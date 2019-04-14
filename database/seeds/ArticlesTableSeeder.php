<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquents\Model;
use App\Eloquents\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            $article        = new Article;
            $article->title = '記事タイトル' . $i;
            $article->body  = '記事本文' . $i;
            $article->save();
        }
    }
}
