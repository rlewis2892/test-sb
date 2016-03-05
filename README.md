# test-sb

Toy project using a ScotchBox local dev environment and git/GitHub/PhpStorm dev toolchain for WordPress theme development.

Set up according to the instructions below, you will have a locally hosted project that is git version controlled with a repo on GitHub for collaboration.

Read this first:
https://box.scotch.io/

## How To:
1. Install Vagrant and VirtualBox according to the official instructions here: https://box.scotch.io/
2. Create a GitHub repository for your new project and clone it down using PhpStorm or the IDE of your choice.
3. Add .vagrant to your usual .gitignore file.
4. Download the Scotch Box ZIP from https://github.com/scotch-io/scotch-box. Unzip and paste all the files into your project directory. Yes, add them to git. You ***DO NOT*** want to `git clone` Scotch Box directly into your project because it will become a ***git submodule*** within your project. (git submodule === a git repo within a git repo. This is probably NOT what you want!)
5. commit, push :D
6. in your terminal/command line, cd into your project folder's `/public` directory.
7. run the following command: `vagrant up`
8. access your new local deployment at http://192.168.33.10/
9. ???
10. Profit!

## Optional WordPress Installation
1. After your successful Scotch Box deployment, go inside your project's /public directory and rename the index.php to scotchbox-info.php (or something like that).
2. Download the latest WordPress ZIP from https://wordpress.org/
3. Extract the ZIP and copy/paste all of the files inside directly into your project's /public directory. (Yes, add them to git.)
4. Run `vagrant up` and go to http://192.168.33.10/
5. Follow the prompts to install WordPress. Use the Scotch Box default MySQL Server configuration listed in your scotchbox-info.php file
6. Don't forget to commit early and often! :D