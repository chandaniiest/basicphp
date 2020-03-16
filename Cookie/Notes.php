What is COOKIE?
	Cookies are text files stored on the client computer.A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create and retrieve cookie values.

There are three steps involved in identifying returning users −

Server script sends a set of cookies to the browser. For example name, age, or identification number etc.

Browser stores this information on local machine for future use.

When next time browser sends any request to web server then it sends those cookies information to the server and server uses that information to identify the user.
<hr>
<?php
print time(); //1 jan 1970 timestamp

?>