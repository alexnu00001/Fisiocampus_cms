<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.report.dashboard.subscriber' shared service.

return $this->services['mautic.report.dashboard.subscriber'] = new \Mautic\ReportBundle\EventListener\DashboardSubscriber(${($_ = isset($this->services['mautic.report.model.report']) ? $this->services['mautic.report.model.report'] : $this->load('getMautic_Report_Model_ReportService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.security']) ? $this->services['mautic.security'] : $this->getMautic_SecurityService()) && false ?: '_'});
