<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'noxlogic_rate_limit.oauth_key_generate_listener' shared service.

return $this->services['noxlogic_rate_limit.oauth_key_generate_listener'] = new \Noxlogic\RateLimitBundle\EventListener\OauthKeyGenerateListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'});
