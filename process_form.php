<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "qiuyongkang@justmedia.xyz";  // 您的邮箱地址
    $subject = "新的联系表单提交 - JUST AI";
    $body = "姓名: $name\n邮箱: $email\n消息: $message";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo "感谢您的留言，我们会尽快回复您。";
    } else {
        echo "抱歉，发送邮件时出现错误。请稍后再试或直接联系我们。";
    }
} else {
    echo "无效的请求方法。";
}
?>
