<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.campaign.membership.remover' shared service.

return $this->services['mautic.campaign.membership.remover'] = new \Mautic\CampaignBundle\Membership\Action\Remover(${($_ = isset($this->services['mautic.campaign.repository.lead']) ? $this->services['mautic.campaign.repository.lead'] : $this->load('getMautic_Campaign_Repository_LeadService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.repository.lead_event_log']) ? $this->services['mautic.campaign.repository.lead_event_log'] : $this->load('getMautic_Campaign_Repository_LeadEventLogService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.template.date']) ? $this->services['mautic.helper.template.date'] : $this->load('getMautic_Helper_Template_DateService.php')) && false ?: '_'});
