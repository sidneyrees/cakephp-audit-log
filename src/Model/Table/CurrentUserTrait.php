<?php

namespace AuditLog\Model\Table;

use Cake\Http\ServerRequestFactory;

trait CurrentUserTrait
{

    /**
     * Returns data about the current logged user
     *
     * @return array
     */
    public function currentUser()
    {
        $request = ServerRequestFactory::fromGlobals();
        $session = $request->session();
        return [
            'id' => $session->read('Auth.User.id'),
            'ip' => $request->env('REMOTE_ADDR'),
            'url' => $request->getRequestTarget(),
            'description' => $session->read('Auth.User.username'),
        ];
    }

}