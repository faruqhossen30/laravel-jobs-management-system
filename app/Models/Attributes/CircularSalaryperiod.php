<?php

namespace App\Models\Attributes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircularSalaryperiod extends Model
{
    use HasFactory;
    protected $fillable = ['circular_id', 'salary_period_id'];
}
