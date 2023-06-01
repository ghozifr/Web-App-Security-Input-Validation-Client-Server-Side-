# Web-App-Security-Input-Validation-Client-Server-Side-
1832765

UPDATE
Implement XXS and CSRF

add <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'"> to every html php file
and creating .htaccess file and add LoadModule headers_module modules/mod_headers.so
Header set Access-Control-Allow-Origin "*"

There are three files that are linked together.
The first file is studentDetails.php which is the file for the user to fill in the form.
The second file is validation.js is the file that helps the client-side to do early validation.
The last one is submit.php is the file that does the late validation on the server-side and displays the result of the form.
