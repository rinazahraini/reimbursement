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
    protected $fillable = ['pengajuan_id', 'pengajuan_kategori_id', 'tgl_tugas', 'deskripsi', 'upload_spj', 'status', 'claim_id', 'created_at', 'updated_at'];
    
    public function getAutoNumberOptions()
    {
        return [
            'pengajuan_id' => [
                'format' => 'PJ?',
                'length' => 5
            ]
        ];
    }
}
