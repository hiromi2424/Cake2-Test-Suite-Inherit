<?php


require_once CAKE_TESTS_LIB . 'cake_test_suite_dispatcher.php';

class AppTestSuiteDispatcher extends CakeTestSuiteDispatcher {
/**
 * The classname for the TestManager being used
 *
 * @var string
 */
	protected $_managerClass = 'AppTestManager';

	public static function run() {

		$dispatcher = new AppTestSuiteDispatcher();
		$dispatcher->dispatch();

	}

/**
 * Sets the Manager to use for the request.
 *
 * @return string The manager class name
 * @static
 */
	function getManager() {
		if (empty($this->Manager)) {
			require_once TESTS . 'lib' . DS . 'app_test_manager.php';
			$this->Manager = new $this->_managerClass($this->params);
		}
		return $this->Manager;
	}

}
