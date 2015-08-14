<?php

namespace SidekiqJobPusher;

class MessageSerialiser
{
    function serialise($workerClass, $args = array(), $retry = false, $at = null)
    {
        $at = $at ?: time();
        return json_encode(array(
            'class' => $workerClass,
            'args'  => $args,
            'retry' => $retry,
            'at'    => $at
        ));
    }
}
