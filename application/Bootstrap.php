<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{


    
    protected function _initConfig(){
        
        $config    = new Zend_Config_Xml(APPLICATION_PATH.'/configs/config.xml');
        Zend_Registry::set('config', $config);
        
        $env    = new Zend_Config($this->getOptions());
        Zend_Registry::set('env', $env);

        return $env;

    }


    protected function _initBaseUrl()
    {
        $options = $this->getOptions();
        $baseUrl = isset($options['settings']['baseUrl'])  ? $options['settings']['baseUrl'] : null;  // null tells front controller to use autodiscovery, the default
        $this->bootstrap('frontcontroller');
        $front = $this->getResource('frontcontroller');
        $front->setBaseUrl($baseUrl);
    }
    
    
    protected function _initRouter(){
        
        // Get Front Controller Instance
        $front = Zend_Controller_Front::getInstance();

        // Get Router
        $router = $front->getRouter();
         

        /*
         * Module routings
         */
        $router->addRoute('rest',  
            new Zend_Controller_Router_Route(
                "/rest/:controller/:action/:value/*",
                array(
                    'module' => 'rest',
                    'controller' => 'index',
                    'action'=>'index'
                    )
                    //,array('permalink' => '^[0-9]+$')
                )
            );
                
        
        $router->addRoute('admin',  
            new Zend_Controller_Router_Route(
                "/admin/:controller/:action/*",
                array(
                    'module' => 'admin',
                    'controller' => 'index',
                    'action'=>'index'
                    )
                    //,array('permalink' => '^[0-9]+$')
                )
            );
        


    }
    
    protected function _initRequest(){

        // set character encoding
        $resource = $this->getPluginResource('db');
        $db = $resource->getDbAdapter();
        $db->query('SET NAMES \'utf8\'');


        // add helpers
        Zend_Controller_Action_HelperBroker::addPath(APPLICATION_PATH .'/controllers/helpers');    
        //Zend_Controller_Action_HelperBroker::addPath(APPLICATION_PATH .'/controllers/backwardsCompatibilityLayer');    
    }
    
    



    
    
    
}

