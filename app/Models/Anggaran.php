<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yudi1212\AutoNumber\AutoNumberTrait;

class Anggaran extends Model
{
    use HasFactory;
    use AutoNumberTrait;

    protected $table = "anggarans";
    protected $fillable = ['anggaran_id', 'biaya', 'tgl_anggaran', 'created_at', 'updated_at'];
    
    public function getAutoNumberOptions()
    {
        return [
            'anggaran_id' => [
                'format' => 'AG?',
                'length' => 3
            ]
        ];
    }
}
