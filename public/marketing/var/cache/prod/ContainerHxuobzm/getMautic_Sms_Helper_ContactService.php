<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.sms.helper.contact' shared service.

return $this->services['mautic.sms.helper.contact'] = new \Mautic\SmsBundle\Helper\ContactHelper(${($_ = isset($this->services['mautic.lead.repository.lead']) ? $this->services['mautic.lead.repository.lead'] : $this->getMautic_Lead_Repository_LeadService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.phone_number']) ? $this->services['mautic.helper.phone_number'] : ($this->services['mautic.helper.phone_number'] = new \Mautic\CoreBundle\Helper\PhoneNumberHelper())) && false ?: '_'});
