<?php

namespace Faker\Provider;

class WosWatch extends Base
{

    protected static $watchNameFormat = array(
      '{{prefix}} {{modelName}} - {{sku}}' 
    );

    protected static $modelNameFormat = array(
      '{{brand}} {{model}}' 
    );

    protected static $prefix = array(
        'Đồng hồ',
    );

    protected static $brand = array(
        'THOMAS', 'JAMES', 'ROLEX', 'TISSOT', 'OMEGA', 'BREGUET', 'BLANCPAIN', 'PATEK', 'SINN', 'STOWA',
        'MEISTERSINGER', 'NOMOS', 'GLASHUTTE', 'SEIKO', 'IWC', 'HUBLOT', 'MOVADO', 'BULOVA'
    );

    protected static $model = array(
        'Oyster', 'Milgauss', 'GMT Master', 'Explorer', 'Dweller', 'McCabe', 'Seamaster', 'Constellation', 
        'Deville', 'Sabo', 'Earnshaw', 'Burberry', 'Jefferson', 'Calvi', 'Tradition Grande'
    );

    protected static $watchAttributeFormat = array(
        "Loại máy: {{machine}} \n Kính: {{glass}} \n Vỏ: {{material}} \n Dây: {{band}} \n Cấu tạo: {{frame}} \n Thiết kế: {{design}} \n Chức năng: {{feature}}",
        "Loại máy: {{machine}} \n Kính: {{glass}} \n Cấu tạo: {{frame}} \n Chức năng: {{feature}}",
        "Loại máy: {{machine}} \n Kính: {{glass}} \n Vỏ: {{material}}",
        "Loại máy: {{machine}} \n Vỏ: {{material}} \n Dây: {{band}} \n Cấu tạo: {{frame}}",
        "Loại máy: {{machine}} \n Vỏ: {{material}} \n Dây: {{band}} \n Cấu tạo: {{frame}} \n Thiết kế: {{design}}",
        "Loại máy: {{machine}} \n Vỏ: {{material}} \n Cấu tạo: {{frame}} \n Thiết kế: {{design}} \n Chức năng: {{feature}}",
        "Loại máy: {{machine}} \n Kính: {{glass}} \n Vỏ: {{material}} \n Cấu tạo: {{frame}} \n Thiết kế: {{design}}",
        
    );

    protected static $machine = array(
        'Quatz', 'Quartz (Swiss Made)', 'Automatic', 'Handwinding'
    );

    protected static $glass = array(
        'Mica', 'Sapphire', 'Sapphire tráng', 'Sapphire nguyên khối', 'Mineral'
    );

    protected static $material = array(
        'Thép Inox. Đặc tính Bền, không bị hiện tượng oxy hoá, han rỉ. Chất thép mờ, đường nét sắc cạnh, bề mặt thép trơn mịn', 
        'Thép không gỉ. Đặc tính Bền, không bị hiện tượng oxy hoá, han rỉ. Loại vỏ này nếu có mạ màu thì lớp mạ thường rất bền, khó bị phai (phải từ ít nhất từ 3 năm trở lên mới có thể bị phai).', 
        'Stainless Steel', 
        'All Stainless ', 
        'Hợp kim chống xước, gốm công nghệ cao (Tungsten, Ceramic): Có lõi bằng thép hoặc titan bọc hợp kim hoặc đá (gốm công nghệ cao) bên ngoài có độ cứng cao, chống xước như kính Sapphire.',
        'Hợp kim Titanium. Nhẹ, bền, không ôxy hoá, có màu xám tối',
        'Hợp kim Aluminum (Nhôm). Nhẹ, bền không ôxy hoá, màu trắng mờ'
    );

    protected static $band = array(
        'Stainless Steel', 'Mạ', 'hợp kim Titanium', 'Leather Band', 'Da thường', 'Da cao cấp', 'Da cá sấu',
        'Vải tổng hợp', 'Metal', 'Nylon'
    );

    protected static $design = array(
        'vàng trắng, 32 mm x 40.5 mm, dày 10.6 mm; viền được khảm 143 viên kim cương; mặt kính sapphire, nắp lưng trong suốt; khả năng chịu nước 3 atm',
        'hồng ngọc, đường kính 41 mm, dày 15.95 mm; mặt kiếng sapphire, nắp lưng trong suốt; chiu nước 3 atm',
        'vàng trắng, đường kính 35 mm, dày 9.15 mm; viền được cách điệu bằng kim cương; mặt kiếng sapphire, nắp lưng trong suốt; khả năng chịu nước 3 atm'
    );

