<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>DoubleMax Player iPhone AD</title>
  </head>
	<script>
	  function closeAD(){document.getElementById('clickforce_ad').style.display='none';}
	  setTimeout(function(){
		  document.getElementById('clickforce_ad').style.display='none';
		},20000);
	</script>	  
    <?php
        $bgid=$_GET['bg'];
		$zid= $_GET['z1'];
		$zid2= $_GET['z2'];
		$wid= $_GET['w'];
		$vid= $_GET['v'];
		$mode=$_GET['mode'];
		switch($mode){
			case("yt"):
				echo '<script type="text/javascript">'."\n";
				include './view/ytJS.php';
				echo '</script>'."\n";
				break;
			case("dm"):
				echo '<script type="text/javascript">';
				include './view/dmVideoInit.php';
				include './view/dmJS.php';		
				echo '</script>'."\n";
				break;
			default:
				echo '<script type="text/javascript">'."\n";
				include './view/ytJS.php';
				echo '</script>'."\n";
				break;			
		}
		if($bgid=="")
        	echo '<body bgcolor="#000000">'."\n";     
        else         
          	echo '<body bgcolor="#'.$bgid.'">'."\n";		  
	 
		echo '<div style="position:absolute; top: 0px; left:0px; width:320px;">'."\n";		
	    echo '<iframe id="ad1" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$zid.'"'.'allowtransparency="true" width="320" height="50"
		framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
		echo ' </div>'."\n";
	    echo '<div style="position: absolute; top:50px;">';
		echo '<table>'."\n".'<tr>'."\n";
		switch($mode){
			case("yt"):				
				include './view/ytPlayerMobile.php';
				break;
			case("dm"):
				include './view/dmPlayerMobile.php';
				break;
			default:
				include './view/ytPlayerMobile.php';
				break;	
		}
		echo '</tr>'."\n".'</table>'."\n".'</div>'."\n";
		echo '<div id="clickforce_ad" style="position: absolute; top:50px; left:180px; height:360px; width:640px; display=block;">'."\n";
		echo '<div id="logo" style="position: absolute; text-align:right; opacity:0.8;height:60px; left:0px; width:300px; display=block;z-index:2"><a href="javascript:onclick=closeAD();"><img src="close_360.png"></a></div>'."\n";
		echo '<div id="ClickForce_ad3" style="position: absolute; top:60px; display=block;z-index:2;height:250px; width:300px;">'."\n";
		echo '<iframe id="ad3" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$zid2.'"'.'allowtransparency="true" width="300" height="250" z-index:3
		framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
		echo '</div>'."\n";
		echo ' </div>'."\n";
	?>
		
  </body>
</html>
