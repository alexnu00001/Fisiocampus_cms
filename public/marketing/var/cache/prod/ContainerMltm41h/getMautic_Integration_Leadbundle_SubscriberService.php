<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.integration.leadbundle.subscriber' shared service.

return $this->services['mautic.integration.leadbundle.subscriber'] = new \MauticPlugin\MauticCrmBundle\EventListener\LeadListSubscriber(${($_ = isset($this->services['mautic.helper.integration']) ? $this->services['mautic.helper.integration'] : $this->getMautic_Helper_IntegrationService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.model.list']) ? $this->services['mautic.lead.model.list'] : $this->getMautic_Lead_Model_ListService()) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
