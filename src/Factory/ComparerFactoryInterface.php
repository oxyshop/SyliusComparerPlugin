<?php
/**
 * Created by PhpStorm.
 * User: Duje
 * Date: 30-May-18
 * Time: 12:50 PM
 */
declare(strict_types=1);

namespace Locastic\SyliusComparerPlugin\Factory;

use Locastic\SyliusComparerPlugin\Entity\ComparerInterface;
use Sylius\Component\Core\Model\ShopUserInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;

interface ComparerFactoryInterface extends FactoryInterface
{
    public function createNew(): ComparerInterface;

    public function createForShopUser(ShopUserInterface $shopUser): ComparerInterface;
}
