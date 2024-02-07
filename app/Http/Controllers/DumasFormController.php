<?php

namespace App\Http\Controllers;

use App\Models\DumasForm;
use App\Models\JenisPengaduan;
use App\Models\StatusBukti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DumasFormController extends Controller
{

    public function index()
    {
        $jenisPengaduan = JenisPengaduan::orderBy('nama')->get(['id', 'nama']);
        $statusBukti = StatusBukti::orderBy('nama')->get(['id', 'nama']);


        return view('app.formdumas', [
            'jenisPengaduan' => $jenisPengaduan,
            'statusBukti' => $statusBukti,
        ]);
    }

    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'pengaduan_id' => 'required',
            'pj_id' => 'required',
            'statusBukti_id' => 'required',
            'nama' => 'required|max:50',
            'nik' => 'required|numeric|digits:16',
            'email' => 'required|email|max:50',
            'alamat' => 'required|max:100',
            'jenis_lainnya' => 'max:100',
            'isi_pengaduan' => 'required',
            'saran_dan_masukkan' => 'required',
            'bukti_pengaduan' => 'image|file'
        ]);

        if ($request->file('bukti_pengaduan')) {
            $validatedData['bukti_pengaduan'] = $request->file('bukti_pengaduan')->store('bukti_pengaduan');
        }

        $pj_id = DB::table('jenis_pengaduans')->where('pj_id', '=', $request->pj_id)->get()->pluck('pj_id');

        $validatedData['pj_id'] = $pj_id[0];

        DumasForm::create($validatedData);

        return view('app.success');
    }
}
