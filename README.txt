将此程序放到虚拟主机，绑定域名即可，如：http://hy.scqyyx.com。
注意：
第一步：打开web/Conf/config.php文件，配置远程数据信息，此处的远程数据库是目标网站的数据库，目标网站数据库必须启用远访问。
第二步：修改排名获取客户端程序config.xml文件，如下
<?xml version="1.0" encoding="utf-8" ?>
<root>
  <AllPage>20</AllPage><!--要获取数据的总条数 如：20，即获取百度前两页的数据，百度每页显示10条数据，以此类推-->
  <SendRank>http://hy.scqyyx.com/index.php/SaveRank</SendRank><!--保存数据url-->
  <GetKey>http://hy.scqyyx.com/index.php/SiteList</GetKey><!--请求关键字url-->
</root>
更换访问地址，只需要修改域名即可，后面的请求地址不能随意更改包括大小写。