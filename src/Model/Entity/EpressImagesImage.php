<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EpressImagesImage Entity.
 */
class EpressImagesImage extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'epress_images_collection_id' => true,
		'newsdesk_id' => true,
		'language' => true,
		'published_at' => true,
		'photographer' => true,
		'epress_images_collection' => true,
		'newsdesk' => true,
		'epress_images_imagetexts' => true,
		'epress_images_imagevariants' => true,
	];

}
