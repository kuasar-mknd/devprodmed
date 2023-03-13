<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'start_meeting',
        'end_meeting',
        'people_list_id',
    ];

    public function peopleList()
    {
        return $this->belongsTo(PeopleList::class);
    }

}
