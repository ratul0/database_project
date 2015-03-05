<?php
class ConfigTableSeeder extends Seeder
{
    public function run()
    {
        $configs = [
            [
                'key' => 'SITE_NAME',
                'value' => 'SUST Admission 2015-16',
                'options' => '',
                'title' => 'Site Name',
                'description' => '',
                'type' => 'Textbox',
                'sort' => '1',
                'visible' => 'Yes',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s')
            ],
            [
                'key' => 'SITE_META_KEYS',
                'value' => 'SUST Admission 2015-16',
                'options' => '',
                'title' => 'Site Default Meta Keys',
                'description' => '',
                'type' => 'Textarea',
                'sort' => '1',
                'visible' => 'Yes',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s')
            ],
            [
                'key' => 'SITE_META_DESC',
                'value' => 'SUST Admission 2015-16',
                'options' => '',
                'title' => 'Site Default Meta Keys',
                'description' => '',
                'type' => 'Textbox',
                'sort' => '1',
                'visible' => 'Yes',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s')
            ],
            [
                'key' => 'MAX_IMAGE_WIDTH',
                'value' => '800',
                'options' => '',
                'title' => 'Max Image Width',
                'description' => '',
                'type' => 'Textbox',
                'sort' => '1',
                'visible' => 'Yes',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s')
            ],
            [
                'key' => 'MAX_IMAGE_HEIGHT',
                'value' => '600',
                'options' => '',
                'title' => 'Max Image Height',
                'description' => '',
                'type' => 'Textbox',
                'sort' => '1',
                'visible' => 'Yes',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s')
            ],
            [
                'key' => 'MAX_THUMB_WIDTH',
                'value' => '120',
                'options' => '',
                'title' => 'Max Thumbnail Width',
                'description' => '',
                'type' => 'Textbox',
                'sort' => '1',
                'visible' => 'Yes',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s')
            ],
            [
                'key' => 'MAX_THUMB_HEIGHT',
                'value' => '200',
                'options' => '',
                'title' => 'Max Thumbnail Height',
                'description' => '',
                'type' => 'Textbox',
                'sort' => '1',
                'visible' => 'Yes',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s')
            ],
            [
                'key' => 'LISTING_PER_PAGE',
                'value' => '10',
                'options' => '',
                'title' => 'Listing Per Page',
                'description' => '',
                'type' => 'Textbox',
                'sort' => '1',
                'visible' => 'Yes',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s')
            ],
            [
                'key' => 'SITE_EMAIL_ADDRESS',
                'value' => 'admission@sust.edu',
                'options' => '',
                'title' => 'Default Email Address',
                'description' => 'Default email address of the admin',
                'type' => 'Textbox',
                'sort' => '1',
                'visible' => 'Yes',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s')
            ],
            [
                'key' => 'ONLINE',
                'value' => 'Yes',
                'options' => '',
                'title' => 'Website Online',
                'description' => '',
                'type' => 'Boolean',
                'sort' => '1',
                'visible' => 'Yes',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s')
            ],
            [
                'key' => 'SLOGAN',
                'value' => 'Shahjalal University of Science & Technology',
                'options' => '',
                'title' => 'Site Slogan',
                'description' => '',
                'type' => 'Textbox',
                'sort' => '1',
                'visible' => 'Yes',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s')
            ],
            [
                'key' => 'SITE_START_YEAR',
                'value' => '2014',
                'options' => '',
                'title' => 'Site Start Year',
                'description' => '',
                'type' => 'Textbox',
                'sort' => '1',
                'visible' => 'Yes',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s')
            ],
            [
                'key' => 'NOTICE',
                'value' => 'ASDasddas',
                'options' => '',
                'title' => 'Global Notice',
                'description' => '',
                'type' => 'Textarea',
                'sort' => '1',
                'visible' => 'Yes',
                'created_at' => date('Y-m-d H-i-s'),
                'updated_at' => date('Y-m-d H-i-s')
            ]


        ];

        DB::table('config')->insert($configs);
    }
}