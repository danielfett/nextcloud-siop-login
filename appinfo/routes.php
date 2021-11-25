<?php
/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\OIDCLogin\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */
return [
    'routes' => [
        ['name' => 'login#oidc', 'url' => '/oidc', 'verb' => 'GET'],
        ['name' => 'login#callback', 'url' => '/oidc/callback', 'verb' => 'GET'],
        ['name' => 'login#backend', 'url' => '/oidc/callback', 'verb' => 'POST'],
        ['name' => 'login#polling', 'url' => '/oidc/polling', 'verb' => 'GET'],
        ['name' => 'login#requestObject', 'url' => '/oidc/requestobject/{id}', 'verb' => 'GET'],
    ]
];
