## IAM & AWS CLI

### IAM Policies Structure
- Consists of
  - *Version*: policy language version, always include "2012-10-17";
  - *Id*: an identifier for the policy (optional)
  - *Statement*: one or more individual statements (required)
- Statements consists of
  - *Sid*: an identifier for the statement (optional);
  - *Effect*: whether the statement allows or denies access (Allow, Deny);
  - *Principal*: account/user/role to which this policy applied to;
  - *Action*: list of actions this policy allows or denies;
  - *Resource*: list of resources to which the actions applied to;
  - *Condition*: conditions for when this policy is in effect (optional); 


### How can users access AWS ?
- To access AWS, you have three options:
  - AWS Management Console (protected by password + MFA);
  - AWS Command Line Interface (CLI): protected by access keys;
  - AWS Software Developer Kit (SDK) - for code: protected by access keys.

- Access Keys are generated throught the AWS Console
- Users manage their own access keys
- Access Keys are secret, just like a password. Dont'share them;
- Access KEY ID ~= username
- Secret Access Key ~= password


### IAM Roles for Services
- Some AWS service will need to perform actions on your behalf;
- To do so, we will assing permissions to AWS services with IAM Roles;
- Common roles:
  - EC2 Instance Roles;
  - Lambda Function Roles;
  - Roles for CloudFormation;

### IAM Security Tools
- IAM Credentials Report (account-level)
  - a report that lists all your account's users and the status of their various credentials
- IAM Access Advisor (user-level)
  - Access advisor shows the service permissions granted to a user and when those services were last accessed.
  - You can use this information to revise your policies

### IAM Guidelines & Best Practices
- Don't use the root account except for AWS Account setup
- One physical user = One AWS user
- Assign users to groups and assing permissions to groups
- Create a Strong password policy
- Use and enforce the use of Multi Factor Authentication (MFA)
- Create and use Roles for giving permissions to AWS Services
- Use Access Keys for Programmatic Access (CLI / SDK)
- Audit permissions of your account using IAM Credentials Report & IAM Access Advisor
- Never share IAM users & Access Keys


### IAM Section - Summary
- Users: mapped to a physical user, has a password for AWS Console
- Groups: contains users only
- Policies: JSON document that outlines permissions for users or groups
- Roles: for EC2 instances or AWS services
- Security: MFA + Password policy
- AWS CLI: manage your AWS services using the command-line
- AWS SDK: manage your AWS services using a programming language
- Access Keys: access AWS using the CLI or SDK
- Audit: IAM Credentials Reports & IAM Access Advisor



