<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.helper.maxmind_do_not_sell_download' shared service.

return $this->services['mautic.helper.maxmind_do_not_sell_download'] = new \Mautic\CoreBundle\Helper\MaxMindDoNotSellDownloadHelper($this->getEnv('nullable:resolve:MAUTIC_IP_LOOKUP_AUTH'), ${($_ = isset($this->services['monolog.logger.mautic']) ? $this->services['monolog.logger.mautic'] : $this->getMonolog_Logger_MauticService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.native.connector']) ? $this->services['mautic.native.connector'] : $this->load('getMautic_Native_ConnectorService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.core_parameters']) ? $this->services['mautic.helper.core_parameters'] : ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))) && false ?: '_'});