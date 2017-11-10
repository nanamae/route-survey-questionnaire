<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $hasher = new DefaultPasswordHasher();
        $data = [
                 [
                    'username' => 'nanamae2',
                    'password' => $hasher->hash('test'), 
                    'role' => 'admin',
                    'email' => 'naaaats45@gmail.com'
                ]
            ];
        

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
