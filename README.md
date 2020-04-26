# -Exercise--Game_guess_the_number

[Bài tập] Game đoán số
Mục đích
Luyện tập sử dụng cấu trúc mảng, danh sách, thuật toán tìm kiếm tuyến tính, nhị phân.

Mô tả
Game đoán số được mô tả như sau:

Người chơi nghĩ ra một số ngẫu nhiên nằm trong khoảng từ 1-100, có thể viết số đó ra giấy nếu cần thiết
Máy tính sẽ lần lượt đoán các con số xem có phải là con số mà người chơi đã nghĩ ra hay không
Đối với mỗi con số do máy đưa ra thì người chơi trả lời theo 3 lựa chọn:
Chính xác, đó là con số tôi đã nghĩ: Trò chơi kết thúc
Không, con số do tôi nghĩ ra nhỏ hơn con số máy tính đưa ra: Máy tính tiếp tục đoán số
Không, con số do tôi nghĩ ra lớn hơn con số máy tính đưa ra: Máy tính tiếp tục đoán số
Để triển khai trò chơi này, chúng ta sẽ sử dụng thuật toán tìm kiếm nhị phân, trong đó chia đôi các khoảng số để thu hẹp dần các khoảng cần đoán.

Có thể mô tả thuật toán game đoán số này như hình sau:



Để hoàn thành bài thực hành, học viên cần:

Đưa mã nguồn lên GitHub
Dán link của repository lên phần nộp bài trên CodeGymX
Hướng dẫn
Bước 1: Tạo dang sách (mảng) các phần tử 

Bước 2: Nhập vào một phần tử muốn tìm kiếm

Bước 3: Xây dựng hàm tìm kiếm theo thuật toán tìm kiếm nhị phân

Bước 4: Sử dụng các hàm đã xây dựng