<table cellpadding=0 cellspacing=0 border=0 width=720>
<?php
echo "

<td width=\"20%\" align=center><a href=\"$url_prefix/index.php?load=newcustomer&type=base\"><img src=\"images/new-icon.png\" alt=\"$l_new\" border=0><br>$l_new</a></td>
<td width=\"20%\" align=center><a href=\"$url_prefix/index.php?load=search&type=base\"><img src=\"images/search-icon.png\" alt=\"$l_search\" border=0><br>$l_search</a></td>
<td width=\"20%\" align=center><a href=\"$url_prefix/index.php?load=print&type=fs&acnum=$account_number\"><img src=\"images/print-icon.png\" alt=\"$l_print\" border=0><br>$l_print</a></td>
<td width=\"20%\" align=center><a href=\"$url_prefix/index.php?load=tools&type=base\"><img src=\"images/admin-icon.png\" alt=\"$l_tools\" border=0><br>$l_tools</a></td>
<td width=\"20%\" align=center>
";
print "<a href=\"$url_prefix/logout.php\"><img src=\"images/logout-icon.png\" alt=\"$l_logout $user\" border=0><br>$l_logout $user</a><td><tr>";


?>
</td></table>
