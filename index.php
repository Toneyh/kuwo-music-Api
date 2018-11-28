<?php
$id = isset($_GET['id']) ? addslashes($_GET['id']) : '';
if($id =='') exit('注意：歌曲ID值不能为空，请输入歌曲ID进行获取。by:www.lailal.cc');
$szUrl = "http://antiserver.kuwo.cn/anti.s?%20response=url&rid=".$id."&format=mp3&type=convert_url";
$UserAgent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 3.5.21022; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $szUrl);
curl_setopt($curl, CURLOPT_HEADER, 0);  //0表示不输出Header，1表示输出
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_ENCODING, '');
curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
$data = curl_exec( $curl); 
header("Location: $data");
//echo curl_errno($curl); //返回0时表示程序执行成功 如何从curl_errno返回值获取错误信息
exit();
?>
