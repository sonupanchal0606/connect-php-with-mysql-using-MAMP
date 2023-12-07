# connect-php-with-mysql-using-MAMP
a simple code to connect php code with mysql server using MAMP


Steps involved 
1) Download and install MAMP from "https://www.mamp.info/en/downloads/"
2) Put your HTML and PHP files, images etc in this folder "/Applications/MAMP/htdocs"
   In this case : a.php , b.php
3) click on the MAMP icon and launch the MAMP
4) click on "start" to start the apache and mysql server
5) click on webstart -> it will take to -----> "http://localhost:8888/MAMP/?language=English#" (Note : the page is not diplayed well on safari browser. So better use Chrome)
6) click on mysql tab to see the connection settings and example code to connect with databses
7) click on tools -> phpMyadmin --> this will open phpmyadmin database server
8) create the database that you want to connect with
9) Open new tab with "http://localhost:8888/" ---> it will show the php/html files. click on the file to exdcute them..
    

# To Access MAMP's MySQL from Mac Terminal
1) start mysql server from MAMP
2) cd /Applications/MAMP/Library/bin ---> ./mysql -uUSERNAME -pPASSWORD
3) in ourcase ./mysql -uroot -proot. you can check for password from http://localhost:8888/MAMP/?language=English# page

   
