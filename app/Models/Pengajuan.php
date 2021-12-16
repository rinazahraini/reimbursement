<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yudi1212\AutoNumber\AutoNumberTrait;

class Pengajuan extends Model
{
    use HasFactory;
    use AutoNumberTrait;

    protected $table = "pengajuans";
    protected $fillable = ['pengajuan_id', 'user_id', 'kategori_id', 'rincian_id', 'tgl_kwitansi', 'deskripsi', 'upload_kwitansi', 'claim_status', 'claim_id', 'claim_biaya', 'created_at', 'updated_at'];
    
    public function getAutoNumberOptions()
    {
        return [
            'pengajuan_id' => [
                'format' => 'PJ?',
                'length' => 3
            ]
        ];
    }
}
