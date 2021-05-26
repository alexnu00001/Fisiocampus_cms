<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.message.processor.replier' shared service.

return $this->services['mautic.message.processor.replier'] = new \Mautic\EmailBundle\MonitoredEmail\Processor\Reply(${($_ = isset($this->services['mautic.email.repository.stat']) ? $this->services['mautic.email.repository.stat'] : $this->load('getMautic_Email_Repository_StatService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.message.search.contact']) ? $this->services['mautic.message.search.contact'] : $this->load('getMautic_Message_Search_ContactService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.model.lead']) ? $this->services['mautic.lead.model.lead'] : $this->getMautic_Lead_Model_LeadService()) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.mautic']) ? $this->services['monolog.logger.mautic'] : $this->getMonolog_Logger_MauticService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.tracker.contact']) ? $this->services['mautic.tracker.contact'] : $this->getMautic_Tracker_ContactService()) && false ?: '_'});