# ProjectMagenta-Site-Building
Step by Step for Building an Vulnerable Apache webserver
Apache HTTP

## ***Things to note***

1.	Current Default apache runs on 2.4.55 (2023 Mar)
2.	Using “sudo systemctl apache2” will start that version

a.	Check out step by step for how to start 2.4.49
3.	If apache.service is started from boot and it’s not the correct version

a.	Steps to take

i.	sudo systemctl stop apache2  / sudo service apache2 stop

ii.	sudo system disable apache2 / sudo update-rc.d apache2 disable

### ↑↑↑Security Measures↓↓↓

Apache 2.4.49 Vulnerable Web-app -- Exploit-DB
https://www.exploit-db.com/exploits/50383

Installation Step by step
Wget https://www.exploit-db.com/apps/1edb1895661473ea530209e29b83a982-httpd-2.4.49.tar.gz
Following download completion
tar -xvf 
Once extracted the extracted directory is named httpd-2.4.49
cd into the directory 
sudo apt-get install libapr1-dev libaprutil1-dev
sudo apt-get install libpcre3-dev
./configure
After configuration complete
sudo make
sudo make install
Host the Apache service by running the command:
sudo /usr/local/apache2/bin/apachectl start
php code should be in /usr/local/apache2/htdocs/
blog directory should be made here
“renamethis”.php should be in this directory 

How does this did we configure this to work properly

Vulnerable configuration:

httpd.conf
mod_cgi

Why is it vulnerable?
1.	The vulnerability lies within the httpd.conf file
2.	The misconfigured file has this following code
a.	<Directory /> Require all granted</Directory>
3.	By chaining ../ with url encoding .%2e , this allows the attacker to read arbitrary files such as /etc/passwd
4.	Ex. /cgi-bin/.%%32%65/.%%32%65/.%%32%65/.%%32%65/etc/passwd
5.	This command is used within the linux cli with the curl command.

Remote code execution vulnerability
1.	The RCE vulnerability takes place at the mod_cgi
2.	This module is enabled on the apache server and has the following:
a.	<IfModule !mpm_prefork_module> LoadModule cgid_module modules/mod_cgid.so </IfModule>
3.	This allows the attacker to use the same technique demonstrated above and call any binary on the system using HTTP POST requests
4.	Ex. /cgi-bin/.%%32%65/.%%32%65/.%%32%65/.%%32%65/bin/sh
5.	This is also used within the linux cli with the curl command

URL Encoding explanation:

Conversion: dot ( . ) → %2e → %%32%65

2 is encoded to %32

e is encoded to %65

Original % remained the same

## Source: https://httpd.apache.org/security/vulnerabilities_24.html#CVE-2021-41773


According to the source above ↑↑ this vulnerability allows us to exploit the cgi-bin folder using path transversal and remote code execution techniques.
