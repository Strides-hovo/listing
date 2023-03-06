<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];


    public function posts():HasMany
    {
        return $this->hasMany(Post::class);
    }


    public function group()
    {
        return $this->hasMany(TemplateGroup::class)->select('id','name','category_id');
    }


    public function templates()
    {
        return $this->hasManyThrough(Template::class, TemplateGroup::class);
    }

    public static function tree(): array
    {
        $data = self::get()->toArray();
        return  getTree($data);
    }


    public static function defaultData()
    {
        $data = [
            "Առք / Վաճառք",
            "Աշխատանք",
            "Ծառայություններ"
        ];
    }





    public function rest($data, $parent_id = 0, $template = null ){

        $res = [];
        foreach ($data as $datum){
            $res[] = [
                'name' => $datum,
                'parent_id' => $parent_id,
                'template' => $template
            ];
        }

        return $res;
    }

}


