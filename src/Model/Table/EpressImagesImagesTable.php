<?php
namespace Bilder\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EpressImagesImages Model
 */
class EpressImagesImagesTable extends Table {
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
		$this->table('epress_images_images');
		$this->displayField('id');
		$this->primaryKey('id');
		$this->addBehavior('Timestamp');
		$this->connection('bilder');
		$this->belongsTo('Bilder.EpressImagesCollections', [
			'foreignKey' => 'epress_images_collection_id',
		]);
/*		$this->belongsTo('Bilder.Newsdesks', [
			'foreignKey' => 'newsdesk_id',
		]);
*/		$this->hasMany('Bilder.EpressImagesImagetexts', [
			'foreignKey' => 'epress_images_image_id',
		]);
		$this->hasMany('Bilder.EpressImagesImagevariants', [
			'foreignKey' => 'epress_images_image_id',
		]);
	}

	/**
	 * Testfunktion
	 */
	public function testar_en_funktion($varde = null) {
		debug('är nu i testet!'); die;
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
			->add('epress_images_collection_id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('epress_images_collection_id')
			->add('newsdesk_id', 'valid', ['rule' => 'numeric'])
			->allowEmpty('newsdesk_id')
			->allowEmpty('language')
			->add('published_at', 'valid', ['rule' => 'datetime'])
			->allowEmpty('published_at')
			->allowEmpty('photographer');

		return $validator;
	}

}
