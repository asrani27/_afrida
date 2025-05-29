<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{

    protected $table = 'jadwal';
    protected $guarded = ['id'];
    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis_id');
    }
    public function penyelenggara()
    {
        return $this->belongsTo(Penyelenggara::class, 'penyelenggara_id');
    }
    public function instruktur()
    {
        return $this->belongsTo(instruktur::class, 'instruktur_id');
    }
}
