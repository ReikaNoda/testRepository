<?php
$myname = htmlspecialchars($_POST['myname'], ENT_QUOTES);
print   $myname . "さんご登録ありがとうございます";