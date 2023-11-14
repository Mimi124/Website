<?php

namespace Database\Seeders;

use App\Models\SectionTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalleryTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SectionTitle::insert([
            [
                'key' => 'gallery_title',
                'value' => 'Photo Gallery'
            ],
            [
                'key' => 'gallery_subtitle',
                'value' => 'All'
            ],

        ]);
    }
}
