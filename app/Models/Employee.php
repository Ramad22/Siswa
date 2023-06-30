<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded =[];
    // memperbolehkan semua data untuk di isi
    protected $dates = ['created_at'];
    // untuk waktu
    // public function scopeSearch($query, $keyword){
    //     return $query->where('search', 'LIKE', "%$keyword%");
    // }
}
 