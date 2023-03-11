+<!DOCTYPE html>
+<html lang="ja">
+
+<head>
+    <meta charset="UTF-8">
+    <title>PHP基礎編</title>
+</head>
+
+<body>
+    <p>
+         <?php
         // 変数$numに0～4までのランダムな整数を代入する
         $num = mt_rand(0, 4);
 
         // 変数$numの値を出力する（確認用）
         echo $num;
 
         // 改行する
         echo '<br>';
 
         // 変数$numの値が4であれば、「大当たりです」という文字列を出力する
         if ($num === 4) {
             echo '大当たりです';
         }
         ?>
+    </p>
+</body>
+
+</html>
