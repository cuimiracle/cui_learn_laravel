<?php
use Illuminate\Database\Seeder;
use App\Comment;

class CommentTableSeeder extends Seeder{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->delete();

        for ($i=0; $i < 30; $i++) {
            Comment::create([
                'nickname'   => 'nickname '.$i,
                'email'    => 'nickname_'.$i.'@126.com',
                'website'    => 'www.baidu'.$i.'.com',
                'content'   => 'content_'.$i,
                'page_id' => $i%10 ? $i%10 : 10
            ]);
        }
    }
}