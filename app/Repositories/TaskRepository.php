<?php

namespace LosCedros\Repositories;

use LosCedros\Models\Usuario;
use LosCedros\Task;

class TaskRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  Usuario  $user
     * @return Collection
     */
    public function forUser(Usuario $user)
    {
        return Task::where('usuario_id', $user->id)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}
