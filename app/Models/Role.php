<?php

namespace App\Models;

use App\Models\Pivot\PermissionRole;
use App\Models\Pivot\RoleUserBranch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',

        'application_id',

        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_role')->using(PermissionRole::class);
    }

    public function groupedPermissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_role')->using(PermissionRole::class)->groupBy('page');
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'role_user_branch')->using(RoleUserBranch::class)->withPivot(['user_id']);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user_branch')->using(RoleUserBranch::class)->withPivot(['branch_id']);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%');
        })->when($filters['name'] ?? null, function ($query, $name) {
            $query->where('name', 'like', '%' . $name . '%');
        })->when(($filters['from'] ?? null) && ($filters['to'] ?? null), function ($query) {
            $query->whereDate('created_at', '>=', request('from'))
                ->whereDate('created_at', '<=', request('to'));
        })->when($filters['application_id'] ?? null, function ($query, $application) {
            $query->where('application_id', $application);
        });
    }
}
