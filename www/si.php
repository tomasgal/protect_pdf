<pre>
<strong>System Information: </strong><br /><?php system("inxi   -! 31 -C -D -f -I -S -s -c0"); ?><br />
<strong>Memory Usage (MB):</strong><br /><?php system("free -mht"); ?><br />
<strong>Disk Usage:</strong><br /><?php system("df -Th"); ?><br />
<strong>Disk Speed:</strong><?php system("cat ds.txt"); ?><br />
<strong><?php system("inxi -xxx -w -c0"); ?><br /></strong>
</pre>

