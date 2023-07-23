<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name'

    ];
    protected $table = 'floors';
    public function house(){
        return $this->belongsTo(House::class, 'floorId','floorId');
    }
}
