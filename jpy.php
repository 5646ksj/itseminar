<?php
$wr_bank=file("/home/sejin/example/wr_bank/wr_bank_sb.php");
//$kb_bank=file("/home/sejin/example/kb_bank/kb_bank_sb.php");
$sh_bank=file("/home/sejin/example/sh_bank/sh_bank_sb.php");
$nh_bank=file("/home/sejin/example/nh_bank/nh_bank_sb.php");
$ibk_bank=file("/home/sejin/example/ibk_bank/ibk_bank_sb.php");
$st_ch_bank=file("/home/sejin/example/st_ch_bank/st_ch_bank_sb.php");
$citi_bank=file("/home/sejin/example/citi_bank/citi_bank_sb.php");
$shyup_bank=file("/home/sejin/example/shyup_bank/shyup_bank_sb.php");
$dg_bank=file("/home/sejin/example/dg_bank/dg_bank_sb.php");
$jb_bank=file("/home/sejin/example/jb_bank/jb_bank_sb.php");
$kn_bank=file("/home/sejin/example/kn_bank/kn_bank_sb.php");
$jj_bank=file("/home/sejin/example/jj_bank/jj_bank_sb.php");

for($i=0;$i<3;$i++){
	$wr_bankar[$i]=explode(',',$wr_bank[$i]);
	$sh_bankar[$i]=explode(',',$sh_bank[$i]);
	$nh_bankar[$i]=explode(',',$nh_bank[$i]); 
	$ibk_bankar[$i]=explode(',',$ibk_bank[$i]);
	$st_ch_bankar[$i]=explode(',',$st_ch_bank[$i]); 
	$citi_bankar[$i]=explode(',',$citi_bank[$i]);
	$shyup_bankar[$i]=explode(',',$shyup_bank[$i]);
	$dg_bankar[$i]=explode(',',$dg_bank[$i]);
	$jb_bankar[$i]=explode(',',$jb_bank[$i]);
	$kn_bankar[$i]=explode(',',$kn_bank[$i]); 
	$jj_bankar[$i]=explode(',',$jj_bank[$i]);      	
}

for($i=0;$i<3;$i++){
	$wr_find=strpos($wr_bankar[$i][0],"일본");
	$sh_find=strpos($sh_bankar[$i][0],"일본");
	$nh_find=strpos($nh_bankar[$i][0],"일본");
	$ibk_find=strpos($ibk_bankar[$i][0],"일본");
	$st_ch_find=strpos($st_ch_bankar[$i][0],"일본");
	$citi_find=strpos($citi_bankar[$i][0],"일본");
	$shyup_find=strpos($shyup_bankar[$i][0],"일본");
	$dg_find=strpos($dg_bankar[$i][0],"일본");
	$jb_find=strpos($jb_bankar[$i][0],"일본");
	$kn_find=strpos($kn_bankar[$i][0],"일본");
	$jj_find=strpos($jj_bankar[$i][0],"일본");
	
	if($wr_find!==false){
		echo "우리은행", $wr_bankar[$i][1] , $wr_bankar[$i][2];
	}
	if($sh_find!==false){
                echo "신한은행", $sh_bankar[$i][1] , $sh_bankar[$i][2];
        }
	if($nh_find!==false){
                echo"농협은행", $nh_bankar[$i][1] , $nh_bankar[$i][2];
        }
	if($ibk_find!==false){
                echo "기업은행",$ibk_bankar[$i][1] , $ibk_bankar[$i][2];
        }
	if($st_ch_find!==false){
                echo "standard_chartered은행", $st_ch_bankar[$i][1] , $st_ch_bankar[$i][2];
        }
	if($citi_find!==false){
		echo"씨티은행", $citi_bankar[$i][1] , $citi_bankar[$i][2];
        }
	if($shyup_find!==false){
                echo "수협",$shyup_bankar[$i][1] , $shyup_bankar[$i][2];
        }
	if($dg_find!==false){
                echo "대구은행",$dg_bankar[$i][1] , $dg_bankar[$i][2];
        }
	if($jb_find!==false){
                echo "전북은행",$jb_bankar[$i][1] , $jb_bankar[$i][2];
        }
	if($kn_find!==false){
                echo "경남은행",$kn_bankar[$i][1] , $kn_bankar[$i][2];
        }
	if($jj_find!==false){
                echo "제주은행",$jj_bankar[$i][1] , $jj_bankar[$i][2];
        }
}

?>
