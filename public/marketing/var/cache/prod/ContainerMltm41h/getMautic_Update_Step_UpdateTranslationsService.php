<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.update.step.update_translations' shared service.

return $this->services['mautic.update.step.update_translations'] = new \Mautic\CoreBundle\Update\Step\UpdateTranslationsStep(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.language']) ? $this->services['mautic.helper.language'] : $this->load('getMautic_Helper_LanguageService.php')) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.mautic']) ? $this->services['monolog.logger.mautic'] : $this->getMonolog_Logger_MauticService()) && false ?: '_'});