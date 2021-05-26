<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.pagebuilder.subscriber' shared service.

return $this->services['mautic.pagebuilder.subscriber'] = new \Mautic\PageBundle\EventListener\BuilderSubscriber(${($_ = isset($this->services['mautic.security']) ? $this->services['mautic.security'] : $this->getMautic_SecurityService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.page.helper.token']) ? $this->services['mautic.page.helper.token'] : $this->getMautic_Page_Helper_TokenService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.integration']) ? $this->services['mautic.helper.integration'] : $this->getMautic_Helper_IntegrationService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.page.model.page']) ? $this->services['mautic.page.model.page'] : $this->getMautic_Page_Model_PageService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.token_builder.factory']) ? $this->services['mautic.helper.token_builder.factory'] : $this->load('getMautic_Helper_TokenBuilder_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.templating']) ? $this->services['mautic.helper.templating'] : ($this->services['mautic.helper.templating'] = new \Mautic\CoreBundle\Helper\TemplatingHelper(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'});