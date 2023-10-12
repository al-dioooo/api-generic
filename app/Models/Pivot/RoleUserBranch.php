<?php

namespace App\Models\Pivot;

use App\Models\Role;
use App\Models\User;
use App\Models\Branch;
use Illuminate\Database\Eloquent\Relations\Pivot;

class RoleUserBranch extends Pivot
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'user_id',
        'branch_id'
    ];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $value) {
            $query->where('id', $value)->orWhereHas('user', function ($q) use ($value) {
                $q->where('name', 'like', '%' . $value . '%');
            })->orWhereHas('role', function ($q) use ($value) {
                $q->where('name', 'like', '%' . $value . '%');
            })->orWhereHas('branch', function ($q) use ($value) {
                $q->where('name', 'like', '%' . $value . '%');
            });
        })->when($filters['role'] ?? null, function ($query, $value) {
            $query->whereHas('role', function ($q) use ($value) {
                $q->where('id', $value);
            });
        })->when($filters['user'] ?? null, function ($query, $value) {
            $query->whereHas('user', function ($q) use ($value) {
                $q->where('id', $value);
            });
        })->when($filters['branch'] ?? null, function ($query, $value) {
            $query->whereHas('branch', function ($q) use ($value) {
                $q->where('id', $value);
            });
        });
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
