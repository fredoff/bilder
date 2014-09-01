<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EpressImagesImagetext Entity.
 */
class EpressImagesImagetext extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'epress_images_image_id' => true,
		'rubrikforslag' => true,
		'bildtextforslag' => true,
		'epress_images_image' => true,
	];

}
