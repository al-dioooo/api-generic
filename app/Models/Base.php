<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Base extends Model
{
    protected $primaryKeyPrefix = "";

    public static function boot()
    {
        parent::boot();

        static::creating(function (self $self) {
            $prefix = $self->primaryKeyPrefix;

            $latest = self::lockForUpdate()->withTrashed()->latest()->first();
            $date = date('Ymdhi');
            $number = Str::padLeft((int)Str::remove("{$prefix}_{$date}", @$latest->id ?? 0) + 1, 4, 0);
            $id = "{$prefix}_{$date}{$number}";

            $self->forceFill([
                'id' => $id,
                'record_status' => 'N'
            ]);
        });

        static::updating(function (self $self) {
            $self->forceFill([
                'record_status' => 'U'
            ]);
        });

        static::deleting(function (self $self) {
            $self->forceFill([
                'record_status' => 'D'
            ]);
        });
    }
}
