<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.helper.template.menu' shared service.

return $this->services['mautic.helper.template.menu'] = new \Mautic\CoreBundle\Templating\Helper\MenuHelper(${($_ = isset($this->services['knp_menu.helper']) ? $this->services['knp_menu.helper'] : $this->load('getKnpMenu_HelperService.php')) && false ?: '_'});
