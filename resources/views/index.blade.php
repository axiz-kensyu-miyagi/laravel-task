<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <title>ログイン</title>
</head>

<body>
  <header>
    <h2>
      ログイン
    </h2>
  </header>

  <div class="main">
    <h2>ログインIDとパスワードを入力してください</h2>

    <form class="login-form" action="login" method="POST">
      @csrf
      <p class="error">
      @error('error')
      <span class="error">{{ $message }}</span>
      @enderror
      </p>
      <div>
        <h3><label>ログインID</label></h3>
        <input type="text" name="login_id" placeholder="例)1010">
        @error('login_id')
        <span class="error">{{ $message }}</span>
        @enderror
      </div>
      <div class="password">
        <h3><label>パスワード</label></h3>
        <input type="password" name="pass">
        @error('password')
        <span class="error">{{ $message }}</span>
        @enderror  
      </div>
      <button type="submit" class="btn">ログイン</button>
    </form>
  </div>

  <footer>
    <small>Copyright &copy; C-Sche, all rights reserved.</small>
  </footer>

</body>

</html>
