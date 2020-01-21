<?php
namespace Portal\States;

Class RejectedTopic extends AbstractState {

    const LABEL = "Rejected Topic";
    const MACHINE_NAME = "rejected_topic";

    function __construct() {
        $this->_label  = self::LABEL;
        $this->_machineName = self::MACHINE_NAME;
    }


    public function promote()
    {
        return new DraftTopic();
    }

    public function demote()
    {
        return $this;
    }

    public function isPromotable()
    {
        return ($this->promote() instanceof DraftTopic);
    }

    public function isDemotable()
    {
        return (! $this->isDemotable() instanceof self);
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