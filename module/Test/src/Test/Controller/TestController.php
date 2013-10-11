<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Test\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Adapter\Adapter;

class TestController extends AbstractActionController
{
    private $dbAdapter;
    public function testAction()
    {
        //return new ViewModel();
        $this->dbAdapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');
        $result=$this->dbAdapter->query('select * from personas',Adapter::QUERY_MODE_EXECUTE);
        //var_dump($result->toArray());
        var_dump($result->count());
    }
    public function pruebaAction()
    {
        return new ViewModel();
    }
}
