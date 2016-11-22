@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">
    <link rel="stylesheet" href="/css/bulma.css">
@stop

@section('content')
    

    <div class="container is-fluid">
        
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Subscription Learning</a></li>
                <li><a href="#tabs-2">YouTube Channels</a></li>
                <li><a href="#tabs-3">Top Notch Blogs/Content Driven Sites</a></li>          
            </ul>

            <div id="tabs-1" style="background-color: orange;">

                <h1>Subscription-based Learning Apps</h1>

                <h3>Laracasts</h3>
                <p>https://www.laracasts.com</p>

                <p>Laracasts is the ultimate online learning source for all things PHP and more.  Jeffrey Way definitely has an elite mastery of web development and teaching combined.  Laracasts starts out for only $9 a month and the site has loads and loads of content ranging from beginner PHP and JavaScript, to more advanced videos on Frontend and Backend frameworks/libraries.  You're money for spent on this site is a good investment.</p>
                
                <br>

                <h3>Treehouse</h3>
                <p>https://www.teamtreehouse.com</p>

                <p>For only $25 a month, Treehouse gives you loads of different learning tracks for beginners starting out in web development.  Treehouse has loads of features from Forums, Screencast, Interactive Coding environments, and much more.  I really like Treehouse because they have content for web-designers, front-end, and backend as well!</p>

                <br>
                
                <h3>Codeschool</h3>
                <p>https://www.codeschool.com</p>

                <p>Codeschool is one of my favorite online learning resources being that it was one of my first paid online subscriptions that took my coding skills to the next level.  They have a bunch of interactive coding environments and tracks for users in JavaScript, Ruby, CSS, Git, and loads more.  If you're looking for a fun way to spice up your programming learning, I highly recommend Codeschool!</p>


                <br>
                <h3>Codecademy</h3>
                <p>https://www.codecademy.com</p>

                <p>Codecademy has loads of free content and also offers premium content for $19.99 a month.  Codecademy is one of the industry leaders in helping beginners get acclamated with coding.  From a range of tracks for learning front-end, backend, APIs, and also building full projects!  Make a visit to Codecademy to increase your skills for programming to get a new job!</p>

                
                <br>
                <h3>Frontend Masters</h3>
                <p>https://www.frontendmasters.com</p>

                <p>Frontend Masters is an online learning application that has video series in the latest web development technologies and stacks with industry leading teachers that break down concepts for beginners and seasoned vets.  Brian Holt from Netflix, Ryan Florence the React.js master, and Kyle Simpson the ultimate JavaScript guru!  Frontend masters may seem more on the pricey side at $40 a month, but the in depth tutorials and video series is well worth the investment.  Head to Frontend Masters now for an awesome educational experience!</p>
                
            </div>

            <div id="tabs-2" style="background-color: indianred;">
                <h1>YouTube Channels</h1>

                <br>

                <h3>LearnCode.academy</h3>
                <p>https://www.youtube.com/channel/UCVTlvUkGslCV_h-nSAId8Sw</p>
                <p>LearnCode.academy is one of favorite YouTube pitstops for great tutorials on JavaScript.  From tutorials ranging from vanilla JavaScript, jQuery, Node, React, and much more, you're bound to find some bits of information to add to your JavaScript knowledge base.</p>

                <br>

                <h3>Codecourse</h3>
                <p>https://www.youtube.com/channel/UCpOIUW62tnJTtpWFABxWZ8g</p>

                <p>Codecourse is one of my top ranked YouTube channels because of the depth of knowledge and the numerous amounts of videos ranging from the front and back end of the web.  Codecourse's channel has many video series building full web apps that can really help your understanding of the complete web development process.  Codecourse has many PHP/Laravel tutorials as well if you're a backend developer looking to learn how to build a site with a framework. Codecourse also has a website with premium content for only $5 dollars.</p>

                <br>

                <h3>funfunfunction</h3>
                <p>https://www.youtube.com/channel/UCO1cgjhGzsSYb1rsB4bFe4Q</p>

                <p>If you're a JavaScript developer and need a deeper insight on JS constructs, funfunfunction's YouTube channel is the place for you.  This is one of my top YouTube learning channels because there are very in depth looks at different types of JavaScript patterns and native functions that help you break down the meaning and usage in particular situations.  After your have mastered the basics and syntax of JavaScript, I highliy recommend you taking a few days to run through this channel's videos to take your skills a step further.</p>

                
                <h3>Simple Programmer</h3>
                <p>https://www.youtube.com/channel/UCFxdcuY-S6yjZGq_2cjilHg</p>

                <p>John Sonmez of Simple Programmer has loads of questions and videos for programmers and individuals getting started in the industry.  He has a lot of videos answering fans directly on certain questions and gives his advice on how to start or transition their career into programming or web developement.</p>

                <br>

                <h3>Eli the Computer Guy</h3>
                <p>https://www.youtube.com/user/elithecomputerguy</p>

                <p>Eli the Computer Guy is an experienced industry professional who answers loads of questions on the IT/Computer Industry.  This channel breaks down topics from Database Administration, Networking, Backend programming, and much much more.  I really love this channel because it gives you valuable insight from a seasoned professional with loads of experience.</p>

                <br>
                <h3>The New Boston</h3>
                <p>https://www.youtube.com/user/thenewboston</p>

                <p>The New Boston YouTube channel is very dear to my heart being that it was one of the first online learning sources I grabbed ahold too early on in my career.  Bucky has a HUGE range of tutorials on about every programming language known to man.  If you're new to the programming scene or are about to start to learn a new language,  The New Boston is your best bet. </p>


                <br>
                <h3>Mackenzie Child</h3>
                <p>https://www.youtube.com/channel/UCfWZwsP8trUy5uHJg8gcGIQ</p>

                <p>Although I am not a web designer, Mackenzie Child's YouTube channel is a great place for trying to learn front-end/web-designer terminology.  Mackenzie makes some pretty sweet looking sites and has a bunch of different tutorials and video series breaking things down on the front-end.  If your a developer with some weak front-end/designer chops, this channel is great for you!</p>
            </div>

            <div id="tabs-3" style="background-color: lime;">
                <h1>Blogs/Top-Notch Content</h1>


                <h3>Scotch.io</h3>
                <p>https://www.scotch.io</p>

                <p>I am very big advocate for Scotch.io. They have loads of articles and content for those trying to learn web development technologies ranging from fullstack JavaScript, PHP, Laravel, CSS, Sass, Dev Tools and much more.  A lot of the articles break down actual code in depth and show you how to implement and build projects line for line which is great for beginners learning how certain aspects of APIs work.  Scotch also just started a premium content school which gives you access to content that gives you an even deeper look at code and how to build cool stuff!</p>

                <br>

                <h3>Wes Bos</h3>
                <p>https://www.wesbos.com</p>

                <p>I really love Wes Bos's approach to the web and teaching.  He has both free video series and content as well premium video series to help web-devs take their skills up to the next level.  Wes Bos' content focuses primarily on the front-end of the web and has a great series on how to get more intimate with the Sublime Text Editor.</p>

                <br>

                <h3>David Walsh</h3>
                <p>https://www.davidwalsh.name</p>

                <p>David Walsh's site is one of my favorite blogs with loads of content ranging from code snippets, front-end tricks, and mindset for a developer.  David Walsh has been in the industry for a while and his blog has an endless amount of topics and bits to help you acquire a broader knowledge base.</p>
                            
            </div>

        </div>
    </div>
    
@stop