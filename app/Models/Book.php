<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'user_id',
        'document',
        'title',
        'description',
        
    ];
    public function user(){
        $this->belongsTo(User::class);
    }
}
