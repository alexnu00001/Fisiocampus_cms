<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.coreconfig_monitored_email' shared service.

return $this->services['mautic.form.type.coreconfig_monitored_email'] = new \Mautic\EmailBundle\Form\Type\ConfigMonitoredEmailType(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});