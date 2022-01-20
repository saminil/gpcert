<?php
	include_once('./_common.php');
$g5['title'] = '유라시아 제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<?php 
	/*	
		기본 css(11~15라인)
		기본 css 는 적용하지 않습니다. 
	*/ 
?>
<style>
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:1rem; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}	
    
    table,td p {font-size:0.9em;margin-left:0px;padding-left:20px;}
    td {font-size:96%;padding-left:20px;}
</style>

<?php
	/*
		CSS파일 로드(25~26라인)
		(주)아이지씨인증원에 사용하신다면 적용하지 않아도 됩니다.
		(주)아이지씨인증원가 아닌 다른 곳에 적용하신다면 24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<?php
	/*
		주의사항 
		관리자모드 내용관리등 에디터로 내용을 등록하실 경우, 보안문제로 자바스크립트와 css가 필터될 수 있습니다.
		이럴 경우 공통 css 파일에 아래 style을 별도 추가하고, 내용관리 에디터의 HTML 모드로 태그를 넣으시면 됩니다.(에디터마다 HTML 모드 버튼이 있으니 HTML 모드로 넣어주세요.)
		javascript 를 사용한다면 공통하단 파일 </body> 위에 코드를 복사하여 추가 합니다.	
	*/
?>
<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }
	.business_type3{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type3:after{content:""; display:block; clear:both;}
	.business_type3 .business_info{ width:100%; }
	.business_type3 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type3 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type3 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_EACTRCU_011.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_EACTRCU_012.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_EACTRCU_013.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_EACTRCU_014.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_EACTRCU_015.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(6){background:url('images/product_EACTRCU_016.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type3 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type3 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }

    /* 유라시아 제품 인증 / 의료 시작*/
    .business_type4{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type4:after{content:""; display:block; clear:both;}
	.business_type4 .business_info{ width:100%; }
	.business_type4 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type4 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type4 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type4 .business_info .backImg:nth-child(1){background:url('images/product_uasia_medicaldivices_02.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(2){background:url('images/product_uasia_medicaldivices_03.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(3){background:url('images/product_uasia_medicaldivices_04.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(4){background:url('images/product_uasia_medicaldivices_05.jpg') no-repeat center top; }
    .business_type4 .business_info .backImg:nth-child(5){background:url('images/product_uasia_medicaldivices_06.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type4 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type4 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type4 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }
     /* 유라시아 제품 인증 / 의료 종료*/
    
    /* 유라시아 제품 인증 / 식품 시작*/
    .business_type5{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type5:after{content:""; display:block; clear:both;}
	.business_type5 .business_info{ width:100%; }
	.business_type5 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type5 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type5 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type5 .business_info .backImg:nth-child(1){background:url('images/product_uasia_food_02.jpg') no-repeat center top; }
	.business_type5 .business_info .backImg:nth-child(2){background:url('images/product_uasia_food_01.jpg') no-repeat center top; }
	.business_type5 .business_info .backImg:nth-child(3){background:url('images/product_uasia_food_03.jpg') no-repeat center top; }
	.business_type5 .business_info .backImg:nth-child(4){background:url('images/product_uasia_food_04.jpg') no-repeat center top; }
	.business_type5 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
    
	.business_type5 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type5 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type5 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }
    /* 유라시아 제품 인증 / 식품 종료*/

    /* 유라시아 제품 인증 / 화장품 시작*/
	.business_type6{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type6:after{content:""; display:block; clear:both;}
	.business_type6 .business_info{ width:100%; }
	.business_type6 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type6 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type6 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type6 .business_info .backImg:nth-child(1){background:url('images/product_eurasia_cosmetic00_cosmetic.jpg') no-repeat center top; }
	.business_type6 .business_info .backImg:nth-child(2){background:url('images/product_eurasia_cosmetic02_gostdoc.jpg') no-repeat center top; }
	.business_type6 .business_info .backImg:nth-child(3){background:url('images/product_eurasia_cosmetic04_stateregistrationcertificate.jpg') no-repeat center top; }
	.business_type6 .business_info .backImg:nth-child(4){background:url('images/product_eurasia_cosmetic11_cosmetic.jpg') no-repeat center top; }
    .business_type6 .business_info .backImg:nth-child(5){background:url('images/product_eurasia_cosmetic01_eacdoccertificate.jpg') no-repeat center top; }
    .business_type6 .business_info .backImg:nth-child(6){background:url('images/product_ce-mdd_02.jpg') no-repeat center top; }
	.business_type6 .business_info .backImg:nth-child(7){background:url('images/product_eurasia_cosmetic03_gostvoluntary.jpg') no-repeat center top; }
	.business_type6 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type6 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type6 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type6 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }
    /* 유라시아 제품 인증 / 화장품 종료 */
 
    /* 유라시아 제품 인증 / 의약품 시작 */
    .business_type7{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type7:after{content:""; display:block; clear:both;}
	.business_type7 .business_info{ width:100%; }
	.business_type7 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type7 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type7 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type7 .business_info .backImg:nth-child(1){background:url('images/product_medicine_01.jpg') no-repeat center top; }
	.business_type7 .business_info .backImg:nth-child(2){background:url('images/product_medicine_02.jpg') no-repeat center top; }
	.business_type7 .business_info .backImg:nth-child(3){background:url('images/product_medicine_03.jpg') no-repeat center top; }
	.business_type7 .business_info .backImg:nth-child(4){background:url('images/product_medicine_04.jpg') no-repeat center top; }
    .business_type7 .business_info .backImg:nth-child(5){background:url('images/product_medicine_05.jpg') no-repeat center top; }
    .business_type7 .business_info .backImg:nth-child(6){background:url('images/product_medicine_06.jpg') no-repeat center top; }
    .business_type7 .business_info .backImg:nth-child(7){background:url('images/product_medicine_07.jpg') no-repeat center top; }
    .business_type7 .business_info .backImg:nth-child(8){background:url('images/product_medicine_08.jpg') no-repeat center top; }
    .business_type7 .business_info .backImg:nth-child(9){background:url('images/product_medicine_09.jpg') no-repeat center top; }
    .business_type7 .business_info .backImg:nth-child(10){background:url('images/product_medicine_10.jpg') no-repeat center top; }
	.business_type7 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
    
	.business_type7 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type7 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type7 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }

    /* (주)아이지씨인증원 사업영역 시작  */	
	.partner_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.partner_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.partner_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.partner_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}
	.partner_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.partner_type2 .con_box:after{content:""; display:block; clear:both;}
	.partner_type2 .con_box ul { padding:0; margin:0; }
	.partner_type2 .con_box ul li {float:none; width:100%; list-style:none; margin:10px 0; }
	.partner_type2 .con_box ul li p{display:table; width:100%; }
	.partner_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.partner_type2 .con_box ul li p > em{ width:30px; }
	.partner_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.partner_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}
    /* (주)아이지씨인증원 사업영역 종료  */
    
   /* 텍스트 상자왼쪽 굵은 선과 4각 1px 라인, 배경색이 없는 글 상자 */ 
    .txtBox10bg { border-style: solid; border-width: 1px 1px 1px 8px; padding: 12px; word-break: break-all; }
    /*.txtBox10bg { border-style: solid; border-width: 0 0 0 8px; padding: 12px; word-break: break-all; }*/
    /*.txtBox10bg { border-color: DodgerBlue; background-color:rgba(30, 144, 255, 0.2); } */
    .txtBox10bg { border-color: DodgerBlue; }


	@media screen and (max-width:992px){
		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		.business_type3 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type3 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
	}

	@media screen and (max-width:480px){

		.business_type3 .business_info .backImg {width:100%;}
		.business_type3 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type3 .business_info .backImg .txt_area{ height:auto; padding:15px;}

	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>


<!-- /* 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">

<!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul style="display:inline-block;position:relative;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">EAC 인증</a></li>
			<li><a href="javascript:;">의료기기</a></li>
			<li><a href="javascript:;">식품</a></li>
			<li class="on"><a href="javascript:;">화장품</a></li>
			<li><a href="javascript:;">의약품</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->

<!-----내용구분 선 2개 ------>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:5px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

  <!--+++ 20.05.07 탭컨텐츠 영역 시작 +++-->
  <div class="tab_con">
  
	<article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	  <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">EAC(TRCU)</span> / 유라시아 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
               <p class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">개요</p><br>
               TRCU는 Technical Regulation of Customs Union의 약어로 러시아를 중심으로 한 관세동맹(Customs Union)의 기술규정을 의미합니다.<br><br>
               TRCU는 2010년 러시아, 카자흐스탄, 벨라루스 3개국이 결성한 유라시안 관세동맹 “EACU, Eurasian Customs Union”을 시작으로, 2015년 유라시안 경제연합 “EEU, Eurasian Economic Union”에서 발효 한 통합 인증제도입니다.<br><br>
               현재 유라시안 관세동맹/경제연합은 러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아 총 5개국으로 결성되어있으며, TRCU인증은 유라시안 경제 위원회 결정을 따라 규정된 인증절차를 따릅니다.<br> <br>
               인증서 상에는 EAC 마크가 부착되며 이는 Eurasian Conformity를 뜻합니다.<br>
            </span></h2>
       
            <h1 style="position:relative;text-align:center;margin-top:50px;margin-bottom:100px;">
            <img src="images/product_eactrcu_01.png" alt="EAC 인증 로고">
            </h1>

            <h1 style="position:relative;text-align:center;margin-top:100px;margin-bottom:50px;">
            <img src="images/product_eactrcu_02.png" alt="EAC 인증 로고">
            </h1>
            <br>
            
          <!------------p style="font-weight:bold;font-size:110%;">TRCU EAC 규격</p------------>
           <p class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">TRCU EAC 규격</p><br>
           
           <table border="1" cellpadding="0" cellspacing="0">
              <col width="203">
              <col width="509">
              <col width="178">
              <tr>
                <td width="181" rowspan="2" align="center" bgcolor="#B5ABAB"><strong>기술규정 명칭</strong></td>
                <td width="531" align="center" bgcolor="#B5ABAB"><strong>기술규정    구체적 내용(국문 명)</strong></td>
                <td width="178" rowspan="2" align="center" bgcolor="#B5ABAB"><strong>품목</strong></td>
              </tr>
              <tr>
                <td width="531" align="center" bgcolor="#B5ABAB"><strong>(영문 명)</strong></td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;001/2011</td>
                <td width="531">철도차량 안전 관련 기술규정</td>
                <td rowspan="2" width="178">철도차량</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of railway rolling stock&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;002/2011</td>
                <td width="531">고속열차 안전 관련 기술규정</td>
                <td rowspan="2" width="178">고속열차</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of high-speed railway transport&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;003/2011</td>
                <td width="531">철도교통 인프라 안전 관련 기술규정</td>
                <td rowspan="2" width="178">철도교통 인프라</td>
              </tr>
              <tr>
                <td width="531">&nbsp;&ldquo;On safety of railway transport    infrastructure&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;004/2011</td>
                <td width="531">저전압 장비 안전 관련 기술규정</td>
                <td rowspan="2" width="178">저전압 장비</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of Low-voltage equipment&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;005/2011</td>
                <td width="531">포장재 안전 관련 기술규정</td>
                <td rowspan="2" width="178">포장재</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of packages&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;006/2011</td>
                <td width="531">폭죽 안전 관련 기술규정</td>
                <td rowspan="2" width="178">폭죽</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of pyrotechnic articles&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;007/2011</td>
                <td width="531">유아 및 청소년 용품 안전 관련 기술규정</td>
                <td rowspan="2" width="178">유아 및 청소년 용품</td>
              </tr>
              <tr>
                <td width="531">&nbsp;&ldquo;On safety of products intended for    children and adolescents&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;008/2011</td>
                <td width="531">장난감 안전 관련 기술규정</td>
                <td rowspan="2" width="178">장난감</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of toys&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;009/2011</td>
                <td width="531">향수 및 화장품 안전 관련 기술규정</td>
                <td rowspan="2" width="178">향수 및 화장품</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of perfumes and cosmetics&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;010/2011</td>
                <td width="531">기계 및 설치장비 안전 관련 기술규정</td>
                <td rowspan="2" width="178">기계 및 장비류</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of machinery and equipment&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;011/2011</td>
                <td width="531">승강기 안전 관련 기술규정</td>
                <td rowspan="2" width="178">승강기</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of elevators&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;012/2011</td>
                <td width="531">폭발가능환경 작업을 위한 장비의 안전 관련 기술규정</td>
                <td rowspan="2" width="178">폭발가능대비 보호장비</td>
              </tr>
              <tr>
                <td width="531">&nbsp;&ldquo;On safety of equipment in explosion    hazardous environments&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;013/2011</td>
                <td width="531">연료(휘발유,&nbsp;경유,&nbsp;제트연료)에 대한 기술규정</td>
                <td rowspan="2" width="178">연료(휘발유,&nbsp;경유,&nbsp;제트연료)</td>
              </tr>
              <tr>
                <td width="531">&ldquo;0n requirements to motor and aviation petrol,    diesel and marine, fuel, reactive engines fuel and black oil&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;014/2011</td>
                <td width="531">자동차 도로 안전 기술규정</td>
                <td rowspan="2" width="178">자동차 도로</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of roads&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;015/2011</td>
                <td width="531">곡물 안전성 관련 기술규정</td>
                <td rowspan="2" width="178">곡물</td>
              </tr>
              <tr>
                <td width="531">&nbsp;&ldquo;On safety of grain&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;016/2011</td>
                <td width="531">가스연료 장치 안전 관련 기술규정</td>
                <td rowspan="2" width="178">가스연료 장치</td>
              </tr>
              <tr>
                <td width="531">&nbsp;&ldquo;On safety of apparatuses working on    gaseous fuel&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;017/2011</td>
                <td width="531">경공업 제품 안전 관련 기술규정</td>
                <td rowspan="2" width="178">경공업 제품</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of light industry products&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;018/2011</td>
                <td width="531">차륜 차량 안전 관련 기술규정</td>
                <td rowspan="2" width="178">차륜 차량</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of wheeled vehicles&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;019/2011</td>
                <td width="531">개인보호장비 안전 관련 기술규정</td>
                <td rowspan="2" width="178">개인보호용품</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of personal protection equipment&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;020/2011</td>
                <td width="531">전자제품 전자기 호환성 관련 기술 규정</td>
                <td rowspan="2" width="178">전자제품</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of Electromagnetic compatibility of    technical devices&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;021/2011</td>
                <td width="531">식품 안전 관련 기술규정</td>
                <td rowspan="2" width="178">식품</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of food products&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;022/2011</td>
                <td width="531">식품 라벨링 관련 기술규정</td>
                <td rowspan="2" width="178">식품 라벨링</td>
              </tr>
              <tr>
                <td width="531">&nbsp;&ldquo;On safety of food products in terms of    their marking&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;023/2011</td>
                <td width="531">야채 및 과일음료 기술 규정</td>
                <td rowspan="2" width="178">야채 및 과일음료</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of juice products made of fruit and    vegetables&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;024/2011</td>
                <td width="531">유지제품 기술규정</td>
                <td rowspan="2" width="178">유지제품</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of oil &amp; fat products&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;025/2012</td>
                <td width="531">가구제품 안전 관련 기술규정</td>
                <td rowspan="2" width="178">가구제품</td>
              </tr>
              <tr>
                <td width="531">&nbsp;&ldquo;On safety of furniture&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;026/2012</td>
                <td width="531">소형선박 안전 관련 기술규정</td>
                <td rowspan="2" width="178">소형선박</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of small-size crafts&ldquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;027/2012</td>
                <td width="531">건강 기능성 식품 안전 관련 기술규정</td>
                <td rowspan="2" width="178">건강 기능성 식품</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of certain types of specialized food    products, including food for dietary treatment and protective diet&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;028/2012</td>
                <td width="531">폭발성 물질 및 제품 안전 관련 기술규정</td>
                <td rowspan="2" width="178">폭발성 물질 및 제품</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of explosives and products on their    basis&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;029/2012</td>
                <td width="531">식품 첨가물 안전 규격 관련 기술규정</td>
                <td rowspan="2" width="178">식품 첨가물</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On requirements for food additives, flavoring    agents and processing supplements&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;030/2012</td>
                <td width="531">윤활류 규격 관련 기술규정</td>
                <td rowspan="2" width="178">윤활류</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On requirements for lubricants, oils and    special liquids&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;031/2012</td>
                <td width="531">농·임업용 트랙터 및 트레일러 안전관련 기술규정</td>
                <td rowspan="2" width="178">농·임업용 트랙터 및 트레일러</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of agricultural and forestry    tractors and trailers thereto&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;032/2013</td>
                <td width="531">고압장비 안전 관련 기술규정</td>
                <td rowspan="2" width="178">고압장비</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of pressure equipment&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;033/2013</td>
                <td width="531">우유 및 유제품 안전 관련 기술규정</td>
                <td rowspan="2" width="178">우유 및 유제품</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On the safety of milk and dairy products&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;034/2013</td>
                <td width="531">육류 및 육류제품 안전 관련 기술규정</td>
                <td rowspan="2" width="178">육류 및 육류제품</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of meat and meat products&ldquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТR    CU&nbsp;035/2014</td>
                <td width="531">담배제품 관련 기술규정</td>
                <td rowspan="2" width="178">담배제품</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of tobacco products&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">TR EAEU    036/2016</td>
                <td width="531">가스연료의 관련 조건</td>
                <td rowspan="2" width="178">가스연료</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On requirements for liquified petroleum gases    foe use as fuel&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">TR EAEU    037/2016</td>
                <td width="531">전기 및 전자 장비에서 특정 유해 물질의 사용 제한에 관련 기술규정</td>
                <td rowspan="2" width="178">전기 및 전자 장비</td>
              </tr>
              <tr>
                <td width="531">&ldquo;Restricting usage of hazardous substances in    the electrical goods and radio electronics&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">TR EAEU    038/2016</td>
                <td width="531">놀이기구의 안전 관련 기술규정</td>
                <td rowspan="2" width="178">놀이기구</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of amusement rides&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">TR EAEU    039/2016</td>
                <td width="531">광물비료 관련 기술규정</td>
                <td rowspan="2" width="178">광물비료</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On requirements for mineral fertilizers&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">ТР    EAEC&nbsp;040/2016</td>
                <td width="531">어류 및 어류제품 안전 관련 기술규정</td>
                <td rowspan="2" width="178">어류 및 어류제품</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of fish and fish products&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">TR EAEU    041/2017<br>
                  (2021년 6월 2일 시행될 예정)</td>
                <td width="531">화학물질 안전 관련 기술규정</td>
                <td rowspan="2" width="178">화학물질</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of chemical    products&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">TR EAEU    042/2017</td>
                <td width="531">어린이 놀이터 안전 관련 기술규정</td>
                <td rowspan="2" width="178">어린이 놀이터</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of chemical products&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">TR EAEU    043/2017</td>
                <td width="531">화재지연제 및 소화시스템 관련 기술규정</td>
                <td rowspan="2" width="178">화재지연제 및 소화시스템</td>
              </tr>
              <tr>
                <td width="531">&rdquo; On safety of equipment for children&rsquo;s    playgrounds&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">TR EAEU    044/2017</td>
                <td width="531">생수 및 천연 미네랄 워터의 안전 관련 기술규정</td>
                <td rowspan="2" width="178">생수 및 천연 미네랄 워터</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of packaged drinking water,    including natural mineral water&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">TR EAEU    045/2017</td>
                <td width="531">미네랄 오일 안전 관련 기수규정</td>
                <td rowspan="2" width="178">미네랄 오일</td>
              </tr>
              <tr>
                <td width="531">&ldquo;On safety of oil prepared for transportation    and(or) use&rdquo;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">TR EAEU 046/2018<br>
                  (2022년 1월 1일 시행될 예정)</td>
                <td width="531">천연가스 안전 관련 기술규정</td>
                <td rowspan="2" width="178">천연가스</td>
              </tr>
              <tr>
                <td width="531">&quot;On safety of    natural flammable gas, prepared for transportation or usage&quot;</td>
              </tr>
              <tr>
                <td rowspan="2" width="181">TR EAEU 047/2018</td>
                <td width="531">알코올    음료의 안전 관련 기술규정</td>
                <td rowspan="2" width="178">알코올    음료
                  <div>
                    <div></div>
                  </div></td>
              </tr>
              <tr>
                <td>&quot;On safety of alcohol products&rdquo;</td>
              </tr>
            </table>     
	  </div>

	<div class="business_type3">
		<div class="business_info">
			<div class="backImg"><br><br>
				<div class="txt_area">
					<p class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">TRCU EAC 인증 유형</p><br>
					<ul style="display:block;text-align:justify;">
					TRCU 인증서는 세부사항에 따라 적합성인증 (CoC, Certification of Conformity)과 적합성선언 (DoC, Declaration of Conformity) 두 가지로 분류됩니다.<br><br>
                    <span style="font-weight:bold;">&#8280;TRCU CoC</span><br>
                    압력 용기류, 수공구류, 크레인, 승강기, 일부 기계류, 시험장비, 전기전자제품 등의 제품군이 해당되며, 샘플시험 또는 공장심사가 요구됩니다.<br><br>    
                    <span style="font-weight:bold;">&#8280;TRCU DoC</span><br>
                    비교적 위험성이 작은 일반 제품에 해당되며 일부 제품은 서류심사만으로 인증서 발급이 가능합니다.
                    CoC의 경우 지정시험소를 통한 제품 시험을 원칙으로 하고 있으나 다수의 인증기관에서 추가 시험 없이 CB Safety 성적서 등을 인정하여 인증서를 발행하고 있습니다.<br><br>
						<div style="position:relative;text-align:center;">
                          <span style="float:left;margin-left:27%;">
                           <img src="images/product_eactrcu_03.png" alt="EAC 인증 로고"><br>
                           EAC CoC
                           </span>
                           <span style="float:right;margin-right:27%;">
                           <img src="images/product_eactrcu_04.png" alt="EAC 인증 로고"><br>
                           EAC DoC
                           </span>
                        </div>
					</ul>
				</div>
			</div>

			<div class="backImg"><br><br>
				<div class="txt_area">
					<p class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">TRCU EAC 인증 유효기간</p><br>
					<ul style="display:block;text-align:justify;">
					    &#8280; 단일 선적에 대한 인증 (One-Shipment: Single Delivery Certification): 주로 플랜트 등 단발성(1회성)으로 수출하는 물품인 경우와 제 3자나 다른 일반적인 소비자에게 재판매가 되지 않는 경우에 해당하며 수입자와의 계약서에 표기된 계약이행 기간까지 유효합니다.<br><br>
                        &#8280; 연속 생산 (Serial Production Certification): 계속적인 수출이 예상되는 경우에 유리하며 한 번의 인증을 통해 최대 5년까지 유효한 인증서를 받을 수 있습니다.<br><br>
					</ul>
				</div>
			</div>
			
			<div class="backImg"><br><br>
				<div class="txt_area">
					<p class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">TRCU EAC 인증 절차</p><br>
					<ul style="display:block;text-align:justify;">
                      1. 인증기관에 신청서 및 제품 관련 서류 제출<br><br>
                      2. 서류 검토<br><br>
                      3. 적용되는 인증서 유형 확인<br><br>
                      4. 샘플 시험 및 공장심사 여부 확인<br><br>
                      5. 견적서 발행 및 계약<br><br>
                      6. 샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행<br><br>
                      7. 공장심사 필요 시, 심사 진행<br><br>
                      8. 인증서 초안 발행 및 고객 확인<br><br>
                      9. 인증서 발행<br><br>
					</ul>
				</div>
			</div>
			
			<div class="backImg"><br><br>
				<div class="txt_area">
					<p class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">TRCU EAC 제출 서류</p><br>
					<ul style="display:block;text-align:justify;">
					제조업체가 제출해야할 서류는 다음과 같습니다. (이에 국한되지 않으며 필요에 따라 추가될 수 있습니다.)<br><br>
                      &#8280; 신청서<br>
                      &#8280; HS Code<br>
                      &#8280; 제품 설명서 (러시아어 또는 수출국 언어)<br>
                      &#8280; 기 보유 시험 성적서<br>
                      &#8280; 기 보유 인증서<br>
                      &#8280; 도면 (해당 시)<br>
                      &#8280; 기술문서 (해당 시)<br>
					</ul>
				</div>
			</div>
			
			<div class="backImg"><br><br>
				<div class="txt_area">
					<p class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">유라시아 인증 신청자</p><br>
					<span style="display:block;font-weight:bold;text-align:left;">Rosakkreditasiya 대장(Register)</span><br>
                    <p style="text-align:left;">TRCU인증, GOST R인증은 Rosakkreditasiya 웹사이트에 등록됩니다.<br>
                    <a href="https://www.fsa.gov.ru/">Rosakkreditasiya 웹사이트 바로가기  (https://www.fsa.gov.ru/) &#9756; 클릭</a></p>
					<ul style="display:block;text-align:justify;">
					- TRCU인증, GOST R인증 등을 신청할 경우 러시아 또는 기타 관세동맹 국가에서 위치한 업체만 신청자가 될 수 있습니다. 해당 업체는 법적실체 또는 개인사업자여야 하며 일반인은 인증의 신청자가 될 수 없습니다.<br>
                    - IGC는 유라시아 지역 내에 신청자 역할을 할 수 있는 사업자가 없는 고객을 위해 Eurasia Representative 서비스를 제공하고 있습니다.
					</ul>
				</div>
			</div>
			
			<div class="backImg" style="display:block;margin-bottom:-35%;"><br><br>
				<div class="txt_area">
					<p class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">왜 중요한가?</p><br>
					<ul style="display:block;text-align:justify;">
						유라시아 지역으로 상품을 수출하고자 하는 기업은 해당 기술규정에 따른 적합성 준수를 증명하는 인증을 받아야 하며 제품, 포장 또는 첨부 문서에 적합성 마크를 표시해야 해당 국가로 수출이 가능합니다.
					</ul>
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">IGC인증원의 역량</p><br>
					<ul style="display:block;text-align:justify;">
						IGC인증기관은 RUS-TEST PACIFIC인증기관과 협력하여 고객과 이해관계자들에게 경쟁력 있는 최고의 가치를 제공하여, 지속적 동반 성장을 통해 세계적인 인증기관으로 거듭나고 있습니다.<br><br>
                        IGC는 다음을 준수합니다.<br><br>
                         &#8280; 법적 요구사항 준수<br><br>
                         &#8280; 팀워크 및 조직원간의 연대<br><br>
                         &#8280; 성실성과 공정성<br><br>
                         &#8280; 사회적 및 환경적 책임<br><br> 
                         &#8280; 인증 및 등록 서비스 제공 업체로서의 지식과 학습을 통한 지속적인 발전과 개선활동<br><br>
					</ul>
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>
  <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	                                    &#10057; &#10057; &#10057;
  <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
				<li style="float:none;"><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
				<li style="float:none;"><p><em><strong>02</strong></em><span>제품 인증(유럽, 유라시아, 미주, 중국, 동남아시아)</span></p></li>
				<li style="float:none;"><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
				<li style="float:none;"><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
                <li style="float:none;"><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
			</ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
  </article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block")  종료+++++-->

  <article>  <!--+++++ 컨텐츠 02 유라시아 제품인증 / 의료기기  시작+++++-->
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">의료기기</span> / 유라시아 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;font-size:0.9em;">
           러시아에 의료기기를 등록시키기 위해선 비록 CE 혹은 FDA등의 승인을 위하여 시험 등이 이루어 졌더라도 강제적인 요구 사항에 의하여 별도의 시험 등이 이루어 져야 하는 시간과 비용이 많이 소요됩니다. 러시아는 EU 또는 미국과 인증과 관련한 협약을 매지 않았기 때문에 EU의 CE 인증 또는 미국 FDA승인 등과 같은 국제적으로 인정된 인증서를 인정하지 않습니다.<br><br>
           2002년 이후로 러시아 정부는 시험에 대한 부분을 제품안전 보장 등의 다른 형태인 생산현장 심사, 품질시스템 확인 및 시판 이후의 지속적 관리로 변경을 시작하였습니다. 하지만 그러한 시도는 성공을 거두지 못하였고 따라서 2013년 1월 1일부터 이러한 절차는 보다 강력하면서 현실적인 형태로 운영되게 되었습니다.<br><br>
           <h1><img src="images/product_uasia_medicaldivices_01.jpg" alt="유라시아 의료기기 제품 인증"></h1>
           건강 및 사회 발전 서비스를 제공하는 러시아 연방 보건 감독청인 Roszdravnadzor가 발행하는 공식 문서인 의료기기등록 인증서가 관련 의료기기에 대한 사전 평가를 통과하였기에 생산, 수입, 판매 및 러시아 내에서의 사용에 적합함을 승인하는 것입니다. 러시아에서 생산이 되었든 아니면 해외에서 러시아로 수입이 되었든 모든 의료기기는 등록이 되어야 합니다. <br><br>
           등록 인증서에는 제조업체, 유통업자 또는 법정 대리인의 명칭이 포함됩니다. 암약 등록을 하고자 하는 의료기기가 다른 생산자가 제조 한 모듈/블록으로 구성되어 있지만 상표가 부착된 제품이 아닌 경우 각 모듈/블록은 개별적으로 등록하여야 합니다. 정부 법령 Jan. 17, 2002 N 19에 등재되어 있는 의료기기에 대하여 등록인증서가 있을 경우 생산 기업에게 부가세를 징수하지 않습니다.
            </span></h2>
	</div>

	<div class="business_type4">
		<div class="business_info">
			<div class="backImg"><br><br>
				<div class="txt_area">
					<p class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">의료기기 Class 분류</p><br>
					<ul style="display:block;text-align:justify;">
						러시아에서 운영중인 의료기기에 대한 명명 및 등급은 Order N4H “About Conformation of Nomenclature Classification of Medical Devices”에 정리되어 있으며 체외진단 장비는 포함되지 않습니다. 체외진단 장비는 별도의 등급 규정에 따릅니다.<br><br>
                          &#10023; Class 1 – 낮은 위험<br><br>
                          &#10023; Class 2a – 중간 위험<br><br>
                          &#10023; Class 2b – 높은 위험<br><br>
                          &#10023; Class 3 – 최상위 위험<br><br>
					</ul>
				</div>
			</div>

			<div class="backImg"><br><br>
				<div class="txt_area">
					<p class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">의료기기 등록 진행 시험 종류</p><br>
					<ul style="display:block;text-align:justify;">
					    의료기기 등록에 따른 시험은 5월 06자의 2011 N 352법형에 따라 등록된 시험소에서만 진행이 가능하고, 임상 시험에 관해서는 이 기능을 수행할 수 있는 기관 목록이 Roszdravnadzor 웹 사이트에 게시되어 있습니다.<br><br>
                         &#10023; 독성시험<br><br>
                         &#10023; 기능시험<br><br>
                         &#10023; 전자파검사<br><br>
                         &#10023; 임상시험<br><br>
					</ul>
				</div>
			</div>
					
		    <div class="backImg"><br><br>
				<div class="txt_area">			
                        <p class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">의료기기 등록 유효기간</p><br>
                    <ul style="display:block;text-align:justify;">
					    <span style="display:block;text-align:left;font-weight:bold;"> </span>
					    <br>
					    <span style="display:block;text-align:left;">영구 (인증서에 등록된 해당제품이 단종될 때까지 유효합니다)</span>
					</ul>
				</div>
			</div>
			
			<div class="backImg"><br><br>
				<div class="txt_area">
					<p class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">의료기기 등록  절차</p><br>
					<ul style="display:block;text-align:justify;">
				      1. 기업의 대리인은 Rosdravnadzor가 러시아로 샘플을 보내는 것에 동의하는 허가 신청을 해야 하며, 이 권한은 6 개월 동안 유효합니다. 또한 대리인은 신청 제품에 대한 설명, 시험소와의 계약서, 변호사 또는 제조업체와의 계약서 등을 제공하여야 합니다.<br><br>
                      2. 대리인은 샘플이 세관을 통과할 수 있도록 수속을 하여야 합니다. 또한 대표자는 샘플 외에도 계약서, 세관 공무원에게 제출할 문서 및 송장을 제공하여야 합니다.<br><br>
                      3. 인정을 받은 실험소에서 독성시험, 기술시험 및 전기제품의 경우 전자파 시험을 실시합니다.<br><br>
                      4. (3단계와 동시 진행) 기업은 등록에 필요한 기술문서 전체를 준비하여야 합니다.<br><br>
                      5. 의료 기기의 등급을 확정하고, 러시아에 등록된 유사 의료기기가 없는 경우 첫 번째 단계로 품질 평가, 효율성 및 안전성 시험이 실시되고, 그 이후 두 곳의 다른 의료기관에서 임상평가가 실시되어 두 번째 단계의 품질 평가, 효율성 및 안전성 평가가 수행됩니다. <br><br>
                      6. 기업은 전체 기술문서를 Rospotrebnadzor에 제출합니다. 의료기기등록을 마친 후, 등록증을 근거로 GOST-R 인증서와 품목에 따른 위생인증서 및 제품의 특성에 따라 계측기 인증서를 확보하여야 합니다.<br><br>
					</ul>
				</div>
			</div>
			
			<div class="backImg"><br><br>
				<div class="txt_area">
					<p class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">의료기기 등록 제출 서류</p><br>
					<ul style="display:block;text-align:justify;">
                        &#8759; 등록 및 인증 절차 진행에 따른 제조자의 위임장 (공증 요망)<br><br>
                        &#8759; 본국의 회사 등록 증빙 자료 (예로서 상공회의소 자료, 내면 FDA 등록에 따른 증빙 자료 혹은 회사 등록 인증서, 사업 허가증)들은 공증이 되어 제출하여야 합니다.<br><br>
                        &#8759; 의료기기 적용 가능한 국내 혹은 국제 기관 발행의 ISO 9001 혹은 ISO 13485 인증서 <br><br>
                        &#8759; 93/42/EEC의 요구 사항에 따른 적합성 인증서, 적합성 선언서, 자유판매 증명서, FDA 인증 증빙 자료, 자국 혹은 기타 국에 대한 의료기기 인증 증빙 자료. (공증하여 제출하여야 함)<br><br>
                        &#8759; 안전을 입증하는 시험 성적서 (IEC 60601-1, IEC 60601-1-2, ISO 10993 등) – 정확한 성적서는 시험소에서의 기술검사시 업무를 간략히 하는데 도움을 줄 수 있습니다.<br><br>
                        &#8759; 독성안전 / 생체적합성에 대한 안전성 시험 성적서<br> <br>
                        &#8759; 기술 및 독성 시험 진행을 위한 셈플 제공<br><br>
                        &#8759; 의료기기 신규 등록 신청서 혹은 갱신 등록 신청서. 신청서는 반드시 신청자 (러시아에서 등록을 수행할 권한이 있는 법인) 레터 헤드를 사용하여야 합니다. 신청은 해당 의료기기 혹은 장비에 포함되는 모든 구성품 및 부품에 대한 설명을 포함하여야 합니다. 신청은 러시아어로 제출하여야 합니다.<br><br>
                        &#8759; 신청 업무를 수행할 법적 대리인 선임에 대한 위임장을 제출합니다. 제조 회사는 등록 권한이 있는 법인 (법인 책임자에게 주소 지정)에게 위임장을 발급해 주어야 하며 제조업체의 원산지 국가에서 공증을 받아야합니다. 또한 러시아어로 번역되어야 하며 자국 소재의 러시아 영사관에서 공증을 받아야 합니다. 위임장은 제조업체가 신청자가 의료 기기/장비의 등록을 수행하고 상담 및 전문 작업을 수행한다는 계약에 서명하고 등록 인증서를 받도록 위임해야 한다고 명시해야 합니다.<br><br>
                        &#8718; 등록 프로세스에는 GMP (Good Manufacturing Practices) 심사가 필요하지 않습니다. 하지만 이러한 심사를 도입할 법안은 가까운 시일 내에 시행될 예정입니다.<br><br>
                        &#8718; 일반적으로 등록 비용은 필요한 테스트 범위에 따라 달라집니다.<br>
					</ul>
				</div>
			</div>

			<div class="backImg" style="display:block;margin-top:-45%;"><br>
				<div class="txt_area">
					<p class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">의료기기 등록 확인</p><br>
					<ul style="display:block;text-align:justify;">
                      러시아어 버전의 Rospotrebnadzor 웹 사이트에서 의료 기기의 등록 상태를 확인할 수 있습니다. <br><br>
                      <a  style="font-weight:bold;color:#0066ff;" href="http://roszdravnadzor.ru/registration/mi/login"> &#9758; Rospotrebnadzor 웹 사이트 바로가기 &#9756;
                      <br>
                      웹사이트 주소 http://roszdravnadzor.ru/registration/mi/login</a><br><br>
                      
                      Class 1 및 2a의 의료기기의 경우 유사한 제품일 경우 (동일한 등급, 동일한 방법으로 적용, 동일한 효율) 두 제품이 동등하거나 기술 테스트, 안전을 기반으로 등록됩니다.<br><br>

                      Class 2b, 3, 1 및 2a를 포함한 다른 모든 제품 (이미 등록을 마친 유사제품이 존재하지 않을 경우) 들은 효과 및 안전성을 확인하는 기술 테스트, 안전성 평가, 임상 및 의료 테스트를 기반으로 등록됩니다.<br>
					</ul>

					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
            <ul>
	         <li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
	         <li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 임상평가, 의료기기등록[유라시아, 중국, 미국, 태국, 대만])</span></p></li>
	         <li><p><em><strong>03</strong></em><span>심사자격 인증</span></p></li>
	         <li><p><em><strong>04</strong></em><span>전문인력 양성 교육</span></p></li>
	        </ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
 </article><!--+++++ 컨텐츠 02 유라시아 제품인증 / 의료기기  종료+++++-->
  
  
  <article>  <!--+++++ 컨텐츠 03 유라시아 제품인증 / 식품  시작+++++-->
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">식품</span> / 유라시아 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;font-size:0.9em;">
            유라시아 지역으로 식품을 수출하고자 하는 경우 해당 기술규정에 따른 적합성 준수를 증명하는 인증을 받아야 하며 제품, 포장 또는 첨부 문서에 적합성 마크를 표시해야 해당 국가로 수출이 가능합니다. <br><br>
            경제연합/관세 동맹에 가입된 국가 (러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아)로 수출할 경우 Technical Regulation of Customs Union (TRCU) 규정에 따른 EAC 인증 또는 GOST 인증을 받아야 하며 우즈베키스탄 등 기타 유라시아 국가로 수출할 경우에는 국가별 인증을 받아야 합니다.<br><br>
            식품에 대한 인증은 EAC, GOST 및 State Registration Certificate으로 구분됩니다.
            </span></h2>
	</div>

	<div class="business_type5">
		<div class="business_info">
            <!---------/// 유라시아 제품인증 EAC 시작 /// ----------------->		    
			<div class="backImg">
				<div class="txt_area">
					<h1 class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">1. 유라시아 제품인증 (<span style="color:#ff3333;">EAC</span>)</h1>
					<ul style="display:block;text-align:justify;">
						TRCU는 Technical Regulation of Customs Union의 약어로 러시아를 중심으로 한 관세동맹(Customs Union)의 기술규정을 의미합니다.<br><br>
                        TRCU는 2010년 러시아, 카자흐스탄, 벨라루스 3개국이 결성한 유라시안 관세동맹 “EACU, Eurasian Customs Union”을 시작으로, 2015년 유라시안 경제연합 “EEU, Eurasian Economic Union”에서 발효 한 통합 인증제도 입니다.<br><br>
                        현재 유라시안 관세동맹/경제연합은 러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아 총 5개국으로 결성되어 있으며, TRCU인증은 유라시안 경제 위원회 결정을 따라 규정된 인증절차를 따릅니다. <br><br>
                        인증서 상에는 EAC 마크가 부착되며 이는 Eurasian Conformity를 뜻합니다.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">1) TRCU EAC 적용 품목 (식품)</p>
					<ul style="display:block;text-align:justify;">
                      - TR СU 015/2011 On safety of grain 곡물<br>
                      - TR CU 021/2011 On safety of food product 식품<br>
                      - TR СU 022/2011 On food products in terms of its marking 식품 라벨링<br>
                      - TR CU 023/2011 On juice production of vegetables and fruits 야채 및 과일음료<br>
                      - TR CU 024/2011 On oil and fat products 지방 및 유제품<br>
                      - TR CU 027/2012 On safety of certain types of specialized food products, including foods for dietary treatment and 
                      dietary preventive nutrition 다이어트 식품을 포함한 특정 유형 식품<br>
                      - TR CU 029/2012 Requirements for the safety of food additives, flavorings and technological aids 식품첨가물, 향료<br>
                      - TR CU 033/2013 On safety of milk and dairy products 우유 및 유제품<br>
                      - TR CU 034/2013 On safety of meat and meat products 육류 및 육류제품<br>
                      - TR CU 040/2016 On safety of fish and fish products 어류 및 어류제품<br>
                      - TR CU 044/2017 On the safety of packaged drinking water, including natural mineral water 생수<br>
                      - TR CU 047/2018 On safety of alcohol products 주류
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">2) EAC 인증서 유형</p>
					<ul style="display:block;text-align:justify;">
						- DoC (Declaration of Conformity): 비교적 위험성이 작은 제품군이 해당하며, 일부 제품은 서류심사 만으로 인증서 발급 가능합니다. 식품은 EAC DoC에 해당합니다.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">3) EAC 인증 정보</p>
					<ul style="display:block;text-align:justify;">
                       -제출서류: 신청서, 제품 매뉴얼, HS Code, 도면, 기술문서, 기 보유 시험성적서, 기 보유 인증서 <br>
                        &nbsp; (제출서류는 러시아어로 작성되어야 함)<br>
                       -샘플시험: 제품에 따라 샘플 제출 및 시험 여부가 결정됩니다. <br>
                       -공장심사: 없음<br>
                       -소요기간: 2주 (샘플발송 및 샘플시험기간 제외)<br>
                       -인증서 유효기간: 최대 5년 (Serial Production Certification)
					</ul>
					<hr style="border-top: 4px solide #3399cc;display:block;margin-bottom:4px;margin-top:100px;width:100%;">
					                                 <span style="color:#</span>">   &#10057; &#10057; &#10057; </span>
					<hr style="border-top: 4px solide #3399cc;display:block;margin-bottom:50px;margin-top:4px;width:100%;">
				</div>
			</div>

            <!---------/// 유라시아 제품인증 GOST 시작 /// ----------------->
			<div class="backImg" style="display:block;margin-top:-45%;">
				<div class="txt_area">
					<h1 class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">2.유라시아 제품인증 (<span style="color:#ff3333;">GOST</span>)</h1>
					<ul style="display:block;text-align:justify;">
					    GOST는 Euro-Asian Council for Standardization, Metrology and Certification (EASC)에서 규정한 국가기술표준규격으로 러시아어로 연방 규격을 뜻하는 GOsudarstvennyy STandart의 약어입니다.<br><br>
                        현재 국가별 발행되는 GOST 인증서와 발행하는 인증기관의 주체가 다른 만큼, 국가별 GOST 인증서는 각각 다른 인증서이며 러시아는 GOST-R, 카자흐스탄은 GOST-K 등으로 구분 지어 불리고 있습니다.<br><br>
                        관세동맹국가 간 발효된 통합 인증제도인 EAC의 도입 이후 해당국가 내에서 GOST인증 비중은 예전에 비하여 크게 줄었습니다. 하지만 아직 관세동맹국간에 협의가 이루지지 않은 강제인증 품목들에 한해서는 여전히 수입통관 시 GOST 인증이 요구됩니다.<br><br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg" style="display:block;margin-top:-45%;">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">1) GOST 적용 품목 (식품)</p>
					<ul style="display:block;text-align:justify;">
                      육류, 어류, 패류, 채소/과일류, 곡물류, 유자류, 주류/음료 등 유라시안 관세동맹국가간 발효된 통합 인증제도의 도입 후, 러시아 내 GOST 인증 비중은 예전에 비하여 크게 줄어들었지만, 아직 동맹국 간 협의가 이루지지 않은 강제인증 품목은 GOST 인증을 받아야 합니다.<br>
                      또한 EAC 인증을 받은 기업이 고객 홍보, 신뢰 확보 등을 이유로 추가적으로 자발적 GOST 인증서를 신청하기도 합니다.
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg" style="display:block;margin-top:-45%;">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">2) GOST 인증서 유형</p>
					<ul style="display:block;text-align:justify;">
                      &#10020; GOST DoC (Declaration of Conformity)<br>
                      &#10020; GOST Voluntary (자발적 GOST)<br>
                        &nbsp; GOST Voluntary는 의무적으로 GOST 인증을 받아야 하는 제품은 아니지만 제품이 적용 규정과 지침에 따라 만들어 졌음을 증명하는 인증서로, 주로 EAC 인증을 받는 기업이 홍보, 신뢰 확보 등을 이유로 GOST Voluntary를 추가적으로 신청하여 받고 있습니다. GOST Voluntary 인증서의 추가적인 확보는 귀사의 관리 능력을 보다 명확히 보여주는 기대 효과를 가져와 수출 증대 효과를 확보해 줄 것입니다.
                        <br><br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg" style="display:block;margin-top:-45%;">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">3) GOST인증 정보</p>
					<ul style="display:block;text-align:justify;">
                      &#10020; 제출서류: 신청서, 제품 매뉴얼, HS Code, 도면, 기술문서, 기 보유 시험성적서, 기 보유 인증서 <br>
                                &nbsp; &nbsp; (제출서류는 러시아어로 작성되어야 함)<br>
                      &#10020; 샘플시험: 제품에 따라 샘플 제출 및 시험 여부가 결정됨<br>
                      &#10020; 공장심사: 없음<br>
                      &#10020; 소요기간: 2주 (샘플발송 및 샘플시험기간 제외)<br>
                      &#10020; 인증서 유효기간: 3년 (Serial Production Certification)<br>
                    <br><br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg" style="display:block;margin-top:-45%;">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">4) 인증 진행 절차</p>
					<ul style="display:block;text-align:justify;">
                      TRCU EAC, GOST 및 State Registration Certificate 인증 절차<br><br>
                      &nbsp; &nbsp; 1. 인증기관에 신청서 및 제품 관련 서류 제출<br><br>
                      &nbsp; &nbsp; 2. 서류 검토<br><br>
                      &nbsp; &nbsp; 3. 적용되는 인증서 유형 확인<br><br>
                      &nbsp; &nbsp; 4. 샘플 시험 및 공장심사 여부 확인<br><br>
                      &nbsp; &nbsp; 5. 견적서 발행 및 계약<br><br>
                      &nbsp; &nbsp; 6. 샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행<br><br>
                      &nbsp; &nbsp; 7. 공장심사 필요 시, 심사 진행<br><br>
                      &nbsp; &nbsp; 8. 인증서 초안 발행 및 고객 확인<br><br>
                      &nbsp; &nbsp; 9. 인증서 발행<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<!---------/// 유라시아 국가위생등록 시작 /// ----------------->
			<div class="backImg" style="display:block;margin-top:-45%;">
				<div class="txt_area">
					<h1 class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">3. 국가위생등록 (<span style="color:#ff3333;">State Registration Certificate</span>)</h1>
					<ul style="display:block;text-align:justify;">
					   기존 국가별로 발행되던 위생등록증이 관세동맹국에 의해 2010년 채택된 Decision of CU commission No.299에 의거하여 하나로 통합되었습니다.<br>
                       하나의 인증서로 유라시아 관세동맹 5개국 (러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아)에서 모두 사용 가능합니다.
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg" style="display:block;margin-top:-45%;">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">1) 국가위생등록 적용 제품(식품)</p>
					<ul style="display:block;text-align:justify;">
                      &#10022; 미네랄 워터, 생수, 청량 음료, 주류 – 저 알코올 및 토닉 음료 포함<br>
                      &#10022; 이유식, 임산부 및 모유 수유 여성을 위한 음식, 식이 제품, 운동 선수를 위한 음식, 생물학적 활성 식품 첨가물, 유기농 제품, 보충제를 포함한 특수 식품<br>
                      &#10022; 식품 첨가제 (식물 추출물, 아로마 등)<br>
                      &#10022; 유전자 변형 (형질 전환) 유기체를 사용하여 생산된 식품<br>
                      &#10022; 식수 공급용 물 사용을 위한 재료, 기기, 장비 및 기타 기술 제품<br>
                      &#10022; 식품 접촉용 제품 (수저류, 식기류, 제조 장비 제외)<br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg" style="display:block;margin-top:-45%;">
				<div class="txt_area">
					<p class="tit" style="text-align:left;">2) 국가위생등록 인증 정보</p>
					<ul style="display:block;text-align:justify;">
                        &#10022; 제출서류: 신청서, 제품 매뉴얼, MSDS, 제품 및 라벨 사본(사진), 기 보유 시험성적서, 기 보유 인증서 (제출서류는 러시아어로 작성되어야 함)<br>
                        &#10022; 샘플시험: 제품에 따라 샘플 제출 및 시험 여부가 결정됨<br>
                        &#10022; 공장심사: 제품에 따라 공장심사가 요구될 수 있으며, 견적을 통해 심사 M/D와 심사 비용이 결정됨<br>
                        &#10022; 소요기간: 4~6주 (샘플발송 및 샘플시험기간 제외)<br>
                        &#10022; 인증서 유효기간: 5년 <br>
                        &#10022; 인증비용: 제품별로 상이하므로 정확한 견적을 위해서는 상담이 필요함<br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg" style="display:block;margin-top:-45%;">
				<div class="txt_area">
					<h1 class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">4. IGC인증원의 역량</h1>
					<ul style="display:block;text-align:justify;">
                       IGC는 여러 강점을 통해 고객에게 경쟁력 있고 만족스러운 서비스를 제공합니다.<br><br>
                       &nbsp; &nbsp; ⁙ 다양한 분야의 인증 사업을 통해 확보한 지식과 기술력을 바탕으로 한 경쟁력 있는 서비스 제공<br><br>
                       &nbsp; &nbsp; ⁙ 경쟁력 있는 인증 비용<br><br>
                       &nbsp; &nbsp; ⁙ 신속한 인증 서비스 진행을 통한 최소한의 기간 소요<br><br>
                       &nbsp; &nbsp; ⁙ 유라시아 이외 분야의 각종 시스템 및 제품 인증에 대하여 One Stop Service 제공<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
			<br>
			<span style="font-weight:bold;font-size:120%;"></span>
				<li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 22000, FSSC 22000, FDA FSMA, Global HACCP)</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품 인증 (Vegan 인증, HALAL 인증, 유라시아 인증, 위생등록, FDA 등록/승인)</span></p></li>
				<li><p><em><strong>03</strong></em><span>FDA (시험, FSMA 인증, 등록/승인) </span></p></li>
				<li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
				<li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
			</ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
  </article><!--+++++ 컨텐츠 03 유라시아 제품인증 / 식품  종료+++++-->
  

  <article style="display:block;">  <!--+++++ 컨텐츠 04 유라시아 제품인증 / 화장품  시작+++++-->
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;"> 화장품</span>/유라시아 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
             유라시아 지역으로 화장품을 수출하고자 하는 기업은 해당 기술규정에 따른 적합성 준수를 증명하는 인증을 받아야 하며 제품, 포장 또는 첨부 문서에 적합성 마크를 표시해야 해당 국가로 수출이 가능합니다.<br><br>
             유라시아 경제연합에 가입된 국가(러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아)로 수출할 경우 TRCU 규정에 따른 EAC 인증 또는 State Registration Certificate를 받아야 하며, 우즈베키스탄 등의 기타 유라시아 국가로 수출할 경우에는 국가별 GOST 인증을 받아야 합니다.<br><br>
             화장품에 대한 인증은 제품 특성에 따라 EAC, GOST 및 State Registration Certificate로 구분됩니다.<br><br>
            </span></h2>
	</div>

	<div class="business_type6">
		<div class="business_info">
			<div class="backImag">
				<div class="txt_area">
					<h1 class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">1. EAC</h1> <br>
					<ul style="display:block;text-align:justify;">
						TRCU는 2010년 러시아, 카자흐스탄, 벨라루스 3개국이 결성한 유라시아 관세동맹 “EACU, Eurasian Customs Union”을 시작으로, 2015년 유라시아 경제연합 “EAEU, Eurasian Economic Union”에서 발효한 통합 인증 제도입니다.<br><br>
                        &#10049;	TRCU EAC 적용 품목 (화장품)<br>
                            &nbsp; &nbsp; &#8278; TR СU 009/2011 On safety of cosmetics and perfumes 향수 및 화장품<br><br>
                        &#10049;	EAC 인증서 유형 (화장품)<br>
                            &nbsp; &nbsp; &#8278; DoC (Declaration of Conformity): 비교적 위험성이 작은 제품군이 해당하며, 일부 제품은 서류심사만으로 인증서 발급 가능합니다. 화장품은 EAC DoC에 해당합니다.<br>
					</ul>
					<br>
					
					<ul style="display:block;text-align:justify;">
						<span style="font-weight:bold;font-size:120%;"> &#8281; 인증 정보</span><br><br>
                        &#9637; 제출서류 : 신청서, 제품 매뉴얼, HS Code, 기 보유 시험성적서, 기 보유 인증서 등<br> 
                                &nbsp; &nbsp; (제출서류는 러시아어로 작성되어야 함)<br><br>
                        &#9637; 샘플시험 : 제품에 따라 샘플 제출 및 시험 여부가 결정됨. 화장품의 경우 샘플시험 실시<br><br>
                        &#9637; 공장심사 : 없음<br><br>
                        &#9637; 소요기간 : 2주 (샘플발송 및 샘플시험기간 제외)<br><br>
                        &#9637; 인증서 유효기간 : 5년 (Serial Production Certification)<br><br>
                        &#9637; 인증비용 : 제품별로 상이하므로 정확한 견적을 위해서는 상담이 필요함<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                <span style="display:block;text-align:center;"> &#10057; &#10057; &#10057; </span>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImag">
				<div class="txt_area">
					<h1 class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">2. GOST</h1><br>
					<ul style="display:block;text-align:justify;">
					  GOST (ГОСТ)는 Euro-Asian Council for Standardization, Metrology and Certification (EASC)에서 규정한 국가기술표준규격으로 러시아어로 연방 규격을 뜻하는 GOsudarstvennyy STandart의 약어입니다.<br><br>
                      현재 국가별 발행되는 GOST 인증서와 발행하는 인증기관의 주체가 다른 만큼, 국가별 GOST 인증서는 각각 다른 인증서이며 러시아는 GOST-R, 카자흐스탄은GOST-K 등으로 구분지어 불리고 있습니다.<br><br><br>
                      <span style="font-weight:bold;font-size:120%;"> &#8281; GOST 적용 품목 (화장품)</span><br><br>
                      유라시안 관세동맹국가간 발효된 통합 인증제도의 도입 후, GOST 인증 비중은 예전에 비하여 크게 줄어들었지만, 아직 동맹국 간 협의가 이루지지 않은 강제인증 품목은 GOST 인증을 받아야 합니다.<br><br>
                      화장품을 유라시아 경제연합 소속국가(러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아)에 수출하는 경우에는 EAC DoC 또는 State Registration Certificate (국가위생등록)이 필수적이며 GOST 인증은 포함되어 있지 않습니다. 하지만 경제연합 국가 이외의 유라시아 국가(우즈베키스탄 등)으로 수출하는 경우에는 각 국가별 GOST 인증 또는 국가내의 위생등록이 요구됩니다.<br><br>
					</ul>
					
					<ul style="display:block;text-align:justify;">
                     <span style="font-weight:bold;font-size:120%;"> &#8281; GOST 인증서 유형</span><br><br>
					  &#9639;	GOST DoC (Declaration of Conformity)<br><br>
                      &#9639;	GOST Voluntary (자발적 GOST)<br><br>
                      &#9639;		GOST Voluntary는 의무적으로 GOST 인증을 받아야 하는 제품은 아니지만 제품이 적용 규정과 지침에 따라 만들어 졌음을 증명하는 인증서로, EAC 인증을 받는 기업이 GOST Voluntary를 추가적으로 신청하여 받을 경우 기업의 홍보, 신뢰 확보 등의 효과가 있습니다.<br><br>
					</ul>
					
					<ul style="display:block;text-align:justify;">
                     <span style="font-weight:bold;font-size:120%;"> &#8281; 인증 정보</span><br><br>
                      &#9639;	제출서류: 신청서, 제품 매뉴얼, HS Code, 기 보유 시험성적서, 기 보유 인증서<br>
                                &nbsp; &nbsp; (제출서류는 러시아어로 작성되어야 함)<br><br>
                      &#9639;	샘플시험: 제품에 따라 샘플 제출 및 시험 여부가 결정됨. (GOST Voluntary 인증 경우, 화장품의 샘플시험을 실시하지만, EAC 인증 절차에서 실시했기 때문에 추가 시험은 필요하지 않음)<br><br>
                      &#9639;	공장심사: 없음<br><br>
                      &#9639;	소요기간: 2주 (샘플발송 및 샘플시험기간 제외)<br><br>
                      &#9639;	인증서 유효기간: 3년 (Serial Production Certification)<br><br>
                      &#9639;	인증비용: 제품별로 상이하므로 정확한 견적을 위해서는 상담이 필요함<br><br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					            <span style="display:block;text-align:center;"> &#10057; &#10057; &#10057; </span>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImag">
				<div class="txt_area">
					<h1 class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">3. State Registration Certificate (국가위생등록)</h1> <br>
					<ul style="display:block;text-align:justify;">
						기존 국가별로 발행되던 위생등록증이 관세동맹국에 의해 2010년 채택된 Decision of CU commission No.299에 의거하여 하나로 통합되었습니다.<br><br>
                        하나의 인증서로 유라시아 경제연합 국가 (러시아, 카자흐스탄, 벨라루스, 키르기스스탄, 아르메니아)에서 모두 사용 가능합니다.<br><br>
					</ul>
					<ul style="display:block;text-align:justify;">
                     <span style="font-weight:bold;font-size:120%;"> &#8281; State Registration Certificate 대상 제품 (화장품)</span><br><br>
                      성분, 기능, 목적에 따라 특수 화장품으로 분류되는 화장품은 국가위생등록증을 필수로 받아야 합니다.<br><br>
                      &#10017;	태닝을 위한 제품<br>
                      &#10017;	미백 제품<br>
                      &#10017;	타투용 제품<br>
                      &#10017;	인티메이트 케어<br>
                      &#10017;	개인이 유해 인자의 영향으로 부터 피부를 보호하기 위한 용도의 향수나 화장품<br>
                      &#10017;	유아용 화장품 (14세 이하의 어린이를 위한 제품)<br>
                      &#10017;	염색, 탈색 제품<br>
                      &#10017;	파마, 헤어 스트레이트를 위한 제품<br>
                      &#10017;	나노물질을 사용한 향수 및 화장품 (나노물질: 불용성 또는 체내 안정성 물질이며, 내부 또는 외부의 입자 크기가 1~100nm의 범위 내로 특별히 제조된 것)<br>
                      &#10017;	제모 제품<br>
                      &#10017;	필링제 (화학적 필링. 각질 제거제를 사용하여 표피의 표면 세포를 제거하기 위한 제품)<br>
                      &#10017;	불소 함량이 0.15% 이상인 불소 구강 위생 제품 (구강위생용 액상제품은 0.05% 이상)<br>
                      &#10017;	산화 수소가 들어간 치아 미백 제품 또는 과산화수소로 농축된 과산화 아연과 과산화 요소를 함유하며, 과산화 수소를 생성하는 다른 구성품들 (0.1~6.0%)<br><br>
					</ul>
					<ul style="display:block;text-align:justify;">
                    <span style="font-weight:bold;font-size:120%;"> &#8281; State Registration Certificate 인증 정보</span><br><br>
                     &#10017; 제출서류: 신청서, 제품 매뉴얼, MSDS, 제품 및 라벨 사본(사진), 기 보유 시험성적서, 기 보유 인증서 (제출서류는 러시아어로 작성되어야 함)<br><br>
                     &#10017; 샘플시험: 있음<br><br>
                     &#10017; 공장심사: 제품에 따라 공장심사가 요구될 수 있으며, 견적을 통해 심사 M/D와 심사 비용이 결정됨<br><br>
                     &#10017; 소요기간: 4~6주 (샘플발송 및 샘플시험기간 제외)<br><br>
                     &#10017; 인증서 유효기간: 5년<br><br>
                     &#10017; 인증비용: 제품별로 상이하므로 정확한 견적을 위해서는 상담이 필요함<br><br>
					</ul>
					<ul style="display:block;text-align:justify;">
                    <span style="font-weight:bold;font-size:120%;"> &#8281; TRCU EAC, GOST 및 State Registration Certificate 인증 절차</span><br><br>
                     1. 인증기관에 신청서 및 제품 관련 서류 제출<br><br>
                     2. 서류 검토<br><br>
                     3. 적용되는 인증서 유형 확인<br><br>
                     4. 견적서 발행 및 계약<br><br>
                     5. 샘플 발송 후 시험 및 시험 성적서 발행<br><br>
                     6. 인증서 발행<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					         <span style="display:block;text-align:center;"> &#10057; &#10057; &#10057; </span>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImag">
				<div class="txt_area">
					<h1 class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">4. 화장품 시험</h1> <br>
					<ul style="display:block;text-align:justify;">
                      인증 또는 국가위생등록을 위해 제출한 제품 샘플은 유라시아 국가내의 공인된 시험소에서 다음에 대한 시험을 실시합니다.<br><br>
                      &#10017; 물리적, 화학적 분석 시험<br><br>
                      &#10017; 미생물 검출 시험<br><br>
                      &#10017; 독성 시험<br><br>
                      &#10017; 위생 검사<br><br>
                      &#10017; 기타 필요한 시험 및 검사<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                   <span style="display:block;text-align:center;"> &#10057; &#10057; &#10057; </span>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImag">
			    <div class="txt_area">
			        <div class="txt_area">
					<h1 class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">5. 왜 중요한가?</h1> <br>
					<ul style="display:block;text-align:justify;">
                     유라시아 지역으로 상품을 수출하고자 하는 기업은 해당 기술규정에 따른 적합성 준수를 증명하는 인증을 받아야 하며 제품, 포장 또는 첨부 문서에 적합성 마크를 표시해야 해당 국가로 수출이 가능합니다.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                <span style="display:block;text-align:center;"> &#10057; &#10057; &#10057; </span>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			    </div>
			</div>
			
			<div class="backImag">
				<div class="txt_area">
					<h1 class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">6. IGC인증원의 역량</h1> <br>
					<ul style="display:block;text-align:justify;">
                      IGC인증기관은 RUS-TEST PACIFIC인증기관과 협력하여 고객과 이해관계자들에게 경쟁력 있는 최고의 가치를 제공하여, 지속적 동반 성장을 통해 세계적인 인증기관으로 거듭나고 있습니다.<br><br>
                      IGC는 다음을 준수합니다.<br>
                      • 법적 요구사항 준수<br><br>
                      • 팀워크 및 조직원간의 연대<br><br>
                      • 성실성과 공정성<br><br>
                      • 사회적 및 환경적 책임<br><br> 
                      • 인증 및 등록 서비스 제공 업체로서의 지식과 학습을 통한 지속적인 발전과 개선활동<br><br>
					</ul>
                    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					             <span style="display:block;text-align:center;"> &#10057; &#10057; &#10057; </span>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImag">
				<div class="txt_area">
					<h1 class="txtBox10bg" style="font-size:1.5em;font-weight:bold;text-align:left;">7. 왜 IGC인가? </h1><br>
					<ul style="display:block;text-align:justify;">
                     IGC는 여러 강점을 통해 고객에게 경쟁력 있고 만족스러운 서비스를 제공합니다.<br>
                     &#10020;	다양한 분야의 인증 사업을 통해 확보한 지식과 기술력을 바탕으로 한 경쟁력 있는 서비스 제공<br>
                     &#10020;	경쟁력 있는 인증 비용<br>
                     &#10020;	신속한 인증 서비스 진행을 통한 최소한의 기간 소요<br>
                     &#10020;	유라시아 이외 분야의 각종 시스템 및 제품 인증에 대하여 One Stop Service 제공<br>
					</ul>
                    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					     <span style="display:block;text-align:center;"> &#10057; &#10057; &#10057; </span>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>		
		<div class="con_box">
		    <br><br>
			<ul>
				<li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 22716) </span></p></li>
				<li><p><em><strong>02</strong></em><span>제품인증 (Vegan 인증, 유라시아 인증, VCRP, EWG, CPNP)</span></p></li>
				<li><p><em><strong>03</strong></em><span>심사자격 인증</span></p></li>
				<li><p><em><strong>04</strong></em><span>전문인력 양성 교육</span></p></li>
			</ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
  </article><!--+++++ 컨텐츠 04 유라시아 제품인증 / 화장품  종료+++++-->
  
  <article>  <!--+++++ 컨텐츠 05 유라시아 제품인증 / 의약품  시작+++++-->
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">의약품</span> /유라시아 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            러시아 연방법 (의약품 유통법: #61-FZ /2010.04.12)에 의거해 러시아 연방으로 수입되는 모든 의약품 및 의료 물질은 수입 허가를 획득해야 하며 의약품 유통에 대해 연방 국가의 통제를 받게 됩니다. 국가 통제 기관은 러시아 연방 보건 감독국(ROSZDRAVNADZOR) 및 러시아 연방 구성 기관 하의 영토 당국입니다. 국가 감독의 목표는 의약품 유통분야에서 러시아 연방 법률의 요구사항 위반의 예방, 탐지 및 억제하는 것입니다.
            </span></h2>
	</div>

	<div class="business_type7">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">의약품 유통법(#61-FZ) 준수의 필요성</p>
					<ul style="display:block;text-align:justify;">
                      현행법을 따르면, 의약품 유통법을 위반한 경우 러시아 연방 법률에 따라 처벌을 받게 됩니다.<br><br>
                      관련 법들은 다음과 같습니다:<br><br>
                      1.	러시아 연방 정부 결의 제 5.1.4조<br>
                      건강 감시 서비스(No323, 2004/06/30)입니다.<br>
                      국가 감독에는 의약품의 유통, 운송, 조제, 의약품 판매 및 의약품 사용에 대한 요구사항을 갖춘 의약품의 순환 대상 준수 여부 검사 조직 및 수행이 포함됩니다.<br><br>
                      2.	연방법의 규정(#294-F3, 2008/12/26)<br>
                      국가 통제(감독) 및 지방자치단체 구현에 있어 법인 및 개인 기업의 권리 보호에 대한 사항입니다. 국가 감독의 완전성 및 품질 모니터링에는 검사 수행, 신청자의 권리 위반 식별 및 제거, 필수 요구사항의 위반, 위반을 억제하기 위한 조치 적용 및 그러한 위반의 결과 제거, 검토, 결정 및 신청자의 항소에 대한 대응 준비가 포함됩니다.<br><br>
                      따라서 귀사가 러시아로 의약품을 유통하시고자 한다면, 반드시 의약품 유통법 및 기타 관련 법들을 준수해야 합니다.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit">제품 허가 등록</p>
					<ul style="display:block;text-align:justify;">
					    수입 허가 등록을 위해서는 러시아 연방 보건감독국(ROSZDRAVNADZOR)에 제품 등록이 선행되어야 합니다. 제품 등록 시 연방 보건감독국 주관의 등록 심사와 임상 실험이 필요합니다. 등록 심사는 임상 시험 기간을 제외하고 210일 기한 내외로 결정되며, 서류 심사, 생산 공정 심사, 샘플링 형식의 테스트 등이 요구됩니다. <br><br>
                        임상 시험의 경우, 약물 유통 연방법 및 러시아의 기타 규제 법률에 의해 설정된 전임상 시험 및 임상 시험에 대한 요구 사항이 준수되어야 합니다. 의약품 유통법(#61-FZ/2010.04.12) 4조 40항에 따라, 전임상 시험은 생물학적, 미생물학적, 면역학적, 독성학적, 물리적 시험, 기타 과학적 평가방법에 의한 의약품의 안정성 시험 등으로 정의됩니다. 임상 시험의 경우, 의약품의 진단, 치료, 예방 및 약리학적 특성 등에 대한 연구가 포함됩니다. 이는 과학적 방법에 의한 흡수, 할당, 변형 등의 과정에 국한되는 것이 아닌 다른 의약품 및 식품과의 상호작용까지 해당됩니다.<br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">수입 허가 신청</p>
					<ul style="display:block;text-align:justify;">
						연방 보건감독국에 의약품이 등록된 후 수입허가를 신청할 수 있으며, 처음 등록된 모든 의약품 인증은 5년 동안 유효합니다. 그 후 갱신 시 승인받은 의약품의 인증서는 무한으로 유효합니다. <br>
                        또한, 의약품 등록증 발급 외에도 러시아 인증 GOST R에 따른 인증서 (Certificate of Conformity)나 적합성신고서(Declaration of Conformity)의 획득도 필요합니다.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">인증 대상 품목</p>
					<ul style="display:block;text-align:justify;">
                      러시아 연방 정부 법령(#982, 2009.12.01)에 따라 필수적으로 인증서가 필요한 대상 품목은 면역글로불린, 감마글로불린, 혈청, 독소, 의학용 및 수의학용 백신 등이며 적합성 신고서 대상 품목들은 약품, 의약용 화학제품, 조효소, 효소, 아미노산, 비타민, 유기농 제품, 수의학용 혈청 등이 해당됩니다. 
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			
			<div class="backImg" class="backImg" style="width:100%; margin-top:0; float:none; margin-left:0px; padding-top:260px;">
				<div class="txt_area">
					<p class="tit">의약품 인증의 이익 : 유라시아 의약품 인증 확대 전망</p>
					<ul style="display:block;text-align:justify;">
                        의약품 인증을 요구하는 유라시아 국가들이 더욱 증가할 전망입니다. 현재 유라시아경제연합 성원국들은 의료기기의 경우와 마찬가지로 약품시장 공동체 형성을 진행 중입니다. <br><br>
                        &#10022;	2014년 12월 23일 러시아, 벨라루스, 카자흐스탄은 EEC 내 의약품 유통에 관한 공통 규칙과 원칙에 관한 협정 체결<br><br>
                        &#10022;	제78호 의약품등록검사규칙(2016.11.03) 포함 약 26개의 규제 사항 승인 및 적용(적용일: 2017.05~)<br><br>
                        따라서 의약품 인증의 효력 및 적용국가는 확대될 것입니다.<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">EAEU 의약품 유통 규제</p>
					<ul style="display:block;text-align:justify;">
                       2017년 5월 5일 유라시아 경제위원회는 26개 문서로 구성된 EAEU 의약품 유통 규제는 2017년 5월 6일부터 발효됨을 발표했습니다. 초국가적규제는 의약품의 개발, 전임상 및 임상 연구, 품질 관리, 등록, 생산 및 유통에 적용되며 국가적 규제는 전임상 및 임상 시험, 가격 책정, 소매업, 공공 조달, 비용 환급, 광고 등을 포함합니다. <br><br>
                       2020년 12월 31일까지 유예기간이 있기 때문에, 등록 인증서가 필요한 경우 EAEU와 국가별 규제 시스템 중에서 선택해 신청할 수 있습니다. 2018년 12월 31일 이전에 등록을 신청하는 경우 EAEU 제조업체는 EAEU GMP 인증서 대신 국가별 규제 시스템에 따라 제출해야 했습니다. 2020년 12월 31일 이전 규정에 따라 등록된 모든 의약품은 2025년 12월 31일까지 각 시장 별 규정에 따라 재등록하여야 합니다.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit">IGC인증원의 역량</p>
					<ul style="display:block;text-align:justify;">
                      &#10021; 유라시아 지역 인증 서비스 제공 기관인 RUS-TEST와의 협력을 통해, 의약품에 대한 인증 서비스를 제공하고 있습니다. <br><br>
                      &#10021; IGC 심사원은 다년간 쌓아온 기술력 및 전문성을 통해 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br>
                      &#10021; IGC는 유라시아 인증의 신뢰할 수 있는 글로벌 리더로서 의약품은 물론 의료기기, 화장품, 식품, EAC 인증 등에 대한 인증을 제공하고 있습니다. <br><br>
                      &#10021; IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div>
	
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
        <ul>
	       <li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 13485, ISO 15378, ISO 14155)</span></p></li>
	       <li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 임상평가, 의료기기등록[유라시아, 중국, 미국, 태국, 대만])</span></p></li>
	       <li><p><em><strong>03</strong></em><span>심사자격 인증</span></p></li>
	       <li><p><em><strong>04</strong></em><span>전문인력 양성 교육</span></p></li>
	    </ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
  </article><!--+++++ 컨텐츠 05 유라시아 제품인증 / 의약품  종료+++++-->
</div><!--+++ 20.05.07 탭컨텐츠 영역 종료 +++-->
</div> <!--------// div class="content_wrap"  종료  ------------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>