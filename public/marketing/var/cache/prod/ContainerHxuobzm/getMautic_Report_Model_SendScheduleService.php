<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.report.model.send_schedule' shared service.

return $this->services['mautic.report.model.send_schedule'] = new \Mautic\ReportBundle\Scheduler\Model\SendSchedule(${($_ = isset($this->services['mautic.helper.mailer']) ? $this->services['mautic.helper.mailer'] : $this->getMautic_Helper_MailerService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.report.model.message_schedule']) ? $this->services['mautic.report.model.message_schedule'] : $this->load('getMautic_Report_Model_MessageScheduleService.php')) && false ?: '_'});
