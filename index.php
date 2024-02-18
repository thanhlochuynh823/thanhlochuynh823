<?php
// Hiển thị thông tin chào mừng
echo "<h1>Chào mừng bạn đến với trang web của tôi!</h1>";

// In ra ngày giờ hiện tại
echo "<p>Hôm nay là ngày " . date("d/m/Y") . ", " . date("h:i:s A") . "</p>";

// Hiển thị tên người dùng
$username = "Bard"; // Thay đổi tên người dùng cho phù hợp
echo "<p>Xin chào, " . $username . "!</p>";
?>
