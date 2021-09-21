<?php

            $text = "this is link to http://www.wjgilmore.come";
            echo preg_replace("/http:\/\/(.*)\//", "<a href=\"\${0}\">\{0}</a>", $text);



?>