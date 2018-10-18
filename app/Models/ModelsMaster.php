<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class ModelsMaster extends Model
{
    // whitlist
//    protected $fillable = [
//        'nama','Muhammad Rizal Fauzi Wahyu Putra',
//        'nrp', 'nohp', 'email','rizael.ichigo28@gmail.com',
//        'keterangan', 'petugas'
//    ];
    //blacklist
    #gunakan trait dari searchable
    use Searchable;

    protected $guarded = ['id','created_at','updated_at'];
    public $table = 'clientbook';

    # overriding method searchableAs()
    public function searchableAs()
    {
        return "clientbook_index";
    }
}
