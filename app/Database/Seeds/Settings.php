<?php

namespace App\Database\Seeds;

use App\Models\Settings as ModelsSettings;
use CodeIgniter\Database\Seeder;

class Settings extends Seeder
{
    public function run()
    {
        $data = [
            'site_title' => 'Green Park',
            'site_subtitle' => 'Green Park',
            'site_developer' => 'Monir Saikat',
            'site_about_us' => 'About Us',
            'site_phone_no' => '01309956223',
            'site_email' => 'monirsaikat1@gmail.com',
            'site_address' => 'Rangpur, Bangladesh',
        ];

        $setting = new ModelsSettings();
        $setting->insert($data);
    }
}
