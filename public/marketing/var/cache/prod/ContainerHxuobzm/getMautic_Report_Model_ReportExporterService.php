<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.report.model.report_exporter' shared service.

return $this->services['mautic.report.model.report_exporter'] = new \Mautic\ReportBundle\Model\ReportExporter(${($_ = isset($this->services['mautic.report.model.schedule_model']) ? $this->services['mautic.report.model.schedule_model'] : $this->load('getMautic_Report_Model_ScheduleModelService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.report.model.report_data_adapter']) ? $this->services['mautic.report.model.report_data_adapter'] : $this->load('getMautic_Report_Model_ReportDataAdapterService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.report.model.report_export_options']) ? $this->services['mautic.report.model.report_export_options'] : $this->load('getMautic_Report_Model_ReportExportOptionsService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.report.model.report_file_writer']) ? $this->services['mautic.report.model.report_file_writer'] : $this->load('getMautic_Report_Model_ReportFileWriterService.php')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});
