<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $table = 'equipments';
    protected $primaryKey = 'EquipmentID'; 
    protected $fillable = [
        'EquipmentID',
        'BrandID',
        'EquipmentTypeID',
        'EquipmentModelNumber',
        'EquipmentDescription',
        'EquipmentQuantity',
        'PartID'
    ];

    public function requests()
    {
        return $this->hasMany(Requests::class, 'EquipmentDescription', 'EquipmentID');
    }
}
