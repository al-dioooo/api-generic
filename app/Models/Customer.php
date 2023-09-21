<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',

        'name',

        'email',

        'bill_address',

        'npwp',
        'nik',

        'phone',
        'fax',
        'mobile',

        'note',

        'contact_person',
        'contact_number',

        'transaction_limit',

        'created_by',
        'updated_by',
        'deleted_by'
    ];

    protected $casts = [
        'phone' => 'json'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $value) {
            $query->where('name', 'like', '%' . $value . '%');
        })->when($filters['name'] ?? null, function ($query, $value) {
            $query->where('name', 'like', '%' . $value . '%');
        })->when($filters['phone'] ?? null, function ($query, $value) {
            $query->where('phone', 'like', '%' . $value . '%');
        })->when(($filters['from'] ?? null) && ($filters['to'] ?? null), function ($query) {
            $query->whereDate('created_at', '>=', request('from'))
                ->whereDate('created_at', '<=', request('to'));
        })->when($filters['trashed'] ?? null, function ($query, $trashed) {
            if ($trashed === 'with') {
                $query->withTrashed();
            } elseif ($trashed === 'only') {
                $query->onlyTrashed();
            }
        });
    }
}
