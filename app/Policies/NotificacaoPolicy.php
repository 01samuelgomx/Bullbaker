<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Notificacao;
use App\Models\Usuario;

class NotificacaoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Notificacao  $notificacao
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Usuario $usuario, Notificacao $notificacao)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Notificacao  $notificacao
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Usuario $usuario, Notificacao $notificacao)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Notificacao  $notificacao
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Usuario $usuario, Notificacao $notificacao)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Notificacao  $notificacao
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Usuario $usuario, Notificacao $notificacao)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Notificacao  $notificacao
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Usuario $usuario, Notificacao $notificacao)
    {
        //
    }
}
