<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'lightsaml.own.credential_store' shared service.

$this->services['lightsaml.own.credential_store'] = $instance = new \LightSaml\Store\Credential\CompositeCredentialStore();

$instance->add(${($_ = isset($this->services['mautic.security.saml.credential_store']) ? $this->services['mautic.security.saml.credential_store'] : $this->load('getMautic_Security_Saml_CredentialStoreService.php')) && false ?: '_'});

return $instance;
