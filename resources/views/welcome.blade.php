<html>  
<head>  
    <title>Motivaitonal — Your daily source of motivation!</title>
    <style>
		    html, body {  
		    height: 100%;
		    padding: 0;
		    margin: 0;
		}

		body {  
		    background-size: cover;
		}

		.container {
		    height: 100%;
		    background: rgba(0,0,0,.3);
		}

		.quote-container {
		    position: relative;
		    top: 50%;
		    transform: translateY(-50%);
		    padding: 2em 4em;
		}

		.quote-container p {
		    text-align: center;
		    color: #fff;
		    text-shadow: 1px 1px 1px rgba(150, 150, 150, 0.8);
		}

		.quote-container p.text {
		    font-family: 'Alegreya', serif;
		    font-size: 4em;
		}

		.quote-container p.author {
		    font-family: 'Roboto Condensed', sans-serif;
		    font-size: 1.2em;
		}
</style>

    <link href='http://fonts.googleapis.com/css?family=Alegreya:400,700|Roboto+Condensed' rel='stylesheet' type='text/css'>
</head>  
@foreach($citatas as $citata)
<body style="background-image:url('{{$citata->img}}')">  
	<div class="container">  
    	<div class="quote-container">
        	<p class="text">{{$citata->citata}}</p>
        	<p class="author">{{$citata->author}}</p>
    	</div>

	</div>  
</body>  
@endforeach
</html>