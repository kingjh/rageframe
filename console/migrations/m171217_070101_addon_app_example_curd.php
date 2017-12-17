<?php

use yii\db\Migration;

class m171217_070101_addon_app_example_curd extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%addon_app_example_curd}}', [
            'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT \'主键\'',
            'title' => 'varchar(50) NOT NULL DEFAULT \'\' COMMENT \'标题\'',
            'cate_id' => 'int(10) unsigned NOT NULL COMMENT \'分类id\'',
            'manager_id' => 'int(10) unsigned NOT NULL COMMENT \'会员ID\'',
            'sort' => 'int(255) NULL DEFAULT \'0\' COMMENT \'排序\'',
            'position' => 'int(11) NOT NULL DEFAULT \'0\' COMMENT \'推荐位\'',
            'sex' => 'tinyint(4) NOT NULL DEFAULT \'1\' COMMENT \'性别[1:男;2:女]\'',
            'content' => 'text NOT NULL COMMENT \'内容\'',
            'cover' => 'varchar(100) NOT NULL DEFAULT \'\' COMMENT \'图片\'',
            'covers' => 'varchar(1500) NOT NULL DEFAULT \'\' COMMENT \'图片组\'',
            'attachfile' => 'varchar(100) NOT NULL DEFAULT \'\' COMMENT \'附件\'',
            'keywords' => 'varchar(100) NOT NULL DEFAULT \'\' COMMENT \'关键字\'',
            'description' => 'varchar(255) NOT NULL DEFAULT \'\' COMMENT \'描述\'',
            'price' => 'float(10,2) unsigned NOT NULL DEFAULT \'0\' COMMENT \'价格\'',
            'views' => 'int(10) unsigned NOT NULL COMMENT \'点击\'',
            'stat_time' => 'int(10) NULL DEFAULT \'0\' COMMENT \'开始时间\'',
            'end_time' => 'int(10) NULL DEFAULT \'0\' COMMENT \'结束时间\'',
            'status' => 'tinyint(4) NULL DEFAULT \'1\' COMMENT \'状态[-1:删除;0:禁用;1启用]\'',
            'email' => 'varchar(60) NULL DEFAULT \'\' COMMENT \'邮箱\'',
            'provinces' => 'varchar(10) NULL DEFAULT \'\' COMMENT \'省\'',
            'city' => 'varchar(10) NULL DEFAULT \'\' COMMENT \'市\'',
            'area' => 'varchar(10) NULL DEFAULT \'\' COMMENT \'区\'',
            'ip' => 'varchar(16) NULL DEFAULT \'\' COMMENT \'ip\'',
            'append' => 'int(10) unsigned NOT NULL COMMENT \'创建时间\'',
            'updated' => 'int(10) unsigned NOT NULL COMMENT \'修改时间\'',
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='插件_案例展示表'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%addon_app_example_curd}}',['id'=>'3','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'5','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'6','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'7','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'2','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'8','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'9','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'10','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'11','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'12','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'13','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'14','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'2','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'15','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'16','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'17','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'18','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'2','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'19','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'20','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'21','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'2','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'22','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'23','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'24','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'25','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'26','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'27','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'28','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'29','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'30','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'31','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'32','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        $this->insert('{{%addon_app_example_curd}}',['id'=>'33','title'=>'基本标题','cate_id'=>'0','manager_id'=>'1','sort'=>'1','position'=>'0','sex'=>'1','content'=>'<p>12<br/></p>','cover'=>'/attachment/images/2017/10/16/image_KM37379mb3.jpg','covers'=>'a:2:{i:0;s:50:"/attachment/images/2017/10/16/image_BS6XX2cuRk.jpg";i:1;s:50:"/attachment/images/2017/10/16/image_ck38bxaAmW.jpg";}','attachfile'=>'/attachment/files/2017/10/23/file_aL4xZGd3lg.png','keywords'=>'','description'=>'简单说明','price'=>'0.00','views'=>'0','stat_time'=>'1508213665','end_time'=>'1508213667','status'=>'1','email'=>'','provinces'=>'310000','city'=>'310100','area'=>'310115','ip'=>'127.0.0.1','append'=>'1508138085','updated'=>'1508735774']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%addon_app_example_curd}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

