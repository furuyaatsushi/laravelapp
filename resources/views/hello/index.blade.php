<html>
<head>
  <title>Hello/Index</title>
  <style>
  body {font-size:16pt; color:#999;}
  h1 {font-size:100pt; text-align:right; color:#f6f6f6; margin:-50px 0 -100px 0;}
  </style>
</head>
<body>
  <h1>Blade/Index</h1>
  <p>&#064;foreachディレクティブの例</p>
  <ol>
  @foreach($data as $item)
  <li>{{$item}}
  @endforeach
  </ol>
</body>
</html>