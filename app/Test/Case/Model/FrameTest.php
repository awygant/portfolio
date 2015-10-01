<?php
App::uses('Frame', 'Model');

/**
 * Frame Test Case
 */
class FrameTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.frame',
		'app.face'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Frame = ClassRegistry::init('Frame');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Frame);

		parent::tearDown();
	}

}
