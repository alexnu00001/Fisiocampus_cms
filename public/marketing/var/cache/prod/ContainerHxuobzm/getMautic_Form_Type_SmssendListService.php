<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.form.type.smssend_list' shared service.

return $this->services['mautic.form.type.smssend_list'] = new \Mautic\SmsBundle\Form\Type\SmsSendType(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
