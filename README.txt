Created by Maurice Andrews

Instructions to Create Three Virtual Machines Comprising Two Web Servers and One Database

Create a directory in linux
CD into that directory
Git clone the assignment2 repository
In the assignment2 / database directory, vagrant up the database VM

Take a note of the EC2 Web Address of the VM database instance 

In the assignment2 / webserver1 directory, change the address in the web page files that reference the database, to the VM database address noted above
In the assignment2 / webserver2 directory, change the address in the web page files that reference the database, to the VM database address noted above

Upload these files to github assignment2

Create a directory in linux
CD into that directory
Git clone the assignment2 repository
In the assignment2 / webserver1 directory vagrant up the webserver1 VM
In the assignment2 / webserver2 directory vagrant up the webserver2 VM

vagrant ssh into each of the webserver instances 
Change the permissions (to allow access through the web browser) on the /vagrant and /vagrant/www directories as well as the individual web pages

vagrant ssh into each of the webserver instances and change the relevant VM address in the index.php pages so the two webserver VMs are linked 
logout of vagrant shh and change the index.php pages in the linux directories so they match those in the VM
upload these pages to github so everything is consistent   