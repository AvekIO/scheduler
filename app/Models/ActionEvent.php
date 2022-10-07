<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionEvent extends Model
{
    use HasFactory;

    public const UPDATED_AT = null;

    protected $table = 'action_event';
}
