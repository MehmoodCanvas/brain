<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communitypage extends Model
{
    use HasFactory;
    protected $table='communitypages';
    protected $primaryKey = 'communitypages_id';
}
