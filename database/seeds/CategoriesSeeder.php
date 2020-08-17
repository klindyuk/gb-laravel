<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert($this->getData());
    }

    private function getData(): array {
        $data = [];
        $faker = \Faker\Factory::create('ru_RU');

        for ($i = 0; $i < 5; $i++) {
            $data[] = [
                'title' => $faker->sentence(rand(2, 3)),
                'slug' => $faker->slug(rand(2, 3)),
                'description' => $faker->realText(rand(100, 200))
            ];
        }

        return $data;
    }
}
