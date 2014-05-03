<html>
<head>
<meta charset="utf-8" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<link href="css/bootstrap.min.css" rel="stylesheet">
<meta charset="UTF-8">
</head>

<body>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $("#btn1").click(function(){
    $(".append").animate({
    left:'500px',
    opacity:'0.5',
    height:'100px',
    width:'100px'
  });
  });
  $("#btn2").click(function(){
    $(".append").fadeOut();
  });
  $("#btn3").click(function(){
    $("body").append("<div class=append></div>");
  });
  $("#btn4").click(function(){
    $("#btn4").animate({
    left:'250px',
    opacity:'0.5',
    height:'150px',
    width:'150px'
  });
  });
  $("#btn5").click(function(){
    $(".append").show();
  });
});
</script>
<style>
.append{
	width:30px;
	height:50px;
	background-color: red;
}
</style>
<button type="button" id="btn4" class="btn btn-info">改變按鈕大小</button>
<button type="button" id="btn3" class="btn btn-success">召換方塊</button>
<button type="button" id="btn1" class="btn btn-default">改變方塊大小</button>
<button type="button" id="btn2" class="btn btn-primary">方塊隱身(非永久)</button>
<button type="button" id="btn5" class="btn btn-warning">回來吧 方塊</button>

</body>
</html>
