<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.lead.timeline_events.subscriber' shared service.

return $this->services['mautic.lead.timeline_events.subscriber'] = new \Mautic\LeadBundle\EventListener\TimelineEventLogSubscriber(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.repository.lead_event_log']) ? $this->services['mautic.lead.repository.lead_event_log'] : $this->load('getMautic_Lead_Repository_LeadEventLogService.php')) && false ?: '_'});
