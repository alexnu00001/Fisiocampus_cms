<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fm_elfinder.configurator.default' shared service.

return $this->services['fm_elfinder.configurator.default'] = new \FM\ElfinderBundle\Configuration\ElFinderConfigurationReader($this->getParameter('fm_elfinder'), ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, $this);