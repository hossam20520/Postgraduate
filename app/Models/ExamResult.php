<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{
    use Auditable;
    use HasFactory;

    public $table = 'exam_results';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'student_id',
        'math',
        'database',
        'programming_1',
        'software_engineer',
        'computer_science',
        'total',
        'rating',
        'database_2',
        'programming_2',
        'statistics',
        'selected',
        'project',
        'total_p',
        'overall_rating',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
