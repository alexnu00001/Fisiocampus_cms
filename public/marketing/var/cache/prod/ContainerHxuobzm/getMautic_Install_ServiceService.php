<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.install.service' shared service.

return $this->services['mautic.install.service'] = new \Mautic\InstallBundle\Install\InstallService(${($_ = isset($this->services['mautic.configurator']) ? $this->services['mautic.configurator'] : $this->load('getMautic_ConfiguratorService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.cache']) ? $this->services['mautic.helper.cache'] : $this->load('getMautic_Helper_CacheService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.paths']) ? $this->services['mautic.helper.paths'] : $this->getMautic_Helper_PathsService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->getSecurity_EncoderFactoryService()) && false ?: '_'});
