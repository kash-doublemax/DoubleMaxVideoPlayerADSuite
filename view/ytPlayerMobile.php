<?php
switch($wid){			
	case("420"):
		$vWidth="420";
		$vHeight="315";
		break;
	case("480"):
		$vWidth="480";
		$vHeight="360";
		break;
	case("560"):
		$vWidth="560";
		$vHeight="315";
		break;
	case("640"):
		$vWidth="640";
		$vHeight="360";
		break;
	case("727"):
		$vWidth="727";
		$vHeight="440";
		break;
	default:
		$vWidth="640";
		$vHeight="360";
		break;
}
 echo '<iframe id="player" type="text/html" width="'.$vWidth.'" height="'.$vHeight.'" src="http://www.youtube.com/embed/'.$vid.'?enablejsapi=1&wmode=opaque"
  frameborder="0"></iframe>';
 ?>