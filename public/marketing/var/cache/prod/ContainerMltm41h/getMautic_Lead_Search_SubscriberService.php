<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.lead.search.subscriber' shared service.

return $this->services['mautic.lead.search.subscriber'] = new \Mautic\LeadBundle\EventListener\SearchSubscriber(${($_ = isset($this->services['mautic.lead.model.lead']) ? $this->services['mautic.lead.model.lead'] : $this->getMautic_Lead_Model_LeadService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.email.repository.email']) ? $this->services['mautic.email.repository.email'] : $this->load('getMautic_Email_Repository_EmailService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.security']) ? $this->services['mautic.security'] : $this->getMautic_SecurityService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.templating']) ? $this->services['mautic.helper.templating'] : ($this->services['mautic.helper.templating'] = new \Mautic\CoreBundle\Helper\TemplatingHelper(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'});