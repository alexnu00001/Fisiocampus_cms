<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'lightsaml.service.credential_resolver_factory' shared service.

return $this->services['lightsaml.service.credential_resolver_factory'] = new \LightSaml\Resolver\Credential\Factory\CredentialResolverFactory(${($_ = isset($this->services['lightsaml.credential.credential_store']) ? $this->services['lightsaml.credential.credential_store'] : $this->load('getLightsaml_Credential_CredentialStoreService.php')) && false ?: '_'});
