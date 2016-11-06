# Plugin for October

An OctoberCMS default plugin for starting new projects.

## Install

Add as a submodule to your project:

```bash
$ git submodule add git@github.com:swt83/php-october-plugin.git plugs/travis/<YOURNEWPLUGIN>
```

Edit the ``Plugin.php`` and ``plugin.yaml`` files namespaces to match your new project name.

Change the submodule remote address:

```bash
$ git remote rm origin
$ git remote add origin <YOURNEWREPO>
$ git push origin master
```