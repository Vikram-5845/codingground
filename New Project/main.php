<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php
   echo "<h1>Hello, PHP!</h1>";
   $str='{
   "mysql-5.5": [
      {
         "name": "templedb",
         "label": "mysql-5.5",
         "plan": "100",
         "credentials": {
            "name": "d965ac139694a45f6b8a70a269c53a0bb",
            "hostname": "75.126.23.246",
            "host": "75.126.23.246",
            "port": 3307,
            "user": "uSbWSbyQwiH9L",
            "username": "uSbWSbyQwiH9L",
            "password": "pawyssT6OXObS",
            "uri": "mysql://uSbWSbyQwiH9L:pawyssT6OXObS@75.126.23.246:3307/d965ac139694a45f6b8a70a269c53a0bb"
         }
      }
   ]
}';

$var = json_decode($str);
$custom_array=array();
foreach($var as $val){
    foreach($val as $val1){
                $custom_array['database_name']= $val1->name;
                $custom_array['database_label']= $val1->label;
                $custom_array['database_plan']= $val1->plan;
                foreach($val1->credentials as $key=>$val2){
                            $custom_array['credential'][$key]= $val2;
                            
                }
        }
}

var_dump($custom_array['credential']['name']);
?>
</body>
</html>
