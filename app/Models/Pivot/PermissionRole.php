<?php

namespace App\Models\Pivot;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PermissionRole extends Pivot
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'permission_id'
    ];

    public function permission()
    {
        return $this->belongsTo(Permission::class, 'permission_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where('id', $search)->orWhereHas('user', function ($q) {
                $q->where('name', 'like', '%' . request()->query('search') . '%');
            })->orWhereHas('permission', function ($q) {
                $q->where('name', 'like', '%' . request()->query('search') . '%');
            })->orWhereHas('role', function ($q) {
                $q->where('name', 'like', '%' . request()->query('search') . '%');
            });
        })->when($filters['permission'] ?? null, function ($query, $name) {
            $query->whereHas('permission', function ($q) {
                $q->where('id', request()->query('permission'));
            });
        })->when($filters['role'] ?? null, function ($query, $name) {
            $query->whereHas('role', function ($q) {
                $q->where('id', request()->query('role'));
            });
        });
    }
}
