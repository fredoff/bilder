<?php
namespace Bilder\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EpressImagesImagevariants Model
 */
class EpressImagesImagevariantsTable extends Table {
    public static function defaultConnectionName() {
        return 'bilder';
    }

/**
 * Initialize method
 *
 * @param array $config The configuration for the Table.
 * @return void
 */
	public function initialize(array $config) {
		$this->table('epress_images_imagevariants');
		$this->displayField('id');
		$this->primaryKey('id');

		$this->belongsTo('Bilder.EpressImagesImages', [
			'foreignKey' => 'epress_images_image_id',
		]);
	}

/**
 * Default validation rules.
 *
 * @param \Cake\Validation\Validator $validator
 * @return \Cake\Validation\Validator
 */
	public function validationDefault(Validator $validator) {
		$validator
			->add('id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('id', 'create')
			->add('epress_images_image_id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('epress_images_image_id')
			->validatePresence('url', 'create')
			->notEmpty('url')
			->add('bredd', 'valid', ['rule' => 'numeric'])
			->allowEmpty('bredd')
			->add('hojd', 'valid', ['rule' => 'numeric'])
			->allowEmpty('hojd')
			->allowEmpty('typ')
			->add('existerar', 'valid', ['rule' => 'boolean'])
			->allowEmpty('existerar');

		return $validator;
	}

}
