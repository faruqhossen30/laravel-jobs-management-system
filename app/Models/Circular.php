<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circular extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'description', 'thumbnail', 'category_id', 'education', 'skill', 'job_industry', 'career_label', 'salary_period', 'job_type', 'start_date', 'end_date', 'user_id', 'company_id', 'organization_name', 'organization_website', 'apply_link', 'vacancy'];

    protected $dates = ['start_date', 'end_date'];
}
