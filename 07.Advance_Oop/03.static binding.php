<?php

    class employee{

        public static $favsport = "football";
        public static function watchTv(){
            echo "watching".self::$favsport;
        }
    }

    class executive extends employee{
        public static $favsport = "polo";
    }

    echo executive::watchTv();


?>