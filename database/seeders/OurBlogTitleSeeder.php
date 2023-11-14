<?php

namespace Database\Seeders;

use App\Models\SectionTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurBlogTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SectionTitle::insert([
            [
                'key' => 'ourblog_title',
                'value' => 'Our Blog'
            ],
            [
                'key' => 'ourblog_subtitle',
                'value' => 'Latest Blog & News'
            ],
            [
                'key'=> 'ourblog_description',
                'value'=> 'Stay informed with our latest news updates. From global events to local happenings,
                 explore a diverse range of stories curated to keep you in the know. Dive into current affairs,
                  trends, and noteworthy developments across various domains.'
            ],
            [
                'key'=> 'ourblog_url',
                'value'=> 'http//link'
            ],

        ]);
    }
}
