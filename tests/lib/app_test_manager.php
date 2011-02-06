<?php

require_once CAKE_TESTS_LIB . 'test_manager.php';

App::import('Lib', 'AppFixtureManager', false, array(TESTS . 'lib'));

class AppTestManager extends TestManager {

	public function getFixtureManager() {
		if (!empty($this->_fixtureManager)) {
			return $this->_fixtureManager;
		}
		return $this->_fixtureManager = new AppFixtureManager;
	}
}
