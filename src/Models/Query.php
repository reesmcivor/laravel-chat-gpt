<?php

namespace ReesMcIvor\ChatGPT\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;
use ReesMcIvor\ChatGPT\Database\Factories\QueryFactory;

class Query extends Model
{
    use HasFactory;

    protected $fillable = [
        'query',
    ];

    protected static function newFactory()
    {
        return new QueryFactory();
    }
}
