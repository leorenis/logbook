## GitHub Repository Rules

### GitHub Repository Rules for the Main Branch

- The `main` branch is typically used to store the _production-ready_ code.
It's usually protected, meaning that only certain users or teams can make changes directly to it.
- Changes to the `main` branch should be `reviewed` and `approved` by other team members or maintainers before being merged.
- The `main` branch should always be in a deployable state, meaning it should be buildable and testable.


### Best Practices for the Main Branch

- Never merge code directly from feature branches into the main branch. Instead, use pull requests to review and discuss changes before merging.

- Keep the main branch up-to-date by regularly rebasing or merging changes from other branches.



### Configuring Rules in a GitHub Repository

To configure rules in a GitHub repository, you can use GitHub's built-in features such as Branch Protection, Code Owners, and Repository Settings.


1. Branch Protection

Go to your repository's Settings > Branches.

Click on Add rule to create a new branch protection rule.
Configure the rule to specify which branches to protect, who can push to those branches, and what conditions must be met before a push is allowed.


2. Code Owners

Go to your repository's Settings > Code and conduct > Code owners.
Click on Add a code owner to specify which files or folders are owned by specific users or teams.
Configure the code ownership to specify who is responsible for reviewing changes to those files.

[See codeowners sample file](https://github.com/leorenis/swift-samples/blob/main/.github/CODEOWNERS)


3. Repository Settings

Go to your repository's Settings > Repository settings.
Configure settings such as Merge checks, Status checks, and Required status checks to specify which conditions must be met before a pull request can be merged.
Here's an example of how you might configure a branch protection rule:

```yaml
# .github/branch.yml
branches:
  main:
    required_status_checks:
      strict: true
    restrictions:
      users:
        - @owner
      teams:
        - @maintainers
```
