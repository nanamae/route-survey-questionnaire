<?php
use Migrations\AbstractMigration;

class AddHeadingPitchToAnswers extends AbstractMigration
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
        $table->addColumn('heading', 'decimal', [
            'default' => null,
            'null' => false,
            'precision' => 15,
            'scale' => 10
        ]);
        $table->addColumn('pitch', 'decimal', [
            'default' => null,
            'null' => false,
            'precision' => 15,
            'scale' => 10
        ]);
        $table->update();
    }
}
