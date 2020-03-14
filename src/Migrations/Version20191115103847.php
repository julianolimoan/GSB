<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191115103847 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE visiteur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) DEFAULT NULL, prenom VARCHAR(50) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, cp VARCHAR(255) DEFAULT NULL, date_embauche DATE DEFAULT NULL, login VARCHAR(50) DEFAULT NULL, mdp VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE frais_forfait (id INT AUTO_INCREMENT NOT NULL, lignefraisforfait_id INT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, montant INT DEFAULT NULL, INDEX IDX_B64A3FAE2868DCB4 (lignefraisforfait_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_frais_forfait (id INT AUTO_INCREMENT NOT NULL, fichefrais_id INT NOT NULL, mois INT DEFAULT NULL, frais_forfait VARCHAR(255) DEFAULT NULL, quantite INT DEFAULT NULL, INDEX IDX_BD293ECFD318D763 (fichefrais_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_frais_hors_forfait (id INT AUTO_INCREMENT NOT NULL, fichefrais_id INT NOT NULL, date DATE DEFAULT NULL, montant INT DEFAULT NULL, libelle VARCHAR(255) DEFAULT NULL, INDEX IDX_EC01626DD318D763 (fichefrais_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fiche_frais (id INT AUTO_INCREMENT NOT NULL, visiteur_id INT NOT NULL, mois VARCHAR(50) DEFAULT NULL, nb_justificatifs VARCHAR(255) DEFAULT NULL, montant_valide NUMERIC(7, 2) DEFAULT NULL, date_modif DATE DEFAULT NULL, INDEX IDX_5FC0A6A77F72333D (visiteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etat (id INT AUTO_INCREMENT NOT NULL, fichefrais_id INT NOT NULL, libelle VARCHAR(255) DEFAULT NULL, INDEX IDX_55CAF762D318D763 (fichefrais_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE frais_forfait ADD CONSTRAINT FK_B64A3FAE2868DCB4 FOREIGN KEY (lignefraisforfait_id) REFERENCES ligne_frais_forfait (id)');
        $this->addSql('ALTER TABLE ligne_frais_forfait ADD CONSTRAINT FK_BD293ECFD318D763 FOREIGN KEY (fichefrais_id) REFERENCES fiche_frais (id)');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait ADD CONSTRAINT FK_EC01626DD318D763 FOREIGN KEY (fichefrais_id) REFERENCES fiche_frais (id)');
        $this->addSql('ALTER TABLE fiche_frais ADD CONSTRAINT FK_5FC0A6A77F72333D FOREIGN KEY (visiteur_id) REFERENCES visiteur (id)');
        $this->addSql('ALTER TABLE etat ADD CONSTRAINT FK_55CAF762D318D763 FOREIGN KEY (fichefrais_id) REFERENCES fiche_frais (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fiche_frais DROP FOREIGN KEY FK_5FC0A6A77F72333D');
        $this->addSql('ALTER TABLE frais_forfait DROP FOREIGN KEY FK_B64A3FAE2868DCB4');
        $this->addSql('ALTER TABLE ligne_frais_forfait DROP FOREIGN KEY FK_BD293ECFD318D763');
        $this->addSql('ALTER TABLE ligne_frais_hors_forfait DROP FOREIGN KEY FK_EC01626DD318D763');
        $this->addSql('ALTER TABLE etat DROP FOREIGN KEY FK_55CAF762D318D763');
        $this->addSql('DROP TABLE visiteur');
        $this->addSql('DROP TABLE frais_forfait');
        $this->addSql('DROP TABLE ligne_frais_forfait');
        $this->addSql('DROP TABLE ligne_frais_hors_forfait');
        $this->addSql('DROP TABLE fiche_frais');
        $this->addSql('DROP TABLE etat');
    }
}
