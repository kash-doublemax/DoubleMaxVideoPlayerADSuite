<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>YouTube Player HTML5 AD</title>
  </head>
	<script>
	  function closeAD(){document.getElementById('clickforce_ad').style.display='none';}
	  setTimeout(function(){
		  document.getElementById('clickforce_ad').style.display='none';
		},20000);
	</script>	  
    <?php
        $bgid=$_GET['bg'];
		$wid=$_GET['w'];
		$vid= $_GET['v'];
		$ztid= $_GET['z1'];
		$mtzid1= $_GET['z2'];
		$mtzid2= $_GET['z3'];
		$osid= $_GET['z4'];
		$mtid=$_GET['mt'];
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
        if($mtid=="p")
		 {
		 	if($wid=="420")
			{
			 	echo '<div style="position:absolute; top: 0px; left:60px; width:50px;">'."\n";    		
				echo '<iframe id="ad1" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$mtzid1.'"'.'allowtransparency="true" width="320" height="50"
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
				echo '<div id="clickforce_ad" style="position: absolute; top:50px; left:80px; height:360px; width:640px; display=block;">'."\n";
			}
			else
			{
				switch($wid){
			  	case("480"):	
					echo '<div style="position:absolute; top: 0px; left:5px; width:60px;">'."\n";
					echo '<iframe id="ad1" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$mtzid2.'"'.'allowtransparency="true" width="468" height="60"
					framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
					echo ' </div>'."\n";
					echo '<div style="position: absolute; top:60px;">';
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
					echo '<div id="clickforce_ad" style="position: absolute; top:50px; left:100px; height:360px; width:640px; display=block;">'."\n";
					Break;    	
				case("560"):	
					echo '<div style="position:absolute; top: 0px; left:60px; width:60px;">'."\n";
					echo '<iframe id="ad1" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$mtzid2.'"'.'allowtransparency="true" width="468" height="60"
					framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
					echo ' </div>'."\n";
					echo '<div style="position: absolute; top:60px;">';
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
					echo '<div id="clickforce_ad" style="position: absolute; top:50px; left:140px; height:360px; width:640px; display=block;">'."\n";
					Break;
				case("640"):	
					echo '<div style="position:absolute; top: 0px; left:90px; width:60px;">'."\n";
					echo '<iframe id="ad1" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$mtzid2.'"'.'allowtransparency="true" width="468" height="60"
					framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
					echo ' </div>'."\n";
					echo '<div style="position: absolute; top:60px;">';
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
					Break;
				default:	
					echo '<div style="position:absolute; top: 0px; left:90px; width:60px;">'."\n";
					echo '<iframe id="ad1" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$mtzid2.'"'.'allowtransparency="true" width="468" height="60"
					framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
					echo ' </div>'."\n";
					echo '<div style="position: absolute; top:60px;">';
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
					Break;		
				}
			}
		 }
		 else
		 {
			 switch($wid){
			  	case("420"):
		        	echo ' <div style="position:absolute; left:5px; width:22px;">'."\n";
					echo '<iframe id="ad1" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$ztid.'"'.'allowtransparency="true" width="230" height="22"
					framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
					echo ' </div>'."\n";
					echo '<div style="position:absolute; left:230px; width:22px;">'."\n";
					echo '<iframe id="ad2" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$ztid.'"'.'allowtransparency="true" width="230" height="22"
					framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
					echo ' </div>'."\n";
					echo '<div style="position: absolute; top:30px;">';
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
					echo '<div id="clickforce_ad" style="position: absolute; top:50px; left:80px; height:360px; width:640px; display=block;">'."\n";
		        	break;
				case("480"):
		           	echo ' <div style="position:absolute; left:10px; width:25px;">'."\n";
					echo '<iframe id="ad1" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$ztid.'"'.'allowtransparency="true" width="230" height="22"
					framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
					echo ' </div>'."\n";
					echo '<div style="position:absolute; left:250px; width:25px;">'."\n";
					echo '<iframe id="ad2" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$ztid.'"'.'allowtransparency="true" width="230" height="22"
					framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
					echo ' </div>'."\n";
					echo '<div style="position: absolute; top:30px;">';
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
					echo '<div id="clickforce_ad" style="position: absolute; top:50px; left:100px; height:360px; width:640px; display=block;">'."\n";
					break;
		        case("560"):
		           	echo ' <div style="position:absolute; left:20px; width:25px;">'."\n";
					echo '<iframe id="ad1" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$ztid.'"'.'allowtransparency="true" width="230" height="22"
					framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
					echo ' </div>'."\n";
					echo '<div style="position:absolute; left:270px; width:25px;">'."\n";
					echo '<iframe id="ad2" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$ztid.'"'.'allowtransparency="true" width="230" height="22"
					framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
					echo ' </div>'."\n";
					echo '<div style="position: absolute; top:30px;">';
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
					echo '<div id="clickforce_ad" style="position: absolute; top:50px; left:140px; height:360px; width:640px; display=block;">'."\n";
					break;
		        case("640"):
		           	echo ' <div style="position:absolute; left:80px; width:25px;">'."\n";
					echo '<iframe id="ad1" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$ztid.'"'.'allowtransparency="true" width="230" height="22"
					framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
					echo ' </div>'."\n";
					echo '<div style="position:absolute; left:340px; width:25px;">'."\n";
					echo '<iframe id="ad2" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$ztid.'"'.'allowtransparency="true" width="230" height="22"
					framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
					echo ' </div>'."\n";
					echo '<div style="position: absolute; top:30px;">';
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
					break;
				default:
		          	echo ' <div style="position:absolute; left:80px; width:25px;">'."\n";
					echo '<iframe id="ad1" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$ztid.'"'.'allowtransparency="true" width="230" height="22"
					framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
					echo ' </div>'."\n";
					echo '<div style="position:absolute; left:340px; width:25px;">'."\n";
					echo '<iframe id="ad2" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$ztid.'"'.'allowtransparency="true" width="230" height="22"
					framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
					echo ' </div>'."\n";
					echo '<div style="position: absolute; top:30px;">';
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
					break;
			  }
		}
		echo '<div id="logo" style="position: absolute; text-align:right; opacity:0.8; height:60px; color: white; left:0px; width:300px; display=block;z-index:2"><a href="javascript:onclick=closeAD();"><img src="close_360.png"></a></div>'."\n";
		echo '<div id="ClickForce_ad3" style="position: absolute; top:60px; display=block;z-index:2;height:250px; width:300px;">'."\n";
		echo '<iframe id="ad3" src="http://cf.doublemax.net/delivery/?iframe&amp;z='.$osid.'"'.'allowtransparency="true" width="300" height="250" z-index:3 
		framespacing="0" frameborder="no" scrolling="no">'."\n".'</iframe>'."\n";
		echo '</div>'."\n";	
		echo ' </div>'."\n";	
    ?>	
  </body>
</html>