    protected static $feature = array(
        'giờ, phút , đồng hồ phụ (hoạt động theo cơ chế tourbillion)',
        'giờ, phút, đồng hồ chỉ công suất ngày/đêm',
        'giờ, phút, năng lượng dự trữ được hiển thị ở nắp sau của máy',
        'hiển thị ngày, thứ và tuần; Lịch mặt trăng'
    );

    protected static $frame = array(
        'được làm bằng phương pháp thủ công, máy Breguet Caliber 569; đường kính 36 mm, dày 10.82 mm; 43 hạt chân kính; 18,000 dao động/phút; dự trữ năng lượng 50 giờ',
        'máy tự động Breguet Caliber 78CS; 23 x 32 mm; dày 5.8 mm; 45 hạt chân kính, 25,200 dao động/phút; dây tóc bằng cao su, dự trữ năng lượng 57 giờ',
        'được chế tác bằng tay, dùng máy Breguet Caliber 558.1; đường kính 30.5 mm; dày 6.02 mm; 21 hạt chân kính; 18,000 dao động/phút; sư dụng cùng loại lò xo của Breguet; công nghệ 1 phút "Tourbillion"; được khắc bằng tay',
        'đường kính 36 mm, dày 10.82 mm; dày 6.02 mm; 21 hạt chân kính; dự trữ năng lượng 50 giờ'
    );

    protected static $wShortDescription = array (
        'Đồng hồ Thụy Sỹ có mặt màu trắng viền mạ vàng kết hợp với dây da màu đen sang trọng giúp cánh mày râu định hình nên phong thái của mình không chỉ ở văn phòng làm việc mà ngay cả những lúc dạo phố cùng nàng.',
        'Thiết kế kim xanh độc đáo, lạ mắt: mảnh nhưng đầy quyến rũ - đó chính là kim của chiếc đồng hồ Swiss đẳng cấp. Vỏ đồng hồ được mạ vàng bằng công nghệ PVD cao cấp càng khiến cho nó trở nên cao quý mà các thương hiệu khác khó có thể vượt qua được.',
        'Mặt xanh đặc biệt khiến cho chiếc đồng hồ trở nên lạ lẫm nhưng không kém phần sang trọng kết hợp với vỏ đồng hồ được mạ vàng bằng công nghệ PVD cao cấp làm cho chiếc đồng hồ trở nên đặc biệt. Bên cạnh đó, thiết kế mặt tròn nam tính và mạnh mẽ, các chi tiết trang trí như vạch chia giờ, kim đồng hồ... được bố trí hài hòa, mang tính thẩm mỹ cao, đã góp phần tạo nên phong cách riêng cho người sở hữu nó',
        'Đồng hồ nam Thụy Sỹ được thiết kế dành riêng cho những chàng trai trẻ trung, năng động. Sở hữu kiểu mặt tròn nam tính và mạnh mẽ, các chi tiết trang trí như vạch chia giờ, kim đồng hồ... được bố trí một cách hài hòa, mang tính thẩm mỹ cao, sản phẩm góp phần tạo nên phong cách riêng cho bạn.',
        'Aries Gold là hãng đồng hồ được thành lập vào năm 1928 bởi một nhóm kỹ sư Châu Âu tại Thụy Sỹ, họ cùng chung một mục đích: tạo ra những chiếc đồng hồ cao cấp mạnh mẽ và có độ chính xác cao',
        'Sturhling Tourbillon biểu tượng cho độ chính xác tuyệt vời của cỗ máy đo thời gian. Sturhling Tourbillon là thương hiệu của những mẫu đồng hồ đẳng cấp,phong cách và sành điệu trong vài thập kỷ qua',
    );

    protected static $wPicture = array(
        'http://watchesofus.vn/cdn/store/3656/ps/20160318/thomas_earnshaw___es_0017_11_1_1024x1024.jpeg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160920/THOMAS_EARNSHAW___ES_8006_01_SET_01_1000x1000.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160807/JAMES_MCCABE___JM_1020_22_1_1000x1000.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160807/THOMAS_EARNSHAW___ES_8030_33_1_1024x1024.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160421/JAMES_MCCABE___JM_1011_01_1_1000x1000.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160421/thomas_earnshaw_es_8049_03_1_1024x1024.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160331/burei___bm_13002_lh_1_1000x1000.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20161010/THOMAS_EARNSHAW___ES_8030_22_1_1024x1024.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160422/james_mccabe___jm_1008_01_2_1000x668.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160422/james_mccabe___jm_1009_03_2_1000x668.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160422/james_mccabe___jm_1009_02_2_1000x668.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160422/james_mccabe___jm_1009_01_2_1000x668.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160422/james_mccabe___jm_1011_01_2_thumb_600x600.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160429/stuhrling_original___564_01_2_944x944.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160518/stuhrling_original___571_3335k2_2_thumb_600x600.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160626/thomas_earnshaw___es_8043_22_2_thumb_600x600.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160613/james_mccabe___jm_1018_55_2_thumb_600x600.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160318/claude_bernard___65003_3_ain_2_thumb_436x599.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160318/haurex___6n510urr_1_1000x1000.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160318/thomas_earnshaw___es_0017_11_2_1024x1024.jpeg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___bm_5003_51a_2_385x500.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___bm_5003_52eg_1_2_417x500.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___bm_5003_52ag_1_2_385x500.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15008_p01ey_2_406x500.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15008_p06eg_2_406x500.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_1_p03er_2_361x500.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_p02ag_2_722x1000.jpg',
        'http://watchesofus.vn/cdn/store/3656/ps/20160309/stuhrling_original___571_3345k54_2_thumb_600x600.jpg',
    );

