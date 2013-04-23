<?php
class Zend_View_Helper_Nav extends Zend_View_Helper_Abstract {
	

      
    protected $_pages;
    protected $_menuOptions;
    private $_navContainer;
    
    
    
    
    public function Nav(array $menuOptions=null){
        
        $this->setMenuOptions($menuOptions);
        return $this;
    }
    
    
    public function getPages(){
        
        if (!isset($this->_pages)){
            $this->setPages();
        }
        return $this->_pages;
    }
    
    
    public function setPages($pages = null){
        
        if ($pages==null){
            $pages = Zend_Registry::get('config')->nav;
        }
        
        $this->_pages = $pages;
        
        return $this;
        
    }
    
    public function getMenuOptions(){
        
        if (!isset($this->_menuOptions)){
            $this->setMenuOptions();
        }
        return $this->_menuOptions;
    }
    
    
    public function setMenuOptions(array $menuOptions = null){
                
        $this->_menuOptions = $menuOptions;
        
        return $this;
        
    }
    
    
    public function setNavContainer(Zend_Navigation $navContainer = null){
        
        if ($navContainer==null){
            $navContainer = new Zend_Navigation($this->getPages());
        }
        
        $this->_navContainer = $navContainer;
        return $this;
    }
    
    public function getNavContainer(){
        
        if (!isset($this->_navContainer)){
            $this->setNavContainer();
        }
        
        return $this->_navContainer;
    }
    
    public function getHrefById($id){
        
        $page = $this->getNavContainer()->findOneById($id);
        if ($page){
            return $page->href;
        }
        
    }
    
    
    public function __toString() {        
        return (string) $this->view->navigation($this->getNavContainer())->menu()->renderMenu(null, $this->getMenuOptions());
    }
    
}