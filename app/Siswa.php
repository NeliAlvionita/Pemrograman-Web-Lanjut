<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswa";
    protected $primaryKey = "nis";
    protected $fillable = ["nama", "tgl_lahir", "tahun_ajar", "kelas_id"];

    public $timestamps = false;

    public function kelas(){
        return $this-> belongsTo('App\Kelas', 'kelas_id', 'id');
    }
}
