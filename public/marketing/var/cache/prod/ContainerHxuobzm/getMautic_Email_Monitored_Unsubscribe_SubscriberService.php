<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.email.monitored.unsubscribe.subscriber' shared service.

return $this->services['mautic.email.monitored.unsubscribe.subscriber'] = new \Mautic\EmailBundle\EventListener\ProcessUnsubscribeSubscriber(${($_ = isset($this->services['mautic.message.processor.unsubscribe']) ? $this->services['mautic.message.processor.unsubscribe'] : $this->load('getMautic_Message_Processor_UnsubscribeService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.message.processor.feedbackloop']) ? $this->services['mautic.message.processor.feedbackloop'] : $this->load('getMautic_Message_Processor_FeedbackloopService.php')) && false ?: '_'});
