<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<style>
    .login-page
{
  background-color:#e5e7ed
}
.login-page main
{
  width:100%;
  max-width:460px;
  margin:8% auto 5%
}
.login-block
{
  background-color:#fff;
  padding:60px;
  -webkit-box-shadow:0 3px 50px 0 rgba(0,0,0,.1);
  box-shadow:0 3px 50px 0 rgba(0,0,0,.1);
  text-align:center;
  border-radius:5px
}
.login-block h1,.login-block h6
{
  font-family:Open Sans,sans-serif;
  color:#96a2b2;
  letter-spacing:1px
}
.login-block h1
{
  font-size:22px;
  margin-bottom:60px;
  margin-top:40px
}
.login-block h6
{
  font-size:11px;
  text-transform:uppercase;
  margin-top:0
}
.login-block .form-group
{
  margin-top:15px;
  margin-bottom:15px;
}
.login-block .form-control,.login-block .form-control:focus,.login-block .input-group-addon,.login-block .input-group-addon:focus
{
  background-color:transparent;
  border:none;
}
.login-block .form-control
{
  font-size:17px;
  border-radius:0px;
}
.login-block input:-webkit-autofill
{
  -webkit-box-shadow:0 0 0 1000px #fff inset;
  -webkit-text-fill-color:#818a91;
  -webkit-transition:none;
  -o-transition:none;
  transition:none;
}
.login-block .input-group-addon
{
  color:#29aafe;
  font-size:19px;
  opacity:.5
}
.login-block .btn-block
{
  margin-top:30px;
  padding:15px;
  background:#29aafe;
  border-color:#29aafe;
}
.login-block .hr-xs
{
  margin-top:5px;
  margin-bottom:5px
}
.login-footer
{
  margin-top:60px;
  opacity:.5;
  -webkit-transition:opacity .3s ease-in-out;
  -o-transition:opacity .3s ease-in-out;
  transition:opacity .3s ease-in-out
}
.login-footer:hover
{
  opacity:1
}
.login-links
{
  padding:15px 5px 0;
  font-size:13px;
  color:#96a2b2
}
.login-links:after
{
  content:'';
  display:table;
  clear:both
}
.login-links a
{
  color:#96a2b2;
  opacity:.9
}
.login-links a:hover
{
  color:#29aafe;
  opacity:1
}
@media (max-width:767px)
{
  .login-page main
  {
    position:static;
    top:auto;
    left:auto;
    -webkit-transform:none;
    -o-transform:none;
    transform:none;
    padding:30px 15px
  }
  .login-block{padding:20px}}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.rss:hover
{
  background-color:#f26522
}
.social-icons a.google-plus:hover
{
  background-color:#dd4b39
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
</style>
</head>
<body class="login-page">


    <main>

      <div class="login-block">
        
        <h1>Registracija</h1>

        <form action="register/store" method="post">
@csrf
<div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope ti-email"></i></span>
              <input type="text" name="name" class="form-control" placeholder="Ime">
            </div>
          </div>
          
          <hr class="hr-xs">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope ti-email"></i></span>
              <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
          </div>
          
          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock ti-unlock"></i></span>
              <input type="password" name="password" class="form-control" placeholder="Sifra">
            </div>
          </div>

          <button class="btn btn-primary btn-block" type="submit">Registruj se</button>
        </form>
      </div>

      <div class="login-links">
        <p class="text-center">Imate nalog? <a class="txt-brand" href="/">Login</a></p>
      </div>

    </main>
</html>