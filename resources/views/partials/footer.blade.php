<footer>
    <div class="footer__wrapper">
        <div class="footer__mission-statement footer__box">
            <p class="footer__statement">We're just two coders looking to add to</p>
            <p class="footer__statement">The community one "ah-ha" at a time</p>
            <p class="footer__statement">We love all things programming and web-development</p>
            <p class="footer__tandc">TandC 2016</p>

            <div class="contact--button--box">
                <button class="footer__contact__button" id="contact--button">Drop us a line!</button>    
            </div>
            
        </div>
        
        <div class="footer__nav__box footer__box">
            <h4 class="footer__box__header">Site Navigation</h4>
            <ul>
                <li class="footer__box__li"><a href="{{ route('articles_index') }}">Articles</a></li>
                <li class="footer__box__li"><a href="{{ route('videos_index') }}">Videos</a></li>
                <li class="footer__box__li"><a href="#">Resources</a></li>
                <li class="footer__box__li"><a href="#">About</a></li>
            </ul>
        </div>

        <div class="footer__social__box footer__box">
            <h4 class="footer__box__header">Follow Us</h4>
            <ul>
                <li class="footer__box__li">
                    <a href="https://www.youtube.com/channel/UCqtCWgVnyMtCynS_EV1t5DQ" target="_blank">YouTube</a>
                    <img src="/images/youtube-icon.png" alt="youtube icon" width="20" height="20">
                </li>
                <li class="footer__box__li">
                    <a href="#">Facebook</a>
                    <img src="/images/facebook-icon.png" alt="facebook icon" width="18" height="18">
                </li>
                <li class="footer__box__li">
                    <a href="#">Twitter</a>
                    <img src="/images/twitter-icon.png" alt="twitter icon" width="18" height="18">
                </li>
            </ul>
        </div>

        <div class="footer__contact__box footer__box">
            <h4 class="footer__box__header">Filler</h4>
            <ul>
                <li class="footer__box__li"><a href="#">Contact</a></li>
                <li class="footer__box__li"><a href="#">Subscribe</a></li>
                <li class="footer__box__li"><a href="/register">Register</a></li>
                <li class="footer__box__li"><a href="#">Terms</a></li>
            </ul>
        </div>

    </div> {{-- .footer__wrapper --}}
</footer>