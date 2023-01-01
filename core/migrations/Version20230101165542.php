<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230101165542 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD reset_token VARCHAR(255) DEFAULT NULL, ADD reset_valid_time VARCHAR(25) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649FE792A0E ON user (codemeli)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6493C7323E0 ON user (mobile)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_8D93D649FE792A0E ON user');
        $this->addSql('DROP INDEX UNIQ_8D93D6493C7323E0 ON user');
        $this->addSql('ALTER TABLE user DROP reset_token, DROP reset_valid_time');
    }
}
