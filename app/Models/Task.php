<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'project_id',
        'user_id',
        'company_id',
        'days',
        'hours',
    ];

    public function project(){
        return $this->belongsTo('App\Models\Project');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function company(){
        return $this->belongsTo('App\Models\Comapny');
    }
}
