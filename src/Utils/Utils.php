<?php

/**
 * @version 1.0
 * @author Spider API
 *
 * Clase Utils
 *
 * Proporciona un conjunto de funciones de utilidad estáticas que pueden ser
 * utilizadas en cualquier parte de la aplicación.
 */

class Utils
{
    public static function Json(array $obj)
    {
        header("Content-type: application/json;charset=utf8");
        if ($obj === null)
            $obj = [];
        echo json_encode($obj);
        exit();
    }


    public static function sendWhatsapp(string $number, string $message): bool
    {
        $url = 'https://tour-knife-gone-deaths.trycloudflare.com/sendMessage';

        $payload = json_encode([
            'number' => $number,
            'message' => $message,
        ]);

        $ch = curl_init($url);

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json'
            ],
            CURLOPT_POSTFIELDS => $payload,
        ]);

        $response = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        // Puedes registrar el error o la respuesta si lo deseas
        if ($error) {
            error_log("Error en sendWhatsapp: $error");
            return false;
        }

        // Validar que la respuesta sea correcta
        if ($response === false) {
            return false;
        }

        return true;
    }
}
