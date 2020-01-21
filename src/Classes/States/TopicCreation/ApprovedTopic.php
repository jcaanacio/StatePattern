<?php

namespace Portal\States;

Class ApprovedTopic extends AbstractState {

    const LABEL = "Approved Topic";
    const MACHINE_NAME = "approved_topic";

    function __construct() {
        $this->_label  = self::LABEL;
        $this->_machineName = self::MACHINE_NAME;
    }

    public function promote()
    {
        return new DraftContent();
    }

    public function demote()
    {
        /** No Implementation of demote in this state */
        return $this;
    }

    public function isPromotable()
    {
        return ($this->promote() instanceof DraftContent);
    }

    public function isDemotable()
    {
        return (!$this->demote() instanceof self);
    }

    public function getLabel()
    {
        return $this->_label;
    }

    public function getMachineName()
    {
        return $this->_machineName;
    }

}