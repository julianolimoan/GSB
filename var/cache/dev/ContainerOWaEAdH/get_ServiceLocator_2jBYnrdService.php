<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.2jBYnrd' shared service.

return $this->privates['.service_locator.2jBYnrd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\VisiteurController::connectionVisiteur' => ['privates', '.service_locator.VpK.6BC', 'get_ServiceLocator_VpK_6BCService.php', true],
    'App\\Controller\\VisiteurController:connectionVisiteur' => ['privates', '.service_locator.VpK.6BC', 'get_ServiceLocator_VpK_6BCService.php', true],
], [
    'App\\Controller\\VisiteurController::connectionVisiteur' => '?',
    'App\\Controller\\VisiteurController:connectionVisiteur' => '?',
]);
