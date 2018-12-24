#!/bin/bash

echo -n "Access Token: "
read token

cat > "~/tve1/config.php" <<END
<?php
\$access_token = "$token";
END

#php ~/tve1/bot.php