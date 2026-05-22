<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TransportSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('transport')->delete();

        $categoryIds = DB::table('transport_categories')->pluck('id', 'slug');
        $subcategoryIds = DB::table('transport_subcategories')->pluck('id', 'slug');

        $vehicles = [
            ['name' => 'Tesla Model 3', 'brand' => 'Tesla', 'model' => 'Model 3', 'slug' => 'electric'],
            ['name' => 'BMW 5 Series', 'brand' => 'BMW', 'model' => '530i', 'slug' => 'luxury'],
            ['name' => 'Toyota Avanza', 'brand' => 'Toyota', 'model' => 'Avanza', 'slug' => 'mpv'],
            ['name' => 'Honda City', 'brand' => 'Honda', 'model' => 'City', 'slug' => 'sedan'],
            ['name' => 'Mazda CX-5', 'brand' => 'Mazda', 'model' => 'CX-5', 'slug' => 'suv'],
            ['name' => 'Mercedes C-Class', 'brand' => 'Mercedes-Benz', 'model' => 'C 200', 'slug' => 'sedan'],
            ['name' => 'Mini Cooper', 'brand' => 'Mini', 'model' => 'Cooper', 'slug' => 'city-car'],
            ['name' => 'Audi Q5', 'brand' => 'Audi', 'model' => 'Q5', 'slug' => 'suv'],
            ['name' => 'Nissan Leaf', 'brand' => 'Nissan', 'model' => 'Leaf', 'slug' => 'electric'],
            ['name' => 'Volkswagen Polo', 'brand' => 'Volkswagen', 'model' => 'Polo', 'slug' => 'hatchback'],
            ['name' => 'Honda Civic', 'brand' => 'Honda', 'model' => 'Civic', 'slug' => 'sedan'],
            ['name' => 'Kia Carnival', 'brand' => 'Kia', 'model' => 'Carnival', 'slug' => 'mpv'],
            ['name' => 'Lexus RX', 'brand' => 'Lexus', 'model' => 'RX 350', 'slug' => 'luxury'],
            ['name' => 'Jeep Wrangler', 'brand' => 'Jeep', 'model' => 'Wrangler', 'slug' => 'crossover'],
            ['name' => 'Ford Mustang', 'brand' => 'Ford', 'model' => 'Mustang', 'slug' => 'coupe'],
            ['name' => 'Ducati Panigale V4', 'brand' => 'Ducati', 'model' => 'Panigale V4', 'slug' => 'sport'],
            ['name' => 'Yamaha NMAX', 'brand' => 'Yamaha', 'model' => 'NMAX', 'slug' => 'skuter'],
            ['name' => 'Kawasaki Ninja', 'brand' => 'Kawasaki', 'model' => 'Ninja 650', 'slug' => 'sport'],
            ['name' => 'Royal Enfield Classic 350', 'brand' => 'Royal Enfield', 'model' => 'Classic 350', 'slug' => 'classic'],
            ['name' => 'Honda CRF250L', 'brand' => 'Honda', 'model' => 'CRF250L', 'slug' => 'dual-sport'],
            ['name' => 'Vespa GTS', 'brand' => 'Vespa', 'model' => 'GTS 300', 'slug' => 'skuter'],
            ['name' => 'BMW R 1250 GS', 'brand' => 'BMW', 'model' => 'R 1250 GS', 'slug' => 'adventure'],
            ['name' => 'Harley-Davidson Sportster', 'brand' => 'Harley-Davidson', 'model' => 'Sportster', 'slug' => 'cruiser'],
            ['name' => 'Suzuki GSX-R1000', 'brand' => 'Suzuki', 'model' => 'GSX-R1000', 'slug' => 'supermoto'],
            ['name' => 'Yamaha YZF-R15', 'brand' => 'Yamaha', 'model' => 'YZF-R15', 'slug' => 'sport'],
            ['name' => 'Honda Beat', 'brand' => 'Honda', 'model' => 'Beat', 'slug' => 'matic'],
            ['name' => 'Toyota Fortuner', 'brand' => 'Toyota', 'model' => 'Fortuner', 'slug' => 'suv'],
            ['name' => 'Mitsubishi Xpander', 'brand' => 'Mitsubishi', 'model' => 'Xpander', 'slug' => 'mpv'],
            ['name' => 'BMW i8', 'brand' => 'BMW', 'model' => 'i8', 'slug' => 'luxury'],
            ['name' => 'Aston Martin DB11', 'brand' => 'Aston Martin', 'model' => 'DB11', 'slug' => 'coupe'],
        ];

        $colors = ['White', 'Black', 'Silver', 'Red', 'Blue', 'Gray', 'Yellow', 'Green'];
        $fuelTypes = ['Petrol', 'Diesel', 'Electric', 'Hybrid'];
        $transmissions = ['Automatic', 'Manual'];
        $conditions = ['Excellent', 'Very Good', 'Good'];

        $records = [];
        $counter = 1;

        foreach ($vehicles as $index => $vehicle) {
            $isMotor = in_array($vehicle['slug'], ['skuter', 'sport', 'adventure', 'naked-bike', 'cruiser', 'touring', 'matic', 'classic', 'dual-sport', 'supermoto']);
            $categorySlug = $isMotor ? 'motor' : 'mobil';
            $categoryId = $categoryIds[$categorySlug];
            $subcategoryId = $subcategoryIds[$vehicle['slug']];
            $year = 2020 + ($index % 6);
            $pricePerDay = $isMotor ? 250000 + ($index * 5000) : 550000 + ($index * 10000);
            $pricePerHour = round($pricePerDay / 10, 2);
            $deposit = round($pricePerDay * 0.2, 2);
            $records[] = [
                'id' => Str::uuid()->toString(),
                'category_id' => $categoryId,
                'subcategory_id' => $subcategoryId,
                'name' => $vehicle['name'],
                'brand' => $vehicle['brand'],
                'model' => $vehicle['model'],
                'plate_number' => strtoupper('B' . str_pad($counter++, 4, '0', STR_PAD_LEFT) . 'XYZ'),
                'year' => $year,
                'color' => $colors[$index % count($colors)],
                'fuel_type' => $fuelTypes[$index % count($fuelTypes)],
                'engine_cc' => $isMotor ? 250 + ($index * 5) : 1500 + ($index * 50),
                'seat_capacity' => $isMotor ? 2 : 4 + ($index % 3),
                'transmission' => $transmissions[$index % count($transmissions)],
                'price_per_day' => $pricePerDay,
                'price_per_hour' => $pricePerHour,
                'deposit_amount' => $deposit,
                'status' => 'available',
                'condition' => 'Excellent',
                'images' => json_encode(["https://images.unsplash.com/photo-{$index}000000?auto=format&fit=crop&w=1200&q=80"]),
                'description' => 'Kendaraan siap sewa dengan kondisi terbaik dan pelayanan premium AutoRent.',
                'features' => json_encode(['GPS', 'Air Conditioning', 'Bluetooth', 'Premium Interior']),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('transport')->insert($records);
    }
}
