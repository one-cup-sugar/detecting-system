<?php
$servername = "39.100.88.210";
$username = "siov";
$password = "siov";
$dbname="siov";

// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$sql = "SELECT * FROM PT_process";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
	echo $row["name"]. "\t" . $row["pid"]. "\t" . $row["uid"]. "\t" . $row["path"]. "\n";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>