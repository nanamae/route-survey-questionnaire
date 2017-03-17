<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Targets Model
 *
 * @property \Cake\ORM\Association\HasMany $Paths
 *
 * @method \App\Model\Entity\Target get($primaryKey, $options = [])
 * @method \App\Model\Entity\Target newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Target[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Target|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Target patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Target[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Target findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TargetsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('targets');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Paths', [
            'foreignKey' => 'target_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('url', 'create')
            ->notEmpty('url');

        return $validator;
    }
}
