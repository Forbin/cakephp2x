<?php
/**
 * Short description for file.
 *
 * PHP Version 5.x
 *
 * CakePHP(tm) Tests <https://trac.cakephp.org/wiki/Developement/TestSuite>
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The Open Group Test Suite License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          https://trac.cakephp.org/wiki/Developement/TestSuite CakePHP(tm) Tests
 * @package       cake
 * @subpackage    cake.tests.fixtures
 * @since         CakePHP(tm) v 1.2.0.5669
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */

/**
 * Short description for class.
 *
 * @package       cake
 * @subpackage    cake.tests.fixtures
 */
class TranslatedItemFixture extends CakeTestFixture {

/**
 * name property
 *
 * @var string 'TranslatedItem'
 * @access public
 */
	var $name = 'TranslatedItem';

/**
 * fields property
 *
 * @var array
 * @access public
 */
	var $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'slug' => array('type' => 'string', 'null' => false)
	);

/**
 * records property
 *
 * @var array
 * @access public
 */
	var $records = array(
		array('slug' => 'first_translated'),
		array('slug' => 'second_translated'),
		array('slug' => 'third_translated')
	);
}

?>