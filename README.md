![Pushsafer](https://www.pushsafer.com/de/assets/logos/logo.png)
# github-pushsafer
##How to send push-notification out of github with webhooks &amp; Pushsafer
Always be informed of changes to your repository.

[Pushsafer.com](https://www.pushsafer.com) make it easy and safe to send &amp; receive push-notifications to your
- Android devices
- iOS devices (iPhone, iPad, iPod Touch, Watch)
- Windows 10 Phone & Desktop
- Browser (Chrome & Firefox)

## Usage
1. open the desired repository
2. go to settings
3. then on webhooks
4. enter the payload URL from Pushafer, with the required key and optional params
5. Content type: choose application/x-www-form-urlencoded
6. select the events which should trigger this webhook
7. add / save the webhook

![Pushsafer](https://www.pushsafer.com/de/assets/examples/github_add_webhook.jpg)

## Example payload URLs
### with private key (20 chars)

	https://www.pushsafer.com/github?k=XXXXXXXXXXXXXXXXXXXX
  
### with alias key (15 chars)

	https://www.pushsafer.com/github?k=XXXXXXXXXXXXXXX
  
### with private key (20 chars) and optional parameters

	https://www.pushsafer.com/github?k=XXXXXXXXXXXXXXXXXXXX?i=4&s=2&v=0&d=23

### Pushsafer API values

Any API parameters, as found on https://www.pushsafer.com/en/pushapi, can be appended to the URL.

## Screenshots
![Pushsafer](https://www.pushsafer.com/de/assets/examples/github_push_notification.jpg?style=centerme)

![Pushsafer](https://www.pushsafer.com/de/assets/examples/github_client.jpg?style=centerme)

![Pushsafer](https://www.pushsafer.com/de/assets/examples/github_push_notification.jpg?style=centerme)
