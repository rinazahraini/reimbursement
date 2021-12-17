<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengajuan as ModelPengajuan;
use App\Models\Rincian as ModelRincian;
use App\Models\Kategori as ModelKategori;
use App\Models\User as ModelUser;
use Jenssegers\Date\Date;

class Status extends Component
{
    public $pengajuan_id, $user_id, $tgl_kwitansi, $deskripsi, $upload_kwitansi, $claim_status, $claim_id, $claim_biaya, $biaya_approve;
    public $rincian_id, $nama_rincian;
    public $kategori_id, $nama_kategori;
    public $nik, $name, $email;
    
    public function render()
    {
        Date::setLocale('id');

        $pengajuan = ModelPengajuan::select('pengajuans.*', 'users.nik', 'users.name', 'users.email', 'kategoris.nama_kategori', 'rincians.nama_rincian')
        ->join('users', 'users.user_id', '=', 'pengajuans.user_id')
        ->join('kategoris', 'kategoris.kategori_id', '=', 'pengajuans.kategori_id')
        ->join('rincians', 'rincians.rincian_id', '=', 'pengajuans.rincian_id')
        ->where('users.user_id', '=', Auth::user()->user_id)
        ->orderBy('created_at', 'DESC')
        ->get();

        return view('livewire.status', compact('pengajuan'));
    }
}
