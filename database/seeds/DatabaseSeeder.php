<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('AdminsTableSeeder');
    }
}

/*
 * Creating Default user
 * evgeni_stas@swiego.com
 * 123
 * */

class AdminsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('admins')->delete();

        DB::table('admins')->insert(
            ['email' => 'evgeni_stas@swiego.com', 'password' => '$2y$10$dMDlc1GdbPo9tC1xIjkKv.oViWKts..bUsDyVIM0cZTs1sUNyNOq6', 'remember_token' => 'oQTonsS2AHpE2L9fYBtLuxGqhp7Z5vg1AvxLFCDmycXRinbd2GpxahPZHLYK']
        );
    }

}
