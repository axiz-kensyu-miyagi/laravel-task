<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/schedule-style.css">
  <title>スケジュール追加</title>
</head>

<body>
  <x-header heading="スケジュール追加" name="Axiz花子" />

  <div class="main">
    <form class="input-form" action="calendar">
      <div class="input-item">
        <label class="input-title">日付</label>
        <input name="date" type="date">
      </div>
      <div class="input-item">
        <label class="input-title">タイトル</label>
        <input name="title" type="text">
      </div>
      <div class="input-item">
        <label class="input-title">分類</label>
        <div class="div-radio">
          <label><input name="category" type="radio">重要</label>
          <label><input name="category" type="radio" checked>仕事</label>
          <label><input name="category" type="radio">プライベート</label>
          <label><input name="category" type="radio">メモ</label>
        </div>
      </div>
      <div class="input-item">
        <label class="input-title">場所</label>
        <input name="place" type="text">
      </div>
      <div class="input-item">
        <label class="input-title" for="body">内容</label>
        <textarea rows="5" id="body"></textarea>
      </div>

      <button type="button" onclick="openModal()">登録</button>
      <x-modal mode="登録" />
    </form>

    <a href="calendar" class="btn">戻る</a>
  </div>

  <footer>
    <small>Copyright &copy; C-Sche, all rights reserved.</small>
  </footer>

  <script src="js/modal.js"></script>
</body>
</html>
