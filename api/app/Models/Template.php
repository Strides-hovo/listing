<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public $timestamps = false;

    public function group()
    {
        return $this->belongsTo(TemplateGroup::class,'template_group_id');
    }


    public function fields():Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value, 1),
            set: fn($value) => json_encode($value, JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK ),
        );
    }


    public function defaultFields() : array
    {
        return [

        ];
    }

}
