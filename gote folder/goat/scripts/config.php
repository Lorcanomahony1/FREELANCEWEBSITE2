<?php
	$config = array("base_url" => "YOUR_WEBSITE_OAUTH_URL", 
        "providers" => array (  
            "Twitter" => array ( 
                "enabled" => true,
                "keys"    => array ( "key" => "Fcs36IlYdJh7VhtdVt8rfW17j", "secret" => "MzitOhEho7lJNJ3W96QBI3IDD4WAGBpLufybczJSxrVLy7X1zS" ) 
            ),
        ),
        // if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
        "debug_mode" => false,
        "debug_file" => "debug.log",
    );



?>