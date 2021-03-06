<?php

namespace Models\Tag;

use Models\Requisition\Requisition;
use Models\Requisition\Tender;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = true;
    protected $fillable = [
        "name"
    ];
    protected $guarded = [
        "created_at",
        "updated_at"
    ];
    protected $dates = [
        "created_at",
        "updated_at"
    ];
    protected $rules = [
        "name" => "required|max:45"
    ];

    public function tenders()
    {
        return $this->morphedByMany(Tender::class, 'taggable');
    }

    public function requisitions()
    {
        return $this->morphedByMany(Requisition::class, 'taggable');
    }
}
