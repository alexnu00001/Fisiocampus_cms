<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.transport.momentum.callback' shared service.

return $this->services['mautic.transport.momentum.callback'] = new \Mautic\EmailBundle\Swiftmailer\Momentum\Callback\MomentumCallback(${($_ = isset($this->services['mautic.email.model.transport_callback']) ? $this->services['mautic.email.model.transport_callback'] : $this->load('getMautic_Email_Model_TransportCallbackService.php')) && false ?: '_'});
