<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $primarykey = "group_id";
    public function getGroup()
    {
        return $this->hasOne('App\Models\Group', 'member_id');
    }
}
