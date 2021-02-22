<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use App\Scopes\ScopeTeam;

class Team extends Model
{
    public function getData()
    {
        return $this->id . ': ' . $this->teamname . ' (' . $this->color . ')';
    }

    public function scopeTeamNameEqual($query, $str)
    {
        return $query->where('teamname', $str);
    }

    public function scopeIdGreaterThan($query, $n){
        return $query->where('id', '>=', $n);
    }

    public function scopeIdLessThan($query, $n)
    {
        return $query->where('id', '<=', $n);
    }

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new ScopeTeam);
        // static::addGlobalScope('ScopeId', function (Builder $builder) {
        //     $builder->where('id', '>', 2);
        // });
    }
}
