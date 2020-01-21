<?php
namespace Portal\Content;
use Portal\States\AbstractState;

Abstract Class AbstractContent {

    private $_title;
    private $_focusKeyword;
    private $_bodyContext;
    private $_state;

    public abstract function save();

    public abstract function getTitle();

    public abstract function setTitle(string $title);

    public abstract function getFocusKeyword();

    public abstract function setFocusKeyword(string $focusKeyword);

    public abstract function getBodyContext();

    public abstract function setBodyContent(string $bodyContext);
    
    public abstract function getState();

    public abstract function setState(AbstractState $state);

}