<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EpressImagesImagevariant Entity.
 */
class EpressImagesImagevariant extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'epress_images_image_id' => true,
		'url' => true,
		'bredd' => true,
		'hojd' => true,
		'typ' => true,
		'existerar' => true,
		'epress_images_image' => true,
	];

}
