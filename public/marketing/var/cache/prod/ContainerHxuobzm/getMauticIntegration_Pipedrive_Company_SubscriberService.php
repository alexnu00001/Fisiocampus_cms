<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic_integration.pipedrive.company.subscriber' shared service.

return $this->services['mautic_integration.pipedrive.company.subscriber'] = new \MauticPlugin\MauticCrmBundle\EventListener\CompanySubscriber(${($_ = isset($this->services['mautic.helper.integration']) ? $this->services['mautic.helper.integration'] : $this->getMautic_Helper_IntegrationService()) && false ?: '_'}, ${($_ = isset($this->services['mautic_integration.pipedrive.export.company']) ? $this->services['mautic_integration.pipedrive.export.company'] : $this->load('getMauticIntegration_Pipedrive_Export_CompanyService.php')) && false ?: '_'});
