<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181009104323 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE fish_tags (fish_id INT NOT NULL, tags_id INT NOT NULL, INDEX IDX_CB4803B18311A1E2 (fish_id), INDEX IDX_CB4803B18D7B4FB4 (tags_id), PRIMARY KEY(fish_id, tags_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tags (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fish_tags ADD CONSTRAINT FK_CB4803B18311A1E2 FOREIGN KEY (fish_id) REFERENCES fish (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE fish_tags ADD CONSTRAINT FK_CB4803B18D7B4FB4 FOREIGN KEY (tags_id) REFERENCES tags (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fish_tags DROP FOREIGN KEY FK_CB4803B18D7B4FB4');
        $this->addSql('DROP TABLE fish_tags');
        $this->addSql('DROP TABLE tags');
    }
}
