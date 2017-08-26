start "LANAGRORS" "http://localhost/sistema/validacao/sendmail.php"
@echo off
ping -n 30 localhost>nul
TASKKILL /F /IM "iexplore.exe"
exit