<pre>
<strong>Uptime:</strong>
<?php system("uptime"); ?>
<br />
<strong>System Information:</strong>
<?php system("uname -a"); ?>
<br />
<strong>Memory Usage (MB):</strong>
<?php system("free -m"); ?>
<br />
<strong>Disk Usage:</strong>
<?php system("df -h"); ?>
<br />
<strong>Disk Speed:</strong>
<?php system("cat ds.txt"); ?>
<br />
<strong>CPU Information:</strong>
<?php system("lshw -class processor "); ?>
</pre>

