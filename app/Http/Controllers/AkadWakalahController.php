<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class AkadWakalahController extends Controller
{
    public function generateAkad(Request $request)
    {
        $noValidasi = $request->get('no_validasi'); // memastikan masukkan no validasi

        try {
            $client = new Client();

            $response = $client->post('http://localhost:8083/api/webteller/api/dofrontend/wakalah', [
                'json' => [
                    'noValidasi' => $noValidasi,
                ],
            ]);

            if ($response->getStatusCode() === 200) {
                $data = json_decode($response->getBody(), true);

                // Assuming 'rc' == '00' indicates success
                if ($data['rc'] == '00') {
                    return redirect()->back()->with('success', 'Data berhasil didownload');
                } else {
                    return redirect()->back()->with('error', 'Data tidak berhasil didownload');
                }
            } else {
                return redirect()->back()->with('error', 'API request failed with status code: ' . $response->getStatusCode());
            }
        } catch (RequestException $e) {
            return redirect()->back()->with('error', 'API request failed: ' . $e->getMessage());
        }
    }
}
