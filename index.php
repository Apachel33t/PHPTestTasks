<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<video id="video" width="720" height="560" autoplay muted></video>
<script defer>
    const video = document.getElementById('video')

    function startVideo()
    {
        navigator.getUserMedia(
            { video: {}},
            stream => video.srcObject = stream,
            err => console.error(err)
        )
    }

    startVideo()
</script>
</body>
</html>