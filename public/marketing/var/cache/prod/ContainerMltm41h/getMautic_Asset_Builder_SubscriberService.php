<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.asset.builder.subscriber' shared service.

return $this->services['mautic.asset.builder.subscriber'] = new \Mautic\AssetBundle\EventListener\BuilderSubscriber(${($_ = isset($this->services['mautic.security']) ? $this->services['mautic.security'] : $this->getMautic_SecurityService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.asset.helper.token']) ? $this->services['mautic.asset.helper.token'] : $this->getMautic_Asset_Helper_TokenService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.tracker.contact']) ? $this->services['mautic.tracker.contact'] : $this->getMautic_Tracker_ContactService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.token_builder.factory']) ? $this->services['mautic.helper.token_builder.factory'] : $this->load('getMautic_Helper_TokenBuilder_FactoryService.php')) && false ?: '_'});
