<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;

    protected $fillable = ['title', 'description', 'status'];

    // Relacionamento muitos para muitos com People
    public function people()
    {
        return $this->belongsToMany(People::class, 'task_person', 'task_id', 'person_id')->withTimestamps();
    }
}
