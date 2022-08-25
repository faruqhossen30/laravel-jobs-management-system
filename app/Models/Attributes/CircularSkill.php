<?php

namespace App\Models\Attributes;

use App\Models\Skill;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircularSkill extends Model
{
    use HasFactory;
    protected $fillable = ['circular_id', 'skill_id'];

    public function skill()
    {
        return $this->hasOne(Skill::class, 'id', 'skill_id');
    }
}
