<?php

namespace App\Policies;

use App\Models\Record;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RecordPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any records.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        // Example: Allow all authenticated users to view any records
        return $user->is_authenticated;
    }

    /**
     * Determine whether the user can view a specific record.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Record  $record
     * @return mixed
     */
    public function view(User $user, Record $record)
    {
        // Allow viewing if the user owns the record
        return $user->id === $record->user_id;
    }

    /**
     * Determine whether the user can create records.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        // Example: Allow all authenticated users to create records
        return $user->is_authenticated;
    }

    /**
     * Determine whether the user can update the record.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Record  $record
     * @return mixed
     */
    public function update(User $user, Record $record)
    {
        // Allow updating if the user owns the record
        return $user->id === $record->user_id;
    }

    /**
     * Determine whether the user can delete the record.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Record  $record
     * @return mixed
     */
    public function delete(User $user, Record $record)
    {
        // Allow deleting if the user owns the record
        return $user->id === $record->user_id;
    }

    /**
     * Determine whether the user can restore the record.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Record  $record
     * @return mixed
     */
    public function restore(User $user, Record $record)
    {
        // Example: Allow restoring if the user owns the record
        return $user->id === $record->user_id;
    }

    /**
     * Determine whether the user can permanently delete the record.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Record  $record
     * @return mixed
     */
    public function forceDelete(User $user, Record $record)
    {
        // Example: Allow permanent deletion if the user owns the record
        return $user->id === $record->user_id;
    }
}