<?php
use Illuminate\Database\Seeder;
use App\Article;

class ArticleTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->delete();

        for ($i=0; $i < 10; $i++) {
            Article::create([
                'title'   => 'Title '.$i,
                'slug'    => 'first-page',
                'body'    => 'Body '.$i,
                'image'   => 'learnlaravel5.com/images/view.jpg ',
                'user_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }

}