<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.twig.extension.asset' shared service.

return $this->services['templating.twig.extension.asset'] = new \Mautic\CoreBundle\Templating\Twig\Extension\AssetExtension(${($_ = isset($this->services['templating.helper.assets']) ? $this->services['templating.helper.assets'] : $this->getTemplating_Helper_AssetsService()) && false ?: '_'});
