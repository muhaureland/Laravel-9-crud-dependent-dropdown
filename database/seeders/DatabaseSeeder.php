<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use App\Models\Satuan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Satuan::create([
            'nama'      => 'qweasd',
            'category_id'     => 1,
            'course_id'  => 2,
            'jumlah'  => '0832435'
        ]);

        Category::create(
            ['nama'      => 'online']
        );
        Category::create(
            ['nama'      => 'offline']
        );

        Course::create(
            [
                'nama'      => 'Laravel for Beginners',
                'category_id'     => 1
            ]
        );
        Course::create(
            [
                'nama'      => 'CodeIgniter 4: Build a Complete Web Application from Scratch',
                'category_id'     => 2
            ]
        );
        Course::create(
            [
                'nama'      => 'JavaScript: The Advanced Concepts (2021)',
                'category_id'     => 1
            ]
        );
        Course::create(
            [
                'nama'      => 'Learning Alpine.JS',
                'category_id'     => 1
            ]
        );
        Course::create(
            [
                'nama'      => 'qweasd',
                'category_id'     => 2
            ]
        );
    }
}
