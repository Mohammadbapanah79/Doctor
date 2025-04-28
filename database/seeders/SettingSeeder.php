<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::query()->insert([
            'contacts' => '09918950741',
            'address' => 'address',
            'instagram' => 'insta.com',
            'telegram' => 'tel.com',
            'facebook' => 'facebook.com',
            'email' => 'email',
            'ad_title' => 'ad_title',
            'ad_text' => 'ad_title',
            'about_title' => 'ad_title',
            'about_text' => 'ad_title',
            'footer_description' => 'ad_title',
            'copy_right' => 'copy',
            'video_size' => 50000,
            'patient_text' => 'ad_title',
            'doctor_text' => 'ad_title',
            'logo' => 'test.png'
        ]);
    }
}
