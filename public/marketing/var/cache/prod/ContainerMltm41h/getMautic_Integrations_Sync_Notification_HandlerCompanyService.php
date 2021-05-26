<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.integrations.sync.notification.handler_company' shared service.

return $this->services['mautic.integrations.sync.notification.handler_company'] = new \Mautic\IntegrationsBundle\Sync\Notification\Handler\CompanyNotificationHandler(${($_ = isset($this->services['mautic.integrations.sync.notification.writer']) ? $this->services['mautic.integrations.sync.notification.writer'] : $this->load('getMautic_Integrations_Sync_Notification_WriterService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.integrations.sync.notification.helper_user_notification']) ? $this->services['mautic.integrations.sync.notification.helper_user_notification'] : $this->load('getMautic_Integrations_Sync_Notification_HelperUserNotificationService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.integrations.sync.notification.helper_company']) ? $this->services['mautic.integrations.sync.notification.helper_company'] : $this->load('getMautic_Integrations_Sync_Notification_HelperCompanyService.php')) && false ?: '_'});