<?php
header('Content-type:text/html;charset=UTF-8');
session_start();

    // $srcstr = "1234567890qwertyuiopasdfghjklzxcvbnm";    
    // mt_srand();//mt_srand(munber1, munber2) 作用：number1:起始个数 number2:全部个数
    // $strs = "";
    // for ($i = 0; $i < "4"; $i++) {
    //     $strs .= $srcstr[mt_rand(0, 35)];// .= 作用：累积  
    //     //$srcstr[mt_rand(0, 36)] 随机从munber1到number2范围中随机取出1个值
    // }
//随机生成的字符串
    // echo $strs;
 $passcode=$_REQUEST['number'];
 // echo $passcode;
// $_SESSION['passcode']= $strs; 
 // echo $sas;
//验证码图片的宽度
$width  = 50;      
 
//验证码图片的高度
$height = 25;     
 
// //声明需要创建的图层的图片格式
@ header("Content-Type:image/png");

//创建一个图层
$im = imagecreate($width, $height);//imagecreate — 新建一个基于调色板的图像
 
//背景色
$back = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);//imagecolorallocate — 为一幅图像分配颜色
 
//模糊点颜色
$pix  = imagecolorallocate($im, 187, 230, 247);//imagecolorallocate — 为一幅图像分配颜色
 
//字体色
$font = imagecolorallocate($im, 41, 163, 238);//imagecolorallocate — 为一幅图像分配颜色
 
//绘模糊作用的点
$dot_color = imagecolorallocate($im, 124, 213, 121);//设置点颜色
// mt_srand();
$dot_number = "150";//设置点数
for ($i = 0; $i < $dot_number; $i++) {
    imagesetpixel($im, mt_rand(0, $width), mt_rand(0, $height), $dot_color);
    //imagesetpixel() 在 image 图像中用 color 颜色在 x，y 坐标（图像左上角为 0，0）上画一个点。 
    //imagesetpixel ( resource $image , int $x , int $y , int $color )
}
 
//输出字符
imagestring($im, 5, 7, 5, $passcode, $font);
//imagestring ( resource $image , int $font , int $x , int $y , string $s , int $col )
//imagestring() 用 col 颜色将字符串 s 画到 image 所代表的图像的 x，y 坐标处（这是字符串左上角坐标，整幅图像的左上角为 0，0）。如果 font 是 1，2，3，4 或 5，则使用内置字体。 

//输出矩形
imagerectangle($im, 0, 0, $width -1, $height -1, $font);
//imagerectangle ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $col )
//imagerectangle() 用 col 颜色在 image 图像中画一个矩形，其左上角坐标为 x1, y1，右下角坐标为 x2, y2。图像的左上角坐标为 0, 0。 

imagepng($im);
//imagepng — 以 PNG 格式将图像输出到浏览器或文件
 
imagedestroy($im);
//imagedestroy — 销毁一图像
 
?>