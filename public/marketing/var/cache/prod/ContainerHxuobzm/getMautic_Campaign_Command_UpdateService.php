<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.campaign.command.update' shared service.

return $this->services['mautic.campaign.command.update'] = new \Mautic\CampaignBundle\Command\UpdateLeadCampaignsCommand(${($_ = isset($this->services['mautic.campaign.repository.campaign']) ? $this->services['mautic.campaign.repository.campaign'] : $this->load('getMautic_Campaign_Repository_CampaignService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.membership.builder']) ? $this->services['mautic.campaign.membership.builder'] : $this->load('getMautic_Campaign_Membership_BuilderService.php')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.mautic']) ? $this->services['monolog.logger.mautic'] : $this->getMonolog_Logger_MauticService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.template.formatter']) ? $this->services['mautic.helper.template.formatter'] : $this->load('getMautic_Helper_Template_FormatterService.php')) && false ?: '_'});