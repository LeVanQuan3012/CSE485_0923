
SELECT *
FROM baiviet
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE theloai.ten_tloai = "Nhạc trữ tình";

select *
from baiviet
inner join tacgia on baiviet.ma_tgia = tacgia.ma_tgia
WHERE tacgia.ten_tgia="Nhacvietplus"

select theloai.ma_tloai, theloai.ten_tloai
from theloai
inner join baiviet on theloai.ma_tloai = baiviet.ma_tloai
where baiviet.noidung is null;

select baiviet.ma_bviet, baiviet.ten_bhat,tacgia.ten_tgia, theloai.ten_tloai,baiviet.ngayviet
from baiviet
inner join tacgia on tacgia.ma_tgia = baiviet.ma_tgia
inner join theloai on theloai.ma_tloai = baiviet.ma_tloai



SELECT theloai.ma_tloai, theloai.ten_tloai
FROM baiviet
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE (
    SELECT COUNT(*)
    FROM baiviet
    WHERE baiviet.ma_tloai = theloai.ma_tloai
) >= (
    SELECT MAX(count)
    FROM (
        SELECT COUNT(*) AS count
        FROM baiviet
        GROUP BY ma_tloai
    ) AS subquery
)
group by theloai.ma_tloai, theloai.ten_tloai ;


select tacgia.ma_tgia, tacgia.ten_tgia, count(*) as count
from baiviet
inner join tacgia on tacgia.ma_tgia = baiviet.ma_tgia
GROUP by tacgia.ma_tgia, tacgia.ten_tgia
limit 2;



SELECT *
FROM baiviet
WHERE baiviet.tomtat LIKE '%yêu%' OR tieude LIKE '%thương%' OR tieude LIKE '%anh%' OR tieude LIKE '%em%';




select * 
from baiviet
WHERE baiviet.tieude LIKE '%yêu%' OR baiviet.tieude LIKE '%thương%' OR baiviet.tieude  LIKE '%anh%' OR baiviet.tieude LIKE '%em%';



CREATE VIEW vw_Music AS
SELECT baiviet.ma_bviet, baiviet.tieude, theloai.ten_tloai, tacgia.ten_tgia
FROM baiviet
INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia;


SELECT * from vw_Music



DELIMITER //

CREATE PROCEDURE sp_DSBaiViet(IN ten_tloai varchar(100))
BEGIN
    DECLARE ma_tloai int;
    SELECT theloai.ma_tloai INTO ma_tloai FROM theloai WHERE theloai.ten_tloai = ten_tloai;
    IF ma_tloai IS NULL THEN
        SELECT "Không tồn tại " AS Message;
    ELSE
        SELECT * FROM baiviet WHERE baiviet.ma_tloai = ma_tloai;
    END IF;
END //

DELIMITER ;

CALL sp_DSBaiViet('Nhạc trữ tình');

CREATE TABLE Users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    is_admin TINYINT(1) DEFAULT 0
);

