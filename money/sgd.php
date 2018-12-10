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
$jj_bank=file("/home/sejin/example/jj_bank/jj_bank_sb.php");

for($i=0;$i<22;$i++){
	$wr_bankar[$i]=explode(',',$wr_bank[$i]);
	$sh_bankar[$i]=explode(',',$sh_bank[$i]);
	$nh_bankar[$i]=explode(',',$nh_bank[$i]); 
	$ibk_bankar[$i]=explode(',',$ibk_bank[$i]);
	$st_ch_bankar[$i]=explode(',',$st_ch_bank[$i]); 
//	$citi_bankar[$i]=explode(',',$citi_bank[$i]);
	$shyup_bankar[$i]=explode(',',$shyup_bank[$i]);
	$dg_bankar[$i]=explode(',',$dg_bank[$i]);
	$jb_bankar[$i]=explode(',',$jb_bank[$i]);
	$jj_bankar[$i]=explode(',',$jj_bank[$i]);      	
}

for($i=0;$i<22;$i++){
	$wr_find=strpos($wr_bankar[$i][0],"싱가폴");
	$sh_find=strpos($sh_bankar[$i][0],"싱가폴");
	$nh_find=strpos($nh_bankar[$i][0],"싱가폴");
	$ibk_find=strpos($ibk_bankar[$i][0],"싱가폴");
	$st_ch_find=strpos($st_ch_bankar[$i][0],"싱가폴");
//	$citi_find=strpos($citi_bankar[$i][0],"홍콩");
	$shyup_find=strpos($shyup_bankar[$i][0],"싱가폴");
	$dg_find=strpos($dg_bankar[$i][0],"싱가폴");
	$jb_find=strpos($jb_bankar[$i][0],"싱가폴");
	$jj_find=strpos($jj_bankar[$i][0],"싱가폴");
	
	if($wr_find!==false){
		$wr_l=$wr_bankar[$i][1];
		$wr_r=$wr_bankar[$i][2];
	}
	if($sh_find!==false){
                $sh_l=$sh_bankar[$i][1];
                $sh_r=$sh_bankar[$i][2];
        }
	if($nh_find!==false){
                $nh_l=$nh_bankar[$i][1];
                $nh_r=$nh_bankar[$i][2];
        }
	if($ibk_find!==false){
                $ibk_l=$ibk_bankar[$i][1];
                $ibk_r=$ibk_bankar[$i][2];
        }

	if($st_ch_find!==false){
                $st_ch_l=$st_ch_bankar[$i][1];
                $st_ch_r=$st_ch_bankar[$i][2];
        }

//	if($citi_find!==false){
//		$citi_l=$citi_bankar[$i][1];
//              $citi_r=$citi_bankar[$i][2];
//        }

	if($shyup_find!==false){
                $shyup_l=$shyup_bankar[$i][1];
                $shyup_r=$shyup_bankar[$i][2];
        }

	if($dg_find!==false){
                $dg_l=$dg_bankar[$i][1];
                $dg_r=$dg_bankar[$i][2];
        }
	if($jb_find!==false){
                $jb_l=$jb_bankar[$i][1];
                $jb_r=$jb_bankar[$i][2];
        }
	if($jj_find!==false){
                $jj_l=$jj_bankar[$i][1];
                $jj_r=$jj_bankar[$i][2];
        }
}

?>
<html>
        <head>
        </head>

        <body>
                <table>
                           <tr><td></td><td>살때</td><td>팔 때</td><td></td></tr>
      <tr><td>우리은행</td><td><?php echo $wr_l;?> </td><td><?php echo $wr_r;?> </td><td></td></tr>
      <tr><td>신한은행</td><td><?php echo $sh_l;?> </td><td><?php echo $sh_r;?> </td><td></td></tr>
      <tr><td>농협</td><td><?php echo $nh_l;?> </td><td><?php echo $nh_r;?> </td><td></td></tr>
	 <tr><td>st은행</td><td><?php echo $st_ch_l;?> </td><td><?php echo $st_ch_r;?> </td><td></td></tr>
	 <tr><td>수협</td><td><?php echo $shyup_l;?> </td><td><?php echo $shyup_r;?> </td><td></td></tr>
	<tr><td>IBK은행</td><td><?php echo $ibk_l;?> </td><td><?php echo $ibk_r;?> </td><td></td></tr>
      <tr><td>전북은행</td><td><?php echo $jb_l;?> </td><td><?php echo $jb_r;?> </td><td></td></tr>
      <tr><td>제주은행</td><td><?php echo $jj_l;?> </td><td><?php echo $jj_r;?> </td><td></td></tr>
                </table>
