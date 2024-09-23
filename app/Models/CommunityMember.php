<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommunityMember extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'community_members';
    protected $fillable = [
        'community_id',
        'nisn',
        'name',
        'vocation_id',
        'class_name',
        'class_grade',
        'active',
    ];
}
