<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'building_id',
        'name',
        'floor',
        'status',
        'created_by',
    ];

    /**
     * Get the building associated with the room.
     */
    public function building()
    {
        return $this->belongsTo(Building::class);
    }

    /**
     * Get the user who created the room.
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
