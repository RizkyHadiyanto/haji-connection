<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tblbpkhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tblbpkh')->insert([
            [
                'kid' => 1,
                'address' => '303 Cedar St',
                'bankaccount' => '222222222',
                'bankid' => '1006',
                'birthdate' => '1996-06-06',
                'birthplace' => 'City F',
                'cityid' => '101',
                'district' => 'District F',
                'educationid' => '1',
                'exception' => NULL,
                'flag_status' => NULL,
                'id' => '10006',
                'is_regular' => 1,
                'jobid' => '2006',
                'jumlah_setor' => '3500.00',
                'mobilephone' => '222-222-2222',
                'nama' => 'Dave Wilson',
                'nama_ayah' => 'George Wilson',
                'nik' => '222222222',
                'no_validation' => 'Validation303',
                'pdf_file_wakalah' => 'path/to/file6.pdf',
                'ref_id' => NULL,
                'reff_d' => NULL,
                'reff_dates' => NULL,
                'reff_p' => NULL,
                'reff_q' => NULL,
                'reff_s' => NULL,
                'reff_stamping' => NULL,
                'reff_t' => NULL,
                'registerdate' => '2024-05-15',
                'sex' => 'M',
                'status_stamping' => 1,
                'subdistrict' => 'Subdistrict F',
                'tgl_data_terproses' => '2024-05-06',
                'zip' => '55667',
                'message_id' => '1006',
                'serial_number' => 'SERIAL303',
                //'download_at' => NULL,
                'is_download' => NULL,
                'email' => 'dave.wilson@example.com'
            ],
        ]);
        
        
    }
}
