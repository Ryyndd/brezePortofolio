<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['pro_image' ,'pro_title' , 'pro_slug' , 'pro_category', 'pro_description', 'pro_preview' ,'pro_source' ];

    const CATEGORIES = [ 'mobile' , 'website' , 'dekstop' , 'api' , 'design' ];

    public static function getCategories() 
    {
        return self::CATEGORIES;
    }

    public function techstack()
    {
        return $this->belongsToMany(Techstack::class, 'project_stacks', 'project_id', 'techstack_id')->withTimestamps();
    }
}
