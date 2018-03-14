<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Khuyenmai Model
 *
 * @method \App\Model\Entity\Khuyenmai get($primaryKey, $options = [])
 * @method \App\Model\Entity\Khuyenmai newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Khuyenmai[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Khuyenmai|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Khuyenmai patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Khuyenmai[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Khuyenmai findOrCreate($search, callable $callback = null, $options = [])
 */
class KhuyenmaiTable extends Table
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

        $this->setTable('khuyenmai');
        $this->setDisplayField('MaKMai');
        $this->setPrimaryKey('MaKMai');
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
            ->allowEmpty('MaKMai', 'create');

        $validator
            ->allowEmpty('MaTour');

        $validator
            ->scalar('TenKMai')
            ->maxLength('TenKMai', 100)
            ->requirePresence('TenKMai', 'create')
            ->notEmpty('TenKMai');

        $validator
            ->date('NgayBD')
            ->requirePresence('NgayBD', 'create')
            ->notEmpty('NgayBD');

        $validator
            ->date('NgayKT')
            ->requirePresence('NgayKT', 'create')
            ->notEmpty('NgayKT');

        $validator
            ->scalar('Ghichu')
            ->maxLength('Ghichu', 1000)
            ->allowEmpty('Ghichu');

        return $validator;
    }
}
