<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'day',
        'time_7_9_am',
        'time_7_9_am_course',
        'time_9_11_am',
        'time_9_11_am_course',
        'time_1_3_pm',
        'time_1_3_pm_course',
        'time_3_5_pm',
        'time_3_5_pm_course'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function time7_9AmTeacher()
    {
        return $this->belongsTo(User::class, 'time_7_9_am');
    }

    public function time7_9AmCourse()
    {
        return $this->belongsTo(Course::class, 'time_7_9_am_course');
    }

    public function time9_11AmTeacher()
    {
        return $this->belongsTo(User::class, 'time_9_11_am');
    }

    public function time9_11AmCourse()
    {
        return $this->belongsTo(Course::class, 'time_9_11_am_course');
    }

    public function time1_3PmTeacher()
    {
        return $this->belongsTo(User::class, 'time_1_3_pm');
    }

    public function time1_3PmCourse()
    {
        return $this->belongsTo(Course::class, 'time_1_3_pm_course');
    }

    public function time3_5PmTeacher()
    {
        return $this->belongsTo(User::class, 'time_3_5_pm');
    }

    public function time3_5PmCourse()
    {
        return $this->belongsTo(Course::class, 'time_3_5_pm_course');
    }

    public function teacher7_9()
    {
        return $this->belongsTo(User::class, 'time_7_9_am');
    }

    public function course7_9()
    {
        return $this->belongsTo(Course::class, 'time_7_9_am_course');
    }

    public function teacher9_11()
    {
        return $this->belongsTo(User::class, 'time_9_11_am');
    }

    public function course9_11()
    {
        return $this->belongsTo(Course::class, 'time_9_11_am_course');
    }

    public function teacher1_3()
    {
        return $this->belongsTo(User::class, 'time_1_3_pm');
    }

    public function course1_3()
    {
        return $this->belongsTo(Course::class, 'time_1_3_pm_course');
    }

    public function teacher3_5()
    {
        return $this->belongsTo(User::class, 'time_3_5_pm');
    }

    public function course3_5()
    {
        return $this->belongsTo(Course::class, 'time_3_5_pm_course');
    }
}
