<?php
namespace Portal\States;

Abstract Class AbstractState {

    private $_label;
    private $_machineName;

    public abstract function promote();

    public abstract function demote();

    public abstract function isPromotable();

    public abstract function isDemotable();

    public abstract function getMachineName();

    public abstract function getLabel();

}