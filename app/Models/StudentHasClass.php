<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentHasClass extends Model
{
    use HasFactory;

    public function students()
    {
        // Suggested code may be subject to a license. Learn more: ~LicenseLog:247923137.
        return $this->belongsTo(Student::class, 'students_id', 'id');
    }
    public function homeroom()
    {
        return $this->belongsTo(HomeRoom::class, 'homerooms_id', 'id');
    }

    public function periode()
    {
        // Suggested code may be subject to a license. Learn more: ~LicenseLog:2307970792.
        return $this->belongsTo(Periode::class, 'periode_id', 'id');
    }
}
