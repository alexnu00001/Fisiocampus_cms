<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.integrations.sync.notification.writer' shared service.

return $this->services['mautic.integrations.sync.notification.writer'] = new \Mautic\IntegrationsBundle\Sync\Notification\Writer(${($_ = isset($this->services['mautic.core.model.notification']) ? $this->services['mautic.core.model.notification'] : $this->getMautic_Core_Model_NotificationService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.core.model.auditlog']) ? $this->services['mautic.core.model.auditlog'] : $this->getMautic_Core_Model_AuditlogService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
