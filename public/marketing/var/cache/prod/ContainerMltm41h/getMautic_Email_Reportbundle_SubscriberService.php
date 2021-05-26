<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.email.reportbundle.subscriber' shared service.

return $this->services['mautic.email.reportbundle.subscriber'] = new \Mautic\EmailBundle\EventListener\ReportSubscriber(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.model.company_report_data']) ? $this->services['mautic.lead.model.company_report_data'] : $this->load('getMautic_Lead_Model_CompanyReportDataService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.email.repository.stat']) ? $this->services['mautic.email.repository.stat'] : $this->load('getMautic_Email_Repository_StatService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.generated.columns.provider']) ? $this->services['mautic.generated.columns.provider'] : $this->load('getMautic_Generated_Columns_ProviderService.php')) && false ?: '_'});
