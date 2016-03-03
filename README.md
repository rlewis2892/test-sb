# test-sb

Toy project using a ScotchBox local dev environment and git/GitHub/PhpStorm dev toolchain for WordPress theme development.

Set up according to the instructions below, you will have a locally hosted project that is git version controlled with a repo on GitHub for collaboration.

Full Scotch Box documentation here: https://box.scotch.io/

## How To:
1. Install Vagrant and VirtualBox according to the instructions here: https://box.scotch.io/
2. Create a new GitHub repository for your new project and clone it down using PhpStorm or the IDE of your choice.
3. Add .vagrant to your .gitignore file.
3. Download the ZIP from https://github.com/scotch-io/scotch-box. Unzip and paste all the files into your project directory. Yes, add them to git. You DO NOT want to clone scotchbox directly into your project via GitHub because it will then become a git submodule within your project. (a git repo within a git repo - and this is probably NOT what you really want)
4. commit, push
5. run vagrant up, access your new local deployment at http://192.168.33.10/
6. ???
7. Profit!

## WordPress Installation
1. After successful Scotch Box installation, go inside your /public directory and rename index.php to scotchbox-info.php (or something like that).
2. Download the WordPress ZIP archive. https://wordpress.org/
3. Extract the ZIP, and copy/paste into your /public directory.
4. Run vagrant up, and access your local deployment at http://192.168.33.10/
5. Follow the prompts to install WordPress. Use the MySQL Server configuration listed at http://192.168.33.10/scotchbox-info.php
6. Don't forget to commit early and often! :D