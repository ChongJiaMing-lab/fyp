<?php
// 伪代码，假设你已经有数据库连接 $db
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST['productId'];
    $newQuantity = $_POST['newQuantity'];

    // 更新数据库
    $stmt = $db->prepare("UPDATE cart SET qty = ? WHERE id = ?");
    $stmt->bind_param("ii", $newQuantity, $productId);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Update successful";
    } else {
        echo "No changes made";
    }
}
?>
