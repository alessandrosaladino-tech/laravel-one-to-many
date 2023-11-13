<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'slug', 'thumb', 'description', 'type', 'github_link', 'public_link', 'release_date'];

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public static function generateSlug($string)
    {
        return Str::slug($string, '-');
    }
}
