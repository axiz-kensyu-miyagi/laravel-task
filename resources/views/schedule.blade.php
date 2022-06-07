<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/schedule-style.css">
  <title>スケジュール詳細</title>
</head>

<body>
  <x-header heading="スケジュール詳細" name="Axiz花子" />
  <div class="main">
    <form class="input-form" action="calendar">
      <div class="input-item">
        <label class="input-title">日付</label>
        <p>2022年6月1日</p>
      </div>
      <div class="input-item">
        <label class="input-title" for="time">タイトル</label>
        <h3>報告書提出</h3>
      </div>
      <div class="input-item">
        <label class="input-title">カテゴリ</label>
        <p>重要</p>
      </div>
      <div class="input-item">
        <label class="input-title">場所</label>
        <p>会社</p>
      </div>
      <div class="input-item">
        <label class="input-title" for="body">内容</label>
        <p>報告書を上司に提出。フィードバックをもらう。</p>
      </div>
      <a class="btn" onclick="openModal()">削除</a>
      <a href="update" class="btn">編集</a>
      <x-modal mode="削除" />
    </form>
    <a href="calendar" class="btn">戻る</a>
  </div>

  <footer>
    <small>Copyright &copy; C-Sche, all rights reserved.</small>
  </footer>

  <script src="js/modal.js"></script>
</body>
</html>
