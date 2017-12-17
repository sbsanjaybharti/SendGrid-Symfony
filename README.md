# SendGrid-Symfony
Sending Mail with sendgrid

# Table of Contents

* [Installation](#installation)
* [Quick Start](#quick-start)
* [Use Cases](#use-cases)

<a name="installation"></a>
### Installation:

#### Install Package

Add CRS/SendGridBundle to your `composer.json` file.

```json
{
  "require": {
    "sendgrid-symfony": "~1.0"
  }
}
```
#### Alternative: Install package from cmd
```
	composer require sendgrid-symfony
```
### Quick Start:
<a name="quick-start"></a>
Add configuration to your config.yml file

```
#SendGrid API Access
send_grid:
    key: "%send_grid_key%"
    status: "%send_grid_status%"

```

How to send the mail:
```
   $sendmail = new crs_mail();
   $sendmail->setFrom(<%SENDER-EMAIL%>);
   $sendmail->setTo(<%RECIPIENTS-EMAIL%>);
   $sendmail->setSubject(<%EMAIL-SUBJECT%>);
   $sendmail->setBody(<%EMAIL-BODY%>);
   $sendmail->setTemplate(<%TEMPLATE-ID%>);
   $sendmail->setSubsitute(array(
       '<%SUBSITUTE-1%>' => <%SUBSITUTE-1-VALUE%>,
       '<%SUBSITUTE-2%>' => <%SUBSITUTE-2-VALUE%>,
       .....
       '<%SUBSITUTE-n%>' => <%SUBSITUTE-n-VALUE%>,
   ));
   $sendmail->addAttachment(array(
       <%FILE-PATH-1%>,
       <%FILE-PATH-2%>,
       .......
       <%FILE-PATH-n%>,
   ));
   $sendmail->sendMail(<%CONTENT-TYPE%>);
```
<a name="use-cases"></a>
### Use Cases
* In upper code <%---%> with your value
* To send plain mail replace <%CONTENT-TYPE%> with 'text/plain'
* To send html mail replace <%CONTENT-TYPE%> with 'text/html'
* Subsitue is used for replacing value used in your email for example in your email content <%USERNAME%> then your <%SUBSTITUE-1%> will be USERNAME and <%SUBSITUTE-1-VALUE%> will be the actual user name.
* <%FILE-PATH-1%> is used for file path for attachment you can add singel or multiple file total size of your mail should not be more that 30MB
* If there is no any attachment or substitute then you can avoid them.
