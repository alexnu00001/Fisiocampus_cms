<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.core.maintenance.subscriber' shared service.

return $this->services['mautic.core.maintenance.subscriber'] = new \Mautic\CoreBundle\EventListener\MaintenanceSubscriber(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.user.token.repository']) ? $this->services['mautic.user.token.repository'] : $this->load('getMautic_User_Token_RepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});