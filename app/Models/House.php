<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'username'
    ];
    protected $table = 'houses';
    public function user(){
        return $this->belongsTo(User::class, 'username','username');
    }
}
