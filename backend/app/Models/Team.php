<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function getData()
    {
        return $this->id . ': ' . $this->teamname . ' (' . $this->color . ')';
    }
}
