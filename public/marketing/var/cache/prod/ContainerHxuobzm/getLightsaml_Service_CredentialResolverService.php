<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'lightsaml.service.credential_resolver' shared service.

return $this->services['lightsaml.service.credential_resolver'] = ${($_ = isset($this->services['lightsaml.service.credential_resolver_factory']) ? $this->services['lightsaml.service.credential_resolver_factory'] : $this->load('getLightsaml_Service_CredentialResolverFactoryService.php')) && false ?: '_'}->build();
