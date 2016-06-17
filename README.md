# OpenShift-Yii2-Installer

A simple bash script to download and install Yii2 (basic and advanced) automatically setup for OpenShift applications. Use this repo's Git URL when making your next OpenShift app!

**Currently Tested Yii2 Version:** 2.0.8

This combines my [OpenShift Yii2 Config](https://github.com/WadeShuler/OpenShift-Yii2-Config) with the Yii2 Framework. My config is a `.openshift` directory with action hooks to make Yii2 (basic and advanced) work on OpenShift magically. It handles the DocumentRoot, symlinks, composer, yii init (optional), and yii migrate (optional). Thus making for magical and seamless use between Yii2 and OpenShift.

The installer allows you to choose the Yii template (basic or advanced) and which Yii version number to install. It will download it and merge my OpenShift config automagically for you.

## Instructions

1. When you create a new OpenShift PHP Application, use this project repo for the GitHub source:

        https://github.com/WadeShuler/OpenShift-Yii2-Installer.git

2. After your application is created, clone it! In terminal, in your `htdocs`:

        git clone ssh://xxxxx@<APP>-<NAME>.rhcloud.com/~/git/<APP>.git/ yourappname

    Replace the URL with your OpenShift app's real URL! Also replace "yourappname" with the name for your new directory git creates.

3. Run the installer

        ./install

4. Follow the installer and choose the options you want (basic/advanced, version number, etc) Once the installer finishes successfully, you have a perfect working version of Yii2 ready to push to OpenShift!

5. Add/Commit/Push to see your new working Yii2 app on OpenShift:

        git add .
        git commit -m "initial commit"
        git push

6. Check it out! Go to your OpenShift App's URL in your browser. Remember, add `/admin` to access the backend.
    Try it locally :) On your local host, you still have to use `/frontend` or `/backend`. The `.htaccess` will map it to `web` for you :)

    Locally, you should still have Gii and the Yii Debug Toolbar. Whether it's basic or advanced, it should know the difference and handle everything accordingly.

7. Now add your customizations and enjoy!


If you have any questions, let me know. I am also open to hearing advice on how to make this better. It still needs to stay just an installer, and respect that we don't want to make decisions for the end user. This will stay as an installer to make Yii2 work on OpenShift by handling the action_hook, Environment Variables for DB use, composer, init, etc. Any extra bells and wistles, are not what this project is about.

Let devs dev on their own free will. This just lets you hit the ground running using Yii2 and OpenShift!
