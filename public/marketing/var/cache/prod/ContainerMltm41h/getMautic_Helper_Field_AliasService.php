<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.helper.field.alias' shared service.

return $this->services['mautic.helper.field.alias'] = new \Mautic\LeadBundle\Helper\FieldAliasHelper(${($_ = isset($this->services['mautic.lead.model.field']) ? $this->services['mautic.lead.model.field'] : $this->getMautic_Lead_Model_FieldService()) && false ?: '_'});