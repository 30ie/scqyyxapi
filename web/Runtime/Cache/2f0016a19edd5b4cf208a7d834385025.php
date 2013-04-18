<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>双昌企业营销</title>
</head>
<body>
	<form action="./index.php/SaveRank" method="POST">
		<input type="hidden" name="dosave" />
		站点ID：<input type="text" name="sid" id="sid" value="1"/><br/>
		关键词ID：<input type="text" name="kid" id="kid" value="2"/><br/>
		页码：<input type="text" name="rpage" id="rpage" value="1"/><br/>
		排名：<input type="text" name="rank" id="rank" value="6"/><br/>
		<input type="submit" value="提交" /><br/><a href="./index.php/SiteList" target="_blank">站点列表</a>
	</form>
</body>
</html>