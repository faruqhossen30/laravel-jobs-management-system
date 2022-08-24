<?php

namespace App\Models;

use App\Models\Attributes\CircularCareerlabel;
use App\Models\Attributes\CircularEducation;
use App\Models\Attributes\CircularJobindustry;
use App\Models\Attributes\CircularJobtype;
use App\Models\Attributes\CircularSalaryperiod;
use App\Models\Attributes\CircularSkill;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circular extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'description', 'thumbnail', 'category_id', 'education', 'skill', 'job_industry', 'career_label', 'salary_period', 'job_type', 'start_date', 'end_date', 'user_id', 'company_id', 'organization_name', 'organization_website', 'apply_link', 'vacancy','min_salary','max_salary'];

    protected $dates = ['start_date', 'end_date'];

    public function educations()
    {
        return $this->hasMany(CircularEducation::class);
    }
    public function skills()
    {
        return $this->hasMany(CircularSkill::class);
    }
    public function jobindustries()
    {
        return $this->hasMany(CircularJobindustry::class);
    }
    public function careerlabels()
    {
        return $this->hasMany(CircularCareerlabel::class);
    }
    public function salaryperiods ()
    {
        return $this->hasMany(CircularSalaryperiod::class);
    }
    public function jobtypes()
    {
        return $this->hasMany(CircularJobtype::class);
    }
  
}
