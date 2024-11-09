apache2-foreground
/var/www/html/bin/phpbbcli.php db:migrate --safe-mode
php /var/www/html/admin/patch.php

#UPDATE phpbb_ext SET ext_active = 1 WHERE ext_name = 'tapatalk/tapatalk'