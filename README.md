Set Up App
- clone repo
- `composer install`
- Install Heroku CLI https://cli-assets.heroku.com/heroku-cli/channels/stable/heroku-cli.pkg
- in terminal, run `heroku login` and follow the prompts
- `cd path/to/app`
- `heroku create` - create the app
- navigate to provided url
- Set the TZ (timezone) env var
- follow instructions to deploy with git


Addons

JawsDB
https://devcenter.heroku.com/articles/jawsdb

- go to control panel and add JawsDB
- verify your JawsDB url `
- copy env var to local
`heroku config -s | grep JAWSDB_URL >> .env`
`more .env`

- get your DB connection info and enter it into Sequel Pro
- copy the query from mysql_bootstrap.sql
- test with /testconnection.php


New Relic
- accept terms and conditions
- docs at https://docs.newrelic.com/docs/agents/php-agent/advanced-installation/php-agent-heroku
- run `heroku config:set NEW_RELIC_CONFIG_FILE=newrelic.ini`
- optional - rename your app with `heroku config:set NEW_RELIC_APP_NAME='YOUR_APP_NAME'`
- set up availibility monitoring


