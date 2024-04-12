
<?php
session_start();
include "data_connection.php";

// 检查是否收到了产品ID参数
if(isset($_GET['id'])) {
    // 获取产品ID
    $productId = $_GET['id'];

    // 获取用户ID
    $id = $_SESSION["ID"];

    // 使用产品ID和用户ID从购物车中删除相应的产品
    $query = "DELETE FROM cart WHERE product_id = $productId AND user_id = $id";

    // 执行删除查询
    $result = mysqli_query($connect, $query);

    // 检查是否删除成功
    if($result) {
        // 如果删除成功，可以重定向到购物车页面或其他地方
        header("Location: shoping_cart.php");
        exit; // 确保在重定向后停止执行当前脚本
    } else {
        // 如果删除失败，可以显示错误消息或采取其他适当的操作
        echo "ERROR";
    }
} else {
    // 如果未收到产品ID参数，可以采取适当的操作，如显示错误消息或重定向到其他页面
    echo "ERROR！";
}
?>