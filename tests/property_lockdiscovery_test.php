<?php

require_once dirname( __FILE__ ) . '/property_test.php';

class ezcWebdavLockDiscoveryPropertyTest extends ezcWebdavPropertyTestCase
{
    public static function suite()
    {
		return new PHPUnit_Framework_TestSuite( __CLASS__ );
    }

    protected function setUp()
    {
        $this->className = 'ezcWebdavLockDiscoveryProperty';
        $this->defaultValues = array(
            'activelock' => null,
        );
        $this->workingValues = array(
            'activelock' => array(
                null,
                array(
                    new ezcWebdavLockDiscoveryPropertyActivelock(),
                    new ezcWebdavLockDiscoveryPropertyActivelock(),
                ),
            ),
        );
        $this->failingValues = array(
            'activelock' => array(
                23,
                23.34,
                'foobar',
                true,
                false,
                new stdClass(),
            ),
        );
    }
}

?>
