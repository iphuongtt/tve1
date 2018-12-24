#!/bin/bash

echo -n "Access Token: "
read token

cat > "/data/data/com.termux/files/home/tve1/config.php" <<END
<?php
\$access_token = "$token";
END

php ~/tve1/bot.php