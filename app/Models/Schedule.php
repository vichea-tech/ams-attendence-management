<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'room_id',
        'day',
        'course_id', 
        'time_7_9_am',
        'time_9_11_am',
        'time_1_3_pm',
        'time_3_5_pm',
    ];

    /**
     * Relationship: The room associated with the schedule.
     */
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Relationship: The user scheduled for the 7-9 AM slot.
     */
    public function time7_9amUser()
    {
        return $this->belongsTo(User::class, 'time_7_9_am');
    }

    /**
     * Relationship: The user scheduled for the 9-11 AM slot.
     */
    public function time9_11amUser()
    {
        return $this->belongsTo(User::class, 'time_9_11_am');
    }

    /**
     * Relationship: The user scheduled for the 1-3 PM slot.
     */
    public function time1_3pmUser()
    {
        return $this->belongsTo(User::class, 'time_1_3_pm');
    }

    /**
     * Relationship: The user scheduled for the 3-5 PM slot.
     */
    public function time3_5pmUser()
    {
        return $this->belongsTo(User::class, 'time_3_5_pm');
    }
}
