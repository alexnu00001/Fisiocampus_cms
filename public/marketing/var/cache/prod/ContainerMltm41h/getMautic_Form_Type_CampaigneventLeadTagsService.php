<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.campaignevent_lead_tags' shared service.

return $this->services['mautic.form.type.campaignevent_lead_tags'] = new \Mautic\LeadBundle\Form\Type\CampaignEventLeadTagsType(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});