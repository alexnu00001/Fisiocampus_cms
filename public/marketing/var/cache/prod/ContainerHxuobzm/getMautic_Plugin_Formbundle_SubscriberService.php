<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.plugin.formbundle.subscriber' shared service.

$this->services['mautic.plugin.formbundle.subscriber'] = $instance = new \Mautic\PluginBundle\EventListener\FormSubscriber();

$instance->setIntegrationHelper(${($_ = isset($this->services['mautic.helper.integration']) ? $this->services['mautic.helper.integration'] : $this->getMautic_Helper_IntegrationService()) && false ?: '_'});

return $instance;