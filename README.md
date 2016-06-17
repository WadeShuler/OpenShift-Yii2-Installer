# OpenShift-Yii2-Installer

A simple bash script to download and install Yii2 (basic and advanced) automatically setup for OpenShift applications.

This is still in **Beta** and is rough around the edges. It's mostly for my personal use, but others might benefit from it. Hopefully, with some more time and tests, this can be streamlined to push all the way to OpenShift seamlessly. For right now, it just installs Yii2 and combines the action_hooks so it WILL work on OpenShift when you push it on the server.

This combines my [OpenShift Yii2 Config](https://github.com/WadeShuler/OpenShift-Yii2-Config) with the Yii2 Framework. My config is a `.openshift` directory with action hooks to make Yii2 (basic and advanced) work on OpenShift magically. It handles the DocumentRoot, symlinks, composer, yii init (optional), and yii migrate (optional). Thus making for magical and seamless use between Yii2 and OpenShift.

The installer allows you to choose the Yii template (basic or advanced) and which Yii version number to install. It will download it and merge my OpenShift config automagically for you.

## Instructions

1. Clone this repo into your `htdocs` or wherever your sites are located for development:

        git clone https://github.com/WadeShuler/OpenShift-Yii2-Installer.git yourappname

    Replace "yourappname" with the directory name for your new Yii2 project.

2. Delete the `.git` directory, which houses the version control for this installer project. You will want to delete it and use your own. I am not sure how to handle this yet, and feel if my installer deletes it on it's own, that it may cause problems for other people by accidently deleting their real git data.

        rm -rf .git

3. From your terminal, execute the `install` bash script:

        ./install

    Follow the installer guide. When it is done, you will have a working yii2 app ready to work on OpenShift.



## How to add your OpenShift remote URls so you can push to OpenShift?

I am not sure how to handle pulling the current PHP app from your OpenShift cartridge yet. If you clone it, it comes with some default files, such as `index.php`. Also, it clones into it's own directory...

You could follow my instructions above, then set the Git remote URls to your OpenShift app, so it can push/pull from the app you created. However, both sides are out of sync with eachother... What would pulling it do to my current files (.openshift-installer, install, and possibly the yii2 app generated)? What would it do with the index.php file on the OpenShift app currently? I need to test these scenarios.

Instead of pulling from your OpenShift app first, what if you push to it? What would it do? Would git be out of sync and fail, what would it do with the current files on both sides?

Is there a sync command for git that would forget the other side and sync it with the localhost version?


This installer script gets you setup locally. You can find a way to get this on your OpenShift app, I am sure :) You might have to just simply: clone your OpenShift app, delete everything in it, copy the installer's generated files into it, and add/commit/push.

Whatever it is, this saves a few steps and some headaches. If you have suggestions, let me know, and hopefully we can figure out a solid way to streamline the rest of the way.
