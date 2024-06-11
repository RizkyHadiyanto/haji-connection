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
                'download_at' => NULL,
                'is_download' => NULL,
                'email' => 'dave.wilson@example.com'
            ],
            [
                'kid' => 2,
                'address' => '404 Maple St',
                'bankaccount' => '333333333',
                'bankid' => '1007',
                'birthdate' => '1985-03-12',
                'birthplace' => 'City G',
                'cityid' => '105',
                'district' => 'District G',
                'educationid' => '1',
                'exception' => NULL,
                'flag_status' => NULL,
                'id' => '10007',
                'is_regular' => 1,
                'jobid' => '2002',
                'jumlah_setor' => '4500.00',
                'mobilephone' => '333-333-3333',
                'nama' => 'Alice Smith',
                'nama_ayah' => 'John Smith',
                'nik' => '333333333',
                'no_validation' => 'Validation404',
                'pdf_file_wakalah' => 'path/to/file7.pdf',
                'ref_id' => NULL,
                'reff_d' => NULL,
                'reff_dates' => NULL,
                'reff_p' => NULL,
                'reff_q' => NULL,
                'reff_s' => NULL,
                'reff_stamping' => NULL,
                'reff_t' => NULL,
                'registerdate' => '2024-05-15',
                'sex' => 'F',
                'status_stamping' => 1,
                'subdistrict' => 'Subdistrict G',
                'tgl_data_terproses' => '2024-05-06',
                'zip' => '55668',
                'message_id' => '1007',
                'serial_number' => 'SERIAL404',
                'download_at' => NULL,
                'is_download' => NULL,
                'email' => 'alice.smith@example.com'
            ],
            [
                'kid' => 3,
                'address' => '505 Birch St',
                'bankaccount' => '444444444',
                'bankid' => '1008',
                'birthdate' => '1972-07-07',
                'birthplace' => 'City H',
                'cityid' => '105',
                'district' => 'District H',
                'educationid' => '2',
                'exception' => NULL,
                'flag_status' => NULL,
                'id' => '10008',
                'is_regular' => 1,
                'jobid' => '2004',
                'jumlah_setor' => '5500.00',
                'mobilephone' => '444-444-4444',
                'nama' => 'Bob Johnson',
                'nama_ayah' => 'Peter Johnson',
                'nik' => '444444444',
                'no_validation' => 'Validation505',
                'pdf_file_wakalah' => 'path/to/file8.pdf',
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
                'subdistrict' => 'Subdistrict H',
                'tgl_data_terproses' => '2024-05-06',
                'zip' => '55669',
                'message_id' => '1008',
                'serial_number' => 'SERIAL505',
                'download_at' => NULL,
                'is_download' => NULL,
                'email' => 'bob.johnson@example.com'
            ],
            [
                'kid' => 4,
                'address' => '606 Pine St',
                'bankaccount' => '555555555',
                'bankid' => '1009',
                'birthdate' => '1988-10-25',
                'birthplace' => 'City I',
                'cityid' => '104',
                'district' => 'District I',
                'educationid' => '3',
                'exception' => NULL,
                'flag_status' => NULL,
                'id' => '10009',
                'is_regular' => 1,
                'jobid' => '2006',
                'jumlah_setor' => '6500.00',
                'mobilephone' => '555-555-5555',
                'nama' => 'Cathy Brown',
                'nama_ayah' => 'Michael Brown',
                'nik' => '555555555',
                'no_validation' => 'Validation606',
                'pdf_file_wakalah' => 'path/to/file9.pdf',
                'ref_id' => NULL,
                'reff_d' => NULL,
                'reff_dates' => NULL,
                'reff_p' => NULL,
                'reff_q' => NULL,
                'reff_s' => NULL,
                'reff_stamping' => NULL,
                'reff_t' => NULL,
                'registerdate' => '2024-05-15',
                'sex' => 'F',
                'status_stamping' => 1,
                'subdistrict' => 'Subdistrict I',
                'tgl_data_terproses' => '2024-05-06',
                'zip' => '55670',
                'message_id' => '1009',
                'serial_number' => 'SERIAL606',
                'download_at' => NULL,
                'is_download' => NULL,
                'email' => 'cathy.brown@example.com'
            ],
            [
                'kid' => 5,
                'address' => '707 Oak St',
                'bankaccount' => '666666666',
                'bankid' => '1010',
                'birthdate' => '1993-12-12',
                'birthplace' => 'City J',
                'cityid' => '105',
                'district' => 'District J',
                'educationid' => '6',
                'exception' => NULL,
                'flag_status' => NULL,
                'id' => '10010',
                'is_regular' => 1,
                'jobid' => '2005',
                'jumlah_setor' => '7500.00',
                'mobilephone' => '666-666-6666',
                'nama' => 'Daniel Lee',
                'nama_ayah' => 'Paul Lee',
                'nik' => '666666666',
                'no_validation' => 'Validation707',
                'pdf_file_wakalah' => 'path/to/file10.pdf',
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
                'subdistrict' => 'Subdistrict J',
                'tgl_data_terproses' => '2024-05-06',
                'zip' => '55671',
                'message_id' => '1010',
                'serial_number' => 'SERIAL707',
                'download_at' => NULL,
                'is_download' => NULL,
                'email' => 'daniel.lee@example.com'
            ],
            [
                'kid' => 6,
                'address' => '808 Cedar St',
                'bankaccount' => '777777777',
                'bankid' => '1011',
                'birthdate' => '1990-01-30',
                'birthplace' => 'City K',
                'cityid' => '101',
                'district' => 'District K',
                'educationid' => '5',
                'exception' => NULL,
                'flag_status' => NULL,
                'id' => '10011',
                'is_regular' => 1,
                'jobid' => '2004',
                'jumlah_setor' => '8500.00',
                'mobilephone' => '777-777-7777',
                'nama' => 'Emma White',
                'nama_ayah' => 'Henry White',
                'nik' => '777777777',
                'no_validation' => 'Validation808',
                'pdf_file_wakalah' => 'path/to/file11.pdf',
                'ref_id' => NULL,
                'reff_d' => NULL,
                'reff_dates' => NULL,
                'reff_p' => NULL,
                'reff_q' => NULL,
                'reff_s' => NULL,
                'reff_stamping' => NULL,
                'reff_t' => NULL,
                'registerdate' => '2024-05-15',
                'sex' => 'F',
                'status_stamping' => 1,
                'subdistrict' => 'Subdistrict K',
                'tgl_data_terproses' => '2024-05-06',
                'zip' => '55672',
                'message_id' => '1011',
                'serial_number' => 'SERIAL808',
                'download_at' => NULL,
                'is_download' => NULL,
                'email' => 'emma.white@example.com'
            ],
            [
                'kid' => 7,
                'address' => '909 Birch St',
                'bankaccount' => '888888888',
                'bankid' => '1012',
                'birthdate' => '1981-09-15',
                'birthplace' => 'City L',
                'cityid' => '102',
                'district' => 'District L',
                'educationid' => '5',
                'exception' => NULL,
                'flag_status' => NULL,
                'id' => '10012',
                'is_regular' => 1,
                'jobid' => '2005',
                'jumlah_setor' => '9500.00',
                'mobilephone' => '888-888-8888',
                'nama' => 'Frank Green',
                'nama_ayah' => 'Charles Green',
                'nik' => '888888888',
                'no_validation' => 'Validation909',
                'pdf_file_wakalah' => 'path/to/file12.pdf',
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
                'subdistrict' => 'Subdistrict L',
                'tgl_data_terproses' => '2024-05-06',
                'zip' => '55673',
                'message_id' => '1012',
                'serial_number' => 'SERIAL909',
                'download_at' => NULL,
                'is_download' => NULL,
                'email' => 'frank.green@example.com'
            ],
            [
                'kid' => 8,
                'address' => '1010 Maple St',
                'bankaccount' => '999999999',
                'bankid' => '1013',
                'birthdate' => '1984-02-22',
                'birthplace' => 'City M',
                'cityid' => '103',
                'district' => 'District M',
                'educationid' => '4',
                'exception' => NULL,
                'flag_status' => NULL,
                'id' => '10013',
                'is_regular' => 1,
                'jobid' => '2003',
                'jumlah_setor' => '10500.00',
                'mobilephone' => '999-999-9999',
                'nama' => 'Grace Davis',
                'nama_ayah' => 'Edward Davis',
                'nik' => '999999999',
                'no_validation' => 'Validation1010',
                'pdf_file_wakalah' => 'path/to/file13.pdf',
                'ref_id' => NULL,
                'reff_d' => NULL,
                'reff_dates' => NULL,
                'reff_p' => NULL,
                'reff_q' => NULL,
                'reff_s' => NULL,
                'reff_stamping' => NULL,
                'reff_t' => NULL,
                'registerdate' => '2024-05-15',
                'sex' => 'F',
                'status_stamping' => 1,
                'subdistrict' => 'Subdistrict M',
                'tgl_data_terproses' => '2024-05-06',
                'zip' => '55674',
                'message_id' => '1013',
                'serial_number' => 'SERIAL1010',
                'download_at' => NULL,
                'is_download' => NULL,
                'email' => 'grace.davis@example.com'
            ],
            [
                'kid' => 9,
                'address' => '1111 Pine St',
                'bankaccount' => '111111111',
                'bankid' => '1014',
                'birthdate' => '1991-11-11',
                'birthplace' => 'City N',
                'cityid' => '104',
                'district' => 'District N',
                'educationid' => '3',
                'exception' => NULL,
                'flag_status' => NULL,
                'id' => '10014',
                'is_regular' => 1,
                'jobid' => '2004',
                'jumlah_setor' => '11500.00',
                'mobilephone' => '111-111-1111',
                'nama' => 'Hannah Martinez',
                'nama_ayah' => 'James Martinez',
                'nik' => '111111111',
                'no_validation' => 'Validation1111',
                'pdf_file_wakalah' => 'path/to/file14.pdf',
                'ref_id' => NULL,
                'reff_d' => NULL,
                'reff_dates' => NULL,
                'reff_p' => NULL,
                'reff_q' => NULL,
                'reff_s' => NULL,
                'reff_stamping' => NULL,
                'reff_t' => NULL,
                'registerdate' => '2024-05-15',
                'sex' => 'F',
                'status_stamping' => 1,
                'subdistrict' => 'Subdistrict N',
                'tgl_data_terproses' => '2024-05-06',
                'zip' => '55675',
                'message_id' => '1014',
                'serial_number' => 'SERIAL1111',
                'download_at' => NULL,
                'is_download' => NULL,
                'email' => 'hannah.martinez@example.com'
            ],
            [
                'kid' => 10,
                'address' => '1212 Oak St',
                'bankaccount' => '121212121',
                'bankid' => '1015',
                'birthdate' => '1995-04-14',
                'birthplace' => 'City O',
                'cityid' => '102',
                'district' => 'District O',
                'educationid' => '2',
                'exception' => NULL,
                'flag_status' => NULL,
                'id' => '10015',
                'is_regular' => 1,
                'jobid' => '2003',
                'jumlah_setor' => '12500.00',
                'mobilephone' => '121-121-1212',
                'nama' => 'Ivy Wilson',
                'nama_ayah' => 'Thomas Wilson',
                'nik' => '121212121',
                'no_validation' => 'Validation1212',
                'pdf_file_wakalah' => 'path/to/file15.pdf',
                'ref_id' => NULL,
                'reff_d' => NULL,
                'reff_dates' => NULL,
                'reff_p' => NULL,
                'reff_q' => NULL,
                'reff_s' => NULL,
                'reff_stamping' => NULL,
                'reff_t' => NULL,
                'registerdate' => '2024-05-15',
                'sex' => 'F',
                'status_stamping' => 1,
                'subdistrict' => 'Subdistrict O',
                'tgl_data_terproses' => '2024-05-06',
                'zip' => '55676',
                'message_id' => '1015',
                'serial_number' => 'SERIAL1212',
                'download_at' => NULL,
                'is_download' => NULL,
                'email' => 'ivy.wilson@example.com'
            ]
        ]);
        
        
    }
}
