<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.lead.reportbundle.segment_subscriber' shared service.

return $this->services['mautic.lead.reportbundle.segment_subscriber'] = new \Mautic\LeadBundle\EventListener\SegmentReportSubscriber(${($_ = isset($this->services['mautic.lead.reportbundle.fields_builder']) ? $this->services['mautic.lead.reportbundle.fields_builder'] : $this->load('getMautic_Lead_Reportbundle_FieldsBuilderService.php')) && false ?: '_'});