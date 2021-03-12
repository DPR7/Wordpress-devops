# Wordpress-devops
A look at the php code that Wordpress uses

<strong>From other site </strong>

<h1>A small guide for low level control of Wordpress</h1>

<h2>A small introduction of the files that Wordpress uses</h2>

Wordpress was and is still a very populair platform for building websites with a minimal amount of effect.
The downsite of this is that many of it's users are not aware of the coding aspect of it. 
Counter to those users, are users like me that have a background with software knowledge and enjoy looking at it.
I had some spare time so i started with the online file-manager of a host.
The provider was using a basic tree structure for the Wordpress installation :

A short google search lead me to some nice links and those told me to start with the WP-CONFIG.php. and index.htm on servers

What's going on :

We're looking at turning on WP_USE_THEMES

The second parts is about the requirements ..a php file : WP-BLOG-HEADER

The IF verifies if the file was there and sets the $WP_DID_HEADER array

The next line is directing php to the new script : WP-LOAD

The second command prepares wp() as a query

The last command is also a requirement

So let's take a look at the first required_once

The first couple of lines are telling us that we're preparing for bootstrap

and the IF routine is checking for the file system

Any deviations could lead to some of the error messages..

And that's all folks .. as an instruction to WP for devops
