<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.campaign.dispatcher.action' shared service.

return $this->services['mautic.campaign.dispatcher.action'] = new \Mautic\CampaignBundle\Executioner\Dispatcher\ActionDispatcher(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.mautic']) ? $this->services['monolog.logger.mautic'] : $this->getMonolog_Logger_MauticService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.scheduler']) ? $this->services['mautic.campaign.scheduler'] : $this->load('getMautic_Campaign_SchedulerService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.helper.notification']) ? $this->services['mautic.campaign.helper.notification'] : $this->load('getMautic_Campaign_Helper_NotificationService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.campaign.legacy_event_dispatcher']) ? $this->services['mautic.campaign.legacy_event_dispatcher'] : $this->load('getMautic_Campaign_LegacyEventDispatcherService.php')) && false ?: '_'});