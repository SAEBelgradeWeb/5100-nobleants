<?php

$exists = file_exists('est.txt');
is_file('dir.txt');
$result = is_dir('dir.txt');
$result = is_writeable('./test.txt');
$dir = getcwd();
$result = dirname($dir . '/text.txt');
$result = basename($dir);

$result = filesize($dir . "/test.txt");

$directory = scandir($dir);

foreach ($directory as $item) {
    if($item != "." && $item != ".." && is_dir($item)) {
//        echo $item."<br>";
    }
}
//$size = filesize("system.log");

//if($size > 1024) {
//    rename("system.log", 'system.old' . time(). ".log");
//}

//$file = fopen("./system.log", 'a+');
////fwrite($file, date('d. m. Y H:i:s') . " - " . $_SERVER['REMOTE_ADDR'] . "\r\n");
//$content = fread($file, $size);
//fclose($file);
//var_dump($content);
//$old = file_get_contents("system.log");
//file_put_contents('system.log', $old . "\n\rThis is new");
//echo file_get_contents("system.log");

//mkdir('backup');
//copy('system.log', 'backup/system.log');
//rename('somefile.log', 'backup/somefile.log');

// unlink('systemcopy.log');
// rmdir('backup');

$mydir = opendir(getcwd());
/*echo readdir($mydir);
echo readdir($mydir);
echo readdir($mydir);*/

while($item = readdir($mydir)) {
    echo $item. "<br>";
}

closedir($mydir);

