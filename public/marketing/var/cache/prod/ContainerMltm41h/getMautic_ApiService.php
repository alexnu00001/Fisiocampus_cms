<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.api' shared service.

return $this->services['mautic.api'] = new \Mautic\ApiBundle\Controller\oAuth2\AuthorizeController(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['fos_oauth_server.authorize.form']) ? $this->services['fos_oauth_server.authorize.form'] : $this->load('getFosOauthServer_Authorize_FormService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_oauth_server.authorize.form.handler.default']) ? $this->services['fos_oauth_server.authorize.form.handler.default'] : $this->load('getFosOauthServer_Authorize_Form_Handler_DefaultService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_oauth_server.server']) ? $this->services['fos_oauth_server.server'] : $this->load('getFosOauthServer_ServerService.php')) && false ?: '_'}, ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->load('getTemplatingService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['fos_oauth_server.client_manager.default']) ? $this->services['fos_oauth_server.client_manager.default'] : $this->load('getFosOauthServer_ClientManager_DefaultService.php')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'});