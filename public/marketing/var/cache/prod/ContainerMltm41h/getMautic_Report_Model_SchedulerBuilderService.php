<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.report.model.scheduler_builder' shared service.

return $this->services['mautic.report.model.scheduler_builder'] = new \Mautic\ReportBundle\Scheduler\Builder\SchedulerBuilder(${($_ = isset($this->services['mautic.report.model.scheduler_template_factory']) ? $this->services['mautic.report.model.scheduler_template_factory'] : ($this->services['mautic.report.model.scheduler_template_factory'] = new \Mautic\ReportBundle\Scheduler\Factory\SchedulerTemplateFactory())) && false ?: '_'});
