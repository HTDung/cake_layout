<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserTbl Entity
 *
 * @property string $user_id
 * @property string $team_id
 * @property string $username
 * @property string $password
 * @property string $fullname
 * @property string $nickname
 * @property string $email
 * @property string $slogan
 * @property string $role_id
 * @property int $type
 * @property bool $status
 * @property \Cake\I18n\FrozenTime $create_time
 * @property \Cake\I18n\FrozenTime $update_time
 * @property string $project_id
 * @property int $day_off
 * @property \Cake\I18n\FrozenDate $day_join
 * @property \Cake\I18n\FrozenDate $day_sign
 * @property string $birdday
 * @property string $sex
 * @property int $cmt
 * @property string $id_user
 * @property int $ho_lastyear
 * @property int $daysOffYear
 * @property string $name
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Team $team
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Project $project
 */
class UserTbl extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'team_id' => true,
        'username' => true,
        'password' => true,
        'fullname' => true,
        'nickname' => true,
        'email' => true,
        'slogan' => true,
        'role_id' => true,
        'type' => true,
        'status' => true,
        'create_time' => true,
        'update_time' => true,
        'project_id' => true,
        'day_off' => true,
        'day_join' => true,
        'day_sign' => true,
        'birdday' => true,
        'sex' => true,
        'cmt' => true,
        'id_user' => true,
        'ho_lastyear' => true,
        'daysOffYear' => true,
        'name' => true,
        'user' => true,
        'team' => true,
        'role' => true,
        'project' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
