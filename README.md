This project is based on the well-known starter theme WP-Rig(https://github.com/wprig/wprig) to develop a custom theme FastFoodHeavenTheme.

1. ### Local development environment setup

2. ### How to clone this project

3. ### Project development

4. ### Plugin installation

5. ### Conceptual explanation

6. ### Notes


1. ### Use VVV to set up the local development environment:

   1. Follow the installation documentation https://varyingvagrantvagrants.org/ install vagrant, git, VirtualBox.

   2. Execute three commands:

       ```
       git clone -b stable https://github.com/Varying-Vagrant-Vagrants/VVV.git ~/vvv-local
       cd ~/vvv-local
       vagrant plugin install --local
       ```

   3. Replace /vvv-local/config/config.yml, refer to the project's own config.yml

   4. Open the VPN if you are in China

      ```
      vagrant up
      ```

2. ### Clone the project locally:

   1. Navigate to ~/vvv-local/www/develop-website/public_html/wp-content in the computer folder and change the name of the wp-content folder to wp-content-old
   2. Open the github desktop, clone to the local path, and fill in /vvv-local/www/develop-website/public_html/wp-content

3. ### Develop a custom theme using WP-Rig:

   1. vscode open folder: WP-Rig, can not open wp-content.
      ～/vvv-local/www/develop-website/public_html/wp-content/themes/wprig
   2. Refer to the WP-Rig documentation
      Note: Configure config/config files in wprig.js. After cloning the project, you can see that it has been configured and does not need to be modified.

4. ### Plugin installation (optional):

   1. Install the WordPress plugin:
      https://codex.wordpress.org/Theme_Unit_Test
      https://wordpress.org/plugins/monster-widget/
      https://wordpress.org/plugins/show-current-template/
   2. vscode plugin:
      https://github.com/wprig/docs/blob/master/documentation/recommended-extensions.md

- ### Conceptual Explanation:

  - nvm: The node version manager for installing or updating nodejs.
  - npm: The node package manager
  - nodejs+composer: The PHP dependency manager.

6. ### Notes:

   - Install some vs code plugins (optional) and reboot vscode after installation.
   - After installation, you need to add some configuration for different pairs of plugins, which is configured in vscode's setting.json.
   - Run wp rig (first, make sure the VPN is turned on):
     The first time it is run, on the vscode command line: npm run rig-init
     If there is already a dependency locally, you need to update the node dependency, enter: npm install
     Run the project: npm run dev About a few minutes, the project will run up and automatically open the page.
   - If you enter the background and find that the stitching /wp-admin cannot be opened, run npm run generateCert to install the certificate.