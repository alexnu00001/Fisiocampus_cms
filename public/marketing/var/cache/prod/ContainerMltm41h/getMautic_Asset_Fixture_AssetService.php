<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.asset.fixture.asset' shared service.

return $this->services['mautic.asset.fixture.asset'] = new \Mautic\AssetBundle\DataFixtures\ORM\LoadAssetData(${($_ = isset($this->services['mautic.asset.model.asset']) ? $this->services['mautic.asset.model.asset'] : $this->getMautic_Asset_Model_AssetService()) && false ?: '_'});
