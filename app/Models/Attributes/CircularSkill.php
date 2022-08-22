<?php

namespace App\Models\Attributes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircularSkill extends Model
{
    use HasFactory;
    protected $fillable = ['circular_id', 'skill_id'];
}
