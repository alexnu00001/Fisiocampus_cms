<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.campaign.helper.notification' shared service.

return $this->services['mautic.campaign.helper.notification'] = new \Mautic\CampaignBundle\Executioner\Helper\NotificationHelper(${($_ = isset($this->services['mautic.user.model.user']) ? $this->services['mautic.user.model.user'] : $this->getMautic_User_Model_UserService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.core.model.notification']) ? $this->services['mautic.core.model.notification'] : $this->getMautic_Core_Model_NotificationService()) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
