<?php
	shell_exec("sudo gpio -g mode 3 out");
	shell_exec("sudo gpio -g write 3 0");
	echo $_GET['callback'].'('.json_encode('Success').')';
?>



