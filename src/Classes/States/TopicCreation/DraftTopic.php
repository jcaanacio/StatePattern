<?php

namespace Portal\States;

Class DraftTopic extends AbstractState {

    const LABEL = "Draft Topic";
    const MACHINE_NAME = "draft_topic";

    function __construct() {
        $this->_label  = self::LABEL;
        $this->_machineName = self::MACHINE_NAME;
    }

    public function promote() 
    {
        return new UnderReviewTopic();
    }

    public function demote() 
    {
        return new RejectedTopic();
    }

    public function isPromotable() 
    {
        return ($this->promote() instanceof UnderReviewTopic);
    }

    public function isDemotable() 
    {
        return ($this->demote() instanceof RejectedTopic);
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