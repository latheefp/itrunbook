apache2-foreground
./bin/phpbbcli.php db:migrate --safe-mode
php ../admin/patch.php

#UPDATE phpbb_ext SET ext_active = 1 WHERE ext_name = 'tapatalk/tapatalk'