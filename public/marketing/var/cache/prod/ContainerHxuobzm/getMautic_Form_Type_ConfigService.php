<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.config' shared service.

return $this->services['mautic.form.type.config'] = new \Mautic\ConfigBundle\Form\Type\ConfigType(${($_ = isset($this->services['mautic.config.form.restriction_helper']) ? $this->services['mautic.config.form.restriction_helper'] : $this->load('getMautic_Config_Form_RestrictionHelperService.php')) && false ?: '_'});
