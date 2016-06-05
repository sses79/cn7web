<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\News;

class NewsSeeder extends DatabaseSeeder {

	public function run()
	{
		Model::unguard();

		DB::table('news')->delete();

		$news = array(
			['title' => 'section 0', 'imageUrl' => '3d.png', 'content' => 'Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.'],
			['title' => 'section 1', 'imageUrl' => 'compass.png', 'content' => 'Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. ']
		);

		// Loop through each user above and create the record for them in the database
		foreach ($news as $s_news)
		{
			News::create($s_news);
		}

		Model::reguard();
	}
}