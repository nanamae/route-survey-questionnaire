<?php
use Migrations\AbstractMigration;

class ChangeCulumnValueOfAnswers extends AbstractMigration
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
        $table->changeColumn('value', 'integer', [
            'default' => null,
            'null' => true,
        ]);
    }
}
