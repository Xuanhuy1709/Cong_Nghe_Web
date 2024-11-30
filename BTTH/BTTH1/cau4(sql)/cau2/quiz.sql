
CREATE DATABASE QuizAndroid;
USE QuizAndroid;

-- Tạo bảng câu hỏi
CREATE TABLE questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question_text TEXT NOT NULL,
    correct_answer CHAR(1) NOT NULL
);

-- Tạo bảng câu trả lời
CREATE TABLE answers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question_id INT NOT NULL,
    answer_text TEXT NOT NULL,
    answer_option CHAR(1) NOT NULL,
    FOREIGN KEY (question_id) REFERENCES questions(id)
);
-- Thêm câu hỏi
INSERT INTO questions (question_text, correct_answer) VALUES
('Thành phần nào sau đây KHÔNG phải là một thành phần giao diện người dùng (UI) trong Android?', 'C'),
('Layout nào thường được sử dụng để sắp xếp các thành phần UI theo chiều dọc hoặc chiều ngang?', 'B'),
('Intent trong Android được sử dụng để làm gì?', 'C');

-- Thêm các câu trả lời
INSERT INTO answers (question_id, answer_text, answer_option) VALUES
(1, 'TextView', 'A'),
(1, 'Button', 'B'),
(1, 'Service', 'C'),
(1, 'ImageView', 'D'),
(2, 'RelativeLayout', 'A'),
(2, 'LinearLayout', 'B'),
(2, 'FrameLayout', 'C'),
(2, 'ConstraintLayout', 'D'),
(3, 'Hiển thị thông báo cho người dùng.', 'A'),
(3, 'Lưu trữ dữ liệu.', 'B'),
(3, 'Khởi chạy Activity.', 'C'),
(3, 'Xử lý sự kiện chạm.', 'D');
