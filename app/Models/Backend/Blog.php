<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'slug',
        'cover',
        'headline',
        'contact',
        'contact',
        'category',
        'added_by',
        'updated_by',
    ];

    public function createdAt()
    {
        $result = date('Y-m-d H:i:s',strtotime($this->created_at));
        return $result;
    }

}
