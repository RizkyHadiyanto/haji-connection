<?php

namespace App\Http\Controllers;

use App\Models\tblbpkh;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class tblbpkhController extends Controller
{
    function index()
    {
        // $data = tblbpkh::all();
        $data = tblbpkh::orderBy('id', 'asc')->get();
        return view('/cek')->with('data', $data);
    }

    function detail($id)
    {
        $data = tblbpkh::where('id', $id)->with('job')->first();
        $data = tblbpkh::where('id', $id)->with('city')->first();
        //dd($data->job->name);
        $data = tblbpkh::with(['city', 'job', 'education'])->find($id);
        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
        return view('/showcekdata', compact('data'));

        // $data = tblbpkh::find($id);
        // $birthdateFormatted = Carbon::parse($data->birthdate)->format('dd-mm-YYYY');

        // return view('/showcekdata', ['user' => $data, 'birthdateFormatted' => $birthdateFormatted]);
        // //dd($data->birthdate);

        //$data->mobilephone = str_replace('-', '', $data->mobilephone);

        //  dd($data->mobilephone);
        //return view('showcekdata', compact('data'));

        // Fungsi untuk memformat nomor telepon    
        //dd($data->city->name);

        // switch ($data->cityid) {
        //     case 101:
        //         $data->cityid = 'City A';
        //       break;
        //     case 102:
        //         $data->cityid = 'City B';;
        //       break;
        //     case 105:
        //         $data->cityid = 'City C';
        //       break;
        //     default:
        //   }

        //return view('/showcekdata')->with('data', $data);
    }

    public function birthdateformat($id)
    {
        $data = tblbpkh::find($id);
        $birthdateFormatted = Carbon::parse($data->birthdate)->format('dd-mm-YYYY');

        return view('/showcekdata', ['user' => $data, 'birthdateFormatted' => $birthdateFormatted]);
    }

    // function nomobileformat($mobilephone)
    // {

    //     $$mobilephone = trim($mobilephone);

    //     $$mobilephone = strip_tags($$mobilephone);

    //     $$mobilephone = str_replace(" ", "", $mobilephone);

    //     $$mobilephone = str_replace("(", "", $mobilephone);

    //     $$mobilephone = str_replace(".", "", $mobilephone);


    //     if (!preg_match('[^+0-9]', trim($mobilephone))) {

    //         if (substr(trim($mobilephone), 0, 3) == '+62') {
    //             $mobilephone = trim($mobilephone);
    //         } elseif (substr($mobilephone, 0, 1) == '0') {
    //             $mobilephone = '+62' . substr($mobilephone, 1);
    //         }
    //     }
    //     return $mobilephone;
    // }

    public function edit($id)
    {
        $data = tblbpkh::find($id);
        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
        return view('/edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
        ], [
            'email.required' => 'email wajib diisi'
        ]);

        $data = [
            'email' => $request->input('nama')
        ];

        $data = tblbpkh::find($id);
        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }

        $data->email = $request->input('email');
        $data->save();

        // if (Auth::attempt($data)) {
        //     return redirect('/nasabah')->with('success', 'Data Berhasil');
        // } else {
        //     return redirect()->back()->with('errors','Username atau Password Salah!');
        // }

        return redirect('/nasabah/')->with('success', 'Email berhasil diupdate');
    }

    // public function edit($id){
    //     $data = tblbpkh::with(['city', 'job','education'])->find($id);
    //     if (!$data) {
    //         return redirect()->back()->with('error', 'Data tidak ditemukan');
    //     }
    //     return view('/edit', compact('data'));

    //     $data = tblbpkh::where('id', $id)->first();
    //     return view('/edit')->with('data',$data);
    // }

    public function destroy($id)
    {

        $data = tblbpkh::find($id);
        if (!$data) {
            return redirect('/nasabah')->with('error', 'Data tidak ditemukan');
        }

        $data->delete();
        return redirect('/nasabah')->with('success', 'Data berhasil dihapus');
        
        // $data = tblbpkh::findOrFail($id);

        // // Hapus data dari database
        // $data->delete();

        // return redirect()->route('/nasabah')->with(['success' => 'Data Berhasil Dihapus!']);

        //Pake yang bawah ini kalo ga berhasil

        // $data = tblbpkh::where('id', $id)->delete();
        // return redirect('/nasabah')->with('succes', 'Berhasil hapus data');
        
    }

    // public function generateAkadWakalah(Request $request)
    // {
    //     $response = Http::post('http://localhost:8083/api/webteller/api/dofrontend/wakalah', [
    //         'no_validasi' => $request->input('no_validasi')
    //     ]);

    //     if ($response->successful()) {
    //         // Process the response data
    //         return response()->json($response->json());
    //     } else {
    //         // Handle error
    //         return response()->json(['error' => 'Unable to process request'], $response->status());
    //     }
    // }
}
