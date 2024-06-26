<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Tag;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function employer() : BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function addTag($name) : void
    {
        $tag = Tag::firstOrCreate(['name' => $name]);
        $this->tags()->attach($tag->id);
    }

    public function tags () : BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
