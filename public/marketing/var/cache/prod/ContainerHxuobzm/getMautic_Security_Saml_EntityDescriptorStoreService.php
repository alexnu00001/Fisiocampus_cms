<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.security.saml.entity_descriptor_store' shared service.

return $this->services['mautic.security.saml.entity_descriptor_store'] = new \Mautic\UserBundle\Security\SAML\Store\EntityDescriptorStore(${($_ = isset($this->services['mautic.helper.core_parameters']) ? $this->services['mautic.helper.core_parameters'] : ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))) && false ?: '_'});
