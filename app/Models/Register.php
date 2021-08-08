<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use MultiTenantModelTrait;
    use Auditable;
    use HasFactory;

    public $table = 'registers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'studentname',
        'studentid',
        'email',
        'phone',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
