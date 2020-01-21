<?php

namespace Portal\States;

class DraftContent extends AbstractState {
    const LABEL = "Draft Content";
    const MACHINE_NAME = "draft_content";

    function __construct()
    {
        $this->_label = self::LABEL;
        $this->_machineName = self::MACHINE_NAME;
    }


    public function promote()
    {
        /** Implementation of Draft Content Under Review */
    }

    public function demote()
    {
        return $this;
    }

    public function isDemotable()
    {
        return (!$this->isDemotable() instanceof self);
    }

    public function isPromotable()
    {
        return ($this->promote() instanceof AbstractState);
    }

    public function getMachineName()
    {
        return $this->_machineName;
    }

    public function getLabel()
    {
        return $this->_label;
    }
}