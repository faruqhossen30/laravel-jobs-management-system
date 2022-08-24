<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug','description', 'logo', 'email', 'address', 'user_id', 'edit_user_id','status','ceo_name', 'mobile', 'ownership_type','industry', 'division_id', 'district_id','total_office','employ_range','google_map','facebook','twitter','youtube','linkedin','instagram',];
}
