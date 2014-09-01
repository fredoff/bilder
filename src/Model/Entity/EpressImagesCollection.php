<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EpressImagesCollection Entity.
 */
class EpressImagesCollection extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'namn' => true,
		'anteckning' => true,
		'epress_images_images' => true,
	];

}
