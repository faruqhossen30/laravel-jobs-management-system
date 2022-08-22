<?php

namespace App\Models\Attributes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircularJobindustry extends Model
{
    use HasFactory;
    protected $fillable = ['circular_id', 'job_industry_id'];
}
