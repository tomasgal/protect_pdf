<pre>
<strong>System Information: </strong><br><?php system("inxi   -! 31 -C -D -f -I -S -s -c0"); ?>
CPU Governor is set to: <?php system("cat /sys/devices/system/cpu/cpu0/cpufreq/scaling_governor"); ?><br>
<strong>Memory Usage (MB):</strong><br><?php system("free -mht"); ?><br>
<strong>Disk Usage:</strong><br /><?php system("df -Th"); ?><br>
<strong>Disk Speed:</strong><?php system("cat ds.txt"); ?><br>
<?php system("inxi -xxxW 48.1462538,17.1130809 -c0"); ?><br>
</pre>

