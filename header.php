
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
            </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- 
                    Quick explanation:
                    The javascript will grab the text between the li tags,
                    append .html to it, and then put in in the content div
                    for a long explanation check out utilities.js
                -->
                <li class="nav-pill"><a class="link" href="#" onclick="clicked(this);">Home</a></li>
                <li class="nav-pill"><a class="link" href="#" onclick="clicked(this);">About</a></li>
                <li class="nav-pill"><a class="link" href="#" onclick="clicked(this);">Extra</a></li>
                <li class="nav-pill"><a class="link" href="#" onclick="clicked(this);">Form</a></li>
                <li class="nav-pill"><a class="link" href="#" onclick="clicked(this);">Gallery</a></li>

                <li class="link nav-pill"><img id="user_avatar" class="header_img" alt="User Avatar" src="blank.PNG"></li>
            </ul>
        </div>    
        <!-- Let's put the avatar here -->
    </div>
</nav>


