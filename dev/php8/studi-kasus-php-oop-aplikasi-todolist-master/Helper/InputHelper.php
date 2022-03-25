<?php

namespace Helper {

    class InputHelper
    {

        static function input(string $info): string
        {
            echo "$info : ";
            $result = fgetss(STDIN);
            return trim($result);
        }

    }

}
