<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
protected $table = "buku";
protected $primaryKey = 'buku_id';
protected $fillable = ['buku_no', 'buku_judul',
'buku_penulis', 'buku_penerbit', 'buku_tahun'];

}