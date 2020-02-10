<?php

use Illuminate\Database\Seeder;
use App\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channels = Channel::create([
            'name' => 'Laravel 5.8',
            'slug' => str_slug('Laravel 5.8')
        ]);

        $channels = Channel::create([
            'name' => 'VUE 3',
            'slug' => str_slug('VUE 3')
        ]);

        $channels = Channel::create([
            'name' => 'Angular',
            'slug' => str_slug('Angular')
        ]);
    }


}
