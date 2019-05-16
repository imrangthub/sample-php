<?php
namespace App\Bitm\Seip113827\Utility;

class debugs{
    public function Debug($DebugData=''){
        echo "<pre>";
        print_r($DebugData);
        echo "</pre>";
    }
}