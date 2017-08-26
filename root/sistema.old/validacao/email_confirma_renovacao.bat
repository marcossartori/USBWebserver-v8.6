start "LANAGRORS" "http://localhost/sistema/validacao/email_confirma_renovacao.php"
@echo off
ping -n 30 localhost>nul
TASKKILL /F /IM "iexplore.exe"
exit