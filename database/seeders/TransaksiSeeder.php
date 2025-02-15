<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('transaksis')->insert([
            'id' => '1',
            'code_transaksi' => '111',
            'total_qty' => '5',
            'total_harga' => '10000000',
            'nama_customer' => 'Budi',
            'alamat' => 'Jogja',
            'no_tlp' => '08123456',
            'ekspedisi' => 'JNT',
            'status' => 'Paid',
            
        ]);
        DB::table('transaksis')->insert([
            'id' => '2',
            'code_transaksi' => '222',
            'total_qty' => '5',
            'total_harga' => '10000000',
            'nama_customer' => 'Tasya',
            'alamat' => 'Bandung',
            'no_tlp' => '0812345555',
            'ekspedisi' => 'JNE',
            'status' => 'Unpaid',
            
        ]);
        DB::table('transaksis')->insert([
            'id' => '3',
            'code_transaksi' => '333',
            'total_qty' => '5',
            'total_harga' => '10000000',
            'nama_customer' => 'Ucok',
            'alamat' => 'Jakarta',
            'no_tlp' => '0812345555',
            'ekspedisi' => 'JNT',
            'status' => 'Paid',
            
        ]);
        DB::table('transaksis')->insert([
            'id' => '4',
            'code_transaksi' => '444',
            'total_qty' => '5',
            'total_harga' => '10000000',
            'nama_customer' => 'Susi',
            'alamat' => 'Bali',
            'no_tlp' => '0812345555',
            'ekspedisi' => 'JNT',
            'status' => 'Unpaid',
            
        ]);
        DB::table('transaksis')->insert([
            'id' => '5',
            'code_transaksi' => '555',
            'total_qty' => '5',
            'total_harga' => '10000000',
            'nama_customer' => 'Dani',
            'alamat' => 'Amerika',
            'no_tlp' => '0812345555',
            'ekspedisi' => 'JNT',
            'status' => 'Paid',
            
        ]);
    }
}
