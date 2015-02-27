<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?>ECOOK</title>
	<link rel="stylesheet" type="text/css" href="/htdocs/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="/htdocs/js/jquery-2.1.3.min.js"></script>
	<script src="/htdocs/bootstrap/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			alert("jQuery-2");
			$("button").click(function(){
			$("p").hide();
			});
		});
	</script>
</head>
<body>
<div class="container">
   <h1>Hello, world!</h1>

   <div class="row">

      <div class="col-sm-3 col-md-6 col-lg-4"  style="background-color: #dedef8; box-shadow: 
         inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
            enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. 
         </p>

         <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
            quae ab illo inventore veritatis et quasi architecto beatae vitae 
            dicta sunt explicabo. 
         </p>
      </div>

      <div class="col-sm-9 col-md-6 col-lg-4" style="background-color: #dedef8;box-shadow: 
         inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
         <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
            accusantium doloremque laudantium.
         </p>

         <p> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, 
            consectetur, adipisci velit, sed quia non numquam eius modi 
            tempora incidunt ut labore et dolore magnam aliquam quaerat 
            voluptatem. 
         </p>
   </div>
</div>
	<h2>这是标题</h2>
	<p>这是一个段落</p>
	<p>这是另一个段落</p>
	<button>点击这里</button>
</body>
</html>
