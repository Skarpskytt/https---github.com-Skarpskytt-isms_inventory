<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bureau extends Model
{
    use HasFactory;

    protected $table = 'bureau';
    protected $primaryKey = 'BureauID';

    protected $fillable = [
        'BureauID',
        'name',
        'description'
    ];

    public function requests()
    {
        return $this->hasMany(Requests::class, 'BureauID', 'BureauID');
    }
}