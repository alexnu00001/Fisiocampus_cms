<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.configurator' shared service.

$this->services['mautic.configurator'] = $instance = new \Mautic\CoreBundle\Configurator\Configurator(${($_ = isset($this->services['mautic.helper.paths']) ? $this->services['mautic.helper.paths'] : $this->getMautic_Helper_PathsService()) && false ?: '_'});

$instance->addStep(${($_ = isset($this->services['mautic.install.configurator.step.check']) ? $this->services['mautic.install.configurator.step.check'] : $this->load('getMautic_Install_Configurator_Step_CheckService.php')) && false ?: '_'}, 0);
$instance->addStep(${($_ = isset($this->services['mautic.install.configurator.step.doctrine']) ? $this->services['mautic.install.configurator.step.doctrine'] : $this->load('getMautic_Install_Configurator_Step_DoctrineService.php')) && false ?: '_'}, 1);
$instance->addStep(${($_ = isset($this->services['mautic.install.configurator.step.email']) ? $this->services['mautic.install.configurator.step.email'] : $this->load('getMautic_Install_Configurator_Step_EmailService.php')) && false ?: '_'}, 3);
$instance->addStep(${($_ = isset($this->services['mautic.install.configurator.step.user']) ? $this->services['mautic.install.configurator.step.user'] : ($this->services['mautic.install.configurator.step.user'] = new \Mautic\InstallBundle\Configurator\Step\UserStep())) && false ?: '_'}, 2);

return $instance;
