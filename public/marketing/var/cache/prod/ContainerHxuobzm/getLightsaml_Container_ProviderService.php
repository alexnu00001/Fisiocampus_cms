<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'lightsaml.container.provider' shared service.

return $this->services['lightsaml.container.provider'] = new \LightSaml\SymfonyBridgeBundle\Bridge\Container\ProviderContainer(${($_ = isset($this->services['lightsaml.provider.attribute_value']) ? $this->services['lightsaml.provider.attribute_value'] : ($this->services['lightsaml.provider.attribute_value'] = new \LightSaml\Provider\Attribute\FixedAttributeValueProvider())) && false ?: '_'}, ${($_ = isset($this->services['lightsaml.provider.session_info']) ? $this->services['lightsaml.provider.session_info'] : ($this->services['lightsaml.provider.session_info'] = new \LightSaml\Provider\Session\FixedSessionInfoProvider())) && false ?: '_'}, ${($_ = isset($this->services['lightsaml.provider.name_id']) ? $this->services['lightsaml.provider.name_id'] : ($this->services['lightsaml.provider.name_id'] = new \LightSaml\Provider\NameID\FixedNameIdProvider())) && false ?: '_'});
