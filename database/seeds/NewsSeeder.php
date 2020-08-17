<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('news')->insert($this->getData());
    }

    private function getData(): array {
        $data = [];
        $faker = \Faker\Factory::create('ru_RU');

        for ($i = 0; $i < 60; $i++) {
            $data[] = [
                'title' => $faker->sentence(rand(3, 10)),
                'slug' => $faker->slug(rand(3, 10)),
                'text' => $faker->realText(rand(100, 200))
            ];
        }

        return $data;
    }
}
