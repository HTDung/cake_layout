<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Loaitour Model
 *
 * @method \App\Model\Entity\Loaitour get($primaryKey, $options = [])
 * @method \App\Model\Entity\Loaitour newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Loaitour[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Loaitour|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Loaitour patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Loaitour[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Loaitour findOrCreate($search, callable $callback = null, $options = [])
 */
class LoaitourTable extends Table
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

        $this->setTable('loaitour');
        $this->setDisplayField('MaLoaiTour');
        $this->setPrimaryKey('MaLoaiTour');
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
            ->allowEmpty('MaLoaiTour', 'create');

        $validator
            ->scalar('LoaiTour')
            ->maxLength('LoaiTour', 100)
            ->requirePresence('LoaiTour', 'create')
            ->notEmpty('LoaiTour');

        $validator
            ->dateTime('NgayTao')
            ->requirePresence('NgayTao', 'create')
            ->notEmpty('NgayTao');

        $validator
            ->dateTime('NgaySua')
            ->requirePresence('NgaySua', 'create')
            ->notEmpty('NgaySua');

        return $validator;
    }
}
