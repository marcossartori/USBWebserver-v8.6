echo off 
echo. 
echo Fix for IE error class doesn't support automation

echo http://www.annoyances.org/exec/forum/winxp/1122918575

regsvr32 msscript.ocx /s
regsvr32 dispex.dll /s
regsvr32 vbscript.dll /s