<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Cocoen Demo</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cocoen@2.0.5/dist/css/cocoen.min.css" integrity="sha256-IlCbyd7d41CiPXAa2n+59AKsk3odech9FYukGzMoQGY=" crossorigin="anonymous">
<style>
			body {
				font-family: sans-serif;
				font-size: 16px;
				margin: 2rem;
				text-align: center;
			}
      .container {
				position: relative;
				margin: auto;
				max-width: 700px;
				text-align: center;
			}
    </style>
</head>
<body>
<div class="container">
<h1>Cocoen</h1>
<div class="cocoen">
<img src="colorized.jpg" alt="">
<img src="colorized.jpg" alt="">
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/cocoen@2.0.5/dist/js/cocoen.min.js" integrity="sha256-RQkGm3tzkAvrJszYHJHEa5riLOOjGmWj3gAmlVb+SOQ=" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            new Cocoen();
        });
    </script>
</body>
</html>
