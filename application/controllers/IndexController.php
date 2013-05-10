<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        
        /* Initialize action controller here */
        $this->view->headScript()->exchangeArray(array());
        $this->view->headScript()->appendFile('http://code.jquery.com/jquery.js','text/javascript');
        $this->view->headScript()->appendFile('http://code.jquery.com/ui/1.10.2/jquery-ui.js','text/javascript');
        $this->view->headScript()->appendFile($this->view->baseUrl('/js/bootstrap.min.js'),'text/javascript');
        $this->view->headLink()->exchangeArray(array());
        $this->view->headLink()->appendStylesheet('http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css');        
        $this->view->headLink()->appendStylesheet($this->view->baseUrl('/css/bootstrap.min.css'));        
        //$this->view->headLink()->appendStylesheet($this->view->baseUrl('/css/bootstrap-responsive.min.css'));        
        $this->view->headLink()->appendStylesheet($this->view->baseUrl('/css/planner.css'));        
        $this->view->doctype('XHTML1_STRICT');
        $this->view->headMeta()->exchangeArray(array());
        $this->view->headMeta()
            ->appendName('keywords', 'Homepage')
            ->appendHttpEquiv('viewport','width=device-width, initial-scale=1.0')
            ->appendHttpEquiv('pragma', 'no-cache')
            ->appendHttpEquiv('Cache-Control', 'no-cache')
            ->appendHttpEquiv('Content-Type','text/html; charset=UTF-8')
            ->appendHttpEquiv('Content-Language', 'en-UK')
            ->appendHttpEquiv('X-UA-Compatible', 'IE=edge,chrome=1');
        
        
    }

    public function indexAction()
    {
        // action body
        $this->view->headTitle('Homepage');
        
        //$this->_helper->flashMessenger(array('alert-error'=>'Sorry, Error.'));           
        //$this->_helper->flashMessenger('You must do something.');           
        //$this->_helper->flashMessenger(array('alert-info'=>'Soon this changes.'));           
        //$this->_helper->flashMessenger(array('alert-success'=>'Well done!'));           
        //$this->_helper->getHelper('Redirector')->gotoSimple('edit',null,null,array('article' =>$article->id));
        
        
        //$this->_helper->flashMessenger(array('alert-success'=>'Test Message'));
        
        
        $transaction_types = array(0=>'payment',1=>'loan',2=>'mobile');

        
        
        $this->view->todayKey = '20130917';

        $this->view->dates = (object) array(
            '20130919'=>(object) array(
                'unix'=>mktime(0,0,0,9,19,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),
            '20130918'=>(object) array(
                'unix'=>mktime(0,0,0,9,18,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array(
                    't1'=>(object) array(
                        'account'=>1,
                        'amount'=>'312.42',
                        'type'=>$transaction_types[2],
                        'order'=>2
                        ),
                     't2'=>(object) array(
                        'account'=>4,
                        'amount'=>'-28.99',
                        'type'=>$transaction_types[2],
                        'order'=>3
                        ),
                    't3'=>(object) array(
                        'account'=>4,
                        'amount'=>'-8.99',
                        'type'=>$transaction_types[0],
                        'order'=>3
                        ),
                    't4'=>(object) array(
                        'account'=>4,
                        'amount'=>'-25.99',
                        'type'=>$transaction_types[1],
                        'order'=>4
                        ),
                    't5'=>(object) array(
                        'account'=>4,
                        'amount'=>'-22.99',
                        'type'=>$transaction_types[2],
                        'order'=>5
                        ),
                    't6'=>(object) array(
                        'account'=>4,
                        'amount'=>'-21.99',
                        'type'=>$transaction_types[1],
                        'order'=>6
                        ),
                )
            ),
            '20130917'=>(object) array(
                'unix'=>mktime(0,0,0,9,17,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),
            '20130916'=>(object) array(
                'unix'=>mktime(0,0,0,9,16,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),
            '20130915'=>(object) array(
                'unix'=>mktime(0,0,0,9,15,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),
            '20130914'=>(object) array(
                'unix'=>mktime(0,0,0,9,14,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),
            '20130913'=>(object) array(
                'unix'=>mktime(0,0,0,9,13,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),
            '20130912'=>(object) array(
                'unix'=>mktime(0,0,0,9,12,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),
            '20130911'=>(object) array(
                'unix'=>mktime(0,0,0,9,11,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),
            '20130910'=>(object) array(
                'unix'=>mktime(0,0,0,9,10,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),
            '20130909'=>(object) array(
                'unix'=>mktime(0,0,0,9,9,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),
            '20130908'=>(object) array(
                'unix'=>mktime(0,0,0,9,8,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),
            '20130907'=>(object) array(
                'unix'=>mktime(0,0,0,9,14,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),            
            '20130906'=>(object) array(
                'unix'=>mktime(0,0,0,9,13,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),            
            '20130905'=>(object) array(
                'unix'=>mktime(0,0,0,9,12,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),            
            '20130904'=>(object) array(
                'unix'=>mktime(0,0,0,9,14,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),            
            '20130903'=>(object) array(
                'unix'=>mktime(0,0,0,9,14,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),            
            '20130902'=>(object) array(
                'unix'=>mktime(0,0,0,9,14,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),            
            '20130901'=>(object) array(
                'unix'=>mktime(0,0,0,9,14,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),            
            '20130831'=>(object) array(
                'unix'=>mktime(0,0,0,9,14,2013),
                'balance'=>'351.53',
                'transactions'=>(object) array()
            ),
            '20130830'=>(object) array(
                'unix'=>mktime(0,0,0,9,14,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),            
            '20130829'=>(object) array(
                'unix'=>mktime(0,0,0,9,14,2013),
                'balance'=>'321.53',
                'transactions'=>(object) array()
            ),            
            '20130828'=>(object) array(
                'unix'=>mktime(0,0,0,9,14,2013),
                'balance'=>'381.53',
                'transactions'=>(object) array()
            ),
        );
        
        
    }


}

