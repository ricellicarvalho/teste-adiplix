<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    /** @use HasFactory<\Database\Factories\PeopleFactory> */
    use HasFactory;

    protected $table = 'people';

    protected $fillable = ['name', 'email'];

    // Relacionamento muitos para muitos com Task
    public function tasks()
    {
        return $this->belongsToMany(Task::class, 'task_person', 'person_id', 'task_id')->withTimestamps();
    }
}
