<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Imagesevent Entity
 *
 * @property int $id
 * @property string $descricao
 * @property string $imagem
 * @property int $noticia_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Noticia $noticia
 */
class Imagesevent extends Entity
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
        'descricao' => true,
        'imagem' => true,
        'noticia_id' => true,
        'created' => true,
        'modified' => true,
        'noticia' => true
    ];
}