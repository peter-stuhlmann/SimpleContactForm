# PHP Script for contact form

[![MIT License](https://img.shields.io/github/license/peter-stuhlmann/SimpleContactFormScript.svg)](LICENSE) ![Code size](https://img.shields.io/github/languages/code-size/peter-stuhlmann/SimpleContactFormScript.svg) ![downloads](https://img.shields.io/github/downloads/peter-stuhlmann/SimpleContactFormScript/total.svg) [![open issues](https://img.shields.io/github/issues/peter-stuhlmann/SimpleContactFormScript.svg)](https://github.com/peter-stuhlmann/SimpleContactFormScript/issues) [![closed issues](https://img.shields.io/github/issues-closed/peter-stuhlmann/SimpleContactFormScript.svg)](https://github.com/peter-stuhlmann/SimpleContactForm/issues?q=is%3Aissue+is%3Aclosed)

**Making your HTML contact form functional is quite easy with this PHP script.**

Integrate a contact form in an HTML file.   

Simple example:
```
<form method="post" action="send-mail.php">
   <label for="name">name</label>
   <input type="text" name="name">
   <label for="email">email</label><input type="email" name="email">
   <label for="message">message</label><textarea name="message"></textarea>
   <input type="submit" name="submit" value="submit">
</form>
```

All input fields and text areas should have an name attribute. The name attribute of the email input field should have the value 'email'. Otherwise, the PHP file would have to be minimally adjusted.
Give the action attribute as value the name of the PHP file _(send-mail.php)_. Pay attention to the correct path.   


**You have to adjust the following information in the PHP file:**

Necessary:   
1. ```$recipient``` - Enter here the email address to which the messages should be sent.   
2. ```$url_sending_successfully``` and ```$url_sending_error``` - Change the names and the paths to the files to which the user should be redirected after clicking the Submit button or create files named _sending-successfully.html_ and _sending-error.html_.

Optional:    
1. ```$mail_cc``` - Add CC addresses.   
2. ```$subject``` - Change the subject of the email.   
3. If you want, you can of course also adjust everything else.

---

[&copy; Peter R. Stuhlmann Webentwicklung](https://peter-stuhlmann-webentwicklung.de)