<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'mautic.page.fixture.page_hit' shared service.

return $this->services['mautic.page.fixture.page_hit'] = new \Mautic\PageBundle\DataFixtures\ORM\LoadPageHitData(${($_ = isset($this->services['mautic.page.model.page']) ? $this->services['mautic.page.model.page'] : $this->getMautic_Page_Model_PageService()) && false ?: '_'});