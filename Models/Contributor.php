<?php declare(strict_types=1);

namespace  Simpler\Board\Models;

use Illuminate\Foundation\Auth\User as AuthenticateAble;
use Illuminate\Notifications\Notifiable;
use Laravel\Airlock\HasApiTokens;

class Contributor extends AuthenticateAble
{
    use HasApiTokens, Notifiable;

    protected $table = 'contributors';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
