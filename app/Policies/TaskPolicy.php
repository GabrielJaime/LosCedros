<?php

namespace LosCedros\Policies;

use LosCedros\Models\Usuario;
use LosCedros\Task;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can delete the given task.
     *
     * @param  Usuario  $user
     * @param  Task  $task
     * @return bool
     */
    public function destroy(Usuario $user, Task $task)
    {
        return $user->id === $task->usuario_id;
    }
}
