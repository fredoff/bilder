<?php
namespace Bilder\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EpressImagesCollections Model
 */
class EpressImagesCollectionsTable extends Table {
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
		$this->table('epress_images_collections');
		$this->displayField('id');
		$this->primaryKey('id');

		$this->hasMany('Bilder.EpressImagesImages', [
			'foreignKey' => 'epress_images_collection_id',
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
			->allowEmpty('namn')
			->allowEmpty('anteckning');

		return $validator;
	}

}
