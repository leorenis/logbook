#  Vagrant commands



_`vagrant box update`_ -> This command updates the box for the current Vagrant environment if there are updates available. The command can also update a specific box (outside of an active Vagrant environment), by specifying the `--box` flag.

_`vagrant box prune`_ -> This command removes old versions of installed boxes. If the box is currently in use vagrant will ask for confirmation.

_`vagrant box list`_ -> This command lists all the boxes that are installed into Vagrant.

_`vagrant box add [ADDRESS]`_ -> This adds a box with the given address to Vagrant. The address can be one of three things... [Read more](https://www.vagrantup.com/docs/cli/box.html#box-add).