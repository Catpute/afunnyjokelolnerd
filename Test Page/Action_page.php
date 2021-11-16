<?php

echo "tonst";
 
 $pocket = rand(1,5111); 
sleep(1);
echo $pocket;
sleep(1);
If($pocket < 2) { 
echo "the test works!"; }
else { echo "Uh oh! something went wrong!"; }
function tobble() {
$Evening = fopen("GoodEvening!.txt", "w") or die("Unable to open file!");
$txt = "Name \n";
fwrite($Evening, $txt);
$txt = "good evening \n";
fwrite($Evening, $txt);
$txt = "how has your day been?";
fwrite($Evening, $txt);

fclose($Evening);

}
stream_get_line(STDIN, 1024, PHP_EOL);

?>
