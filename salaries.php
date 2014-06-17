<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Page</title>
<style type="text/css">
body
{
   background-color: #FFFFFF;
   color: #000000;
}
</style>
<style type="text/css">
a
{
   color: #0000FF;
   text-decoration: underline;
}
a:visited
{
   color: #800080;
}
a:active
{
   color: #FF0000;
}
a:hover
{
   color: #0000FF;
   text-decoration: underline;
}
</style>
<link rel="stylesheet" href="cupertino/jquery.ui.all.css" type="text/css">
<style type="text/css">
#jQueryTabs1
{
   padding: 4px 4px 4px 4px;
}
#jQueryTabs1 .ui-tabs-nav
{
   font-family: Arial;
   font-size: 13px;
   padding: 4px 4px 0px 4px;
}
#jQueryTabs1 .ui-tabs-nav li
{
   font-weight: normal;
   font-style: normal;
   margin: 0px 2px -1px 0px;
}
#jQueryTabs1 .ui-tabs-nav li a
{
   padding: 8px 10px 8px 10px;
}
</style>
<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="jquery.ui.core.min.js"></script>
<script type="text/javascript" src="jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="jquery.ui.mouse.min.js"></script>
<script type="text/javascript" src="jquery.ui.sortable.min.js"></script>
<script type="text/javascript" src="jquery.ui.tabs.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
   var jQueryTabs1Opts =
   {
      event: 'click',
      collapsible: false
   };
   $("#jQueryTabs1").tabs(jQueryTabs1Opts);
});
</script>
</head>
<body>
<div id="jQueryTabs1" style="position:relative;left:0px;top:0px;width:99%;height:100%;">
<ul>
<li><a href="salcontent.php"><span>About</span></a></li>
<li><a href="showsal.php"><span>Show all salaries</span></a></li>
<li><a href="searchsal.php"><span>Salary Search</span></a></li>


</ul>
<div style="height:100%;padding:0;" id="jquerytabs1-page-0">
</div>
<div style="height:100%;padding:0;" id="jquerytabs1-page-1">
</div>
</div>
</body>
</html>