<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\FeatureValue\CommandHandler\RemoveAllFeatureValuesFromProductHandler' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\FeatureValue\\CommandHandler\\RemoveAllFeatureValuesFromProductHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\FeatureValue\CommandHandler\RemoveAllFeatureValuesFromProductHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\FeatureValue\\Update\\ProductFeatureValueUpdater'] ?? $this->load('getProductFeatureValueUpdaterService.php')));
