<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Techstack extends Model
{
    use HasFactory;

    protected $fillable = ['tech_image' ,'tech_name' , 'tech_color' , 'tech_fullname', 'tech_slug' , 'tech_description'];
    
    // Enum untuk warna
    const COLORS = [
        'red', 'orange', 'amber', 'yellow', 'lime', 'green', 
        'emerald', 'teal', 'cyan', 'sky', 'blue', 'indigo', 
        'violet', 'purple', 'fuchsia', 'pink', 'rose', 'gray'
    ];

    // Method untuk mendapatkan warna
    public static function getColors()
    {
        return self::COLORS;
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($techstack) {
            // Generate slug from tech_fullname
            $techstack->tech_slug = Str::slug($techstack->tech_fullname);
        });

        static::updating(function ($techstack) {
            // Update slug if fullname changes
            $techstack->tech_slug = Str::slug($techstack->tech_fullname);
        });
        
    }

    public function project()
    {
        return $this->belongsToMany(Project::class, 'project_stacks', 'techstack_id', 'project_id')->withTimestamps();
    }

    

}
