<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250320085556 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__request AS SELECT id, created_at, type, deadline, title, description FROM request');
        $this->addSql('DROP TABLE request');
        $this->addSql('CREATE TABLE request (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, member_id INTEGER NOT NULL, created_at DATETIME NOT NULL, type VARCHAR(255) NOT NULL, deadline DATETIME DEFAULT NULL, title VARCHAR(255) NOT NULL, description CLOB NOT NULL, CONSTRAINT FK_3B978F9F7597D3FE FOREIGN KEY (member_id) REFERENCES "member" (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO request (id, created_at, type, deadline, title, description) SELECT id, created_at, type, deadline, title, description FROM __temp__request');
        $this->addSql('DROP TABLE __temp__request');
        $this->addSql('CREATE INDEX IDX_3B978F9F7597D3FE ON request (member_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__request AS SELECT id, created_at, type, deadline, title, description FROM request');
        $this->addSql('DROP TABLE request');
        $this->addSql('CREATE TABLE request (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, created_at DATETIME NOT NULL, type VARCHAR(255) NOT NULL, deadline DATETIME DEFAULT NULL, title VARCHAR(255) NOT NULL, description CLOB NOT NULL)');
        $this->addSql('INSERT INTO request (id, created_at, type, deadline, title, description) SELECT id, created_at, type, deadline, title, description FROM __temp__request');
        $this->addSql('DROP TABLE __temp__request');
    }
}
