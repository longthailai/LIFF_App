<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>LIFF Starter</title>
        <link rel="stylesheet" href="./public/css/style.css" />
        <script charset="utf-8" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
        <script charset="utf-8" src="https://static.line-scdn.net/liff/edge/2.1/sdk.js"></script>
        <script src="./public/js/liff-starter.js"></script>
    </head>
  <body>
    <div>
      <div><h2>Heroku | Welcome to your new app!</h2></div>
      <div><h3>Demo: Liff App</h3></div>
    </div>
    <div id="demo_content">
        <form method="post" name="frmPost" action="./index.php">
        <h3>Message from IBM...</h3><br/>
        <div>
            <textarea id="txtContent" name="txtContent" placeholder="Input your message here" cols="100" rows="10">
    GL_CUSTOM:{
        "type":"liff",
        "body":"bodybody",
        "image":"http://vitalify.jp/common/img/top_visual/top_staff.png",
        "button":"click",
        "link":"https://vitalify.jp/"
    }</textarea>
        </div>
        <div>
            <input id="btnSend" name="btnSend" type="submit" value="Send Message" />
        </div>
        </form>
    </div>
  </body>
</html>
