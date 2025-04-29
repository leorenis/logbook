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

### Edit recent commit messages

To edit the commit message of the most recent commit, you can use the git commit --amend command. This command allows you to modify the commit message without changing the commit's snapshot.
```
git commit --amend
```

### Staging, Unstage and Stash Code

#### Staging

In Git, the term "stage" is often used interchangeably with "add". You can stage files in the terminal using the `git add` command. This command adds new or changed files in your working directory to the Git staging area, allowing you to choose what you are going to commit.

To stage all changes in your repository, you can use `git add .` or `git add -A` to stage all files, including new, modified, and deleted files.

For more granular control, you can use `git add -p` or` git add --patch` to stage parts of files interactively. This command will present you with chunks of changes and prompt you to choose which parts to stage.

#### Unstage

To unstage a specific file, you can use:

```
git restore --staged file-name
```

or 

```
git reset file-name
```

To unstage changes, you can use `git reset` to remove a file from the staging area without changing the working directory.

You can also use `git status` to check the status of your repository and see which files are staged and which are not.

#### Stash

The `git stash` command is used to temporarily save changes in your working directory that are not yet ready to be committed. 
This allows you to switch branches or perform other Git operations without committing changes that are not yet complete.

To apply a stash to your working directory, use the `git stash apply` command. If you want to apply the stash and then remove it from the stash stack, use `git stash pop` instead. I Prefer `git stash pop`. 

If you want to stash specific files or changes, you can use the `git stash push` command with options like `-m` for a message or `-p` to interactively choose which changes to stash.

To delete a specific stash, use the `git stash drop` command followed by the stash identifier. To clear all stashes, use `git stash clear`.

You can also list all stashes in your stash stack using the `git stash list` command.

To view the contents of a stash, you can use the `git stash show` command. By default, it shows the changes in a summary format, but you can use the `-p` flag to see the changes in a patch format, or `-u` to include untracked files.

82

Since version 2.11, it's pretty easy, you can use the `N` stack number instead of saying "stash@{n}". So now instead of using:
```
git stash apply "stash@{n}"
```
Or 
```
git stash apply 1
```

To apply all stashes in Git, you cannot use a single command like `git stash apply all`.

We also cam loop through each stash and apply it one by one. Here is an example of how you might do this in a script:

```
while [ $(git stash list | wc -l) -gt 0 ]; do
  git stash apply
  git stash drop
done

```

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

```
git cherry-pick d467740 de906d4
```

If the cherry picking gets halted because of conflicts, resolve them and
```
git cherry-pick --continue
```

If you want to bail of this step out altogether, just type:
```
git cherry-pick --abort
```

After all this is done, you can simply push the new commits to the upstream repo (e.g origin) and get on with your day.

Tips n Tricks
In case you needed to cherry pick a merge instead of a commit, you can use:

```
git cherry-pick -m 1 <hash>
```

Credit: [Original Post](https://www.previousnext.com.au/blog/intro-cherry-picking-git). Thanks the original @author.


### Credits
[Github docs](https://help.github.com/en/enterprise/2.13/user/articles/setting-your-commit-email-address-in-git)


