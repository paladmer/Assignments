<html>

<body>

Font: <?php echo $_GET["font"]; ?><br>
Font Style: <?php echo $_GET["fontstyle"]; ?><br>
Text: <?php echo $_GET["textarea"]; ?><br>

<?php 

$testarea = $_GET["textarea"];
function textareaRet($testarea){
	return $testarea; 
}




echo $testarea; 
?>
<a href="index.html">GoBack</a> <br>

</body>
</html>
