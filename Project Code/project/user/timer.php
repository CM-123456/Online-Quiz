<script>
	var time=<?php echo 10;?>;
	setInterval(function() {
	  var seconds = time % 60;
	  var minutes = (time - seconds) / 60;
	  if (seconds.toString().length == 1) {
		seconds = "0" + seconds;
	  }
	  if (minutes.toString().length == 1) {
		minutes = "0" + minutes;
	  }
	  document.getElementById("time").innerHTML = minutes + ":" + seconds;
	  time--;
	  if (time == 0) {
		window.location = "index.php";
	  }
	}, 1000);
</script>
<div class="timer" onload="timer(300)">
 
  <div class="time">
    <strong>Time left: <span id="time">Loading...</span></strong>
  </div>
</div>