    protected static $wPictureSet = array(
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20161010/THOMAS_EARNSHAW___ES_8030_22_1_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20161010/thomas_earnshaw___es_8030_22_2_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20161010/thomas_earnshaw___es_8030_22_3_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20161010/thomas_earnshaw___es_8030_22_4_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20161010/thomas_earnshaw___es_8030_22_5_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20161010/thomas_earnshaw___es_8030_22_6_1000x587.jpg',

        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20161010/THOMAS_EARNSHAW___ES_8006_10_1_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20161010/thomas_earnshaw___es_8006_10_2_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20161010/thomas_earnshaw___es_8006_10_3_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20161010/thomas_earnshaw___es_8006_10_4_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20161010/thomas_earnshaw___es_8006_10_5_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20161010/thomas_earnshaw___es_8006_10_6_1024x1024.jpg'
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160920/THOMAS_EARNSHAW___ES_8006_01_SET_01_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160920/thomas_earnshaw___es_8006_01_set_02_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160920/thomas_earnshaw___es_8006_01_set_03_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160920/thomas_earnshaw___es_8006_01_set_04_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160920/thomas_earnshaw___es_8006_01_set_05_591x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160920/thomas_earnshaw___es_8006_01_set_06_1024x1024.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/THOMAS_EARNSHAW___ES_8030_33_1_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_33_2_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_33_3_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_33_4_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_33_5_1000x592.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_33_6_1024x1024.jpg'
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_06_1_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_06_2_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_06_3_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_06_4_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_06_5_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_06_6_1024x1024.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_05_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_05_2_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_05_3_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_05_4_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_05_5_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/thomas_earnshaw___es_8030_05_6_610x1000.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160728/THOMAS_EARNSHAW___ES_8049_44_1_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160728/thomas_earnshaw___es_8049_44_2_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160728/thomas_earnshaw___es_8049_44_3_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160728/thomas_earnshaw___es_8049_44_4_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160728/thomas_earnshaw___es_8049_44_5_757x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160728/THOMAS_EARNSHAW___ES_8049_44_1_1024x1024.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/THOMAS_EARNSHAW___ES_8041_11_1_1000x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/thomas_earnshaw___es_8041_11_2_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/thomas_earnshaw___es_8041_11_3_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/thomas_earnshaw___es_8041_11_4_thumb_427x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/thomas_earnshaw___es_8041_11_5_1000x515.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/thomas_earnshaw___es_8041_11_6_2560x813.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/THOMAS_EARNSHAW___ES_8037_01_1_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/thomas_earnshaw___es_8037_01_2_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/thomas_earnshaw___es_8037_01_3_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/thomas_earnshaw___es_8037_01_4_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/thomas_earnshaw___es_8037_01_5_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/thomas_earnshaw___es_8037_01_6_1024x1024.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/THOMAS_EARNSHAW___ES_8006_02_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/thomas_earnshaw___es_8006_02_2_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/thomas_earnshaw___es_8006_02_3_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/thomas_earnshaw___es_8006_02_4_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/thomas_earnshaw___es_8006_02_5_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160626/thomas_earnshaw___es_8006_02_6_2560x752.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160421/thomas_earnshaw_es_8049_03_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160421/thomas_earnshaw_es_8049_03_2_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160421/thomas_earnshaw_es_8049_03_3_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160421/thomas_earnshaw_es_8049_03_4_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160421/thomas_earnshaw_es_8049_03_5_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160421/thomas_earnshaw_es_8049_03_6_1024x1024.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160318/thomas_earnshaw___es_0017_11_1_1024x1024.jpeg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160318/thomas_earnshaw___es_0017_11_2_1024x1024.jpeg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160318/thomas_earnshaw___es_0017_11_3_1024x1024.jpeg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160318/thomas_earnshaw___es_0017_11_4_1024x1024.jpeg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160318/thomas_earnshaw___es_0017_11_5_1024x1024.jpeg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160318/thomas_earnshaw___es_0017_11_6_1024x1024.jpeg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160225/thomas_earnshaw_es_8043_05_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/thomas_earnshaw_es_8043_05_2_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/thomas_earnshaw_es_8043_05_3_560x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/thomas_earnshaw_es_8043_05_4_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/thomas_earnshaw_es_8043_05_5_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/thomas_earnshaw_es_8043_05_6_thumb_600x600.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160225/thomas_earnshaw___es_8009_01_1_1000x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160225/thomas_earnshaw___es_8009_01_2_500x500.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160225/thomas_earnshaw___es_8009_01_3_500x500.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160225/thomas_earnshaw___es_8009_01_4_500x500.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160225/thomas_earnshaw___es_8009_01_5_500x500.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160225/thomas_earnshaw___es_8009_01_6_500x500.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160225/thomas_earnshaw___es_8036_03_1_1000x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160225/thomas_earnshaw___es_8036_03_2_1000x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160225/thomas_earnshaw___es_8036_03_3_1500x1500.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160225/thomas_earnshaw___es_8036_03_4_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160225/thomas_earnshaw___es_8036_03_5_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160225/thomas_earnshaw___es_8036_03_6_thumb_600x600.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160331/burei___bm_13002_lh_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160331/burei___bm_13002_lh_2_thumb_480x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160331/burei___bm_13002_lh_3_thumb_573x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160331/burei___bm_13002_lh_4_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160331/burei___bm_13002_lh_5_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160331/burei___bm_13002_lh_6_1500x480.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___bm_5003_52ag_1_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___bm_5003_52ag_1_2_385x500.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___bm_5003_52ag_1_3_1000x667.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___bm_5003_52ag_1_4_1273x1280.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___bm_5003_52ag_1_5_thumb_599x538.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___bm_5003_52ag_1_6_1500x480.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15008_p01ey_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15008_p01ey_2_406x500.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15008_p01ey_3_thumb_599x583.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15008_p01ey_4_thumb_600x561.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15008_p01ey_5_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15008_p01ey_6_1500x437.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_p02ag_1_copy_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_p02ag_2_333x500.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_p02ag_3_thumb_569x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_p02ag_4_thumb_496x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_p02ag_5_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_p02ag_6_1500x437.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_1_p01ay_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_1_p01ay_2_361x500.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_1_p01ay_3_thumb_600x550.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_1_p01ay_4_thumb_535x599.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_1_p01ay_5_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_1_p01ay_6_1500x437.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_1_p03er_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_1_p03er_2_361x500.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_1_p03er_3_thumb_600x550.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_1_p03er_4_892x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_1_p03er_5_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/burei___sm_15013_1_p03er_6_1500x437.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/JAMES_MCCABE___JM_1020_22_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/james_mccabe___jm_1020_22_2_500x500.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/james_mccabe___jm_1020_22_3_500x500.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/james_mccabe___jm_1020_22_4_1000x564.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/james_mccabe___jm_1020_22_5_2560x796.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160807/JAMES_MCCABE___JM_1020_22_1_thumb_600x600.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160318/james_mccabe___jm_1012_11_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160318/james_mccabe___jm_1012_11_2_340x340.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160318/james_mccabe___jm_1012_11_3_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160318/james_mccabe___jm_1012_11_4_1500x1500.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160318/james_mccabe___jm_1012_11_5_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160318/james_mccabe___jm_1012_11_6_1500x1500.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160421/JAMES_MCCABE___JM_1008_01_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160422/james_mccabe___jm_1008_01_2_1000x668.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160422/james_mccabe___jm_1008_01_3_thumb_599x401.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160422/james_mccabe___jm_1008_01_4_1000x668.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160422/james_mccabe___jm_1008_01_5_thumb_401x599.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160422/james_mccabe___jm_1008_01_6_thumb_599x401.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/stuhrling_original___333n_33x56_1_1000x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/stuhrling_original___333n_33x56_2_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/stuhrling_original___333n_33x56_3_1000x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/stuhrling_original___333n_33x56_4_2560x742.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/stuhrling_original___333n_33x56_5jpg_1000x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/stuhrling_original___333n_33x56_1_1000x1000.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/stuhrling_original___571_3345k54_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/stuhrling_original___571_3345k54_2_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/stuhrling_original___571_3345k54_3_1000x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/stuhrling_original___571_3345k54_4_2560x780.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/stuhrling_original___571_3345k54_5_1250x1563.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/stuhrling_original___571_3345k54_1_thumb_600x600.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/stuhrling_original___917_02_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/stuhrling_original___917_02_2_746x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/stuhrling_original___917_02_3_746x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/stuhrling_original___917_02_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/stuhrling_original___917_02_2_746x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/stuhrling_original___917_02_3_746x1000.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/stuhrling_original___766_02_1_1000x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/stuhrling_original___766_02_2_400x400.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/stuhrling_original___766_02_3_2560x753.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/stuhrling_original___766_02_4_500x339.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/stuhrling_original___766_02_1_1000x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160321/stuhrling_original___766_02_2_400x400.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___1076_33351_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___1076_33351_2_640x480.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___1076_33351_3_640x480.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___1076_33351_4_640x480.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___1076_33351_5_2560x808.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___1076_33351_6_640x480.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_04_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_04_2_500x500.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_04_3_944x944.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_04_4_2560x753.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_04_5_1000x742.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_04_1_thumb_600x600.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_02_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_02_2_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_02_3_2560x740.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_02_4_1000x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_02_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_02_2_thumb_600x600.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_01_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_01_2_944x944.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_01_3_944x944.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_01_4_2560x753.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_01_5_1000x631.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_01_1_thumb_600x600.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___593_332u16_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___593_332u16_2_928x928.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___593_332u16_3_1000x546.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___593_332u16_4_2560x808.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___593_332u16_5_1000x745.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___593_332u16_1_thumb_600x600.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_03_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_03_2_944x944.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_03_3_500x500.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_03_4_2560x753.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_03_5_500x339.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160322/stuhrling_original___746l_03_1_thumb_600x600.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160224/klaus_kobec___kk_20006_02_1_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/klaus_kobec___kk_20006_02_2_thumb_600x600.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/klaus_kobec___kk_20006_02_3_1000x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/klaus_kobec___kk_20006_02_4_1000x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/klaus_kobec___kk_20006_02_5_1000x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160309/klaus_kobec___kk_20006_02_6_1000x1000.jpg',
        ),
        array(
            'http://watchesofus.vn/cdn/store/3656/ps/20160323/avi___08___av_4011_02_1_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160323/avi___08___av_4011_02_2_1000x1000.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160323/avi___08___av_4011_02_3_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160323/avi___08___av_4011_02_4_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160323/avi___08___av_4011_02_5_1024x1024.jpg',
            'http://watchesofus.vn/cdn/store/3656/ps/20160323/avi___08___av_4011_02_6_2560x744.jpg',
        )
    );

    /**
     * @return string
     * @example 'Đồng hồ JAMES McCabe - 1020'
     */
    public function watchName()
    {
        $format = static::randomElement(static::$watchNameFormat);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Đồng hồ'
     */
    public static function prefix()
    {
        return static::randomElement(static::$prefix);
    }

    /**
     * @example 'JAMES McCabe'
     */
    public function modelName()
    {
        $format = static::randomElement(static::$modelNameFormat);

        return $this->generator->parse($format);
    }

    /**
     * @example '3637'
     */
    public static function sku()
    {
        return (string) static::numerify('####');
    }

    /**
     * @example 'JAMES'
     */
    public function brand()
    {
        return static::randomElement(static::$brand);
    }

    /**
     * @example 'McCabe'
     */
    public function model()
    {
        return static::randomElement(static::$model);
    }

    /**
     * @return string
     * @example 'Đồng hồ JAMES McCabe - 1020'
     */
    public function watchAttribute()
    {
        $format = static::randomElement(static::$watchAttributeFormat);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Quatz'
     */
    public function machine()
    {
        return static::randomElement(static::$machine);
    }

    /**
     * @example 'Sapphire'
     */
    public function glass()
    {
        return static::randomElement(static::$glass);
    }

    /**
     * @example 'Stainless Steel'
     */
    public function material()
    {
        return static::randomElement(static::$material);
    }

    /**
     * @example 'Da cao cấp'
     */
    public function band()
    {
        return static::randomElement(static::$band);
    }

    /**
     */
    public function design()
    {
        return static::randomElement(static::$design);
    }

    /**
     */
    public function feature()
    {
        return static::randomElement(static::$feature);
    }

    /**
     */
    public function frame()
    {
        return static::randomElement(static::$frame);
    }

    public function wShortDescription()
    {
        return static::randomElement(static::$wShortDescription);        
    }

    public function wPicture()
    {
        return static::randomElement(static::$wPicture);
    }

    public function wPictureSet()
    {
        return static::randomElement(static::$wPictureSet);
    }
    
}
