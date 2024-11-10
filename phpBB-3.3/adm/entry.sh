# echo "Running init script"
# /var/www/html/bin/phpbbcli.php db:migrate --safe-mode
# php /var/www/html/admin/patch.php
# apache2-foreground


echo "Running init script"
bin/phpbbcli.php db:migrate --safe-mode
php adm/patch.php
apache2-foreground


#UPDATE phpbb_ext SET ext_active = 1 WHERE ext_name = 'tapatalk/tapatalk'