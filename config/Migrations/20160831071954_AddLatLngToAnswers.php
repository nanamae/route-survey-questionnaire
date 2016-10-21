<?php
use Migrations\AbstractMigration;

class AddLatLngToAnswers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('answers');
        $table->addColumn('lat', 'decimal', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('lng', 'decimal', [
            'default' => null,
            'null' => false,
        ]);
        $table->update();
    }
}
