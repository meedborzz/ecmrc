<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            [
                'title' => '3D™ Wireless Headset',
                'slug' => '3d-wireless-headset',
                'description' => 'High quality 3D sound wireless headset.',
                'price' => 120,
                'old_price' => 150,
                'image' => 'products/product-01.png',
                'hover_image' => 'products/product-hover-01.png',
                'discount' => '20% OFF',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Media Remote',
                'slug' => 'media-remote',
                'description' => 'Remote control for your devices.',
                'price' => 40,
                'old_price' => 50,
                'image' => 'products/product-02.png',
                'hover_image' => 'products/product-hover-02.png',
                'discount' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'HD Camera',
                'slug' => 'hd-camera',
                'description' => 'High definition camera for video calls.',
                'price' => 80,
                'old_price' => 100,
                'image' => 'products/product-03.png',
                'hover_image' => 'products/product-hover-03.png',
                'discount' => '15% OFF',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Ajoute ici d'autres produits si tu veux
        ]);
    }
}
