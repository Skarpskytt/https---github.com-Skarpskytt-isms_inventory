<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipment;
use App\Models\Bureau; // Ensure that the Bureau class exists in the specified namespace


class Requests extends Model
{
    use HasFactory;

    protected $table = 'requests';

    protected $fillable = [
        'RequestID',
        'RequestType',
        'Criteria',
        'RequesterName',
        'RequestDetail',
        'Qty',
        'EquipmentID',
        'Status',
        'ReceivedBy',
        'DateNeeded',
        'ReturnDate',
        'Remarks',
        'Proof',
        'BureauID'
    ];

    // Define relationship with Equipment
    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'EquipmentID', 'EquipmentID');
    }

    // Define relationship with Bureau
    public function bureau()
    {
        return $this->belongsTo(Bureau::class, 'BureauID');
    }
}
