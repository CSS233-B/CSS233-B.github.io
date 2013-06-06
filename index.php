<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
        <title>CSS 233</title>
    </head>
    <body>
        <div class="hero-unit">
            <h1>Interactive Media Tech</h1> <b>CSS233</b><br>
        </div>
        <div class="row-fluid">
            <div class="span2 sidebar">
                <div class="box">
                    <h3>Video</h3>
                    A short video about our experience in the class:
                    <a href="#videoModal" role="button" class="btn" data-toggle="modal">Watch Video</a>
                </div>
                <div class="box menu">
                    <h3>Books</h3>
                    <ul class="menu">
                        <li><a href="cruse">HTML5 Cookbook</a></li>
                        <li><a href="haverbeke">Eloquent Javascript</a></li>
                        <li><a href="devlin">HTML5 Multimedia</a></li>
                    </ul>
                </div>
                <div class="box menu">
                    <h3>Helpful Hints</h3>
                    <ul class="menu">
                        <li><a href="browsers">Browsers</a></li>
                        <li><a href="homework">Homework</a></li>
                        <li><a href="filezilla">FileZilla</a></li>
                    </ul>
                </div>
                <div class="box">
                    <h3>Relevant Links</h3>
                    <ul>
                        <li><a href="http://www.codecademy.com">Code Academy</a></li>
                        <li><a href="http://www.developers.mozilla.org">Mozilla Developer Network</a></li>
                        <li><a href="http://www.HTMLpad.org">HTML pad</a></li>
                        <li><a href="http://www.css3maker.com">CSS 3.0 Maker</a></li>
                    </ul>
                </div>
            </div>
            <div class="span10" id="centercontent">
                <div class="box slide" id="placeholder">
                    <h2 class="h2">Learning Objectives:</h2>
                        <ul>
                            <li>Conversant on technologies used to design and build interactive media applications.</li>
                            <li>Understand and apply basic programming constructs such as functions, data types.
                            and variables, conditionals, and loops using a scripting language.</li>
                            <li>Describe and use standard formats for structuring and presenting content.</li>
                            <li>Describe and create multimedia assets using standard lossless and lossy formats.</li>
                            <li>Build simple interactive media projects that incorporate programming, content, multimedia assets, and presentation.</li>
                            <li>Describe and follow common processes and tools used for managing team projects.</li>
                        </ul>
                </div>
            </div>
        </div>
    <div id="videoModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Class Video</h3>
        </div>
        <div class="modal-body">
			<video width="500" height="350" controls>
                <source src="assets/video/video.webm" type="video/webm">
                <source src="assets/video/video.ogg" type="video/ogg">
                <source src="assets/video/CSS233Video.mp4" type="video/mp4">
			</video>
        </div>
        <div class="modal-footer">
        </div>
    </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/common.js"></script>
    </body>
</html>
