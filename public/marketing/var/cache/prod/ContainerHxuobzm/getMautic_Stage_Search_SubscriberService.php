<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.stage.search.subscriber' shared service.

return $this->services['mautic.stage.search.subscriber'] = new \Mautic\StageBundle\EventListener\SearchSubscriber(${($_ = isset($this->services['mautic.stage.model.stage']) ? $this->services['mautic.stage.model.stage'] : $this->load('getMautic_Stage_Model_StageService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.security']) ? $this->services['mautic.security'] : $this->getMautic_SecurityService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.templating']) ? $this->services['mautic.helper.templating'] : ($this->services['mautic.helper.templating'] = new \Mautic\CoreBundle\Helper\TemplatingHelper(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'});
