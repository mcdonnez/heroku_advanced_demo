Heroku Advanced Demo (10 Minutes)

Hello! and welcome to the demo environment for Zachary McDonnell's Heroku Advanced Demo.
As a amateur developer I have really enjoyed getting to know Heroku and how to deploy code to this environment.
I originally started learning to program after providing technical support for Qualtrics, an online survey company. I realized that many of the difficult issues required a deeper understanding of the setup behind the surveys. I was also very interested in APIs and how they work.


For my demo today on Heroku I will be focusing on the following aspects

1) How to deploy Add-ons to your Heroku app, my basic example will be a database. (3 min)
- https://addons.heroku.com/
- heroku addons:create heroku-postgresql
- heroku config
- postgres://username:password@host/dbname
- heroku pg:psql
- heroku addons:create pgstudio

2) How to test the load and scalability of a Heroku App with the Add-On "Blitz" (3 min)
- heroku addons:create blitz
- https://dashboard.heroku.com/apps


3) What's a dyno and how to scale horizontally and vertically. (3 min)
- https://dashboard.heroku.com/apps
- Go to Resouces
- Free, Hobby, Standard, Performance

That's it! I hope you enjoy this demo and how it works.

Sincerely,

Zach McDonnell