<?php

/**
 * @version 1.0
 * @author [Your Name]
 *
 * Clase Get (Módulo RPC)
 * Proporciona métodos para obtener datos a través de un esquema RPC (Remote Procedure Call).
 * Este es un ejemplo y puede ser extendido o modificado.
 */

namespace Modules\RPC;

class Get
{
    public function GetAll()
    {
        echo json_encode(["message" => "This is the GetAll module"]);
    }

    public function GetById($id)
    {
        echo json_encode(["message" => "This is the GetById module: ID => $id"]);
    }

    public function Static()
    {
        echo json_encode(["message" => "Static"]);
    }
}
