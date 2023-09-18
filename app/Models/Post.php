<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'slug',
    //     'body',
    //     'excerpt'
    // ];

    protected $guarded = ['id']; // semua boleh diubah kecuali id

    protected $with = ['author', 'category'];

    public function scopeFilter(Builder $query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        /** WHEN ITU SAMA DENGAN IF CUMA INI BISA DI COLLECTION */
        $query->when($filters['search'] ?? false, function (Builder $query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function (Builder $query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                return $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, function (Builder $query, $author) {
            return $query->whereHas('author', function ($query) use ($author) {
                return $query->where('username', $author);
            });
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}