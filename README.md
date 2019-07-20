# ucr_minecraft_authentication
website made to ensure that only UCR students get on the UCR minecraft server - made for HLG

made with / with the help of:

- Laravel (and by extension - PHP and Composer)
- VueJS (and by extension - HTML/CSS/JavaScript)
- Node (literally just because I need npm to install vue and it comes with node)
- Vue CLI because a google search told me this would make development faster (it did)
- amazon aws elastic beanstalk so that I could have people test it - hosted here for now: http://ucrminecraftauthentication-env-4.gxtshamm4k.us-east-2.elasticbeanstalk.com/
- bootstrap because the 'card' class is amazing
- mysql to host the database for verification
- some regexes for verification

things i've learned:
> don't develop on windows because things don't work out of the box 99% of the time wooooooo

> elastic beanstalk requires a .ebextensions folder at the root directory to run scripts during deployment. this was vital to the project since I need to artisan migrate the databases during every deployment and I couldn't figure out how to SSH into beanstalk to change the files

> change environment from local->prod during deployment

> read documentation often

frequently asked questions / frequent feedback:
- why did you develop directly on master?
> i'm lazy
- this sucks
> ok
