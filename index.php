<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>鼠标点击事件</title>
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        #clickInfo {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 20px;
        }
    </style>
    <script>
        function handleMouseClick(event) {
            var x = event.clientX;
            var y = event.clientY;
            var clickInfo = "鼠标点击坐标：x = " + x + ", y = " + y;
            document.getElementById("clickInfo").innerText = clickInfo;

            // 使用 AJAX 发送坐标信息到服务器端的 PHP 脚本
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "index.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("x=" + x + "&y=" + y);
        }
    </script>
</head>
<body onclick="handleMouseClick(event)">

    <h1>点击页面任意位置</h1>
    <div id="clickInfo"></div>
</body>
</html>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST["x"];
    $y = $_POST["y"];
    // 在这里可以对接收到的坐标信息进行处理，比如存储到数据库或者进行其他操作
    // 这里只是简单地将坐标信息输出到控制台
    echo "接收到的坐标信息：x = " . $x . ", y = " . $y;
}
?>
