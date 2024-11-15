<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\License;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan data ke tabel licenses
        License::create([
            'name'              => 'Contoh Active',
            'license_key'       => '1234567890ACTIVE',
            'status'            => 'active',
            'desc'              => 'License ujicoba'
        ]);
        License::create([
            'name'              => 'Contoh Complete',
            'license_key'       => '1234567890COMPLETE',
            'status'            => 'active',
            'expired_date'      => '2024-12-31',
            'block_ipaddress'   => '192.168.1.10,192.168.1.11',
            'block_domain'      => 'newdomain.com,sampledomain.com',
            'desc'              => 'License ujicoba komplit'
        ]);
        License::create([
            'name'              => 'Contoh Expired',
            'license_key'       => '1234567890EXPIRED',
            'status'            => 'expired',
            'expired_date'      => '2024-08-25',
            'desc'              => 'License ujicoba Expired'
        ]);
    }
}
