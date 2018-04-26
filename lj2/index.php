<?php
               
$title = "Learning JavaScript second edition";
                 
echo "<html><title>$title</title><body>";
echo "<h1>$title</h1>";
                     
$dir = opendir(".");
$filenames = array();

while (($file = readdir($dir)) !== false) {
   if ($file != "." && $file != "..") {
      if (strpos($file,".html")) {
         $filenames[] = $file;
         }
   }
}
sort($filenames);

foreach($filenames as $filename) {
 echo "<a href=\"$filename\">$filename</a></br>";
 }
closedir($dir);
                                                                       
 echo "</body></html>";
                                              
?>
