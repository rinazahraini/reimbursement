<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pengajuan as ModelPengajuan;
use App\Models\Rincian as ModelRincian;
use App\Models\Kategori as ModelKategori;
use Jenssegers\Date\Date;

class DaftarPengajuan extends Component
{
    public $selected_id;
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
        ->orderBy('created_at', 'DESC')
        ->get();

        return view('livewire.daftar-pengajuan', compact('pengajuan'));
    }

    private function resetInput()
    {
        $this->biaya_approve = '';
    }
    
    public function detail($id)
    {

        $detail = ModelPengajuan::select('pengajuans.*', 'users.nik', 'users.name', 'users.email', 'kategoris.nama_kategori', 'rincians.nama_rincian')
        ->join('users', 'users.user_id', '=', 'pengajuans.user_id')
        ->join('kategoris', 'kategoris.kategori_id', '=', 'pengajuans.kategori_id')
        ->join('rincians', 'rincians.rincian_id', '=', 'pengajuans.rincian_id')
        ->findOrFail($id);

        $this->selected_id  = $id;
        $this->pengajuan_id = $detail->pengajuan_id;
        $this->tgl_kwitansi = $detail->tgl_kwitansi;
        $this->deskripsi = $detail->deskripsi;
        $this->email = $detail->email;
        $this->claim_biaya = $detail->claim_biaya;
        $this->nama_kategori = $detail->nama_kategori;
        $this->nama_rincian = $detail->nama_rincian;
        $this->name = $detail->name;
        $this->nik = $detail->nik;

    }

    public function update()
    {
        $tahun = Date::now()->format('y');

        $validate = $this->validate([
            'biaya_approve' => 'required',
        ]);

        $data = ModelPengajuan::find($this->selected_id);
        $data->biaya_approve = $this->biaya_approve;
        $data->claim_status = 'y';
        $data->claim_id = 'RM-'.$tahun.'-'.$this->generateUniqueCode();
        $data->update();

        session()->flash('message', 'Dana berhasil dicairkan.');
        $this->resetInput();
    }

    public function generateUniqueCode()
    {
        do {
            $claim_id = random_int(1000, 9999);
        } while (ModelPengajuan::where("claim_id", "=", $claim_id)->first());
  
        return $claim_id;
    }
}
