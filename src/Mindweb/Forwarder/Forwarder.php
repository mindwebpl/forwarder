<?php
namespace Mindweb\Forwarder;

interface Forwarder
{
    /**
     * @param array $data
     * @return array
     */
    public function forward(array $data);
} 