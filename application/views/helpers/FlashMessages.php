<?php

class Zend_View_Helper_FlashMessages extends Zend_View_Helper_Abstract
{
    public function flashMessages($class = 'flashMessages')
    {
        $flashMessenger = Zend_Controller_Action_HelperBroker::getStaticHelper('FlashMessenger');
        
        $messages = array_merge($flashMessenger->getMessages(),$flashMessenger->getCurrentMessages());

        $output ="<ul class='$class'><li><p>No Messages</p></li></ul>";
        
        if (!empty($messages)) {
            $output = "<ul class='$class'><li><p>". implode("</li></p><li>", $messages)."</li></ul>";
        } 
        
        $flashMessenger->clearCurrentMessages();
        return $output;
    }
}