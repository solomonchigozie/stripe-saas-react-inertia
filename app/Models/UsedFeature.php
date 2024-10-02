<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsedFeature extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'feature_id','user_id','credits'
    ];

    //new laravel 11 feature, convert json to array and vice-versa
    public function casts() : array{
        return[
            'data'=>'array',
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function feature(){
        return $this->belongsTo(Feature::class);
    }


}
