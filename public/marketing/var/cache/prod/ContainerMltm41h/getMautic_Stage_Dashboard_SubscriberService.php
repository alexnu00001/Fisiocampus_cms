<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.stage.dashboard.subscriber' shared service.

return $this->services['mautic.stage.dashboard.subscriber'] = new \Mautic\StageBundle\EventListener\DashboardSubscriber(${($_ = isset($this->services['mautic.stage.model.stage']) ? $this->services['mautic.stage.model.stage'] : $this->load('getMautic_Stage_Model_StageService.php')) && false ?: '_'});