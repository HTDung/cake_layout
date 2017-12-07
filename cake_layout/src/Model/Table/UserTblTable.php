<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserTbl Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\TeamsTable|\Cake\ORM\Association\BelongsTo $Teams
 * @property \App\Model\Table\RolesTable|\Cake\ORM\Association\BelongsTo $Roles
 * @property \App\Model\Table\ProjectsTable|\Cake\ORM\Association\BelongsTo $Projects
 *
 * @method \App\Model\Entity\UserTbl get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserTbl newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserTbl[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserTbl|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserTbl patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserTbl[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserTbl findOrCreate($search, callable $callback = null, $options = [])
 */
class UserTblTable extends Table
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

        $this->setTable('user_tbl');
        $this->setDisplayField('name');
        $this->setPrimaryKey('user_id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Teams', [
            'foreignKey' => 'team_id'
        ]);
        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Projects', [
            'foreignKey' => 'project_id'
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
            ->scalar('username')
            ->maxLength('username', 40)
            ->notEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->notEmpty('password');

        $validator
            ->scalar('fullname')
            ->maxLength('fullname', 255)
            ->notEmpty('fullname');

        $validator
            ->scalar('nickname')
            ->maxLength('nickname', 55)
            ->allowEmpty('nickname');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('slogan')
            ->maxLength('slogan', 255)
            ->allowEmpty('slogan');

        $validator
            ->integer('type')
            ->notEmpty('type');

        $validator
            ->boolean('status')
            ->allowEmpty('status');

        $validator
            ->dateTime('create_time')
            ->allowEmpty('create_time');

        $validator
            ->dateTime('update_time')
            ->allowEmpty('update_time');

        $validator
            ->integer('day_off')
            ->allowEmpty('day_off');

        $validator
            ->date('day_join')
            ->allowEmpty('day_join');

        $validator
            ->date('day_sign')
            ->allowEmpty('day_sign');

        $validator
            ->scalar('birdday')
            ->maxLength('birdday', 20)
            ->allowEmpty('birdday');

        $validator
            ->scalar('sex')
            ->maxLength('sex', 10)
            ->allowEmpty('sex');

        $validator
            ->integer('cmt')
            ->allowEmpty('cmt');

        $validator
            ->scalar('id_user')
            ->maxLength('id_user', 50)
            ->notEmpty('id_user');

        $validator
            ->integer('ho_lastyear')
            ->allowEmpty('ho_lastyear');

        $validator
            ->integer('daysOffYear')
            ->allowEmpty('daysOffYear');

        $validator
            ->scalar('name')
            ->maxLength('name', 300)
            ->allowEmpty('name');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['team_id'], 'Teams'));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));
        $rules->add($rules->existsIn(['project_id'], 'Projects'));

        return $rules;
    }
}
