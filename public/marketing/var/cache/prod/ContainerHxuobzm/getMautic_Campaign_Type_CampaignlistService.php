<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.campaign.type.campaignlist' shared service.

return $this->services['mautic.campaign.type.campaignlist'] = new \Mautic\CampaignBundle\Form\Type\CampaignListType(${($_ = isset($this->services['mautic.campaign.model.campaign']) ? $this->services['mautic.campaign.model.campaign'] : $this->load('getMautic_Campaign_Model_CampaignService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.security']) ? $this->services['mautic.security'] : $this->getMautic_SecurityService()) && false ?: '_'});
