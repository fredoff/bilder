<?php
namespace Bilder\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Bilder\Model\Table\SlasksTable;
use Cake\TestSuite\TestCase;

/**
 * Bilder\Model\Table\SlasksTable Test Case
 */
class SlasksTableTest extends TestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = [
		'plugin.bilder.slask'
	];

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$config = TableRegistry::exists('Slasks') ? [] : ['className' => 'Bilder\Model\Table\SlasksTable'];
		$this->Slasks = TableRegistry::get('Slasks', $config);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Slasks);

		parent::tearDown();
	}

}
