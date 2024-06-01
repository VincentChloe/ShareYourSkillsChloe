<?php

namespace App\Policies;

use App\Models\AvisModel;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AvisPolicy
{
    /**
     * Determine whether the user can view any models.
     */

    public function viewAny(User $user): bool
    {
        // Dans cet exemple, on autorise tous les utilisateurs à voir tous les avis
        return true;
    }
    
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, AvisModel $avisModel): bool
    {
        // Dans cet exemple, on autorise tous les utilisateurs à voir un avis spécifique
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, AvisModel $avisModel): bool
    {
        return $user->id === $avisModel->id_utilisateur;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, AvisModel $avisModel): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, AvisModel $avisModel): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, AvisModel $avisModel): bool
    {
        //
    }
}
