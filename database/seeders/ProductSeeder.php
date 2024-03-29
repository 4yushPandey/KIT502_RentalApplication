<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('products')->insert(
        //     [
        //         'title' => 'HP ProBook',
        //         'brand' => 'HP',
        //         'per_hour_rate' => '10',
        //         'os' => 'Windows',
        //         'display_size' => '12.6 inch',
        //         'no_of_usb_ports' => '3',
        //         'no_of_hdmi_ports' => '2',
        //         'image' => 'img-1.png',
        //         'category' => 'Computer',
        //         'user_id' => '1',
        //         'ram' => '8GB',
        //         'security_deposit' => '4',
        //         'insurance_amount' => '2',
        //         'is_rented' => 1,


        //     ]);
        DB::table('products')->insert([
            [
                'title' => 'HP ProBook',
                'brand' => 'HP',
                'per_hour_rate' => '10',
                'os' => 'Windows',
                'display_size' => '12.6 inch',
                'no_of_usb_ports' => '3',
                'no_of_hdmi_ports' => '2',
                'image' => 'img-1.png',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '8GB',
                'security_deposit' => '4',
                'insurance_amount' => '2',

            ],
            [
                'title' => 'HP EliteBook',
                'brand' => 'HP',
                'per_hour_rate' => '15',
                'os' => 'Windows',
                'display_size' => '12.6 inch',
                'no_of_usb_ports' => '2',
                'no_of_hdmi_ports' => '2',
                'image' => 'img-2.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '6GB',
                'security_deposit' => '5',
                'insurance_amount' => '1',

            ],
            [
                'title' => 'HP Probook 450 G4',
                'brand' => 'HP',
                'per_hour_rate' => '11',
                'os' => 'Windows',
                'display_size' => '15.6 inch',
                'no_of_usb_ports' => '3',
                'no_of_hdmi_ports' => '2',
                'image' => 'img-3.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '10GB',
                'security_deposit' => '5',
                'insurance_amount' => '3',

            ],
            [
                'title' => 'HP Pavilion x360',
                'brand' => 'HP',
                'per_hour_rate' => '13',
                'os' => 'Linux',
                'display_size' => '15.6 inch',
                'no_of_usb_ports' => '3',
                'no_of_hdmi_ports' => '2',
                'image' => 'img-4.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '16GB',
                'security_deposit' => '6',
                'insurance_amount' => '3',

            ],
            [
                'title' => 'HP NoteBood',
                'brand' => 'HP',
                'per_hour_rate' => '13',
                'os' => 'Linux',
                'display_size' => '12.6 inch',
                'no_of_usb_ports' => '2',
                'no_of_hdmi_ports' => '1',
                'image' => 'img-5.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '8GB',
                'security_deposit' => '3',
                'insurance_amount' => '2',

            ],
            [
                'title' => 'Dell inspiron 15',
                'brand' => 'Dell',
                'per_hour_rate' => '15',
                'os' => 'Linux',
                'display_size' => '12.6 inch',
                'no_of_usb_ports' => '2',
                'no_of_hdmi_ports' => '1',
                'image' => 'img-6.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '12GB',
                'security_deposit' => '6',
                'insurance_amount' => '3',

            ],
            [
                'title' => 'Dell inspiron latitude',
                'brand' => 'Dell',
                'per_hour_rate' => '12',
                'os' => 'Linux',
                'display_size' => '12.6 inch',
                'no_of_usb_ports' => '2',
                'no_of_hdmi_ports' => '2',
                'image' => 'img-7.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '6GB',
                'security_deposit' => '3',
                'insurance_amount' => '2',

            ],
            [
                'title' => 'Dell inspiron 5136',
                'brand' => 'Dell',
                'per_hour_rate' => '10',
                'os' => 'Windows',
                'display_size' => '15.6 inch',
                'no_of_usb_ports' => '3',
                'no_of_hdmi_ports' => '2',
                'image' => 'img-8.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '4GB',
                'security_deposit' => '6',
                'insurance_amount' => '3',

            ],
            [
                'title' => 'Linux Laptop',
                'brand' => 'Linux',
                'per_hour_rate' => '10',
                'os' => 'Linux',
                'display_size' => '15.6 inch',
                'no_of_usb_ports' => '3',
                'no_of_hdmi_ports' => '2',
                'image' => 'img-9.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '12GB',
                'security_deposit' => '6',
                'insurance_amount' => '3',

            ],
            [
                'title' => 'Toshiba Satellite c660',
                'brand' => 'Toshiba',
                'per_hour_rate' => '10',
                'os' => 'Windows',
                'display_size' => '15.6 inch',
                'no_of_usb_ports' => '3',
                'no_of_hdmi_ports' => '2',
                'image' => 'img-10.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '8GB',
                'security_deposit' => '6',
                'insurance_amount' => '3',

            ],
            [
                'title' => 'Toshiba Satellite Pro',
                'brand' => 'Toshiba',
                'per_hour_rate' => '12',
                'os' => 'Windows',
                'display_size' => '15.6 inch',
                'no_of_usb_ports' => '3',
                'no_of_hdmi_ports' => '2',
                'image' => 'img-11.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '16GB',
                'security_deposit' => '4',
                'insurance_amount' => '2',

            ],
            [
                'title' => 'Lenovo IP3',
                'brand' => 'Lenovo',
                'per_hour_rate' => '13',
                'os' => 'Linux',
                'display_size' => '15.6 inch',
                'no_of_usb_ports' => '3',
                'no_of_hdmi_ports' => '2',
                'image' => 'img-12.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '8GB',
                'security_deposit' => '5',
                'insurance_amount' => '3',

            ],
            [
                'title' => 'ThinkPad L15',
                'brand' => 'Lenovo',
                'per_hour_rate' => '16',
                'os' => 'Windows',
                'display_size' => '15.6 inch',
                'no_of_usb_ports' => '3',
                'no_of_hdmi_ports' => '2',
                'image' => 'img-13.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '8GB',
                'security_deposit' => '5',
                'insurance_amount' => '3',

            ],
            [
                'title' => 'Asus VivoBook',
                'brand' => 'Asus',
                'per_hour_rate' => '14',
                'os' => 'Windows',
                'display_size' => '15.6 inch',
                'no_of_usb_ports' => '3',
                'no_of_hdmi_ports' => '2',
                'image' => 'img-14.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '12GB',
                'security_deposit' => '3',
                'insurance_amount' => '2',

            ],
            [
                'title' => 'Asus X415',
                'brand' => 'Asus',
                'per_hour_rate' => '17',
                'os' => 'Linux',
                'display_size' => '15.6 inch',
                'no_of_usb_ports' => '3',
                'no_of_hdmi_ports' => '2',
                'image' => 'img-15.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '8GB',
                'security_deposit' => '7',
                'insurance_amount' => '4',

            ],
            [
                'title' => 'Acer Aspire 5',
                'brand' => 'Acer',
                'per_hour_rate' => '13',
                'os' => 'Windows',
                'display_size' => '15.6 inch',
                'no_of_usb_ports' => '3',
                'no_of_hdmi_ports' => '2',
                'image' => 'img-16.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '8GB',
                'security_deposit' => '7',
                'insurance_amount' => '4',

            ],
            [
                'title' => 'MacBood Air 3',
                'brand' => 'Apple',
                'per_hour_rate' => '18',
                'os' => 'Mac',
                'display_size' => '12.6 inch',
                'no_of_usb_ports' => '3',
                'no_of_hdmi_ports' => '2',
                'image' => 'img-17.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '32GB',
                'security_deposit' => '8',
                'insurance_amount' => '5',

            ],
            [
                'title' => 'MacBook Pro',
                'brand' => 'Apple',
                'per_hour_rate' => '15',
                'os' => 'Mac',
                'display_size' => '12.6 inch',
                'no_of_usb_ports' => '2',
                'no_of_hdmi_ports' => '2',
                'image' => 'img-18.jpg',
                'category' => 'Computer',
                'user_id' => '1',
                'ram' => '48GB',
                'security_deposit' => '7',
                'insurance_amount' => '4',

            ]
        ]);
    }
}
