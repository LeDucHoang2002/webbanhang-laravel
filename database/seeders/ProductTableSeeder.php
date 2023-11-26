<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        DB::table('product')->insert([
            [
                'name_product' => 'Áo Thun Trơn Nam Nữ FREDO T-shirt 100% Cotton 250gsm Cao Cấp AT01', 
                'image_product' => 'https://4menshop.com/images/thumbs/2017/06/ao-thun-co-tron-xanh-at716-8801-slide-2.jpg',
                'id_category' => '1', 
                'description' => 'Áo Thun Trơn Nam Nữ Fredo T-shirt 100% Cotton 250gsm Cao Cấp - AT01.
                Một chiếc áo phông basic không thể thiếu trong tủ đồ của bất cứ ai mỗi khi hè về !           
                Cùng Fredo ""F5"" lại tủ quần áo!', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Áo cộc tay nam, áo phông nam tay ngắn cổ tròn Unisex chất thun cotton 4 chiều mềm mại', 
                'image_product' => 'https://static2.yan.vn/YanNews/2167221/202002/5-mau-ao-thun-nam-dep-khong-nen-bo-qua-nam-2020-f7263123.jpg',
                'id_category' => '1', 
                'description' => 'Áo thun nam dáng đứng, phong cách trẻ trung năng động và đầy cá tính.
                Thiết kế fom áo thoải mái tự tin khi đi chơi hay mặc ở nhà , vận động ngoài trời.                 
                Chất Thun cotton 4 chiều tạo cảm giác cực kỳ thoải mái khi mặc, đặc biệt không gây dị ứng cho da.                
                Co dãn mềm mại giặt tay hay giặt máy đều không hề bai dão hay phai màu.
                Hàng siêu hot với chất liệu được làm từ 60% Thun kết hợp 40% Cotton tạo nên sự Co giãn 4 chiều cực mát và mịn giúp người mặc cảm giác thoải mái.', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Áo thun nam, áo phông nam tay ngắn cổ tròn chất cotton thun lạnh co giãn 4 chiều hình 528 alex cool', 
                'image_product' => 'https://aoxuanhe.com/upload/product/axh-162/ao-thun-nam-cotton-co-tron-trang.jpg',
                'id_category' => '1', 
                'description' => '- Về sản phẩm: Shop cam kết cả về CHẤT LIỆU cũng như HÌNH DÁNG ( đúng với những gì được nêu bật trong phần mô tả sản phẩm). 
                Về giá cả : Shop nhập với số lượng nhiều và trực tiếp nên chi phí sẽ là RẺ NHẤT nhé.
                Thời gian chuẩn bị hàng: Hàng có sẵn, thời gian chuẩn bị tối ưu nhất. ', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Đầm váy nữ lụa hoa nhún ngực với tone màu xinh xắn dành cho các nàng', 
                'image_product' => 'https://blogcaodep.com/wp-content/uploads/2020/03/vay-dam-maxi-voan-tre-vai-di-bien-dep-2018.jpg',
                'id_category' => '2', 
                'description' => 'Đầm váy nữ lụa hoa nhún ngực với tone màu xinh xắn dành cho các nàng.
                Chất: lụa. Chất vải này do bên shop em tự đi chọn vải và gia công số lượng lớn để tối ưu chi phí nên khách bên em cứ yên tâm ạ.
                Nếu khách hàng hài lòng với sản phẩm bên em thì đừng quên đánh giá kèm nhận xét tích cực cho shop em với nha vì mỗi 1 đánh giá tích cực bên em sẽ gửi tặng voucher mua hàng giảm giá 10k cho lần sau đó ạ.', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Váy đi tiệc dáng xoè dài tay thắt nơ cổ có khoá kéo chất dạ nhung hàng đổ shop', 
                'image_product' => 'https://kinhdoanhthoitrang.com.vn/wp-content/uploads/2020/10/9e087ac384826ddc3493.jpg',
                'id_category' => '2', 
                'description' => 'Cam kết sản phẩm bán ra y hình, đúng mô tả bao gồm cả chất liệu và màu sắc ở ảnh trải sàn.  
                Miễn phí đổi trả hàng nếu khách nhận hàng có lỗi của nhà sản xuất.  
                Khách mua hàng lưu ý chọn màu và size theo phân loại trên hệ thống. 
                Shop KHÔNG nhận nhặt đơn hàng theo tin nhắn hoặc ghi chú vì số lượng đơn hàng ngày rất ngiều không thể quản lý được.  
                Với các đơn hàng nhiều sản phẩm và phân loại, quý khách vui lòng thêm từng màu vào giỏ hàng. Sau đó quay lại giỏ ấn mua tất cả. Như thế các bạn sẽ chỉ phải chịu 1 lần ship.  ', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Váy Thời Trang Nữ Phong Cách Tiểu Thư Giả Set Cột Nơ Trước Ngực Phong Cách Hàn Quốc Đ9223', 
                'image_product' => 'https://vpfashion.vn/wp-content/uploads/2021/06/mau-vay-cong-so-dep-nhat-moi-nhat.png',
                'id_category' => '2', 
                'description' => 'SẢN PHẨM GIỐNG NHƯ MÔ TẢ HÌNH ẢNH 100%.
                Hàng đúng y như hình. Hình chụp sàn là ảnh thật sản phẩm. <br>
                Đổi trả nếu khách phát hiện hàng lỗi.
                Nếu không có hình chụp sàn vui lòng nhắn tin shop để được tư vấn ạ.
                Các mặt hàng bị lỗi hay không ưng ý,khách vui lòng liên hệ với shop trước khi đánh giá shop nhé. shop sẽ hỗ trợ đổi hoặc trả hàng cho khách ạ', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Quần thể thao nam,quần thu đông nam chất umi cao cấp', 
                'image_product' => 'https://static2.yan.vn/YanNews/2167221/202002/4-loai-quan-tay-nam-dep-nen-co-cho-ban-nam-nam-2020-51d46f12.jpg',
                'id_category' => '2', 
                'description' => 'Quần thể thao nam,quần thu đông nam chất umi cao cấp.
                Chất Liệu: Vải Umi cao cấp  mềm mịn, co giãn cực tốt, không nhăn, không xù, Bền màu.
                Form Quần dễ mặc, không kén người mặc,thiết kế 3 túi 2 túi sườn 1 túi sau có khóa.
                Kiểu dáng thể thao, năng động, hiện đại phù hợp mặc: Đi học, đi thể thao, đi dạo, đi chơi,…
                Hàng madein Việt Nam chuẩn từng đường kim mũi chỉ.', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Quần tây âu nam ống côn T-Max vải tuyết mưa dày dặn co giãn chống nhăn form ống côn Hàn quốc', 
                'image_product' => 'https://4men.com.vn/images/thumbs/2017/08/nhung-mau-quan-kaki-nam-dep-nhat-hien-nay-tai-4men-news-240.jpg',
                'id_category' => '2', 
                'description' => 'Quần tây âu nam ống côn T-Max vải tuyết mưa dày dặn co giãn chống nhăn form ống côn Hàn quốc
                Màu sắc :  ĐEN , XANH THAN , XÁM ĐẬM , GHI SÁNG , VÀNG BÒ , TRẮNG SỮA.
                Chất liệu : Tuyết mưa cao cấp , thấm hút mồ hôi.
                Chất vải sờ mịn không bai, không nhăn, không xù.
                Quy cách, tiêu chuẩn đường may tinh tế, tỉ mỉ trong từng chi tiết.
                Kiểu dáng: Thiết kế đơn giản, dễ mặc, dễ phối đồ.
                Form body Hàn Quốc mang lại phong cách trẻ trung, lịch lãm.
                Chất lượng sản phẩm tốt, giá cả hợp lý.', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name_product' => 'Quần âu sidetab, Quần tây nam cạp cao công sở ống côn đen vải tuyết hàn VINTINO QĐL', 
                'image_product' => 'https://dony.vn/wp-content/uploads/2021/09/quan-tay-nam-dep-ban-chay-1.jpg',
                'id_category' => '2', 
                'description' => 'Quần âu sidetab nam, Quần tây nam cạp cao ống côn đen công sở vải tuyết hàn VINTINO QĐL với nhiều đặc tính vượt trội.
                Quần tây nam được thiết kê cực tinh tế, 1 cúc cài, kèm đai khuy 2 nút, chiết ly tinh tế tạo cảm giác thoải mái.          
                Quần âu nam chính hãng VINTINO với đường may chỉn chu, khéo léo từng chi tiết.
                Quần cạp cao nam được lựa chọn cùng chất vải mềm mịn, không phai màu, bai xù.
                Quần tây nam ống côn cực hách dáng, tăng độ đẹp trai.', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //10
            [
                'name_product' => 'Áo Croptop thun tăm dài tay nữ cúc bấm 3 màu Áo thun croptop cổ bẻ chất thun tăm co giãn loại 1', 
                'image_product' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lm1l3cl6zie719',
                'id_category' => '1', 
                'description' => 'Áo Croptop thun tăm dài tay nữ cúc bấm 3 màu Áo thun croptop cổ bẻ chất thun tăm co giãn loại 1. Đường may chuẩn chỉnh, tỉ mỉ, chắc chắn.Phong cách thời trang cá tính, quyến rũ.', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //11
            [
                'name_product' => 'Áo Thun Tay Ngắn Cổ Tròn Dáng Rộng Màu Sắc Đơn Giản Thoải Mái Có Size Lớn Cho Nam Giới', 
                'image_product' => 'https://down-vn.img.susercontent.com/file/tw-11134201-23030-q2f9ktee79nva8',
                'id_category' => '1', 
                'description' => '
                [1] Vui lòng xác nhận rằng tên, số điện thoại và địa chỉ của người nhận hàng là chính xác.
                [2] Tất cả các mặt hàng trong cửa hàng của chúng tôi đều có trong kho. Sản phẩm của chúng tôi được vận chuyển từ Trung Quốc và các sản phẩm sẽ đến nơi trong vòng 7 đến 14 ngày.
                [3] Phương thức vận chuyển của chúng tôi là hình thức chuyển phát tiêu chuẩn chính thức của Shopee, an toàn và nhanh chóng. Tôi hy vọng rằng khách hàng sẽ không cho chúng tôi đánh giá xấu vì thời gian hậu cần!
                [4] Người mua không lấy hàng, vui lòng đi đường vòng! Đối với những người mua bị từ chối một cách ác ý, chúng tôi có quyền truy cứu trách nhiệm pháp lý!', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //12
            [
                'name_product' => 'Áo khoác Blazer Nam Form rộng dài tay unisex basic chất Flannel Hàn cao cấp ,hợp mọi thời đại, phong cách Hàn Quốc, Vest', 
                'image_product' => 'https://down-vn.img.susercontent.com/file/39ba55af4ef2c88080163ecb7a478a13',
                'id_category' => '1', 
                'description' => 'SHOP CAM KẾT
                - Sản phẩm Áo Blazer Nam Form rộng cao cấp giống mô tả 100%
                - Hình ảnh sản phẩm là ảnh thật, các hình hoàn toàn do shop tự thiết kế.
                - Kiểm tra  cẩn thận trước khi gói hàng giao cho Quý Khách
                - Hàng có sẵn, giao hàng ngay khi nhận được đơn 
                - Hoàn tiền nếu sản phẩm không giống với mô tả
                - Chấp nhận đổi hàng khi size không vừa trong 3 ngày.', 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
