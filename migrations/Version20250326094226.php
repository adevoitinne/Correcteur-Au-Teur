<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250326094226 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE offer (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, member_id INTEGER NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, type VARCHAR(255) NOT NULL, deadline DATETIME DEFAULT NULL, title VARCHAR(255) NOT NULL, description CLOB NOT NULL, CONSTRAINT FK_29D6873E7597D3FE FOREIGN KEY (member_id) REFERENCES "member" (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_29D6873E7597D3FE ON offer (member_id)');
        $this->addSql('CREATE TABLE offer_genre (offer_id INTEGER NOT NULL, genre_id INTEGER NOT NULL, PRIMARY KEY(offer_id, genre_id), CONSTRAINT FK_7D4E1153C674EE FOREIGN KEY (offer_id) REFERENCES offer (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_7D4E114296D31F FOREIGN KEY (genre_id) REFERENCES genre (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_7D4E1153C674EE ON offer_genre (offer_id)');
        $this->addSql('CREATE INDEX IDX_7D4E114296D31F ON offer_genre (genre_id)');
        $this->addSql('DROP TABLE request');
        $this->addSql('DROP TABLE request_genre');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE request (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, member_id INTEGER NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, type VARCHAR(255) NOT NULL COLLATE "BINARY", deadline DATETIME DEFAULT NULL, title VARCHAR(255) NOT NULL COLLATE "BINARY", description CLOB NOT NULL COLLATE "BINARY", CONSTRAINT FK_3B978F9F7597D3FE FOREIGN KEY (member_id) REFERENCES member (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_3B978F9F7597D3FE ON request (member_id)');
        $this->addSql('CREATE TABLE request_genre (request_id INTEGER NOT NULL, genre_id INTEGER NOT NULL, PRIMARY KEY(request_id, genre_id), CONSTRAINT FK_DE478FDD427EB8A5 FOREIGN KEY (request_id) REFERENCES request (id) ON UPDATE NO ACTION ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_DE478FDD4296D31F FOREIGN KEY (genre_id) REFERENCES genre (id) ON UPDATE NO ACTION ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_DE478FDD4296D31F ON request_genre (genre_id)');
        $this->addSql('CREATE INDEX IDX_DE478FDD427EB8A5 ON request_genre (request_id)');
        $this->addSql('DROP TABLE offer');
        $this->addSql('DROP TABLE offer_genre');
    }
}
