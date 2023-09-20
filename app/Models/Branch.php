<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'code',

        'contact',
        'address'
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user_branch')->withPivot(['user_id']);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user_branch')->withPivot(['role_id']);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%');
        })->when($filters['name'] ?? null, function ($query, $name) {
            $query->where('name', 'like', '%' . $name . '%');
        })->when($filters['contact'] ?? null, function ($query, $contact) {
            $query->where('contact', 'like', '%' . $contact . '%');
        })->when($filters['address'] ?? null, function ($query, $address) {
            $query->where('address', 'like', '%' . $address . '%');
        })->when(($filters['from'] ?? null) && ($filters['to'] ?? null), function ($query) {
            $query->whereDate('created_at', '>=', request('from'))
                ->whereDate('created_at', '<=', request('to'));
        });
    }
}
