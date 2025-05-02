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

4. PR (Pull Request) Templates in GitHub

PR templates help ensure that contributors provide necessary information, follow coding standards, and adhere to the repository's guidelines. They also save time for maintainers by providing a structured format for reviewing and evaluating pull requests.

Here's a brief overview of how PR templates work in GitHub:

1. Create a template: Repository administrators can create a template by adding a .github/PULL_REQUEST_TEMPLATE.md file to the repository.

2. Select a template: When creating a new pull request, users can select the pre-defined template from the repository.

3. Fill out the template: The selected template is used as a starting point for the pull request description, and the contributor can fill out the required information.


[See a template sample file](https://github.com/leorenis/swift-samples/blob/main/.github/pull_request_template.md)