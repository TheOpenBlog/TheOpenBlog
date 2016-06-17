#Setting up the Development Environment

###Prerequisites

- Composer
- Laravel 5.2 (No download required)
- Text Editor (Sublime text or Atom recommended)
- Server (MAMP or SAMP recommended)
- GitDesktop (Optional but recommended)
- Git (Not needed if you have GitDesktop)


### **Installing Prerequisites**

- MAMP server can be downloaded from [here](https://www.mamp.info/en/downloads/).

- Composer can be downloaded from [here](https://getcomposer.org/download/).

- GitDesktop can be found [here](https://desktop.github.com).

- Atom Text Editor is found [here](https://atom.io/).

##**Windows**

### Setting things up

1.  For managing dependencies, Laravel uses composer.

2. After the Composer is installed, check the installation by typing the Composer command in the command prompt as shown in the following screenshot.

<img src="/images/composer.jpg">

3. Now download a copy of this repository directly or using GitDesktop inside the server HTDOCS folder.

4. Now using the CMD go to the directory.

```sh
cd C:/MAMP/HTDOCS
```

5. Type

```
composer install
```

This will install the dependencies for the project.

6. Now go to .env file and open it with sublime text and add the lines given below or replace it if exist.

````
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=TheOpenBlog
DB_USERNAME=root
DB_PASSWORD=root

````

7. Now the development environment is ready. Run the server and go to local host to see the output.

8. If there is an out put you have successfully set up the environment. Happy Coding!.  
