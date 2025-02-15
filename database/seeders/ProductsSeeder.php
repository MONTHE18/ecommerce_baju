<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'id' => '1',
            'sku' => 'B123',
            'nama_product' => 'Baju Kaos Pria',
            'kategory' => 'Pakaian Pria',
            'harga' => '200000',
            'quantity' => '200',
            'quantity_out' => '100',
            'foto' => asset('assets/image/contoh.png'),
        ]);
        DB::table('products')->insert([
            'id' => '2',
            'sku' => 'B456',
            'nama_product' => 'Baju Kaos Wanita Panjang',
            'kategory' => 'Pakaian Wanita',
            'harga' => '200000',
            'quantity' => '200',
            'quantity_out' => '100',
            'foto' => asset('assets/image/contoh.png'),
        ]);
        DB::table('products')->insert([
            'id' => '3',
            'sku' => 'C222',
            'nama_product' => 'Celana Cargo Pria',
            'kategory' => 'Pakaian Pria',
            'harga' => '200000',
            'quantity' => '200',
            'quantity_out' => '100',
            'foto' => asset('assets/image/contoh.png'),
        ]);
        DB::table('products')->insert([
            'id' => '4',
            'sku' => 'D123',
            'nama_product' => 'Baju Kemeja Wanita',
            'kategory' => 'Pakaian Wanita',
            'harga' => '200000',
            'quantity' => '200',
            'quantity_out' => '100',
            'foto' => asset('assets/image/contoh.png'),
        ]);
        DB::table('products')->insert([
            'id' => '5',
            'sku' => 'E123',
            'nama_product' => 'Rok Wanita',
            'kategory' => 'Pakaian Wanita',
            'harga' => '200000',
            'quantity' => '200',
            'quantity_out' => '100',
            'foto' => asset('assets/image/contoh.png'),
        ]);
    }
}
