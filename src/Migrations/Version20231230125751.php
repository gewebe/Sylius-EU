<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Migration: GewebeSyliusVATPlugin
 */
final class Version20231230125751 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sylius_address ADD vat_number VARCHAR(255) DEFAULT NULL, ADD vat_valid TINYINT(1) NOT NULL, ADD vat_validated_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sylius_address DROP vat_number, DROP vat_valid, DROP vat_validated_at');
    }
}
