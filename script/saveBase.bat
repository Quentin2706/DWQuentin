 
@echo off
SetLocal EnableDelayedExpansion
cd E:\Wamp\bin\mysql\mysql5.7.31\data
MKDIR E:\Developpement_Web\DWQuentin\BackupBDD\%DATE:~6,4%%DATE:~3,2%%DATE:~0,2%
for /d %%i in (*) do (
if /I %%i NEQ performance_schema if /I %%i NEQ mysql if /I %%i NEQ sys E:\Wamp\bin\mysql\mysql5.7.31\bin\mysqldump --user=root --databases %%i > E:\Developpement_Web\DWQuentin\BackupBDD\%DATE:~6,4%%DATE:~3,2%%DATE:~0,2%\backup_%%i_%DATE:~6,4%%DATE:~3,2%%DATE:~0,2%.sql  
)
EndLocal