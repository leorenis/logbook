## Google Search - Dorks

*Google dorking* refers to using advanced Google search operators to find sensitive or exposed information on the web.

Dorks are crefted to uncover:
- Misconfigured servers
- Exposed backup files
- Leaked credentials
- Publicly accessible logs, SQL dumps, config files, etc.


Exemples:

```
intext:"index of" ".sql"
```
> finds directory listings containing .sql files.

```
filetype:php inurl:catalog/admin/
```
> searches for admin PHP panels.


```
inurl:group_concat(username) filetype:php intext:admin
```
> Find vulnerable PHP pages that might be susceptible to SQL injection involving group_concat

And more...
```
intext:@gmail.com filetype:xls

intext:charset_test= email= default_persistent=

filetype:sql inurl:wp-content/backup-*

inurl:/wwwboard/passwd.txt

ext:pwd inurl:(service | authors | administrators | users) “# -FrontPage-”

inurl:config/databases.yml -trac -trunk -”Google Code” -source -repository

server-dbs “intitle:index of”

“inurl:Teamspeak2_RC2/server.log”

“admin account info” filetype:log

filetype:pem pem intext:private

intitle:”Index of..etc” passwd
```


### Advise
> *Google dorking query* and such knowledge is used responsibly in penetration testing, vulnerability assessment, or threat research — with authorization. Unauthorized use can violate laws like the Computer Fraud and Abuse Act (CFAA).


### See more
- [Wikipedia](https://en-m-wikipedia-org.translate.goog/wiki/Google_hacking?_x_tr_sl=en&_x_tr_tl=pt&_x_tr_hl=pt&_x_tr_pto=tc)
- [Google Dorks Tricks](https://www-recordedfuture-com.translate.goog/threat-intelligence-101/threat-analysis-techniques/google-dorks?_x_tr_sl=en&_x_tr_tl=pt&_x_tr_hl=pt&_x_tr_pto=tc&_x_tr_hist=true)
