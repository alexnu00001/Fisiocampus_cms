<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.lead.segment.stat.campaign.share' shared service.

return $this->services['mautic.lead.segment.stat.campaign.share'] = new \Mautic\LeadBundle\Segment\Stat\SegmentCampaignShare(${($_ = isset($this->services['mautic.campaign.model.campaign']) ? $this->services['mautic.campaign.model.campaign'] : $this->load('getMautic_Campaign_Model_CampaignService.php')) && false ?: '_'}, ${($_ = isset($this->services['mautic.helper.cache_storage']) ? $this->services['mautic.helper.cache_storage'] : $this->load('getMautic_Helper_CacheStorageService.php')) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'});
