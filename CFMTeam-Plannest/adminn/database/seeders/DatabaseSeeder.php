<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'TechWiz',
                'email' => 'TechWiz@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => '1',
                'description' => null,

                'first_name' => 'Tech',
                'last_name' => 'Wiz',
                'gender' => 'Male',
                'company_name' => 'Plannest',
                'country' => 'Viet Nam',
                'street_address' => 'Mon City, My Dinh 2, Nam Tu Liem',
                'postcode_zip' => '10000',
                'town_city' => 'Ha Noi',
                'phone' => '02462538829',
            ],
        ]);
        
        DB::table('users')->insert([
            
            [
                'id' => 2,
                'name' => 'Thanh',
                'email' => 'Thanh@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => '2',
                'description' => null,

                'first_name' => 'Thanh',
                'last_name' => 'Nguyen',
                'gender' => 'Male',
                'company_name' => 'Plannest',
                'country' => 'Viet Nam',
                'street_address' => 'Mon City, My Dinh 2, Nam Tu Liem',
                'postcode_zip' => '10000',
                'town_city' => 'Ha Noi',
                'phone' => '02462538829',
            ],
        ]);

        DB::table('blogs')->insert([
            [
                'user_id' => 3,
                'title' => 'The Personality Trait That Makes People Happier',
                'image' => 'blog-1.jpg',
                'category' => 'TRAVEL',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'This was one of our first days in Hawaii last week.',
                'image' => 'blog-2.jpg',
                'category' => 'CodeLeanON',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Last week I had my first work trip of the year to Sonoma Valley',
                'image' => 'blog-3.jpg',
                'category' => 'TRAVEL',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Happppppy New Year! I know I am a little late on this post',
                'image' => 'blog-4.jpg',
                'category' => 'CodeLeanON',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Absolue collection. The Lancome team has been one…',
                'image' => 'blog-5.jpg',
                'category' => 'MODEL',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'Writing has always been kind of therapeutic for me',
                'image' => 'blog-6.jpg',
                'category' => 'CodeLeanON',
                'content' => '',
            ],
        ]);

        DB::table('brands')->insert([
            [
                'name' => 'Indoor',
            ],
            [
                'name' => 'Outdoor',
            ],
            [
                'name' => 'All',
            ],
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'Flowering',
            ],
            [
                'name' => 'Non-Flowering',
            ],
            [
                'name' => 'Succulents',
            ],
            [
                'name' => 'Tools',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'Grey Star Calathea',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '',
                'price' => 90.00,
                'qty' => 20,
                'discount' => null,
                'weight' => 1.3,
                'sku' => '00012',
                'featured' => true,
                'tag' => 'Non-Flowering',
            ],
            [
                'id' => 2,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'ZZ Plant',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '',
                'price' => 60.00,
                'qty' => 20,
                'discount' => null,
                'weight' => 1.3,
                'sku' => '00012',
                'featured' => true,
                'tag' => 'Non-Flowering',
            ],
            [
                'id' => 3,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Flowers Daisy Pink Stick',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '',
                'price' => 15.00,
                'qty' => 30,
                'discount' => 5,
                'weight' => 1.3,
                'sku' => '00032',
                'featured' => true,
                'tag' => 'Flowering',
            ],
            [
                'id' => 4,
                'brand_id' => 2,
                'product_category_id' => 1,
                'name' => 'Hyacinth White Stick',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '',
                'price' => 15.00,
                'qty' => 30,
                'discount' => 5,
                'weight' => 1.3,
                'sku' => '00032',
                'featured' => true,
                'tag' => 'Outdoor',
            ],
            [
                'id' => 5,
                'brand_id' => 3,
                'product_category_id' => 4,
                'name' => 'Hand Shovel',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '',
                'price' => 25.00,
                'qty' => 300,
                'discount' => 5,
                'weight' => 0.3,
                'sku' => '00032',
                'featured' => true,
                'tag' => 'Tools',
            ],
            [
                'id' => 6,
                'brand_id' => 3,
                'product_category_id' => 4,
                'name' => 'Convenient Wheelbarrow',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '',
                'price' => 306.00,
                'qty' => 20,
                'discount' => 15,
                'weight' => 10.3,
                'sku' => '03032',
                'featured' => true,
                'tag' => 'Tools',
            ],
            [
                'id' => 7,
                'brand_id' => 3,
                'product_category_id' => 3,
                'name' => 'Jade Succulents',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '',
                'price' => 36.00,
                'qty' => 20,
                'discount' => 15,
                'weight' => 0.3,
                'sku' => '03031',
                'featured' => true,
                'tag' => 'Succulents',
            ],
            [
                'id' => 8,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Flowers Daisy Red Stick',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '',
                'price' => 15.00,
                'qty' => 30,
                'discount' => 5,
                'weight' => 1.3,
                'sku' => '00032',
                'featured' => true,
                'tag' => 'Flowering',
            ],
            [
                'id' => 9,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'Umbrella Tree',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '',
                'price' => 100.00,
                'qty' => 10,
                'discount' => 15,
                'weight' => 0.3,
                'sku' => '03031',
                'featured' => true,
                'tag' => 'Non-Flowering',
            ],
        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'product-1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-2.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9.jpg',
            ],
        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'XS',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'yellow',
                'size' => 'S',
                'qty' => 0,
            ],
            [
                'product_id' => 1,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 0,
            ],
        ]);

        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'user_id' => 4,
                'email' => 'BrandonKelley@gmail.com',
                'name' => 'Brandon Kelley',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 1,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
        ]);
    }
}

