<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.transport.sendgrid_api.sendgrid_wrapper' shared service.

return $this->services['mautic.transport.sendgrid_api.sendgrid_wrapper'] = new \Mautic\EmailBundle\Swiftmailer\SendGrid\SendGridWrapper(${($_ = isset($this->services['mautic.transport.sendgrid_api.sendgrid']) ? $this->services['mautic.transport.sendgrid_api.sendgrid'] : ($this->services['mautic.transport.sendgrid_api.sendgrid'] = new \SendGrid($this->getEnv('nullable:resolve:MAUTIC_MAILER_API_KEY')))) && false ?: '_'});
