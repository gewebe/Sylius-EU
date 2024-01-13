<?php

declare(strict_types=1);

namespace App\Entity\Addressing;

use Doctrine\ORM\Mapping as ORM;
use Gewebe\SyliusVATPlugin\Entity\VatNumberAddressInterface;
use Gewebe\SyliusVATPlugin\Entity\VatNumberAwareTrait;
use Sylius\Component\Core\Model\Address as BaseAddress;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_address")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_address')]
class Address extends BaseAddress implements VatNumberAddressInterface
{
    use VatNumberAwareTrait;
}
