<?php
// Kết nối MySQL
$conn = new mysqli("localhost", "root", "", "QuizAndroid");
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy danh sách đáp án đúng
$sql = "SELECT id, correct_answer FROM questions";
$result = $conn->query($sql);

$correctAnswers = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $correctAnswers[$row['id']] = $row['correct_answer'];
    }
}

// Tính điểm
$score = 0;
foreach ($_POST as $key => $value) {
    $questionId = (int)filter_var($key, FILTER_SANITIZE_NUMBER_INT);
    if (isset($correctAnswers[$questionId]) && $correctAnswers[$questionId] === $value) {
        $score++;
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả kiểm tra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Kết quả kiểm tra</h1>
    <div class='alert alert-success text-center'>
        <p>Bạn đã trả lời đúng <strong><?php echo $score; ?></strong>/<?php echo count($correctAnswers); ?> câu.</p>
    </div>
    <div class="text-center">
        <a href="index.php" class="btn btn-primary">Làm lại</a>
    </div>
</div>
</body>
</html>
