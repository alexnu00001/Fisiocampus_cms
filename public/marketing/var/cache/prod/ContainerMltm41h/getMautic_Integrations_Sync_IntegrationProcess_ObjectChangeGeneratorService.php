<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.integrations.sync.integration_process.object_change_generator' shared service.

return $this->services['mautic.integrations.sync.integration_process.object_change_generator'] = new \Mautic\IntegrationsBundle\Sync\SyncProcess\Direction\Integration\ObjectChangeGenerator(${($_ = isset($this->services['mautic.integrations.sync.sync_process.value_helper']) ? $this->services['mautic.integrations.sync.sync_process.value_helper'] : ($this->services['mautic.integrations.sync.sync_process.value_helper'] = new \Mautic\IntegrationsBundle\Sync\SyncProcess\Direction\Helper\ValueHelper())) && false ?: '_'});
