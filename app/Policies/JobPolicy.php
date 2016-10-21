<?php

namespace App\Policies;

use App\User;
use App\Job;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the job.
     *
     * @param  User  $user
     * @param  Job  $job
     * @return mixed
     */
    public function view(User $user, Job $job)
    {
        return $user->id === $job->user_id;
    }

    /**
     * Determine whether the user can create jobs.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the job.
     *
     * @param  User  $user
     * @param  Job  $job
     * @return mixed
     */
    public function update(User $user, Job $job)
    {
        return $user->id === $job->user_id;
    }

    public function edit(User $user, Job $job){
        return $user->id === $job->user_id;
    }
    /**
     * Determine whether the user can delete the job.
     *
     * @param  User  $user
     * @param  Job  $job
     * @return mixed
     */
    public function delete(User $user, Job $job)
    {
        return $user->id === $job->user_id;
    }
}
