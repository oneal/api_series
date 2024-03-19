<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240319170121 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE actores (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, surname VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE directores (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, surname VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE episodios (id INT AUTO_INCREMENT NOT NULL, serie_id_id INT DEFAULT NULL, temporada_id_id INT DEFAULT NULL, titulo VARCHAR(255) DEFAULT NULL, descripcion VARCHAR(255) NOT NULL, image VARCHAR(255) DEFAULT NULL, INDEX IDX_C7C1005B748AAC3 (serie_id_id), INDEX IDX_C7C1005794EFE7C (temporada_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE series (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, sinopsi VARCHAR(255) DEFAULT NULL, cartel VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE series_actor (id INT AUTO_INCREMENT NOT NULL, serie_id_id INT DEFAULT NULL, actor_id_id INT DEFAULT NULL, INDEX IDX_31FAB2E4B748AAC3 (serie_id_id), INDEX IDX_31FAB2E45BC075C3 (actor_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE series_director (id INT AUTO_INCREMENT NOT NULL, serie_id_id INT DEFAULT NULL, director_id_id INT DEFAULT NULL, INDEX IDX_4D7B4BFFB748AAC3 (serie_id_id), INDEX IDX_4D7B4BFF85430185 (director_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE temporadas (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, num_episodios VARCHAR(255) DEFAULT NULL, fecha_publicacion DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE episodios ADD CONSTRAINT FK_C7C1005B748AAC3 FOREIGN KEY (serie_id_id) REFERENCES series (id)');
        $this->addSql('ALTER TABLE episodios ADD CONSTRAINT FK_C7C1005794EFE7C FOREIGN KEY (temporada_id_id) REFERENCES temporadas (id)');
        $this->addSql('ALTER TABLE series_actor ADD CONSTRAINT FK_31FAB2E4B748AAC3 FOREIGN KEY (serie_id_id) REFERENCES series (id)');
        $this->addSql('ALTER TABLE series_actor ADD CONSTRAINT FK_31FAB2E45BC075C3 FOREIGN KEY (actor_id_id) REFERENCES actores (id)');
        $this->addSql('ALTER TABLE series_director ADD CONSTRAINT FK_4D7B4BFFB748AAC3 FOREIGN KEY (serie_id_id) REFERENCES series (id)');
        $this->addSql('ALTER TABLE series_director ADD CONSTRAINT FK_4D7B4BFF85430185 FOREIGN KEY (director_id_id) REFERENCES directores (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE episodios DROP FOREIGN KEY FK_C7C1005B748AAC3');
        $this->addSql('ALTER TABLE episodios DROP FOREIGN KEY FK_C7C1005794EFE7C');
        $this->addSql('ALTER TABLE series_actor DROP FOREIGN KEY FK_31FAB2E4B748AAC3');
        $this->addSql('ALTER TABLE series_actor DROP FOREIGN KEY FK_31FAB2E45BC075C3');
        $this->addSql('ALTER TABLE series_director DROP FOREIGN KEY FK_4D7B4BFFB748AAC3');
        $this->addSql('ALTER TABLE series_director DROP FOREIGN KEY FK_4D7B4BFF85430185');
        $this->addSql('DROP TABLE actores');
        $this->addSql('DROP TABLE directores');
        $this->addSql('DROP TABLE episodios');
        $this->addSql('DROP TABLE series');
        $this->addSql('DROP TABLE series_actor');
        $this->addSql('DROP TABLE series_director');
        $this->addSql('DROP TABLE temporadas');
    }
}
