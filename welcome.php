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
<title>خوش آمدید</title>

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

    /* پروفایل بالا سمت راست */
    .profile {
        position: fixed;
        top: 20px;
        right: 20px; /* مهم */
        display: flex;
        align-items: center;
        cursor: pointer;
        background: rgba(255,255,255,0.15);
        padding: 8px 14px;
        border-radius: 30px;
        z-index: 1000;
    }

    .profile img {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        margin-left: 10px;
    }

    .profile span {
        font-size: 0.95em;
        white-space: nowrap;
    }

    /* منوی کشویی */
    .menu {
        position: absolute;
        top: 55px;
        right: 0;
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

    /* باکس وسط */
    .welcome-box {
        text-align: center;
        background: rgba(255,255,255,0.1);
        padding: 60px 80px;
        border-radius: 25px;
    }

    h1 {
        font-size: 3em;
        margin-bottom: 20px;
    }

    p {
        font-size: 1.4em;
        margin-bottom: 35px;
    }

    .btn {
        display: inline-block;
        padding: 12px 32px;
        background: #ff416c;
        color: white;
        border-radius: 30px;
        text-decoration: none;
        font-size: 1.1em;
        transition: 0.3s;
    }

    .btn:hover {
        background: #ff4b2b;
    }
</style>
</head>
<body>

<!-- پروفایل بالا سمت راست -->
<div class="profile">
    <img src="https://i.imgur.com/8Km9tLL.png" alt="profile">
    <span>سلام، <?php echo htmlspecialchars($username); ?> 👋</span>

    <div class="menu">
        <a href="welcome.php">🏠 داشبورد</a>
        <a href="contact.php">📞 تماس با ما</a>
        <a href="logout.php">🚪 خروج</a>
    </div>
</div>

<!-- محتوای وسط -->
<div class="welcome-box">
    <h1>خوش آمدی، <?php echo htmlspecialchars($username); ?>!</h1>
    <p>از ورود شما خوشحالیم 🎉</p>

    <a href="contact.php" class="btn">تماس با ما</a>
</div>

</body>
</html>
