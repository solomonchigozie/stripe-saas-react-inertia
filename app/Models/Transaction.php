<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable=[
        'status','price','credits','session_id','user_id','package_id'
    ];

    //define relation from transaction to user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
