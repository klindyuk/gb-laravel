<?php

use Illuminate\Database\Seeder;

class NewsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories_to_news')->insert($this->getData());
    }

    private function getData(): array {
        $data = [];
        $faker = \Faker\Factory::create('ru_RU');

        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'news_id' => rand(1, 60),
                'category_id' => rand(1, 5)
            ];
        }

        return $data;
    }
}
