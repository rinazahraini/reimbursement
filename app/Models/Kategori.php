<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yudi1212\AutoNumber\AutoNumberTrait;

class Kategori extends Model
{
    use HasFactory;
    use AutoNumberTrait;

    protected $table = "kategoris";
    protected $fillable = ['kategori_id', 'nama_kategori', 'created_at', 'updated_at'];
    
    public function getAutoNumberOptions()
    {
        return [
            'kategori_id' => [
                'format' => 'KTG?',
                'length' => 5
            ]
        ];
    }
}
