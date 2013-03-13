<html>
	<head>
		<script src="popcorn-complete.js"></script>
		<script src="popcorn.comments.js"></script>
	    <script src="jquery.js"></script>
		<script>
			document.addEventListener( "DOMContentLoaded", function() {

			var popcorn = Popcorn( "#video" );

			popcorn.footnote({
				start: 2,
				end: 8,
				target: "footnote",
				text: "<div class=\"c1\">Comment</div>"
			});

			popcorn.comments({
				start: 1,
				end: 8,
				target: "comments",
				text: "<div class=\"c2\">Comment</div>"
			});

			}, false );
			
			
      </script>
	  <style type="text/css">
		.c1 {
		 background:red; 
		 width: 100px; 
		 height: 20px;
		}
		.c2 {
		 background:blue; 
		 width: 100px; 
		 height: 20px;
		}
	  </style>   
    </head>
    <body>
	
	  <video style="background:#000" id="video" preload="auto" autobuffer controls poster="http://videos.mozilla.org/serv/webmademovies/popcornposter.png">
        <source src="http://video.phpress.de/video2.ogv" type="video/ogg">
      </video>

      <div id="comments">Normal</div>
      <div id="footnote"></div>
	  
    </body>
  </html>