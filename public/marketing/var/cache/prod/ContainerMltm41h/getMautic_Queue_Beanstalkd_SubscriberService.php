<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.queue.beanstalkd.subscriber' shared service.

return $this->services['mautic.queue.beanstalkd.subscriber'] = new \Mautic\QueueBundle\EventListener\BeanstalkdSubscriber($this, ${($_ = isset($this->services['mautic.queue.service']) ? $this->services['mautic.queue.service'] : $this->getMautic_Queue_ServiceService()) && false ?: '_'});
