<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.leadfield' shared service.

return $this->services['mautic.form.type.leadfield'] = new \Mautic\LeadBundle\Form\Type\FieldType(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.lead.repository.field']) ? $this->services['mautic.lead.repository.field'] : $this->getMautic_Lead_Repository_FieldService()) && false ?: '_'});
