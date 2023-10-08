<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Product\Update\ProductSupplierUpdater' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Update\\ProductSupplierUpdater'] = new \PrestaShop\PrestaShop\Adapter\Product\Update\ProductSupplierUpdater(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->load('getProductRepository4Service.php')), ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Repository\\CombinationRepository'] ?? $this->load('getCombinationRepositoryService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Supplier\\Repository\\SupplierRepository'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Supplier\\Repository\\SupplierRepository'] = new \PrestaShop\PrestaShop\Adapter\Supplier\Repository\SupplierRepository())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductSupplierRepository'] ?? $this->load('getProductSupplierRepository2Service.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PS_CURRENCY_DEFAULT"));
