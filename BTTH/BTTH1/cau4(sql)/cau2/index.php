<?php
// Kết nối MySQL
$conn = new mysqli("localhost", "root", "", "QuizAndroid");
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy danh sách câu hỏi và đáp án
$sql = "SELECT q.id, q.question_text, a.answer_text, a.answer_option 
        FROM questions q
        JOIN answers a ON q.id = a.question_id
        ORDER BY q.id, a.answer_option";
$result = $conn->query($sql);

$questions = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $questions[$row['id']]['text'] = $row['question_text'];
        $questions[$row['id']]['answers'][] = $row;
    }
} else {
    echo "<div class='alert alert-danger'>Không có câu hỏi nào!</div>";
    exit;
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Android</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Bài kiểm tra trắc nghiệm</h1>
    <form action="result.php" method="POST">
        <?php foreach ($questions as $id => $question): ?>
            <div class='card mb-4'>
                <div class='card-header'><strong><?php echo $question['text']; ?></strong></div>
                <div class='card-body'>
                    <?php foreach ($question['answers'] as $answer): ?>
                        <div class='form-check'>
                            <input class='form-check-input' type='radio' 
                                   name='question<?php echo $id; ?>' 
                                   value='<?php echo $answer['answer_option']; ?>' 
                                   id='question<?php echo $id . $answer['answer_option']; ?>' required>
                            <label class='form-check-label' 
                                   for='question<?php echo $id . $answer['answer_option']; ?>'>
                                <?php echo $answer['answer_option'] . '. ' . $answer['answer_text']; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Nộp bài</button>
        </div>
    </form>
</div>
</body>
</html>
