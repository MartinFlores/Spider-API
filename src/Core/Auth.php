<?php

/**
 * @version 1.0
 * @author [Your Name]
 *
 * Clase Auth
 * Proporciona métodos para la autenticación y autorización en la API.
 *
 * Funciones principales:
 * - Validar tokens de acceso.
 * - Verificar credenciales de usuario.
 * - Gestionar niveles de permiso.
 */

namespace Core;

class Auth
{
    public static function check($allowedRoles)
    {
        // TODO: Replace this with a real authentication system (e.g., JWT)
        $userRole = self::getUserRole();

        if (!in_array($userRole, $allowedRoles)) {
            http_response_code(403);
            echo json_encode(["message" => "Forbidden"]);
            exit;
        }
    }

    private static function getUserRole()
    {
        // For demonstration purposes, we'll get the role from a header.
        // In a real application, you would decode a JWT or use a session.
        $headers = getallheaders();
        return $headers['x-user-role'] ?? 'GUEST';
    }
}
