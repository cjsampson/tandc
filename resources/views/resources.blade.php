@extends('welcome')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css">
    <link rel="stylesheet" href="/css/bulma.css">
@stop

@section('content')
    

    
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Subscription Learning</a></li>
            <li><a href="#tabs-2">YouTube Channels</a></li>
            <li><a href="#tabs-3">Free Learning Sites</a></li>
            <li><a href="#tabs-4">Blogs</a></li>                                
        </ul>

        <div id="tabs-1" style="background-color: orange;">
            <p><strong>Subscription</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, illum libero perferendis assumenda quod nemo exercitationem quia dignissimos dolorum molestiae cumque doloribus nam repudiandae sunt maiores saepe, vitae laudantium tempore?</p>
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

        <div id="tabs-3" style="background-color: aqua;">
            <p><strong>Free Learning Sites</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, illum libero perferendis assumenda quod nemo exercitationem quia dignissimos dolorum molestiae cumque doloribus nam repudiandae sunt maiores saepe, vitae laudantium tempore?</p>
        </div>

        <div id="tabs-4" style="background-color: red;">
            <p><strong>Blogs</strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, illum libero perferendis assumenda quod nemo exercitationem quia dignissimos dolorum molestiae cumque doloribus nam repudiandae sunt maiores saepe, vitae laudantium tempore?</p>
        </div>

    </div>
    
@stop