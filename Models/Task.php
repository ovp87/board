<?php declare(strict_types=1);

namespace  Simpler\Board\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
