<?php 

namespace Portal\States;

class UnderReviewTopic extends AbstractState {


    const LABEL = "Under Review";
    const MACHINE_NAME = "under_review_topic";

    function __construct() {
        $this->_label  = self::LABEL;
        $this->_machineName = self::MACHINE_NAME;
    }

    public function promote()
    {
        return new ApprovedTopic();
    }

    public function demote() 
    {
        return new RejectedTopic();
    }

    public function isPromotable() 
    {
        return ($this->promote() instanceof ApprovedTopic);
    }

    public function isDemotable()
    {
        return ($this->promote() instanceof RejectedTopic);
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