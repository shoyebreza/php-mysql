<?php
        if(isset($_POST['submit']))
        {
            $ip = implode('.', $_POST['ip']);
            $ip = ip2long($ip);

            $netmask = implode('.', $_POST['sm']);
            $netmask = ip2long($netmask);

            $na = ( $ip & $netmask);
            $ba = $na | (~$netmask);

            $h = ip2long(long2ip($ba)) - ip2long(long2ip($na));

            echo " addresing information :</br>";
            echo "<ul>";
            echo "<li> IP address is : ".long2ip($ip)."</li>";
            echo "<li> subnet mask  is : ".long2ip($netmask)."</li>";
            echo "<li> netwark address  is : ".long2ip($na)."</li>";
            echo "<li> broadcast address is : ".long2ip($ba)."</li>";
            echo "<li> total availavle host is : ".($h - 1)."</li>";
            echo "<li> host range  is : ".long2ip($na + 1)."- ".long2ip($ba - 1)."</li>";
            echo "</ul>";
        }



?>