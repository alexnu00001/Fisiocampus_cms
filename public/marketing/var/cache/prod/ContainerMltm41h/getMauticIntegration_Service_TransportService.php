<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic_integration.service.transport' shared service.

return $this->services['mautic_integration.service.transport'] = new \MauticPlugin\MauticCrmBundle\Services\Transport(${($_ = isset($this->services['mautic_integration.pipedrive.guzzle.client']) ? $this->services['mautic_integration.pipedrive.guzzle.client'] : ($this->services['mautic_integration.pipedrive.guzzle.client'] = new \GuzzleHttp\Client())) && false ?: '_'});