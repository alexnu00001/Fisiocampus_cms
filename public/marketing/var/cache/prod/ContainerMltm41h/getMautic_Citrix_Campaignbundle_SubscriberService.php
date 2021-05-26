<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.citrix.campaignbundle.subscriber' shared service.

$this->services['mautic.citrix.campaignbundle.subscriber'] = $instance = new \MauticPlugin\MauticCitrixBundle\EventListener\CampaignSubscriber(${($_ = isset($this->services['mautic.citrix.model.citrix']) ? $this->services['mautic.citrix.model.citrix'] : $this->load('getMautic_Citrix_Model_CitrixService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.templating']) ? $this->services['mautic.helper.templating'] : ($this->services['mautic.helper.templating'] = new \Mautic\CoreBundle\Helper\TemplatingHelper(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'});

$instance->setEmailModel(${($_ = isset($this->services['mautic.email.model.email']) ? $this->services['mautic.email.model.email'] : $this->load('getMautic_Email_Model_EmailService.php')) && false ?: '_'});

return $instance;
