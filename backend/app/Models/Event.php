<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'team_id' => 'required',
        'eventid' => 'nullable',
        'eventname' => 'required',
        'starttime' => 'nullable',
        'endtime' => 'nullable',
        'priority' => 'nullable',
        'memo' => 'nullable'
    );

    public function team()
    {
        return $this->belongsTo('App\Models\Team');
    }

    public function getData()
    {
        return $this->id . ': ' . $this->eventname . '(' . $this->team->teamid . ')';
    }
}
