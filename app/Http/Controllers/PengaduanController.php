<?php

namespace App\Http\Controllers;

use App\Models\DumasForm;
use App\Models\JenisPengaduan;
use App\Models\StatusBukti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class PengaduanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = DumasForm::with(['pj', 'jenisPengaduan', 'statusBukti', 'statusPengaduan'])->select('dumas_forms.*');

            return DataTables::of($query)
                ->addIndexColumn()
                /**
                 * ! Don't Remove this order query
                 * * The Ordering is happens on client side
                 */
                // ->order(function ($query) {
                //     $query->orderBy('statusPengaduan_id', 'desc');
                // })
                ->editColumn('pj', function ($data) {
                    return $data->pj->nama;
                })
                ->editColumn('jenisPengaduan', function ($data) {
                    return $data->jenisPengaduan->nama;
                })
                ->editColumn('statusBukti', function ($data) {
                    return $data->statusBukti->nama;
                })
                ->editColumn('statusPengaduan', function ($data) {
                    return $data->statusPengaduan->nama;
                })
                ->editColumn('created_at', function ($data) {
                    return $data->created_at->format('d F Y');
                })
                ->addColumn('action', 'components.admin.button')
                ->rawColumns(['action'])
                ->toJson();
        }

        return view('admin.pengaduan.index');
    }

    public function show(DumasForm $id)
    {
        return view('admin.pengaduan.show', [
            'detailData' => $id,
        ]);
    }

    public function edit(DumasForm $dataEdit)
    {
        $jenisPengaduan = JenisPengaduan::orderBy('nama')->get(['id', 'nama']);
        $statusBukti = StatusBukti::orderBy('nama')->get(['id', 'nama']);

        return view('admin.pengaduan.edit', [
            'dataEdit' => $dataEdit,
            'jenisPengaduan' => $jenisPengaduan,
            'statusBukti' => $statusBukti,
        ]);
    }

    public function update(Request $request, DumasForm $dataEdit)
    {
        $validatedDataEdit = $request->validate([
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
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedDataEdit['bukti_pengaduan'] = $request->file('bukti_pengaduan')->store('bukti_pengaduan');
        }

        // $pj_id = DB::table('jenis_pengaduans')->where('pj_id', '=', $request->pengaduan_id)->get('pj_id');
        $pj_id = DB::table('jenis_pengaduans')->where('pj_id', '=', $request->pengaduan_id)->get()->pluck('pj_id');

        $validatedDataEdit['pj_id'] = $pj_id[0];

        DumasForm::where('id', $dataEdit->id)
            ->update($validatedDataEdit);

        return redirect()->route('pengaduan')->with('success', 'Pengaduan ' .  $dataEdit->nama . ' Berhasil DiUpdate');;
    }

    public function destroy(DumasForm $dataDelete)
    {

        if ($dataDelete->bukti_pengaduan) {
            Storage::delete($dataDelete->bukti_pengaduan);
        }

        $dataDelete->delete();

        return redirect()->route('pengaduan')->with('success', 'Pengaduan ' .  $dataDelete->nama . ' Berhasil Dihapus!');
    }
}
