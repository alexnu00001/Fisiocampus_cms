<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.focus.subscriber.form_bundle' shared service.

return $this->services['mautic.focus.subscriber.form_bundle'] = new \MauticPlugin\MauticFocusBundle\EventListener\FormSubscriber(${($_ = isset($this->services['mautic.focus.model.focus']) ? $this->services['mautic.focus.model.focus'] : $this->getMautic_Focus_Model_FocusService()) && false ?: '_'});
