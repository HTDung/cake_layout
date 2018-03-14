<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Khuyenmai Entity
 *
 * @property int $MaKMai
 * @property int $MaTour
 * @property string $TenKMai
 * @property \Cake\I18n\FrozenDate $NgayBD
 * @property \Cake\I18n\FrozenDate $NgayKT
 * @property string $Ghichu
 */
class Khuyenmai extends Entity
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
        'MaTour' => true,
        'TenKMai' => true,
        'NgayBD' => true,
        'NgayKT' => true,
        'Ghichu' => true
    ];
}
