<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"></meta>
	<title><?php echo $title?>ECOOK</title>
	<link rel="stylesheet" type="text/css" href="/htdocs/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="/htdocs/js/jquery-2.1.3.min.js"></script>
	<script src="/htdocs/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<h2>ѡ����</h2>
	<p>����1</p>
	<p id="test">idѡ����</p>
	<p class="test">classѡ����</p>
	<p class="intro">classΪintro</p>
	<p>List 1:</p>
	<ul>
	  <li>Coffee</li>
	  <li>Milk</li>
	  <li>Tea</li>
	</ul>

	<p>List 2:</p>
	<ul>
	  <li>Coffee</li>
	  <li>Milk</li>
	  <li>Tea</li>
	</ul>
	<p><a href="http://www.w3cschool.cc/html/" target="_blank">HTML Tutorial</a></p>
	<p><a href="http://www.w3cschool.cc/css/">CSS Tutorial</a></p>

	<button id="btn0">Ԫ��</button>
	<button id="btn1">id</button>
	<button id="btn2">class</button>
	<button id="btn3">����ѡ��</button>
	<button id="btn4">��ǰ</button>
	<button id="btn5">classΪintro</button>
	<button id="btn6">�׸�pԪ��</button>
	<div>
		<button id="btn7">ul li:first</button>
		<button id="btn8">ul li:first-child</button>
		<button id="btn9">[href]</button>
		<button id="btn10">a[target='_blank']</button>
		<button id="btn11">a[target!='_blank']</button>
		<button id="btn12">:button</button>
	</div>


	<script type="text/javascript">
		$(document).ready(function(){
		  $("#btn0").click(function(){
		    $("p").hide();
		  });			
		  $("#btn1").click(function(){
		    $("#test").hide();
		  });
		  $("#btn2").click(function(){
		    $(".test").hide();
		  });
		  	$("#btn3").click(function(){
		  $("*").hide();
		  });
		  	$("#btn4").click(function(){
		  $(this).hide();
		  });
		  	$("#btn5").click(function(){
		  $("p.intro").hide();
		  });
		  	$("#btn6").click(function(){
		  $("p:first").hide();
		  });
		  	$("#btn7").click(function(){
		  $("ul li:first").hide();
		  });
		  	$("#btn8").click(function(){
		  $("ul li:first-child").hide();
		  });
		  	$("#btn9").click(function(){
		  $("[href]").hide();
		  });
		  	$("#btn10").click(function(){
		  $("a[target='_blank']").hide();
		  });
		  	$("#btn11").click(function(){
		  $("a[target!='_blank']").hide();
		  });
		  	$("#btn12").click(function(){
		  $(":button").hide();
		  });
		});
	</script>
</body>
</html>
