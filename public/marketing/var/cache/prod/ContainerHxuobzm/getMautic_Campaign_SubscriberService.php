<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.campaign.subscriber' shared service.

return $this->services['mautic.campaign.subscriber'] = new \Mautic\CampaignBundle\EventListener\CampaignSubscriber(${($_ = isset($this->services['mautic.helper.ip_lookup']) ? $this->services['mautic.helper.ip_lookup'] : $this->getMautic_Helper_IpLookupService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.core.model.auditlog']) ? $this->services['mautic.core.model.auditlog'] : $this->getMautic_Core_Model_AuditlogService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.service.campaign']) ? $this->services['mautic.campaign.service.campaign'] : $this->load('getMautic_Campaign_Service_CampaignService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.core.service.flashbag']) ? $this->services['mautic.core.service.flashbag'] : $this->getMautic_Core_Service_FlashbagService()) && false ?: '_'});
