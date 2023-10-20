<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;
    protected $fillable=[
        'chemestry_sec','chemestry_max','chemestry_per','physics_sec','physics_max','physics_per','biology_sec','biology_max','biology_per',
        'english_sec','english_max','english_per','total_sec','tatal_max','total_per','grand_sec','grand_max','grand_per','details_id'
    ];
    protected $table = 'marks'; // if the table name is different

    public function detail()
    {
        return $this->belongsTo(Detail::class);
    }
}
