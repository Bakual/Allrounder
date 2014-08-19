REM This will generate the zipfiles for Allrounder in /build/packages
REM This needs the zip binaries from Info-Zip installed. An installer can be found http://gnuwin32.sourceforge.net/packages/zip.htm
setlocal
SET PATH=%PATH%;C:\Program Files (x86)\GnuWin32\bin
rmdir /q /s packages
mkdir packages
REM Template
cd ../tpl_lessallrounder/
zip -r ../build/packages/tpl_lessallrounder.zip *
REM Plugin
cd ../plg_lessallrounder/
zip -r ../build/packages/plg_lessallrounder.zip *
REM Package
cd ../build/packages/
copy ..\..\pkg_lessallrounder.xml
zip pkg_lessallrounder.zip *
del pkg_lessallrounder.xml
