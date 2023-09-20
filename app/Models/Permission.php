<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'application_id',
        'name',
        'page',
        'action',
        'node',
        'description',
        'is_active'
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['application_id'] ?? null, function ($query, $application) {
            $query->where('application_id', $application);
        });
    }
}
