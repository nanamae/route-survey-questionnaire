<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paths Model
 *
 * @method \App\Model\Entity\Path get($primaryKey, $options = [])
 * @method \App\Model\Entity\Path newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Path[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Path|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Path patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Path[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Path findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PathsTable extends Table
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

        $this->table('paths');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        
        $this->hasMany('Images', [
            'foreignKey' => 'paths_id'
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
            ->allowEmpty('name');

        $validator
            ->decimal('lat')
            ->requirePresence('lat', 'create')
            ->notEmpty('lat');

        $validator
            ->decimal('lng')
            ->requirePresence('lng', 'create')
            ->notEmpty('lng');

        $validator
            ->decimal('heading')
            ->requirePresence('heading', 'create')
            ->notEmpty('heading');

        $validator
            ->decimal('pitch')
            ->requirePresence('pitch', 'create')
            ->notEmpty('pitch');
            
        //  $validator
        //     ->allowEmpty('img_ext')
        //     ->add('img_ext', ['list' => [
        //         'rule' => ['inList', ['jpg', 'png', 'gif']],
        //         'message' => 'jpg, png, gif のみアップロード可能です.',
        //     ]]);

        // $validator
        //     ->integer('img_size')
        //     ->allowEmpty('img_size')
        //     ->add('img_size', 'comparison', [
        //         'rule' => ['comparison', '<', 10485760],
        //         'message' => 'ファイルサイズが超過しています(MaxSize:10M)',
        //     ]);

        return $validator;
    }
}
