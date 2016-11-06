# Plugin for October

An OctoberCMS default plugin for starting new projects.

## Install

Add as a submodule to your project:

```bash
$ git submodule add git@github.com:swt83/php-october-plugin.git plugins/travis/<YOURNEWPLUGIN>
```

Edit the ``Plugin.php`` and ``plugin.yaml`` files namespaces to match your new project name.

Change the submodule remote address:

```bash
$ cd plugins/travis/<YOURNEWPLUGIN>
$ git remote rm origin
$ git remote add origin <YOURNEWADDRESS>
$ git push origin master
```
