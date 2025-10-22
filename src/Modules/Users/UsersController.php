<?php

/**
 * @version 1.0
 * @author [Your Name]
 *
 * Clase UsersController (Módulo Users)
 * Controlador para gestionar las operaciones relacionadas con los usuarios.
 */

namespace Modules\Users;

class UsersController
{
    public function index()
    {
        echo json_encode(["message" => "This is the Users module"]);
    }
}
