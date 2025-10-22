<?php

/**
 * @version 1.0
 * @author [Your Name]
 *
 * Clase Router
 * Maneja el enrutamiento de las solicitudes HTTP a los controladores apropiados.
 *
 * Métodos clave:
 * - add: Registra una nueva ruta.
 * - dispatch: Analiza la URL solicitada y ejecuta el controlador correspondiente.
 */

namespace Core;

class Router
{
    private $routes = [];

    public function get($uri, $config)
    {
        $this->addRoute('GET', $uri, $config);
    }

    public function post($uri, $config)
    {
        $this->addRoute('POST', $uri, $config);
    }

    private function addRoute($method, $uri, $config)
    {
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $config['use'],
            'allowedRoles' => $config['allowedRoles'] ?? []
        ];
    }

    public function run()
    {

        try {


            $basePath = dirname($_SERVER['SCRIPT_NAME']);
            $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            $uri = trim(str_replace($basePath, '', $requestUri), '/');
            $method = $_SERVER['REQUEST_METHOD'];

            // Sort routes to prioritize static routes over dynamic ones
            usort($this->routes, function ($a, $b) {
                $aParams = substr_count($a['uri'], ':');
                $bParams = substr_count($b['uri'], ':');
                return $aParams - $bParams;
            });

            foreach ($this->routes as $route) {
                $pattern = preg_replace('/:\w+/', '(\w+)', $route['uri']);
                if ($route['method'] === $method && preg_match("#^$pattern$#", $uri, $matches)) {
                    array_shift($matches);
                    $params = $matches;
                    if (!empty($route['allowedRoles'])) {
                        Auth::check($route['allowedRoles']);
                    }

                    $controllerParts = explode('@', $route['controller']);
                    $controllerName = 'Modules\\' . $controllerParts[0];
                    $methodName = $controllerParts[1];
                    $controller = new $controllerName();
                    call_user_func_array([$controller, $methodName], $params);
                    return;
                }
            }

            http_response_code(404);
            echo json_encode(["message" => "Not Found"]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
