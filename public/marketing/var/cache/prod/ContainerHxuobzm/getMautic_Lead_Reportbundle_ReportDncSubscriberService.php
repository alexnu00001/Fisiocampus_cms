<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.lead.reportbundle.report_dnc_subscriber' shared service.

return $this->services['mautic.lead.reportbundle.report_dnc_subscriber'] = new \Mautic\LeadBundle\EventListener\ReportDNCSubscriber(${($_ = isset($this->services['mautic.lead.reportbundle.fields_builder']) ? $this->services['mautic.lead.reportbundle.fields_builder'] : $this->load('getMautic_Lead_Reportbundle_FieldsBuilderService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.model.company_report_data']) ? $this->services['mautic.lead.model.company_report_data'] : $this->load('getMautic_Lead_Model_CompanyReportDataService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.channel.helper.channel_list']) ? $this->services['mautic.channel.helper.channel_list'] : $this->getMautic_Channel_Helper_ChannelListService()) && false ?: '_'});
