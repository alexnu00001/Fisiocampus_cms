<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.fixture.form' shared service.

return $this->services['mautic.form.fixture.form'] = new \Mautic\FormBundle\DataFixtures\ORM\LoadFormData(${($_ = isset($this->services['mautic.form.model.form']) ? $this->services['mautic.form.model.form'] : $this->getMautic_Form_Model_FormService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.form.model.field']) ? $this->services['mautic.form.model.field'] : $this->getMautic_Form_Model_FieldService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.form.model.action']) ? $this->services['mautic.form.model.action'] : $this->getMautic_Form_Model_ActionService()) && false ?: '_'});
