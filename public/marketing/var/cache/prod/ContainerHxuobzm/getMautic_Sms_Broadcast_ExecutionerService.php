<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.sms.broadcast.executioner' shared service.

return $this->services['mautic.sms.broadcast.executioner'] = new \Mautic\SmsBundle\Broadcast\BroadcastExecutioner(${($_ = isset($this->services['mautic.sms.model.sms']) ? $this->services['mautic.sms.model.sms'] : $this->load('getMautic_Sms_Model_SmsService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.sms.broadcast.query']) ? $this->services['mautic.sms.broadcast.query'] : $this->load('getMautic_Sms_Broadcast_QueryService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
