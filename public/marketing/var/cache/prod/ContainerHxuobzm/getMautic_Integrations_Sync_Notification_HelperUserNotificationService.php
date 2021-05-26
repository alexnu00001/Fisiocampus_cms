<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.integrations.sync.notification.helper_user_notification' shared service.

return $this->services['mautic.integrations.sync.notification.helper_user_notification'] = new \Mautic\IntegrationsBundle\Sync\Notification\Helper\UserNotificationHelper(${($_ = isset($this->services['mautic.integrations.sync.notification.writer']) ? $this->services['mautic.integrations.sync.notification.writer'] : $this->load('getMautic_Integrations_Sync_Notification_WriterService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.integrations.sync.notification.helper_user']) ? $this->services['mautic.integrations.sync.notification.helper_user'] : $this->load('getMautic_Integrations_Sync_Notification_HelperUserService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.integrations.sync.notification.helper.owner_provider']) ? $this->services['mautic.integrations.sync.notification.helper.owner_provider'] : $this->load('getMautic_Integrations_Sync_Notification_Helper_OwnerProviderService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.integrations.sync.notification.helper_route']) ? $this->services['mautic.integrations.sync.notification.helper_route'] : $this->load('getMautic_Integrations_Sync_Notification_HelperRouteService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
