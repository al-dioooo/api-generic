<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Configuration extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'application_id',

        'key',
        'value'
    ];

    public function getValueAttribute($value)
    {
        $decoded = json_decode($value);

        if ($decoded !== null) {
            return $decoded;
        } else {
            return $value;
        }
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where('key', 'like', '%' . $search . '%');
        })->when($filters['application_id'] ?? null, function ($query, $value) {
            $query->where('application_id', $value);
        })->when(($filters['from'] ?? null) && ($filters['to'] ?? null), function ($query) {
            $query->whereDate('created_at', '>=', request('from'))
                ->whereDate('created_at', '<=', request('to'));
        });
    }
}
