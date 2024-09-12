# Shrimpcity

A website for fictional music venue Shrimpcity, built out in Laravel.

## Why this project?

- Wanted to give Laravel a shot, thus far I really like it
- To have a referral project for my upcoming internship
- Music venues are awesome

## To do's

- Automaticly remove events after they took place, maybe move them to some kind of archive page
- Add srcsets and sizes to the img-tags
- Add filter/search functionalty for shows
- Add more strict typing
- Add an admin part to the website to give it the full CRUD experience. Will probably do this in Vue. I know this doesn't really make sense projectwise but while still learning I also want to gain a deeper understanding of that framework.
- Add more possibilities: more bands, 'special' events such as festivals with a specific view,...
- Deploy it to Railway.com or some other free tier service so I can link it to this Github repo
- ...

## How to install

Want to clone this repo and fiddle around with the code? You can do so by following these simple steps:

1. Git clone the project in your IDE by using this command:<br>
`git clone https://github.com/jelle-vdp/laravel-shrimpcity.git`

2. Set up a local database and adjust the '.env.example' file (in the root folder) with your database credentials

3. To make the mail functionality on the Contact page work, also add your mail credentials in the 'sample.env' file. If you want to use, for example a gmail account, please look into [this Stack Overflow article](https://stackoverflow.com/questions/72621214/laravel-sending-email-with-gmail-after-less-secure-app-option-no-longer-suppo) 

4. Rename the '.env.example' file to '.env'

5. Install the Composer dependencies by running following command<br>
`composer install`

6. Seed your database by running this command:<br>
`php artisan migrate:refresh --seed`<br>
-> note: because of the way the image urls are seeded, you might have to run this command a few times to get all the images for all show & news items.

7. To serve the Shrimpcity website, run this command:<br>
`php artisan serve`

8. Click on the link in the command line, et voilà, you should be good to go
