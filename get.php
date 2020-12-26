<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<meta name="robots" content="index">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
<title>GETフォーム</title>
</head>
<body>
 
<?php
//$htmlを初期化
$html = array();
//戻りの場合
if(isset($_GET['back'])){
    //htmlentities()でHTMLコードをエスケープします。
    $html['name'] =               htmlentities($_GET['name'], ENT_QUOTES, 'UTF-8');
    $html['hoby']['reading'] =    htmlentities($_GET['hoby']['reading'], ENT_QUOTES, 'UTF-8');
    $html['hoby']['appreciate'] = htmlentities($_GET['hoby']['appreciate'], ENT_QUOTES, 'UTF-8');
    $html['hoby']['trip'] =       htmlentities($_GET['hoby']['trip'], ENT_QUOTES, 'UTF-8');
    $html['maintext'] =           htmlentities($_GET['maintext'], ENT_QUOTES, 'UTF-8');
//初期値
}else{
    //初期化
    $html['name'] =               '';
    $html['hoby']['reading'] =    '';
    $html['hoby']['appreciate'] = '';
    $html['hoby']['trip'] =       '';
    $html['maintext'] =           '';
}
?>
 
<h3>1入力</h3>
 
<form action="get2.php" method="GET">
 
<table border="1">
 
<tr>
<td>名前</td>
<td><input type="text" name="name" value="<?php echo  $html['name']; ?>" size=48></td>
</tr>
 
<tr>
<td>趣味</td>
<td>
<input type="checkbox" name="hoby[reading]" value="reading"<?php if($html['hoby']['reading'] == 'reading') echo ' checked'; ?>>読書
<input type="checkbox" name="hoby[appreciate]" value="appreciate"<?php if($html['hoby']['appreciate'] == 'appreciate') echo ' checked'; ?>>鑑賞
<input type="checkbox" name="hoby[trip]" value="trip"<?php if($html['hoby']['trip'] == 'trip') echo ' checked'; ?>>旅行
</td>
</tr>
 
<tr>
<td>お問合せ内容</td>
<td><textarea name="maintext" cols="50" rows="10"><?php echo $html['maintext']; ?></textarea></td>
</tr>
 
<tr>
<td colspan="2" align="center">
<input type="submit" name="confirm" value="-　入力内容の確認　-">
<input type="reset" value="リセット" name="reset" onClick="Frest()">
</td>
</tr>
 
</table>
 
</form>
 
</body>
</html>
