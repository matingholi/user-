<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<title>تماس با ما</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg,#6a11cb,#2575fc);
        color: white;
        height: 100vh;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* پروفایل بالا */
    .profile {
        position: fixed;
        top: 20px;
        left: 20px;
        display: flex;
        align-items: center;
        cursor: pointer;
        background: rgba(255,255,255,0.15);
        padding: 8px 14px;
        border-radius: 30px;
    }

    .profile img {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .profile span {
        font-size: 0.95em;
        white-space: nowrap;
    }

    /* منوی کشویی */
    .menu {
        position: absolute;
        top: 60px;
        left: 0;
        background: rgba(0,0,0,0.4);
        border-radius: 15px;
        width: 180px;
        display: none;
        text-align: center;
        overflow: hidden;
    }

    .menu a {
        display: block;
        padding: 12px;
        color: white;
        text-decoration: none;
        font-size: 0.95em;
        transition: 0.3s;
    }

    .menu a:hover {
        background: rgba(255,255,255,0.2);
    }

    .profile:hover .menu {
        display: block;
    }

    /* باکس تماس */
    .contact-box {
        text-align: center;
        background: rgba(255,255,255,0.1);
        padding: 55px 75px;
        border-radius: 25px;
        width: 420px;
    }

    h1 {
        font-size: 2.6em;
        margin-bottom: 15px;
    }

    p {
        margin-bottom: 30px;
        font-size: 1.1em;
    }

    .info {
        margin-bottom: 15px;
        font-size: 1.1em;
    }

    .btn {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 28px;
        background: #ff416c;
        color: white;
        border-radius: 30px;
        text-decoration: none;
        transition: 0.3s;
    }

    .btn:hover {
        background: #ff4b2b;
    }
</style>
</head>
<body>

<!-- پروفایل بالا -->
<div class="profile">
    <img src="https://i.imgur.com/8Km9tLL.png" alt="profile">
    <span>سلام، <?php echo htmlspecialchars($username); ?> 👋</span>

    <div class="menu">
        <a href="welcome.php">🏠 داشبورد</a>
        <a href="contact.php">📞 تماس با ما</a>
        <a href="logout.php">🚪 خروج</a>
    </div>
</div>

<!-- محتوای تماس -->
<div class="contact-box">
    <h1>تماس با ما</h1>
    <p>در صورت داشتن هرگونه سؤال یا مشکل، با ما در ارتباط باشید</p>

    <div class="info">📧 ایمیل: support@example.com</div>
    <div class="info">📞 تلفن: 09123456789</div>

    <a href="welcome.php" class="btn">بازگشت</a>
</div>

</body>
</html>
