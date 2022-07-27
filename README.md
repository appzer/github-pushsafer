![Pushsafer](https://www.pushsafer.com/de/assets/logos/logo.png)
# github-pushsafer
##How to send push-notification out of github with webhooks &amp; Pushsafer
Always be informed of changes to your repository.

[Pushsafer.com](https://www.pushsafer.com) make it easy and safe to send &amp; receive push-notifications to your
- Android devices
- iOS devices (iPhone, iPad, iPod Touch, Watch)
- Windows 10 Phone & Desktop
- Browser (Chrome & Firefox)

## Download
https://github.com/appzer/github-pushsafer/

## Usage
1. open the desired repository
2. go to settings
3. then on webhooks
4. enter the payload URL from Pushafer, with the required key and optional params
5. Content type: choose application/x-www-form-urlencoded
6. select the events which should trigger this webhook
7. add / save the webhook

![Pushsafer](https://www.pushsafer.com/de/assets/examples/github_add_webhook.jpg)

You can create up to 20 webhooks for each event on each installation target (specific organization or specific repository).

## Example payload URLs
### with private key (20 chars)

	https://www.pushsafer.com/github?k=XXXXXXXXXXXXXXXXXXXX
  
### with alias key (15 chars)

	https://www.pushsafer.com/github?k=XXXXXXXXXXXXXXX
  
### with private key (20 chars) and optional parameters

	https://www.pushsafer.com/github?k=XXXXXXXXXXXXXXXXXXXX?i=4&s=2&v=0&d=23

### Pushsafer API values

Any API parameters, as found on https://www.pushsafer.com/en/pushapi, can be appended to the URL.

## Modify Push-Notification Content (PHP example)

If you want to customize the message text of your push-notification, modify this file to your needs: [github_webhooks.php](https://github.com/appzer/github-pushsafer/blob/master/github_webhooks.php). After that, upload the file to your server and change the payload URL to yours.

## Events that trigger a webhook
|Name | Description |
| ------------- | ------------- |
| * | Any time any event is triggered (Wildcard Event).|
| commit_comment | Any time a Commit is commented on.|
| create|	Any time a Branch or Tag is created.|
| delete|	Any time a Branch or Tag is deleted.|
| deployment|	Any time a Repository has a new deployment created from the API.|
| deployment_status|	Any time a deployment for a Repository has a status update from the API.|
| fork|	Any time a Repository is forked.|
| gollum|	Any time a Wiki page is updated.|
| issue_comment|	Any time a comment on an issue is created, edited, or deleted.|
| issues|	Any time an Issue is assigned, unassigned, labeled, unlabeled, opened, edited, milestoned, demilestoned, closed, or reopened.|
| label|	Any time a Label is created, edited, or deleted.|
| member|	Any time a User is added or removed as a collaborator to a Repository, or has their permissions modified.|
| membership|	Any time a User is added or removed from a team. Organization hooks only.|
| milestone|	Any time a Milestone is created, closed, opened, edited, or deleted.|
| organization|	Any time a user is added, removed, or invited to an Organization. Organization hooks only.|
| org_block|	Any time an organization blocks or unblocks a user. Organization hooks only.|
| page_build|	Any time a Pages site is built or results in a failed build.|
| project_card|	Any time a Project Card is created, edited, moved, converted to an issue, or deleted.|
| project_column|	Any time a Project Column is created, edited, moved, or deleted.|
| project|	Any time a Project is created, edited, or deleted.|
| public|	Any time a Repository changes from private to publi|c.
| pull_request_review_comment|	Any time a comment on a pull request's unified diff is created, edited, or deleted (in the Files Changed tab).|
| pull_request_review|	Any time a pull request review is submitted.|
| pull_request|	Any time a pull request is assigned, unassigned, labeled, unlabeled, opened, edited, closed, reopened, or synchronized (updated due to a new push in the branch that the pull request is tracking). Also any time a pull request review is requested, or a | | review request is removed.|
| push|	Any Git push to a Repository, including editing tags or branches. Commits via API actions that update references are also counted. This is the default event.|
| repository|	Any time a Repository is created, deleted, made public, or made private.|
| release|	Any time a Release is published in a Repository.|
| status|	Any time a Repository has a status update from the API|
| team|	Any time a team is created, deleted, modified, or added to or removed from a repository. Organization hooks only|
| team_add|	Any time a team is added or modified on a Repository.|
| watch|	Any time a User stars a Repository.|

## Screenshots
![Pushsafer](https://www.pushsafer.com/de/assets/examples/github_push_notification.jpg) ![Pushsafer](https://www.pushsafer.com/de/assets/examples/github_client.jpg)
