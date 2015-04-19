<?php
namespace Mindweb\Forwarder;

class Collection
{
    /**
     * @var array
     */
    private $forwarders = array();

    /**
     * @param Forwarder $forwarder
     */
    public function add(Forwarder $forwarder)
    {
        $this->forwarders[] = $forwarder;
    }

    /**
     * @param array $data
     * @return array
     */
    public function forward(array $data)
    {
        /**
         * @var Forwarder $forwarder
         */
        foreach ($this->forwarders as $forwarder) {
            $forwarder->forward($data);
        }
    }
} 