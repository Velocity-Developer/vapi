<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $fillable = [
        'domain',
        'ip',
        'license_key',
        'wp_version',
        'theme_version',
        'addons_version',
        'php_version',
        'status',
    ];
}
