<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="icon" type="image/png" href="/images/chat.png" />
  <!-- Site Properties -->
  <title>Fish Store</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <div class="content">
        Backend | Fish - Store
      </div>
    </h2>
    <form class="ui large form" action="#">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
                <input type="text" name="username" placeholder="Username">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="building icon"></i>
                <input type="text" name="password" placeholder="Password">
          </div>
        </div>
        <button type="submit" class="ui fluid large teal button">LogIn</button>
      </div>
      <div class="ui error message"></div>
    </form>
  </div>
</div>

</body>
</html>
