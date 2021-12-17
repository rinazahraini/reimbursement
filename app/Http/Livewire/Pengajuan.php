<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengajuan as ModelPengajuan;
use App\Models\Rincian as ModelRincian;
use App\Models\Kategori as ModelKategori;
use App\Models\User as ModelUser;
use Jenssegers\Date\Date;

class Pengajuan extends Component
{
    use WithFileUploads;

    public $pengajuan_id, $user_id, $tgl_kwitansi, $deskripsi, $upload_kwitansi, $claim_status, $claim_id, $claim_biaya, $biaya_approve;
    public $rincian_id, $nama_rincian;
    public $kategori_id, $nama_kategori;

    public function render()
    { 
        $tahun = Date::now()->format('Y');

        $pengajuan = ModelPengajuan::join('users', 'users.user_id', '=', 'pengajuans.user_id')
        ->where('users.user_id', '=', Auth::user()->user_id)
        ->whereYear('tgl_kwitansi', $tahun)
        ->orderBy('created_at', 'DESC')
        ->sum('claim_biaya');

        $user = ModelUser::where('users.user_id', '=', Auth::user()->user_id)
        ->get();
        
        $kategori = ModelKategori::orderBy('nama_kategori', 'ASC')
        ->get();

        $rincian = ModelRincian::orderBy('nama_rincian', 'ASC')
        ->get();

        return view('livewire.pengajuan', compact('pengajuan','user','kategori','rincian'));
    }

    private function resetInput()
    {
        $this->kategori_id = '';
        $this->rincian_id = '';
        $this->deskripsi = '';
        $this->tgl_kwitansi = '';
        $this->claim_biaya = '';
        $this->upload_kwitansi = '';
    }

    public function store()
    {
        $validate = $this->validate([
            'kategori_id' => 'required',
            'rincian_id' => 'required',
            'deskripsi' => 'required',
            'tgl_kwitansi' => 'required',
            'claim_biaya' => 'required',
            'upload_kwitansi' => 'required|mimes:png,jpg',
        ]);

        $simpanFile = Storage::disk('public')->put('kwitansi', $this->upload_kwitansi);

        ModelPengajuan::create([
            'user_id' => 'USR02',
            'kategori_id' => $this->kategori_id,
            'rincian_id' => $this->rincian_id,
            'deskripsi' => $this->deskripsi,
            'tgl_kwitansi' => $this->tgl_kwitansi,
            'claim_biaya' => $this->claim_biaya,
            'upload_kwitansi' => $simpanFile,
        ]);

        session()->flash('message', 'pengajuan berhasil.');
        $this->resetInput();
        return redirect()->to('/daftar-pengajuan');
    }
}
