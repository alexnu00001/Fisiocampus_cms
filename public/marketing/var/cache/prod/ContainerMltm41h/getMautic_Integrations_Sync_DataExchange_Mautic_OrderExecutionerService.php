<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.integrations.sync.data_exchange.mautic.order_executioner' shared service.

return $this->services['mautic.integrations.sync.data_exchange.mautic.order_executioner'] = new \Mautic\IntegrationsBundle\Sync\SyncDataExchange\Internal\Executioner\OrderExecutioner(${($_ = isset($this->services['mautic.integrations.helper.sync_mapping']) ? $this->services['mautic.integrations.helper.sync_mapping'] : $this->load('getMautic_Integrations_Helper_SyncMappingService.php')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.integrations.internal.object_provider']) ? $this->services['mautic.integrations.internal.object_provider'] : $this->load('getMautic_Integrations_Internal_ObjectProviderService.php')) && false ?: '_'});