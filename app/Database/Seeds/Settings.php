<?php

namespace App\Database\Seeds;

use App\Models\Project;
use App\Models\Service;
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
            'site_logo' => 'logo.gif',
            'site_banner' => 'banner.jpg'
        ];

        $projects_data = [
            [
                'title' => 'Nam eu nulla. Donec lobortis purus vel urna. Nunc laoreet lacinia nunc.',
                'details' => 'Nam eu nulla. Donec lobortis purus vel urna. Nunc laoreet lacinia nunc. In volutpat sodales ipsum. Sed vestibulum. Integer in ante. Sed Nunc laoreet lacinia nunc. In volutpat sodales ipsum. Sed vestibulum. Integer in ante. Sed posuere ligula rhoncus erat. Fusce urna dui, sollicitudin ac, pulvinar quis.',
                'is_featured' => true,
            ],
            [
                'title' => 'It is a long established fact that a reader will be',
                'details' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                'is_featured' => false,
            ],
        ];

        $services_data = [
            [
                'title' => 'Nam eu nulla. Donec lobortis',
            ],
            [
                'title' => 'purus vel urna. Nunc laoreet',
            ],
            [
                'title' => 'lacinia nunc. In volutpat sodales',
            ],
            [
                'title' => 'ipsum. Sed vestibulum. Integer in',
            ],
            [
                'title' => 'ante. Sed Nunc laoreet lacinia',
            ],
            [
                'title' => 'nunc. In volutpat sodales ipsum.',
            ],
            [
                'title' => 'Nam eu nulla. Donec lobortis',
            ],
            [
                'title' => 'purus vel urna. Nunc laoreet',
            ],
            [
                'title' => 'lacinia nunc. In volutpat sodales',
            ],
        ];

        $setting = new ModelsSettings();
        $setting->insert($data);

        $proejctModel = new Project();
        $proejctModel->insertBatch($projects_data);

        $serviceModel = new Service();
        $serviceModel->insertBatch($services_data);
    }
}
