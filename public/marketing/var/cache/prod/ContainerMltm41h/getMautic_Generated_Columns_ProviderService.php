<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.generated.columns.provider' shared service.

return $this->services['mautic.generated.columns.provider'] = new \Mautic\CoreBundle\Doctrine\Provider\GeneratedColumnsProvider(${($_ = isset($this->services['mautic.database.version.provider']) ? $this->services['mautic.database.version.provider'] : $this->load('getMautic_Database_Version_ProviderService.php')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});
