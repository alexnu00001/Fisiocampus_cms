<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.integrations.sync.notifier' shared service.

return $this->services['mautic.integrations.sync.notifier'] = new \Mautic\IntegrationsBundle\Sync\Notification\Notifier(${($_ = isset($this->services['mautic.integrations.sync.notification.handler_container']) ? $this->services['mautic.integrations.sync.notification.handler_container'] : $this->load('getMautic_Integrations_Sync_Notification_HandlerContainerService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.integrations.helper.sync_integrations']) ? $this->services['mautic.integrations.helper.sync_integrations'] : $this->load('getMautic_Integrations_Helper_SyncIntegrationsService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.integrations.helper.config_integrations']) ? $this->services['mautic.integrations.helper.config_integrations'] : $this->load('getMautic_Integrations_Helper_ConfigIntegrationsService.php')) && false ?: '_'});
