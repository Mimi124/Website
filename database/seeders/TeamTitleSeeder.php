<?php

namespace Database\Seeders;

use App\Models\SectionTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        SectionTitle::insert([
            [
                'key' => 'team_title',
                'value' => 'The Ministers'
            ],
            [
                'key' => 'team_subtitle',
                'value' => 'Dedicated & Experienced Team Leaders'
            ],

        ]);
    }
}
