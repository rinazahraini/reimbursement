<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yudi1212\AutoNumber\AutoNumberTrait;

class Rincian extends Model
{
    use HasFactory;
    use AutoNumberTrait;

    protected $table = "rincians";
    protected $fillable = ['rincian_id', 'kategori_id', 'nama_rincian', 'created_at', 'updated_at'];
    
    public function getAutoNumberOptions()
    {
        return [
            'rincian_id' => [
                'format' => 'RC?',
                'length' => 3
            ]
        ];
    }
}
