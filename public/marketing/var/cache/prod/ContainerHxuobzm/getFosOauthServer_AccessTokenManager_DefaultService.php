<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_oauth_server.access_token_manager.default' shared service.

return $this->services['fos_oauth_server.access_token_manager.default'] = new \FOS\OAuthServerBundle\Entity\AccessTokenManager(${($_ = isset($this->services['fos_oauth_server.entity_manager']) ? $this->services['fos_oauth_server.entity_manager'] : $this->load('getFosOauthServer_EntityManagerService.php')) && false ?: '_'}, 'Mautic\\ApiBundle\\Entity\\oAuth2\\AccessToken');
