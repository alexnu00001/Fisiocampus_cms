<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.email' shared service.

return $this->services['mautic.form.type.email'] = new \Mautic\EmailBundle\Form\Type\EmailType(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.stage.model.stage']) ? $this->services['mautic.stage.model.stage'] : $this->load('getMautic_Stage_Model_StageService.php')) && false ?: '_'});
