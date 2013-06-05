<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
        <title>CSS 233</title>
    </head>
    <body>
        <div class="hero-unit">
				<h1>Interactive Media Tech</h1> <b>CSS233</b>
        </div>
        <div class="row-fluid">
            <div class="span2 sidebar">
				<div class="box">
                    <h3>Class Video</h3>
					<a href="#videoModal" role="button" class="btn" data-toggle="modal">Launch Video</a>
                </div>
                <div id="links" class="box">
                    <h3>Relevant Links</h3>
                    <ul>
                        <li><a href="http://www.codecademy.com">Code Academy</a></li>
                        <li><a href="http://www.developers.mozilla.org">Mozilla Developer Network</a></li>
                        <li><a href="http://www.HTMLpad.org">HTML pad</a></li>
                        <li><a href="http://www.css3maker.com">CSS 3.0 Maker</a></li>
                    </ul>
                </div>
            </div>
            <div class="span8" id="centercontent">
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
            <div id="books" class="span2 box sidebar">
                <h3>Required Books</h3>
                <figure id="cruse">
                    <img src="assets/img/HTML5cookbook.jpg">
                </figure>
                <figure id="haverbeke">
                    <img src="assets/img/EJS.png">
                </figure>
                <figure id="devlin">
                    <img src="assets/img/Multidevdes.jpg">
                </figure>
            </div>
        </div>
		<div id="videoModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">Class Video</h3>
			</div>
				<div class="modal-body">
				<p>One fine body…</p>
			</div>
			<div class="modal-footer">
			</div>
		</div>
        <script type="text/javascript">
        <?
        if(is_file("config.php")) {
            require("config.php");
        }
        if(isset($baseurl)) {
            echo "var baseurl = \"".$baseurl."\";";
        } else {
            echo "var baseurl = \"/\";";
        }
        ?>
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/common.js"></script>
    </body>
</html>
