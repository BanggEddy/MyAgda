<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231117145407 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contacttest (id INT AUTO_INCREMENT NOT NULL, test VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contact ADD usercontact_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638AADD09B3 FOREIGN KEY (usercontact_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_4C62E638AADD09B3 ON contact (usercontact_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE contacttest');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638AADD09B3');
        $this->addSql('DROP INDEX IDX_4C62E638AADD09B3 ON contact');
        $this->addSql('ALTER TABLE contact DROP usercontact_id');
    }
}
