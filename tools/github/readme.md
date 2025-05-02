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