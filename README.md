# leenolan

Thanks for checking out my code! This readme explains some of the approaches I have used in this site if you are interested.

This is my own personal portfolio site, for the purposes of showing potential freelance clients (and employers!) where I am
at with my front end skills. It is mostly single page, with a seperate page for my blog.

This site is fully responsive, with Bootstrap 4 as the foundation for my layout. I do not like to over rely on Bootstrap, but
I find that for layout it sure beats hacky float solutions! With CSS Grid now the talking point, I'm going to give that a try
on my next project, but for now, Bootstrap grid is still a winner for me. 

The site shows my core skills as a front end dev, HTML, CSS, JavaScript jQuery and a tiny bit of PHP.

My favourite feature is probably the 'hamburger' nav icon, which is animated to an 'X' on activation, a fade in overlay with
a slide down menu. All of this was done with CSS transitions and transforms, and jQuery.

The navigation for the desktop sizes features a slide down sticky overlay nav bar, which animates in when the user scrolls past
100px, looks nice. I know there's a UX debate about if the nav bar should be immediately present, but as it was my 
portfolio site I guess I opted for 'looks cool' over 'the right UX decision' :/

The next section, 'projects', uses some jQuery to animate a fade in div with the project details when scrolled to a certain 
point in the viewport. 

The 'process' section contains 6 images which when hovered over (or tapped by mobile users!) triggers multiple transitions; 
image scales up and 'bounces', with info overlay fading in on top of it. This presented me with a challenge on mobile due to 
the way mobile OS deal with the :hover pseudoclass, so I used jQuery to listen for tap events, so that the overlay can be 
activated and dismissed when tapped again. I also had to work out how to dismiss an active overlay when user taps another image
(rather than it just stay open) so I turned to the jQuery docs and got my head around the many DOM traversal methods, chained
them together and bravo! 

The site features two forms, a simple three field form for quick comments, and also a 'project enquiry' form to collect 
potential client requirements - due to this form being quite long, I featured it in a modal pop up (the other thing I use
Bootstrap for!). Hit a bump with this in mobile testing, as the body scrolls behing the modal, and it is jerky, the solution
was overflow: hidden; position: fixed; And the jerkiness was solved with -webkit-overflow-scrolling: touch; 
  
The forms are submitted using AJAX (form.js) and successful or failed submission generates alert messages for the user rather than
redirecting or refreshing. A little PHP to sanitize and validate the data on the server (form.php) and send the forms to the 
SendGrid API (chosen because it is free and works with Heroku). 

This site was built in JetBrains PHPStorm, deployed on Heroku, and uses Amazon S3 for asset storage, and Amazon Cloudfront 
for CDN distribution. I have also used Composer to manage PHP dependencies. The site has been fully speed optimised and gets
very good scores on the popular page speed test sites.

One last thing of note, the social media icons are from a service I love, FontAwesome. This has been around a while but has 
been remodelled into a JS based library with a huge library of sybols and icons that is easy to configure and customise,
it won't be the last time I use it!

