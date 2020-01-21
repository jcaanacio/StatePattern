<?php 

namespace Portal\Content;
use Portal\States\AbstractState;

Class TouristsSecret extends AbstractContent {


    function __construct(string $title, string $focusKeyword, string $bodyContext ,AbstractState $state ) 
    {   
        $this->_title = $title;
        $this->_focusKeyword = $focusKeyword;
        $this->_bodyContext = $bodyContext;
        $this->_state = $state;
    }

    public function save() {

    }

    public function getTitle() {
        return $this->_title;
    }

    public function setTitle(string $title) {
        $this->_title = $title;
    }

    public function getFocusKeyword() {
        return $this->_focusKeyword;
    }

    public function setFocusKeyword(string $focusKeyword) {
        $this->_focusKeyword = $focusKeyword;
    }

    public function getBodyContext() {
        return $this->_bodyContext;
    }

    public function setBodyContent(string $bodyContext) {
        $this->_bodyContext = $bodyContext;
    }
    
    public function getState() {
        return $this->_state;
    }

    public function setState(AbstractState $state) {
        $this->_state = $state;
    }
}