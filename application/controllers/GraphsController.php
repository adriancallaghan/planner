<?php

class GraphsController extends Zend_Controller_Action
{

    public function init()
    {
        
        /* Initialize action controller here */
        $this->view->headScript()->exchangeArray(array());
        $this->view->headScript()->appendFile('http://code.jquery.com/jquery.js','text/javascript');
        $this->view->headScript()->appendFile('http://code.jquery.com/ui/1.10.2/jquery-ui.js','text/javascript');
        $this->view->headScript()->appendFile($this->view->baseUrl('/js/bootstrap.min.js'),'text/javascript');
        $this->view->headLink()->exchangeArray(array());
        //$this->view->headLink()->appendStylesheet('http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css');        
        $this->view->headLink()->appendStylesheet($this->view->baseUrl('/css/bootstrap.min.css'));        
        $this->view->headLink()->appendStylesheet($this->view->baseUrl('/css/bootstrap-responsive.min.css'));        
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
        
        
        //$this->_helper->flashMessenger(array('alert-success'=>'Transaction moved'));
        
        
        
        
        $this->view->transactionTypes = array(1=>'Bill',2=>'Loan',3=>'Payment',4=>'Deposit');
        $this->view->accounts = array(1=>'Jennie',2=>'Dad',3=>'02',4=>'HeartInternet',5=>'Orange',6=>'Adrian');
        $this->view->transactionTags = array(1=>'mobile',2=>'car',3=>'children',4=>'hosting',5=>'takeaway',6=>'domain');
        

        
    }


}

