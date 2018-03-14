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

        // $this->setTable('user_tbl');
        // $this->setDisplayField('user_id');
        // $this->setPrimaryKey('user_id');

        // $this->belongsTo('Users', [
        //     'foreignKey' => 'user_id',
        //     'joinType' => 'INNER'
        // ]);
        $this->addBehavior('Timestamp');
        // $this->table('user_tbl');
        $this->setTable('user_tbl');
        $this->hasMany('ManageOvertimes',
               array(
                'foreignKey'=>'user_id',
                'bindingKey' => 'user_id',
                'className'=>'ManageOvertimes',
            
                )
        );

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'className' => 'Roles',
            'joinType' => 'INNER',
        ]);
        
        $this->belongsToMany('Projects', [
            'targetForeignKey' => 'project_id',
            'joinTable' => 'member_project_tbl',
            'foreignKey' => 'project_id',
        ]);
         $this->hasMany('Members')
         ->setForeignKey('user_id')
            ->setDependent(true);
         $this->hasMany('Overtimes')
            ->setForeignKey('user_id')
            ->setDependent(true);   
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
            ->notEmpty('username','username k dc de trong');


        $validator->notEmpty('username  ', 'Title cannot be empty');
        $validator
            ->scalar('password')
            ->notEmpty('password','password k dc de trong');

        $validator
            ->scalar('fullname')
            ->notEmpty('fullname');

        $validator
            ->scalar('nickname')
            ->allowEmpty('nickname');

        $validator
            ->scalar('slogan')
            ->allowEmpty('slogan');

        $validator
            ->scalar('personal_email')
            ->notEmpty('personal_email');

        $validator
            ->scalar('company_email')
            ->notEmpty('company_email');

        $validator
            ->scalar('employee_code')
            ->notEmpty('employee_code');

        $validator
            ->scalar('identity_no')
            ->notEmpty('identity_no');

        $validator
            ->integer('gender')
            ->notEmpty('gender');

        $validator
            ->date('date_of_birth')
            ->allowEmpty('date_of_birth');

        $validator
            ->scalar('address')
            ->notEmpty('address');

        $validator
            ->date('trial_date')
            ->allowEmpty('trial_date');

        $validator
            ->date('official_date')
            ->allowEmpty('official_date');

        $validator
            ->dateTime('create_time')
            ->allowEmpty('create_time');

        $validator
            ->dateTime('update_time')
            ->allowEmpty('update_time');

        $validator
            ->integer('delete_status')
            ->notEmpty('delete_status');

        return $validator;
    }

}
