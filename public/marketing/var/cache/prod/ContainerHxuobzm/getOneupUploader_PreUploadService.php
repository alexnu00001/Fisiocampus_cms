<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'oneup_uploader.pre_upload' shared service.

return $this->services['oneup_uploader.pre_upload'] = new \Mautic\AssetBundle\EventListener\UploadSubscriber(${($_ = isset($this->services['mautic.helper.core_parameters']) ? $this->services['mautic.helper.core_parameters'] : ($this->services['mautic.helper.core_parameters'] = new \Mautic\CoreBundle\Helper\CoreParametersHelper($this))) && false ?: '_'}, ${($_ = isset($this->services['mautic.asset.model.asset']) ? $this->services['mautic.asset.model.asset'] : $this->getMautic_Asset_Model_AssetService()) && false ?: '_'}, ${($_ = isset($this->services['mautic.core.validator.file_upload']) ? $this->services['mautic.core.validator.file_upload'] : $this->load('getMautic_Core_Validator_FileUploadService.php')) && false ?: '_'});