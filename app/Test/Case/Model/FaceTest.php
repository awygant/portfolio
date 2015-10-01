<?php
App::uses('Face', 'Model');

/**
 * Face Test Case
 */
class FaceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.face'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Face = ClassRegistry::init('Face');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Face);

		parent::tearDown();
	}

}
