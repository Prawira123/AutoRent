<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AccountSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('accounts')->delete();

        $accounts = [
            [
                'id' => Str::uuid()->toString(),
                'account_name' => 'AutoRent Corporate',
                'account_type' => 'bank',
                'bank_name' => 'Mandiri',
                'account_number' => '1234567890',
                'account_holder' => 'PT AutoRent Indonesia',
                'provider' => 'Mandiri',
                'is_active' => true,
                'is_default' => true,
                'balance' => 10000000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'account_name' => 'AutoRent E-Wallet',
                'account_type' => 'ewallet',
                'bank_name' => 'Dana',
                'account_number' => '082212345678',
                'account_holder' => 'AutoRent Indonesia',
                'provider' => 'Dana',
                'is_active' => true,
                'is_default' => false,
                'balance' => 5000000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'account_name' => 'AutoRent Global',
                'account_type' => 'international',
                'bank_name' => 'Stripe',
                'account_number' => 'STR-987654321',
                'account_holder' => 'AutoRent International',
                'provider' => 'Stripe',
                'is_active' => true,
                'is_default' => false,
                'balance' => 15000000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('accounts')->insert($accounts);
    }
}
