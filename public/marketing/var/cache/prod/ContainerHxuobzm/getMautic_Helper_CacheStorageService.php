<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.helper.cache_storage' shared service.

return $this->services['mautic.helper.cache_storage'] = new \Mautic\CoreBundle\Helper\CacheStorageHelper('db', $this->getEnv('nullable:resolve:MAUTIC_DB_TABLE_PREFIX'), ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, $this->targetDirs[0]);
