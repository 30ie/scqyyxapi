<?php
header("Content-Type: text/xml");

class SitelistAction extends Action {

    //主函数
    public function index() 
	{
		$this->SiteList();
    }
	//获取站点列表
	public function SiteList()
	{
		$sql = "SELECT A.sid,A.title,A.url,B.kid,B.keywords FROM `v9_seo` A LEFT JOIN `v9_keywords` B  
ON A.sid = B.sid";
		$Model = new Model();
		$arr = $Model->query($sql);
		$str="<Root>\n";
		for($i=0;$i<count($arr);$i++)
		{
			$str.="	<KeyWords>\n";
			$str.="		<Id>".$arr[$i]['sid']."</Id>\n";
			$str.="		<Key>".$arr[$i]['title']."</Key>\n";
			$str.="		<Host>".$arr[$i]['url']."</Host>\n";
			$str.="		<Kid>".$arr[$i]['kid']."</Kid>\n";
			$str.="		<Kwd>".$arr[$i]['keywords']."</Kwd>\n";
			$str.="	</KeyWords>\n";
		}
		$str.="</Root>";
		echo $str;
	}
}