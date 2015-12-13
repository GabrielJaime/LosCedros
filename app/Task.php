<?php

namespace LosCedros;

use LosCedros\Models\Usuario;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tasks';

    protected $fillable = ['name', 'photo'];

    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(Usuario::class);
    }
}
