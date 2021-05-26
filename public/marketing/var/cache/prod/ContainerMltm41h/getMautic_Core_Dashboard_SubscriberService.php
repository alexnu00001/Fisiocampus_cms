<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.core.dashboard.subscriber' shared service.

return $this->services['mautic.core.dashboard.subscriber'] = new \Mautic\CoreBundle\EventListener\DashboardSubscriber(${($_ = isset($this->services['mautic.core.model.auditlog']) ? $this->services['mautic.core.model.auditlog'] : $this->getMautic_Core_Model_AuditlogService()) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.security']) ? $this->services['mautic.security'] : $this->getMautic_SecurityService()) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.model.factory']) ? $this->services['mautic.model.factory'] : ($this->services['mautic.model.factory'] = new \Mautic\CoreBundle\Factory\ModelFactory($this))) && false ?: '_'});
