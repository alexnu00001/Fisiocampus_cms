<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.form_submitaction_sendemail' shared service.

$this->services['mautic.form.type.form_submitaction_sendemail'] = $instance = new \Mautic\FormBundle\Form\Type\SubmitActionEmailType(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.core_parameters']) ? $this->services['mautic.helper.core_parameters'] : ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))) && false ?: '_'});

$instance->setFieldModel(${($_ = isset($this->services['mautic.form.model.field']) ? $this->services['mautic.form.model.field'] : $this->getMautic_Form_Model_FieldService()) && false ?: '_'});
$instance->setFormModel(${($_ = isset($this->services['mautic.form.model.form']) ? $this->services['mautic.form.model.form'] : $this->getMautic_Form_Model_FormService()) && false ?: '_'});

return $instance;
