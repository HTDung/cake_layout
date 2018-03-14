<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Loaitour Entity
 *
 * @property int $MaLoaiTour
 * @property string $LoaiTour
 * @property \Cake\I18n\FrozenTime $NgayTao
 * @property \Cake\I18n\FrozenTime $NgaySua
 */
class Loaitour extends Entity
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
        'LoaiTour' => true,
        'NgayTao' => true,
        'NgaySua' => true
    ];
}
