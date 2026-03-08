<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'site_name', 'value' => 'MN — A Space for Inquisitive Minds', 'group' => 'general'],
            ['key' => 'meta_description', 'value' => 'MN is a premium editorial platform dedicated to the intersection of philosophy, technology, and culture.', 'group' => 'general'],
            ['key' => 'logo', 'value' => 'assets/branding/logo.svg', 'group' => 'branding'],
            ['key' => 'favicon', 'value' => 'assets/branding/favicon.svg', 'group' => 'branding'],
            ['key' => 'contact_email', 'value' => 'hello@mn-blog.com', 'group' => 'general'],
            ['key' => 'footer_text', 'value' => '© 2024 MN Editorial. All rights reserved.', 'group' => 'general'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
