<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.focus.helper.iframe_availability_checker' shared service.

return $this->services['mautic.focus.helper.iframe_availability_checker'] = new \MauticPlugin\MauticFocusBundle\Helper\IframeAvailabilityChecker(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});