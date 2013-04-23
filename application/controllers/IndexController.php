<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        
        /* Initialize action controller here */
        $this->view->headScript()->exchangeArray(array());
        $this->view->headScript()->appendFile($this->view->baseUrl('http://code.jquery.com/jquery.js'),'text/javascript');
        $this->view->headScript()->appendFile($this->view->baseUrl('/js/bootstrap.min.js'),'text/javascript');
        $this->view->headLink()->exchangeArray(array());
        $this->view->headLink()->appendStylesheet($this->view->baseUrl('/css/bootstrap.min.css'));        
        $this->view->doctype('XHTML1_STRICT');
        $this->view->headMeta()->exchangeArray(array());
        $this->view->headMeta()
            ->appendName('keywords', 'Oracle, Homepage')
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
        $this->view->Title = 'Homepage';
        
    }


}

