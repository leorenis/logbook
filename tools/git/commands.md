# Commands

### Setting your email address for every repository on your computer

```
$ git config --global user.email "email@example.com"
```

```
git config --global user.email
email@example.com
```

### Setting your email address for a single repository

Set an email address in Git. You can use any email address.

```
$ git config user.email "email@example.com"
```

Confirm that you have set the email address correctly in Git:

```
$ git config user.email
email@example.com
```

To read about `git config credential.helper store`.

[Read more](https://git-scm.com/docs/git-credential-store).

`vim ~/.git-credentials`

### Cherry Picking with Git

Sometimes you don't want to merge a whole branch into another, and only need to pick one or two specific commits. This process is called 'cherry picking'.

When should we use Cherry Picking?

When you are working in an project where you are making changes in a branch called `some-features`. You have already made a few commits but want to move just one of them into the master branch.

From `same-features` branch run `git log --oneline` to get a better log of your commits history. Note that the commit hash is what we need to start the cherry picking. For example:

![alt git commands](https://www.previousnext.com.au/sites/default/files/styles/content_1x/public/2019-09/cherry-picking.png?itok=V9GZbHIt)

Checkout the branch where you want to cherry pick the specific commits. In this case master branch:
git checkout master

Now we can cherry pick from `same-features `branch:
`git cherry-pick d467740`

This will cherry pick the commit with hash `d467740` and add it as a new commit on the master branch. Note: it will have a new (and different) commit ID in the master branch.

If you want to cherry pick more than one commit in one go, you can add their commit IDs separated by a space:

`git cherry-pick d467740 de906d4`

If the cherry picking gets halted because of conflicts, resolve them and
`git cherry-pick --continue`

If you want to bail of this step out altogether, just type:
`git cherry-pick --abort`

After all this is done, you can simply push the new commits to the upstream repo (e.g origin) and get on with your day.

Tips n Tricks
In case you needed to cherry pick a merge instead of a commit, you can use:

`git cherry-pick -m 1 <hash>`

Credit: [Original Post](https://www.previousnext.com.au/blog/intro-cherry-picking-git). Thanks @author.


### Credits
[Github docs](https://help.github.com/en/enterprise/2.13/user/articles/setting-your-commit-email-address-in-git)


