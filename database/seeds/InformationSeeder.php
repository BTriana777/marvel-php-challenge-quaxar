<?php
use App\Informations;
use Illuminate\Database\Seeder;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Informations::class, 50)->create()->each(function ($info) {
            $info->posts()->save(factory(App\Informations::class)->make());
        });
    }
}
