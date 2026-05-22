<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TransportCategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('transport_subcategories')->delete();
        DB::table('transport_categories')->delete();

        $categories = [
            [
                'id' => Str::uuid()->toString(),
                'name' => 'Mobil',
                'slug' => 'mobil',
                'description' => 'Kendaraan roda empat untuk perjalanan bisnis dan liburan premium.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'name' => 'Motor',
                'slug' => 'motor',
                'description' => 'Kendaraan roda dua yang gesit untuk mobilitas cepat di kota.',
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('transport_categories')->insert($categories);

        $parentMap = collect($categories)->keyBy('slug');

        $subcategories = collect([
            ['name' => 'City Car', 'slug' => 'city-car', 'description' => 'Mobil kompak ideal untuk berkendara di kota.', 'parent_slug' => 'mobil'],
            ['name' => 'Sedan', 'slug' => 'sedan', 'description' => 'Elegan dan nyaman untuk perjalanan panjang.', 'parent_slug' => 'mobil'],
            ['name' => 'SUV', 'slug' => 'suv', 'description' => 'Ruang luas dan performa tangguh di berbagai medan.', 'parent_slug' => 'mobil'],
            ['name' => 'Crossover', 'slug' => 'crossover', 'description' => 'Perpaduan kenyamanan sedan dan fleksibilitas SUV.', 'parent_slug' => 'mobil'],
            ['name' => 'Coupe', 'slug' => 'coupe', 'description' => 'Desain sporty dan stylish untuk pengalaman berkendara premium.', 'parent_slug' => 'mobil'],
            ['name' => 'Convertible', 'slug' => 'convertible', 'description' => 'Nikmati angin dan pemandangan dengan atap terbuka.', 'parent_slug' => 'mobil'],
            ['name' => 'Hatchback', 'slug' => 'hatchback', 'description' => 'Praktis, hemat bahan bakar, dan mudah diparkir.', 'parent_slug' => 'mobil'],
            ['name' => 'MPV', 'slug' => 'mpv', 'description' => 'Ideal untuk keluarga dan grup kecil.', 'parent_slug' => 'mobil'],
            ['name' => 'Luxury', 'slug' => 'luxury', 'description' => 'Kendaraan premium untuk layanan eksklusif dan VIP.', 'parent_slug' => 'mobil'],
            ['name' => 'Electric', 'slug' => 'electric', 'description' => 'Mobil ramah lingkungan dengan performa modern.', 'parent_slug' => 'mobil'],
            ['name' => 'Skuter', 'slug' => 'skuter', 'description' => 'Ringan dan ideal untuk mobilitas sehari-hari di kota.', 'parent_slug' => 'motor'],
            ['name' => 'Sport', 'slug' => 'sport', 'description' => 'Motor cepat dengan gaya agresif.', 'parent_slug' => 'motor'],
            ['name' => 'Adventure', 'slug' => 'adventure', 'description' => 'Dirancang untuk perjalanan jauh dan medan campuran.', 'parent_slug' => 'motor'],
            ['name' => 'Naked Bike', 'slug' => 'naked-bike', 'description' => 'Desain minimalis dengan performa tinggi.', 'parent_slug' => 'motor'],
            ['name' => 'Cruiser', 'slug' => 'cruiser', 'description' => 'Motor nyaman untuk perjalanan santai.', 'parent_slug' => 'motor'],
            ['name' => 'Touring', 'slug' => 'touring', 'description' => 'Perfek untuk perjalanan jarak jauh dengan kenyamanan ekstra.', 'parent_slug' => 'motor'],
            ['name' => 'Matic', 'slug' => 'matic', 'description' => 'Praktis dan mudah dikendarai untuk penggunaan sehari-hari.', 'parent_slug' => 'motor'],
            ['name' => 'Classic', 'slug' => 'classic', 'description' => 'Motor bergaya retro dengan karakter penuh nostalgia.', 'parent_slug' => 'motor'],
            ['name' => 'Dual Sport', 'slug' => 'dual-sport', 'description' => 'Cocok untuk jalan raya dan off-road ringan.', 'parent_slug' => 'motor'],
            ['name' => 'Supermoto', 'slug' => 'supermoto', 'description' => 'Motor lincah untuk menguasai lintasan dan kota.', 'parent_slug' => 'motor'],
        ])->map(function ($item) use ($parentMap) {
            return [
                'id' => Str::uuid()->toString(),
                'parent_id' => $parentMap[$item['parent_slug']]['id'],
                'name' => $item['name'],
                'slug' => $item['slug'],
                'description' => $item['description'],
                'level' => 1,
                'is_active' => true,
                'sort_order' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        })->toArray();

        DB::table('transport_subcategories')->insert($subcategories);
    }
}
