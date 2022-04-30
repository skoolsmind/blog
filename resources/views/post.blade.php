<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="/app.css">

</head>
<body>
<article>
    <h1>
        <?php echo $post->title?>
    </h1>
    <div>
        <p>
            <?php echo $post->body?>
        </p>

    </div>

</article>

<a href="/posts">
    Go Back
</a>
</body>
</html>
