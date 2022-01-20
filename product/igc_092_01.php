<?php
	include_once('./_common.php');
$g5['title'] = '미주 제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	/* 그누보드 내용관리등 에디터로 입력할 경우  여기서부터 */
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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_FDA_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_FDA_05.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_FDA_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_FDA_04.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_FDA_05.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type3 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type3 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }

    /* 2번째 컨텐츠, 제품인증, 의료기기 미주 등록 시작 */
	.business_type4{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type4:after{content:""; display:block; clear:both;}
	.business_type4 .business_info{ width:100%; }
	.business_type4 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type4 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type4 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type4 .business_info .backImg:nth-child(1){background:url('images/product_us_medical_01.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(2){background:url('images/product_us_medical_02.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(3){background:url('images/product_us_medical_03.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(4){background:url('images/product_us_medical_04.jpg') no-repeat center top; }
    .business_type4 .business_info .backImg:nth-child(5){background:url('images/product_us_medical_05.jpg') no-repeat center top;}
	.business_type4 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type4 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type4 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type4 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }
    
    /* 3번째 컨텐츠, 제품인증, 의료기기 미주 등록 시작 */
    .business_type5{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type5:after{content:""; display:block; clear:both;}
	.business_type5 .business_info{ width:100%; }
	.business_type5 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type5 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type5 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type5 .business_info .backImg:nth-child(1){background:url('images/product_us_electronic_05.jpg') no-repeat center top; }
	.business_type5 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type5 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type5 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type5 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }

    /* 4번째 컨텐츠, 제품인증, 의약품 미주 등록 시작 */
    .business_type6{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type6:after{content:""; display:block; clear:both;}
	.business_type6 .business_info{ width:100%; }
	.business_type6 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type6 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type6 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type6 .business_info .backImg:nth-child(1){background:url('images/product_usas_medicine01.jpg') no-repeat center top; }
	.business_type6 .business_info .backImg:nth-child(2){background:url('images/product_usas_medicine02.jpg') no-repeat center top; }
	.business_type6 .business_info .backImg:nth-child(3){background:url('images/product_usas_medicine03.jpg') no-repeat center top; }
	.business_type6 .business_info .backImg:nth-child(4){background:url('images/product_usas_medicine04.jpg') no-repeat center top; }
    .business_type6 .business_info .backImg:nth-child(5){background:url('images/product_usas_medicine05.jpg') no-repeat center top;}
	.business_type6 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type6 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type6 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type6 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }
    
    /* 5번째 컨텐츠, 제품인증, 식음료품 미주 등록 시작 */
    .business_type7{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type7:after{content:""; display:block; clear:both;}
	.business_type7 .business_info{ width:100%; }
	.business_type7 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type7 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type7 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type7 .business_info .backImg:nth-child(1){background:url('images/product_usa_food&beverage_01.jpg') no-repeat center top; }
	.business_type7 .business_info .backImg:nth-child(2){background:url('images/product_usa_food&beverage_02.jpg') no-repeat center top; }
	.business_type7 .business_info .backImg:nth-child(3){background:url('images/product_usa_food&beverage_03.jpg') no-repeat center top; }
	.business_type7 .business_info .backImg:nth-child(4){background:url('images/product_usa_food&beverage_04.jpg') no-repeat center top; }
    .business_type7 .business_info .backImg:nth-child(5){background:url('images/product_usa_food&beverage_05.jpg') no-repeat center top;}
	.business_type7 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type7 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type7 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type7 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }
    
    /* 6번째 컨텐츠, 제품인증, 건강보조식품 미주 등록 시작 */
    .business_type8{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type8:after{content:""; display:block; clear:both;}
	.business_type8 .business_info{ width:100%; }
	.business_type8 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type8 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type8 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type8 .business_info .backImg:nth-child(1){background:url('images/product_dietarysupplementinusa_04.jpg') no-repeat center top; }
	.business_type8 .business_info .backImg:nth-child(2){background:url('images/product_dietarysupplementinusa_02.jpg') no-repeat center top; }
	.business_type8 .business_info .backImg:nth-child(3){background:url('images/product_dietarysupplementinusa_03.jpg') no-repeat center top; }
	.business_type8 .business_info .backImg:nth-child(4){background:url('images/product_dietarysupplementinusa_01.jpg') no-repeat center top; }
    .business_type8 .business_info .backImg:nth-child(5){background:url('images/product_dietarysupplementinusa_01.jpg') no-repeat center top;}
	.business_type8 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type8 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type8 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type8 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }
    
    /* 7번째 컨텐츠, 제품인증, 화장품 미주 등록 시작 */
    .business_type9{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type9:after{content:""; display:block; clear:both;}
	.business_type9 .business_info{ width:100%; }
	.business_type9 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type9 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type9 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type9 .business_info .backImg:nth-child(1){background:url('images/product_usa_cosmetic_01.jpg') no-repeat center top; }
	.business_type9 .business_info .backImg:nth-child(2){background:url('images/product_usa_cosmetic_02.jpg') no-repeat center top; }
	.business_type9 .business_info .backImg:nth-child(3){background:url('images/product_usa_cosmetic_03.jpg') no-repeat center top; }
	.business_type9 .business_info .backImg:nth-child(4){background:url('images/product_usa_cosmetic_04.jpg') no-repeat center top; }
    .business_type9 .business_info .backImg:nth-child(5){background:url('images/product_usa_cosmetic_05.jpg') no-repeat center top;}
	.business_type9 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type9 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type9 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type9 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }

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

	@media screen and (max-width:992px){
		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		.business_type3 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type3 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
        
        .business_type4 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type4 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
        
        .business_type5 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type5 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
        
        .business_type6 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type6 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
        
        .business_type7 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type7 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
        
        .business_type8 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type8 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
        
        .business_type9 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type9 .business_info .backImg:nth-child(2n-1){ margin:0 auto;} 
	}

	@media screen and (max-width:480px){

		.business_type3 .business_info .backImg {width:100%;}
		.business_type3 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type3 .business_info .backImg .txt_area{ height:auto; padding:15px;}
        
        .business_type4 .business_info .backImg {width:100%;}
		.business_type4 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type4 .business_info .backImg .txt_area{ height:auto; padding:15px;}
        
        .business_type5 .business_info .backImg {width:100%;}
		.business_type5 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type5 .business_info .backImg .txt_area{ height:auto; padding:15px;}
        
        .business_type6 .business_info .backImg {width:100%;}
		.business_type6 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type6 .business_info .backImg .txt_area{ height:auto; padding:15px;}
        
        .business_type7 .business_info .backImg {width:100%;}
		.business_type7 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type7 .business_info .backImg .txt_area{ height:auto; padding:15px;}
        
        .business_type8 .business_info .backImg {width:100%;}
		.business_type8 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type8 .business_info .backImg .txt_area{ height:auto; padding:15px;}
        
        .business_type9 .business_info .backImg {width:100%;}
		.business_type9 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type9 .business_info .backImg .txt_area{ height:auto; padding:15px;}
        
         .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃  사업영역 설정  */
	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">

    <!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 시작 +++-->
	<div class="tab_menu tab01">
		<ul style="display:inline-block;position:relative;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">FDA</a></li>
			<li><a href="javascript:;">의료기기</a></li>
			<li><a href="javascript:;">전자 및 방사선 장치</a></li>
			<li><a href="javascript:;">의약품</a></li>
			<li><a href="javascript:;">식음료품</a></li>
			<li><a href="javascript:;">건강보조 식품</a></li>
			<li class="on"><a href="javascript:;">화장품</a></li>
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 종료  +++-->

<!-----내용구분 선 2개 ------>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:5px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

  <!--+++ 20.05.01 탭컨텐츠 영역 시작 +++-->
  <div class="tab_con">
  
 <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
 <article>	
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">FDA</span> / 미주 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            미국 연방 식품 의약국 FDA(food and drug administration)는 미국 보건 복지부 (US Department Health and human service) 산하 기관으로 가장 역사 깊고 신뢰할 수 있는 소비자 보호기관의 하나로 한국의 식품의약품 안전처에 해당하는 기관입니다. 외국 기업들이 대미 수출시 FDA의 규정 미숙으로 인한 미 세관의 제품이 억류(압류)되는 경우가 많이 발생하고 있으며, 이 중 식품, 화장품 및 의료기기가 대부분을 차지합니다. 
            </span></h2>
	</div>

	<div class="business_type3">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">FDA 역할</p>
					<ul style="display:block;text-align:justify;">
						FDA의 가장 중요한 역할은 각종 제품의 안전성과 효율적인 생산, 유통, 판매 등을 관리하여 공중위생을 보호하는 것이며, 소비자들이 제품을 사용하는 동안에도 제품의 안전성에 대해 지속적으로 모니터를 하는 것입니다
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit">FDA 조사</p>
					<ul style="display:block;text-align:justify;">
					    FDA의 조사, 분석, 연구 및 규정 준수 여부 감시는 국립의료기기 및 방사능 보호센터, 생물학 및 연구센터, 의약품 평가 및 연구센터, 식품안전 및 영양센터, 수의약품센터에서 관할합니다.
					</ul>
					
					
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit">FDA 시행 규칙 </p>
					<ul style="display:block;text-align:justify;">
						FDA는 분석, 감시, 감정의 3가지의 주요업무를 수행하고 있습니다. 분석 작업은 새로운 제품이 미국시장에 출하되기 전의 통관과정에서 수행할 수 있는 예방조치를 하기 위한 작업이며, 감시업무는 제품의 생산공장과 시설물을 검사하는 작업으로 일선 검사관들에 의해 수행됩니다. 불순물 혼합 또는 허위표시 등의 규정위반에 대해서는 보다 강력한 제재조치를 취할 수 있는 기관입니다.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">FDA 규정 및 기준 </p>
					<ul style="display:block;text-align:justify;">
                      <span style="font-weight:bold;"> &#10020; FDA 식품기준</span> : 식품 및 이들 제품에 대한 세부 규정.<br><br>
                      <span style="font-weight:bold;"> &#10020; 우수제조 지침(CGMP)</span> : 식품 및 제품의 설계, 제조 및 판매에 대한 위생, 검사, 규정 등의 품질관리지침.<br><br>
                      <span style="font-weight:bold;"> &#10020; 신약품 지침(New Drug Regulation)</span> : 신약품의 승인 및 의약품의 지속적인 안전성과 효능에 대한 규정<br><br>
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
				<li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품 인증(의료기기, 의약품, 식품, 화장품)</span></p></li>
				<li><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
				<li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
				<li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
			</ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
  </article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block")  종료+++++-->

   <article><!--+++++ 컨텐츠 02 미주 제품인증 / GOST-R  시작+++++-->
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">의료기기</span> /미주 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            <br><br>
              미국 내에서 사용될 목적의 의료기기의 생산 또는 유통에 관계된 사업체(시설 또는 설비)의 소유자 또는 운영인은 미 식약청에 해당 사업체를 연간 등록해야만 하는데 이러한 절차를 시설등록 절차라 합니다.<br><br>
              미 의회는 미 식약청이 사업체들 로부터 연간 등록금을 징수할 수 있는 권한을 부여하였습니다. 시설 등록을 하고 비용을 지불해야만 하는 상세한 대상은 “등록과 비용 지불의 대상” 문서를 보면 상세히 기재되어 있습니다. 연간 등록비용은 중소기업 및 다른 모든 기업체에 동일한 금액으로 징수됩니다.<br><br>
              대부분의 사업체 등록 대상이 기기의 등록 대상이며 현장에서 제조되고 있는 제품 생산에 어떠한 생산 활동을 담당하고 있는 지의 정보 역시 제공해야만 합니다. 만일 제품이 미국 시장 시판 전 승인이나 시판 전 신고의 대상이라면 해당 사업체의 소유자 또는 운영인은 관련 절차(510(k), PMA, PDP, HDE)를 완료해야 합니다.<br><br>
            </span></h2>
	</div>

	<div class="business_type4">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">적합성 절차</p>
					<ul style="display:block;text-align:justify;">
						&#10054; 의료기기는 기기가 환자에게 내포하는 위험성에 따라 분류됩니다. 제품 및 등급의 종류에 따라, 적합성 평가 절차는 510(k)(premarket notification 및 특정 관리) 및 PMA(Premarket Approval) 등록으로 분류될 것입니다.<br><br>
                        &#10054; FDA는 안전성 및 효과성을 확인하기 위해 필요한 규정을 근거하여 3가지 등급 중 하나를 적용합니다.<br><br>
                        &#10054; 추가적으로, 분류는 위험성에 근거하여 평가됩니다. 즉, 의료기기의 환자 및 사용자에 대한 위험성은 등급을 배정하는데 있어서 중요한 요소입니다. 1등급은 가장 위험성이 적은 기기가 포함되고 3등급은 위험성이 가장 높은 기기가 포함됩니다.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit">분류</p>
					<ul style="display:block;text-align:justify;">
                     &#10049; 1등급 의료기기<br>
                         &nbsp; &nbsp; &#8278;1등급은 오직 일반적인 관리의 대상이 되는 의료기기 등급을 의미합니다.<br>
                         &nbsp; &nbsp; &#8278;제품 종류: 밴드, 수술용 장갑, 수술용 칼, 수술용 붓<br><br>
                     &#10049; 2등급 의료기기<br>
                         &nbsp; &nbsp; &#8278;2등급은 특별한 관리의 대상이거나 결국에 특별 관리 대상이 될 의료기기 등급을 의미<br>
                         &nbsp; &nbsp; &#8278;제품 종류: 콘돔, 콘택트렌즈, 주입 펌프, 뼈 분말, 치아 물질<br><br>
                     &#10049; 3등급은 법 섹션 515에 따라 Premarket Approval이 요구되거나 요구될 것인 의료기기 등급을 의미<br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">출시 전 신청서 승인 지원(PMA)</p>
					<ul style="display:block;text-align:justify;">
                     1.	Premarket Approval은 3등급 의료기기의 안정성과 효과성을 평가하는 FDA의 과학적이고 규제력을 지니는 검토 과정입니다.<br><br>
                     2.	Premarket Approval 신청서 내용<br>
                        &nbsp; &nbsp; &#8281; 시험 방법, 시험 보고서, 안정성 및 효과성에 관한 문서<br>
                        &nbsp; &nbsp; &#8281; 등록에 대해서는 일반적인 규정을 적용하는 것이 의무사항입니다. 또한 GMP심사는 의무적이며 안정성 및 효과성에 대한 심사가 포함되어야 합니다.<br><br>
                     3.	심사의 4가지 단계<br>
                        &nbsp; &nbsp; ① 심사 기간: 90일에서 180일 정도(가끔 1년의 심사기간이 걸리기도 합니다.)<br>
                        &nbsp; &nbsp; ② Premarket Notification 내용:<br>
                        &nbsp; &nbsp; ③ 패널 검토<br>
                        &nbsp; &nbsp; ④ FDA 승인 및 최종 검토에 대한 공지<br><br>
                     4.	다른 요구사항들<br>
                        &nbsp; &nbsp; ① 임상 전 실험실 실험 자료<br>
                        &nbsp; &nbsp; ② 동물 실험 자료<br>
                        &nbsp; &nbsp; ③ 임상실험 자료<br>
                        &nbsp; &nbsp; ④ 우수제조관리기준<br>

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">의료기기 (510k) 등록 방법</p>
					<ul style="display:block;text-align:justify;">
                      &#8281; Premarket Notification - 510(k) / 1,2등급 의료기기에 적용됩니다.<br><br>
                      &#8281; 1등급 의료기기는 몇몇의 1등급 의료기기를 제외하고는 510k입니다. 그리고 2등급 의료기기는 반드시 FDA에게 premarket notification을 제출해야 합니다.<br><br>
                      &#8281; Premarket notification은 시설 등록을 포함합니다.<br><br>
                        &nbsp; &nbsp; ① 심사 기간  <br>
                                &nbsp; &nbsp; &nbsp; &#8278; 90일에서 180일 정도(가끔 1년의 심사기간이 걸리기도 합니다.)<br><br>
                        &nbsp; &nbsp; ② Premarket notification 내용 <br>
                                &nbsp; &nbsp; &nbsp; &#8278; 신청자의 이름, 주소, 제조업체, 멸균 시설 주소, 등록 번호, 신청 날짜를 작성합니다.<br>
                                &nbsp; &nbsp; &nbsp; &#8278; 제품 설명: 제품명, 분류, 외관 및 구조, 사용 목적, 작동 원리, labeling 및 성능 기준<br>
                                &nbsp; &nbsp; &nbsp; &#8278; 평가 보고서, 생체 적합성 및 성능에 대한 평가 보고서<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">의료기기 요구 사항</p>
					<ul style="display:block;text-align:justify;">
                       &#8281; 제조회사의 등록<br><br>
                       &#8281; 제조된 모든 기기 목록<br><br>
                       &#8281; 제조업체에 의해 유지 및 보고된 기록<br><br>
                       &#8281; 라벨링에 대한 규정<br><br>
                       &#8281; 의료기기의 수리 및 환불에 대한 규정<br><br>
                       &#8281; 의료기기 및 시설에 대한 등록<br><br>
					</ul>
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
   </article><!--+++++ 컨텐츠 02 미주 제품인증 / GOST-R  종료+++++-->
   
   <article><!--+++++ 컨텐츠 03 미주 제품인증 / 전자 및 방사선 장치  시작+++++-->
       <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">전자 및 방사선 장치</span> / 미주 제품인증 소개</h1>
		
		<h2 class="sub_txt">
            <span style="display:block;font-weight:bold;text-align:left;">
              FDA 란? <br>
            </span> 
        </h2> 
            <ul style="display:block;text-align:justify;">
               미국에서 의료기기는 "Federal Food, Drug & Cosmetic Act : 연방 식품, 의약품, 화장품법"에 의해 식품, 의약품, 화장품 등과 함께 규제·관리되고 있습니다. 제품에 대한 사전검사 및 승인, 사후검사를 통한 부적합 제품의 제재 그리고 수입품/수출품 검사를 통해 해당 제품의 안전성을 확보합니다. <br>
               만약 FDA에서 요구하는 규정을 준수하지 않을 시 미국 내 유통 및 판매가 불가하며 판매 중인 제품이라도 의료기기 규정에 만족되지 않는 제품은 FDA 사후 관리에 의해 시정조치, 리콜, 제품 압류나 폐기 처분, 형사처분 등이 이루어 질 수 있습니다<br><br>
            </ul>
            
            <h2 class="sub_txt">
            <span style="display:block;font-weight:bold;text-align:left;">
              관련규정 <br>
            </span> 
            </h2>
            <ul style="display:block;text-align:justify;">
               &#8284; FD & C Act (Federal Food, Drug & Cosmetic Act : 연방 식품, 의약품, 화장품법)<br>
               &#8284; 21 CFR (The Code of Federal Regulations : 연방법규집)<br><br>
            </ul>
            
            <h2 class="sub_txt">
            <span style="display:block;font-weight:bold;text-align:left;">
              적용 범위 <br>
            </span> 
            </h2>
            <ul style="display:block;text-align:justify;">
               &#8284; 식품, 화장품, 의약품 및 의료기기(부속품 포함), 동물용 약품, 동물사료, 유아용 유동식, 식품첨가물, 저산성통조림, 산화식품 (단, 육류, 가금류 및 육가공품의 경우 농무부 위생검역국(FSIS, Food Safety & Inspection Service)에서 검사 및 규제 시행<br><br>
               &#8284; 방사선기기(전자제품) : 초음파 치료장비, Sunlamp, X-rays, TV수신기등<br><br><br>
            </ul>
            
            <h2 style="position:relative;margin:0 auto;width:65%;">
              <img src="images/product_us_electronic_02.jpg" alt="전자 제품인증" >
            </h2>
              <br><br>
            <span style="position:relative;display:block;font-weight:bold;font-size:1.6em;color:#336666;text-align:center;">전자 및 방사선 장치</span>
            <hr style="border-top: 1px solid #999999;display:block;margin-bottom:2px;margin-top:10px;width:100%;">   
               <br>
                <span style="font-weight:bold;">용구 및 방사선 건강평가 (CRDH)란?</span> <br><br>
            <ul style="display:block;text-align:justify;">    
                &#8280; 방사선의 다양하고 잠재적인 위험성에 근거하여 역학적인 실험조사를 하여 안전한 방사선 사용을 권장합니다.<br>
                &#8280; 방사선을 방출하는 용구와 제품을 평가할 수 있도록 그 측정 방법과 도구를 개발합니다.<br>
                &#8280; 의료용구의 안전과 효능도에 따라 분류(class I, class II, class III) 하여 판매 전 신고 및 승인을 받도록 합니다.<br>
                &#8280; 방사선을 방출하는 용구에 대한 실무표준을 개발하여 불필요한 방사선 노출 방지를 위해 사용지침을 마련합니다.<br>
                &#8280; 의료용구와 방사선 방출 제품에 대한 정확한 정보와 근거를 소비자나 제조업체에 교육을 시행합니다.<br> <br>
                <br>
             </ul>   

              <h2 style="position:relative;margin:0 auto;width:65%;">
                 <img src="images/product_us_electronic_04.jpg" alt="전자 제품인증" >
              </h2>
              <br><br>
             <span style="font-weight:bold;">시장 접근 번호란?</span><br><br>
             <ul style="display:block;text-align:justify;">     
                   시장 접근 번호는 FDA의 데이터 베이스의 보고서에 대한 유일한 식별 번호입니다. 이 번호는 CDRH 확인 서신에서 제공합니다. 시장 접근 번호는 특정 보고에 대한 의사소통을 촉진시킵니다. 왜냐하면 모든 기관들은 문서가 논의가 되었는지 파악하기 위해 이 시장 접근 번호를 사용할 수 있기 때문입니다. 추가적으로, FDA 수입부서 직원이 제조업자가 최소한으로 수입되는 제품에 대한 요구사항이 기록되었는지 확인하기 위해 시장 접근 번호를 사용합니다.<br><br>
                   시장 접근 번호는 보고서가 CDRH의 서류 보관실로 수신된 것을 의미할 뿐 아니라 제조 업체 및 제품에 대한 정보의 일부는 FDA의 데이터베이스에 입력된 것을 의미합니다.<br><br>
                   확인 서신은 보고서 제출자가 제공 한 주소로 반환됩니다. 오직 한 부의 복사본만이 배송됩니다. 제출자가 제조업자와 다른 경우, 편지는 보고서 제출자에게만 발송됩니다. 제출자는 제조업자에게 복사본을 보낼 수 있습니다.<br><br>
                   제조업자가 제품 보고서, 요약 보고서, 연간 보고서 또는 문의 전 보완 보고서를 보낸 이후, 최소 4주일이 소요됩니다.<br><br> 
                   제조업체가 전자 보고서 형식으로 제출한 경우, CDRH 데이터베이스의 성공적으로 실리자 마자 전자메일 확인 메시지가 발송됩니다. 일반적으로 전자 보고서는 수신으로부터 1일 안에 데이터베이스에 실립니다.<br><br>
                   제조업자는 제품이 미국 상업에 도입되기 이전에 CDRH에 보고서를 제출해야 합니다. 확인 서신과 시장 접근번호는 이러한 보고서가 CDRH에 의해 수신되었다는 증거입니다. 만약 제품이 다른 나라에서 만들어진 후 미국에 수입된 경우, 수입 승인 절차에서는 세관 신고서 FDA 2877양식에 시장 접근번호의 식별을 요구합니다.<br><br> 
                 <h2 style="position:relative;margin:0 auto;width:65%;">
                    <img src="images/product_us_electronic_01.jpg" alt="전자 제품인증" ><br>
                 </h2>
                 <br><br>
                  
                  <span style="font-weight:bold;">전자제품이란?</span><br><br>
                   전자회로를 포함하고 방사선을 방출하는 모든 제품을 전자 제품이라고 합니다. X방사선(엑스레이), 극 초단파, 전파(고주파(RF)), 레이저, 가시 광선, 음파, 초음파 및 자외선은 전자 제품으로부터 방출되는 다양한 방사선 유형의 몇 가지 예시입니다. 진단용 X선 시스템, 레이저 제품, 레이저 광선 쇼 및 전자 레인지는 방사선을 배출하는 다양한 전자 제품 중 몇 가지 예입니다. <br><br>
                   미국(U.S.) 식약청(FDA) 방사선 보건 및 장치 센터는 방사선을 방출하는 전자 제품을 규정하는 것에 대한 책임을 지닙니다. CDRH는 위험하고 불필요한 전자 제품 방사선 노출 로부터 대중을 보호하는 것을 목표로 둡니다. 대부분의 전자 제품의 경우 안정 규제는 CDRH와 주 규제 기관 사이에서 분할됩니다. CDRH는 제품의 제조를 단속하고 주 규제 기관은 제품의 사용을 단속합니다.<br><br>
                   연방법 타이틀 21, J 조항, 파트 1000에서 1050(21 CFR 1,000에서 1,050 사이)는 방사선을 방출하는 전자 제품의 제조업자에 대한 안정 규제를 포함합니다. 제조업자는 위험하고 불필요한 방사선을 방출하지 않는 제품을 생산하는 것에 대한 책임을 지닙니다. 모든 제조업자들은 반드시 타이틀 21 CFR 1000, 1002, 1003, 1004 및 1005에서 요구하는 해당 요구사항에 대하여 부합하여야 합니다. 만약 제조업자의 제품에 의무적인 방사선 안전성 수행 규범이 적용되는 경우, 이러한 규범은 21 CFR 1020에서 1050에서 찾을 수 있습니다. <br><br>
                   위 FDA 홈페이지에서 언급한 바와 같이, 제조업자가 미국 내에 그들의 제품을 판매하고자 하는 경우, FDA는 제조업자에게 그들의 제품이 요구사항에 부합되는지 요청하고 확인할 것입니다.<br><br> 
              </ul>
                <h2 style="display:block;text-align:center;">
        			<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
                </h2>
	    </div>

	    <div class="business_type5">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">IGC인증원의 역량</p>
					<ul style="display:block;text-align:justify;">
                      &#8281; IGC 는 미국 자회사인 Pats corp 를 통해 차별화 된 fda 등록 컨설팅 서비스를 제공합니다. <br><br>
                      &#8281; Pats Corp은 미국 LA에 위치하였으며, 미국 FDA의 규정준수 및 cGMP 의 국내외 업체를 상대로 양질의 지원업무를 하고 있습니다. <br><br>
                      &#8281; IGC는 고객에게 발생할 수 있는 규제적 요구사항 전반에 대하여 문제가 발생하기 이전에 예방하는데 초점을 맞추고, 고객에게 기술 정보와 최고의 규정준수 서비스를 제공하며, 고객이 효율적이고 성공적으로 미국시장으로 진출하여 사업을 확장하는데 최선을 다해 지원하고 있습니다. <br><br>
                      &#8281; 우리는 끊임없이 변화하는FDA 법적 요구사항에 대한 정확하고 확실한 최신의 정보를 제공할 것이며 다음과 같은 항목의 서비스를 제공합니다.<br><br> 
					</ul>
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
               <li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
               <li><p><em><strong>02</strong></em><span>제품 인증 (유럽 CE 인증, 유라시아 인증)</span></p></li>
               <li><p><em><strong>03</strong></em><span>제품 시험 (전기 안전, 기계 안전)</span></p></li>
               <li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
               <li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
           </ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
 </article><!--+++++ 컨텐츠 03 미주 제품인증 / 전자 및 방사선 장치  종료+++++-->   
    
   
 <article><!--+++++ 컨텐츠 04 의약품 미주 제품인증 / GOST-R  시작+++++-->
       <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">의약품</span> / 미주 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            미국 식품의약품청은 식품 및 의약품의 유효성을 확보하고 자국민에게 보다 안전하고 비용부담이 적은 제품의 공급을 추진하며, 국민 건강 유지 및 개선을 위해 의약품과 식품 사용에 필요한 정확하고 과학적 기반을 가진 정보를 얻을 수 있도록 도움으로써 공중보건을 증진시키고 있습니다. 
            </span></h2>
	</div>

	<div class="business_type6">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">신청 유형</p>
					<ul style="display:block;text-align:justify;">
                    임상시험계획 승인신청(Investigational New Drug application, IND)은 판매용 및 연구용(비판매용) 두 가지 범주가 있으며 다음과 같은 세 가지 신청유형이 있습니다. <br><br>
                    <span style="display:block;font-weight:bold;">&#8280; 1. 연구자 임상시험계획 승인신청</span>
                    해당 신청은 임상시험을 개시하고 수행하는 의사가 제출하며, 의사의 직접적인 지시 하에 시험용 의약품이 투여 또는 조제됩니다. 의사는 미허가 의약품 또는 새로운 적응증이나 새로운 환자군에 대한 허가 의약품에 대한 시험을 제안하기 위해 연구용 임상시험계획 승인신청을 제출할 수 있습니다. <br><br>
                    <span style="display:block;font-weight:bold;">&#8280; 2. 응급상황 사용 임상시험계획 승인신청</span>
                    해당 신청은 미국 식품의약품청이 『연방규정집』312.23조 또는 312.34조에 따른 임상시험계획 승인을 위한 시간이 허용되지 않는 상황에서의 시험약의 사용을 허가할 수 있도록 합니다. 또한 기존의 시험 계획 조건을 충족시키기 못하는 환자를 대상으로 또는 허가된 시험 계획서가 존재하지 않을 경우에 사용될 수 있습니다. <br><br>
                    <span style="display:block;font-weight:bold;">&#8280; 3. 치료목적 임상시험계획 승인신청</span>
                    해당 신청은 임상 시험이 수행되고 미국 식품의약품청의 검토가 진행 중일 때, 임상 시험에서 중증 또는 즉각적으로 생명을 위협할 수 있는 증상에 대한 전망을 보이는 시험약을 위해 제출됩니다. 중증질환의 경우 임상 3상 중이거나 또는 모든 임상시험들이 완료된 의약품을 본 항에 따른 치료용 사용이 가능합니다. 즉각적으로 생명을 위협할 수 있는 질환의 경우, 임상 3상 이전이라 하더라도, 통상 임상 2상 이전이 아니라면 해당 의약품을 본 항에 따른 치료용으로 사용 가능할 수 있습니다.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit">등록 방법</p>
					<ul style="display:block;text-align:justify;">
                       &#8281; 제조, 준비, 전파, 합성 또는 미국(예외사항 없음)으로 수입 또는 수입에 제공하는 약의 공정(특히, 재 포장과 재 표기를 포함한다)에 관여하는 외국 국가 내 설립은 반드시 최초의 활동에 참여하는 즉시 등록하고 매년 등록해야 합니다.<br><br>
                       &#8281; 약물 등록 개정안은 21 CFR 207.26에 따라 제출되어야 합니다.<br><br>
                       &#8281; 등록 정보는 현재 암호화된 데이터 필드를 가진 SPL 파일을 사용하여 전자적으로 제출되어야 합니다. 법 510 섹션에 따라 등록 15 실패는 법 섹션 301(p)에서 금지 행위입니다. 또한, 법 502(O) 섹션에 따라, 법 섹션 510에 등록되지 않은 어떤 주의 시설에서 제조된 경우 약물은 무단 상표 표기가 되어있는 것입니다.<br><br>
                       &#8281; 법 510 섹션 및 21 CFR 파트 207은 국내외 약물 시설에서 제출하는데 필요한 등록 정보를 제시합니다. 이러한 규정에서는 모든 등록자들은 반드시 이름과 각 시설의 전체 주소, 설립에 사용되는 모든 상표명, 소유권 또는 사업의 종류(예를 들어, 개별적으로 소유, 공동소유 또는 법인), 소유자의 이름 또는 운영자 이름을(공동소유인 경우, 각 파트너의 이름을 포함하고 법인의 경우, 이름 및 각 임원과 이사의 이름과 직책 및 법인의 주를 포함한다) 제공하여야 합니다.<br><br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">특정 추가정보 사항</p>
					<ul style="display:block;text-align:justify;">
                       모든 등록된 시설에 요구되는 정보와 더불어, 외국 시설을 등록하기 위해서는 특정 추가적인 정보가 반드시 제공되어야 합니다. 예를 들어, 외국인 등록자는 반드시 다음을 제출하여야 합니다.<br><br> 
                       &nbsp; &nbsp; &#8280; 외국인 등록자의 미국 에이전트의 이름, 주소, 전화 번호<br>
                       &nbsp; &nbsp; &#8280; 시설에 알려진 각 수입 업체의 명칭 (이것은 각각의 미국 회사 또는 개개인이 미국으로 수입되는 외래 시설의 약물의 소유자, 수탁인 또는 수취인을 의미합니다. 외국 시설이 직접적으로 약물을 고객이나 환자에게 배송하지 않는 한, 수입업자는 궁극적으로 약을 구매하거나 받거나 투여하는 고객이나 환자를 포함하지 않습니다.)<br>
                       &nbsp; &nbsp; &#8280; 약물을 수입 또는 제공하는 사람의 이름 (이것은 외국 약물 시설은 미국에 자신의 약물의 수입을 용이하게 하기 위해 사용하는 운송자 이외의 각 에이전트, 브로커, 또는 기타 단체의 이름을 의미합니다)<br><br>
                       등록자와 FDA의 대응을 촉진하기 위해 외국인 등록자 가져오기 또는 가져오기 위해 제공하는 수입자의 미국 에이전트와 전화 번호 및 이메일 주소의 전자 메일 주소를 제출해야 합니다.<br><br>
                       등록자는 양식 FDA의 2656.16을 사용하여 추가적인 약물 시설 등록 정보를 제출해야 합니다. 마찬가지로, 전자 제출에 대해서 등록자는 다음의 추가적인 정보를 그들의 SPL 파일에 제출하여야 합니다.<br> 
                       &nbsp; &nbsp; &#8280; 공식적인 계약자 성명, 주소, 전화 번호, 전자우편 주소<br>
                       &nbsp; &nbsp; &#8280; 각 시설에서 수행되는 업무의 종류<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">약물 목록</p>
					<ul style="display:block;text-align:justify;">
                      &#9634; 등록자는 반드시 시설의 초기 등록 시 상업적으로 배포된 모든 약물에 대한 초기 목록 정보를 제출해야 합니다.<br><br>
                      &#9634; 법 301(p) 섹션에 따라 법 510(j)에 의해 요구된 어떠한 목록 정보제공의 실패는 금지된 행위이며, 또한, 법 502(o) 섹션에 요구된 목록을 포함하지 않은 경우, 약물은 무단 상표 표시가 되어 있는 것입니다. <br><br>
                      &#9634; FDA는 개인 상표 유통업자(PLDs)으로부터 약물 시설 등록 정보를 허용하지 않지만, PLDs는 자신의 NDC 라벨 코드를 요청하고 FDA에 약물 목록 정보를 제출할 수 있습니다.<br><br> 
                      &#9634; 약물 목록 정보를 제출함으로써 PLD는 목록 요구사항 준수에 대한 모든 책임을 집니다. <br><br>
                      &#9634; 이런 경우에는, 약물 목록 정보를 제출하거나 업데이트 할 시, 개인 상표 유통업자는 반드시 목록에 있는 약물을 제조하고, 준비하고, 전파하고, 합성하거나 가공(특히, 재 포장과 재 표기를 포함한다)하는 등록된 시설을 증명해야 합니다.<br><br> 
                      &#9634; 개인 상표 유통업자에 의한 등록된 시설의 인증은 용지형식을 사용할 수 있습니다.<br><br> 
                      &#9634; 약물 제품이 PLD에 의해 나열되는 경우, 이것은 또한 목록에 있는 약물을 제조하고, 준비하고, 전파하고, 합성하거나 가공(특히, 재 포장과 재 표기를 포함한다)하는 등록된 시설의 소유자에 의해 나열되면 안 됩니다.<br><br> 
                      &#9634; 등록자(및 해당 경우, 개인 상표 유통업자)는 반드시 그들의 약물 목록 정보를 업데이트하고 약물이 이전에 목록에 표시되지 않았고 상업적인 분배를 위해 도입되었음을 보장해야 합니다.<br><br>
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
                       &#8284; IGC는 다년간의 풍부한 경험으로 의약품 미국 수출을 지원합니다. <br><br>
                       &#8284; 의약품 FDA 등록, 의약품 라벨 검토, IND, NDA, ANDA, NADA, ANADA, OTC 등록, NDC 등록, SPL 작성 및 제조시설 GMP 준수 서비스를 제공합니다. <br><br>
                       &#8284; IGC는 신속하고 결과 지향적이며, 인증 기관을 통한 인증 감사 및 사후 인증 향상/유지 보수 서비스를 제공하여 조직이 GMP 품질 관리를 최대한 활용할 수 있도록 합니다.<br><br>
					</ul>
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
  </article><!--+++++ 컨텐츠 04  의약품 미주 제품인증 /   종료+++++-->  

   
  <article><!--+++++ 컨텐츠 05 미주 제품인증 / 식음료품  시작+++++-->
       <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">식음료품</span> / 미주 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            미국에서는 식품으로 인한 위험으로부터 자국민을 보호하기 위해 FDA에서 법을 통해 미국으로 수출되는 식품을 규제하고 있으며, 정해진 기준해당하는 제품은 FDA 승인 및 등록이 필요합니다.
            </span></h2>
	   </div>

	<div class="business_type7">
		<div class="business_info">
			<div class="backImg" style="width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:500px;">
				<div class="txt_area">
					<p class="tit">FDA의 식음료품 등록이란?</p>
					<ul style="display:block;text-align:justify;">
                      공중 보건 안전 및 생물 테러 대비 및 대응 법 (바이오 테러 법)에 의거하여 미국 식약청 (FDA Food & Drug Administration: www.fda.gov)은 식품 규제 기관으로써 미국 식품 공급 및 기타 식품 관련 비상 사태에 대한 위협 또는 실제 테러 공격으로부터 국민을 보호하기 위한 조치를 취하였습니다.<br><br>
                      &nbsp; &nbsp; &#9632; 의약품，식품，화장품，방사선기 배출 사전검사 및 수입품/수출품 검사<br><br> 
                      &nbsp; &nbsp; &#9632; 미국시장의 수입통관시 대상품목(식품, 의약품등)의 강제승인 및 관리.<br><br>
                      &nbsp; &nbsp; &#9632; 수입통관시 부적격 판정을 받을경우, 미국내 합법적인 마케팅이 금지됨.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit">FDA 등록대상 품목</p>
					<ul style="display:block;text-align:justify;">
                      식품, 화장품, 의약품 및 의료기기(부속품 포함), 동물용 약품, 동물사료, 유아용 유동식, 식품첨가물, 저산성통조림, 산화식품 (단, 육류, 가금류 및 육가공품의 경우 농무부 위생검역국(FSIS, Food Safety & Inspection Service)에서 검사 및 규제 시행.
					</ul>
                
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">식음료품 FDA 수출 흐름도</p>
					<ul style="display:block;text-align:justify;">
                      &#9678; 공장등록(FFR)이 되어 있는지<br>
                      &#9678; 제품 성분 검토는 했는지<br>
                      &#9678; 영양분석 및 Nutrition Facts 라벨 작성 했는지<br>
                      &#9678; 저산성 상온 식품의 경우에 SID / FCE 신고를 했는지<br>
                      &#9678; 수산물의 경우에 GACCP 인증 및 관련 서면이 있는지<br>
                      &#9678; 건강식품의 경우에 미국 건강식품 cGMP의 규정을 준수하고 있는지<br>
                      &#9678; 일반 식품의 경우에 제조자는 인간용식품규정 (PDCHF)를 준수하는지<br>
                      &#9678; 신선농산물의 경우에 농산물 규정 (Produce Safety Rule)을 준수하고 있는지<br>
                      &#9678; 소량의 육류, 계란, 우유 성분 (2%)이 포함 될 경우에 USDA관련 허가가 있는지 (*원칙적으로 한국산 육류는 미국에 수출금지 항목)<br>
                      &#9678; 미국의 수입자는 DUNS#를 가지고 있는지, FSVP (해외공급자 검증제도)를 하고 있는지<br>
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
                    &#9672; IGC는 수년간 쌓아온 기술력 및 전문성을 통해 제품 인증의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br> 
                    &#9672; IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit">관련 제공 서비스</p>
					<ul style="display:block;text-align:justify;">
                        <span style="font-weight:bold;color:#ff9900;">1) 식품 시설 등록</span><br>
                      미국에서 소비되는 식품, 사료를 제조, 가공, 포장, 보관하는 국내 및 해외 시설은 반드시 FDA 식품 시설 등록을 해야하며, 미국 유통을 위해 식품을 제조, 가공, 포장, 보관을 진행하기 전 반드시 FDA 식품 시설 등록을 마쳐야 합니다.<br><br>
                          <span style="font-weight:bold;color:#ff9900;">2) 해외 공급업체 인증 (FSVP)</span><br>
                      해외 공급업체 인증(FSVP)은 제조업체의 식품이 미국의 식품안전기준의 공정과정에 따라 생산된다는 것을 수입업자가 증명하도록 규정한 프로그램입니다. 미국으로 식품 및 음료를 수출하려는 업체는 반드시 미국 대리인을 지정하여 미국 식품 수출을 진행해야 합니다.<br><br>
                          <span style="font-weight:bold;color:#ff9900;">3) FDA 건강 보조식품 라벨링</span><br>
                      의약품이 아닌 건강보조식품은 FDA 사전승인절차를 거칠 필요가 없으나, 한국과 달리 제품 광고에서 치료 효과가 있다는 식의 문구로 라벨이 표기돼 있을 경우 의약품으로도 취급될 수 있어 세심한 주의가 필요합니다. 건강 보조식품 라벨링 규정을 준수할 수 있도록 해드립니다.<br><br>
                          <span style="font-weight:bold;color:#ff9900;">4) 미국 대리인 서비스</span><br>
                      미국에서 식품 또는 음료를 판매하고자 하는 외국 회사는 반드시 미국 대리인을 통해 절차를 진행하여야 합니다. 미국 대리인은 회사와 FDA 사이의 중개자 역할을 합니다. IGC는 풍부한 경험이 있는 미국 대리인 서비스를 제공합니다.<br><br>
                          <span style="font-weight:bold;color:#ff9900;">5) FDA 식품 라벨링 검토</span><br>
                      미국으로 식품 수출시 식품 라벨링을 엄격히 준수해야 합니다. 미국 진출을 고려하고 계신 식품 제조업, 식품수출업 및 유통업에 종사하는 분들은 새로운 규제 및 관련법 개정 내용을 확인하고 식품 라벨링을 준비해야 합니다.<br><br>
                          <span style="font-weight:bold;color:#ff9900;">6) FCE & SID 등록</span><br>
                      제품이 산성 또는 저산성 식품인 경우는 FCE & SID 등록 (식품 공장 등록 & 공정 등록)이 필수입니다. FDA 규정에 따라 산성화 식품과 저산성 식품은 반드시 식품공장 등록 및 공정등록을 사전에 등록을 해야 미국 수출이 가능합니다. IGC는 FCE & SID 등록 (식품 공장 등록 & 공정 등록)을 통해 FDA 규정을 준수하도록 도와드립니다.<br><br>
                          <span style="font-weight:bold;color:#ff9900;">7) FDA 사전 신고</span><br>
                      미국은 식품을 이용한 테러를 예방하기 위해 바이오테러리즘 법(The Bioterrorism Act)을 제정하였습니다. 이에 미국에서 인간과 동물이 섭취하는 식품을 제조/처리, 포장, 보관하는 미국 내/외 시설을 FDA 시설 등록(Facility Registration) 하도록 의무화하였고, FDA 시설 등록하지 않은 식품이 수입된 경우, 시설 등록될 때까지 제품이 입국항에 억류되거나 제 3의 장소로 옮겨질 수 있습니다. FDA가 정의한 사전 신고 대상 수입 식품에 해당되는지 여부를 도와 드리며, FDA 사전 신고 및 시설 등록을 돕습니다.<br><br>
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
			<span style="font-weight:bold;font-size:120%;"></span>
				<li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 22000, FSSC 22000, FDA FSMA, Global HACCP)</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품 인증 (Vegan 인증, HALAL 인증, 유라시아 인증, 위생등록, FDA 등록/승인)</span></p></li>
				<li><p><em><strong>03</strong></em><span>FDA (시험, FSMA 인증, 등록/승인) </span></p></li>
				<li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
				<li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>
  </article><!--+++++ 컨텐츠 05 미주 제품인증 / 식음료품  종료+++++-->  


  <article><!--+++++ 컨텐츠 06 미주 제품인증 / 건강조보식품  시작+++++-->
       <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">건강 보조 식품</span> / 미국 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            의회는 1994년 건강 보조 식품 건강 교육법(DSHEA)에서 ‘건강 보조 식품’이란 용어를 정의하였습니다. 건강 보조 식품이란 사람이 건강한 삶을 유지하는데 있어서 매일 필요한 성분(비타민, 미네랄, co-enzyme, 탄수화물, 지방, 단백질 등)들을 우리가 매일 섭취하는 음식으로 적당량을 섭취하기에는 부족한 영양소를 보충해주는 식품들을 말합니다. 
            </span></h2>
	</div>

	<div class="business_type8">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">FDA(Food and Drug Administration) 승인</p>
					<ul style="display:block;text-align:justify;">
						모든 Dietary Supplement는 식품으로 분류되며 FDA의 관리를 받게 됩니다. 효과나 안전성에 대하여 개발사는 자체적으로 책임이 있지만, 의약품과는 다르게 시판전에 FDA 승인을 받아야 하는 절차는 없습니다. (단, 새로 개발된 원료일 경우는 제외) 모든 Dietary Supplement에는 ‘These statements has not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease’라는 문구가 반드시 표기되어야 하며 어느 특정한 질병의 이름을 사용하는 문구를 선전광고나 제품의 겉포장에 쓰지 못합니다. 또한, FDA라는 단어를 상업적 목적으로 광고에 이용하는 것은 위법이며, FDA는 강력한 제제조치를 취하게 됩니다. <br><br>
                        Dietary Supplement에서의 FDA 승인은 수입 허가 승인으로써 외국에서 수입해 들여오는 식품들은 모두 중금속 검사, 오염물 검사, 세균 검사, 농약 검사 등 소비자들이 먹어서 해로운 물질이 들어있지 않다는 실험결과를 조사하여 안정성을 인정해 식품으로 수입을 허가하는 것입니다. 이 안정성 검사는 FDA가 직접 시행하여 결과를 인정하는 것이 아니며 수입자들이 제출한 서류에 의하여 허가를 승인합니다.<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">우수 제조 관리 기준</p>
					<ul style="display:block;text-align:justify;">
                       미국 주 또는 영토, 콜롬비아 지역이나 푸에르토 리코 연합으로 수입되거나 수입을 제안받은 건강 보조 식품을 생산, 라벨링 및 보유하고 있는 경우, DS CGMP(현재의 건강 보조 식품 우수관리기준)이 적용됩니다. 소매 시설 설립에 창고 또는 소매업자를 위한 기타 저장 시설 및 직접적으로 개인 고객에게 판매할 수 있는 기타 저장 시설은 포함되지 않습니다. <br><br>
                       1)	Labeler인 경우, DS CGMP 규정은 아래와 같습니다.<br>
                           &nbsp; &nbsp; &#9673; 일괄 생산 기록을 수립하기 위해 21 CFR111.255 요구 사항을 충족해야 합니다.<br> 
                           &nbsp; &nbsp; &#9673; 인원, 시설 및 물리적 시설 및 공간, 시설 및 기구, 현상 유지 등의 기타 관련 요구사항을 준수해야 합니다.<br><br>
                       개별 구성요소단계가 이미 완성된 포장 프로세스부터 진행되므로, 21 CFR111.260(e)요구사항에서 사용되는 각 성분의 특징 및 중량 또는 측정을 준수할 필요가 없습니다.<br><br>
                       2)	Distributor인 경우, DS CGMP 규정은 아래와 같습니다.<br>
                           &nbsp; &nbsp; &#9673; 보관 및 분배하는 것에 대한 요구사항을 준수해야 합니다.<br>
                           &nbsp; &nbsp; &#9673; 인재, 물리적 시설 및 공간에 대한 요구사항 등 해당 요구 사항을 준수해야 합니다.<br><br>
                       건강보조 식품 제조를 위한 식이 성분을 가공하는 제조자만 유일한 고객인 경우, DS CGMP의 대상이 아닙니다. 그러나 DS CGMP 규정을 준수함으로써 우수한 관리를 진행하도록 독려할 수 있습니다. 단순한 건강 보조 식품으로써 식이성분을 포장하거나 포장된 식이성분을 라벨표시 하는 회사의 경우, DS CGMP 규정의 대상입니다. 이는 그 회사가 추가공정 없이 단순히 포장이나 라벨링만 하는 건강 보조 식품을 제조하는 제조업체이기 때문입니다.<br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">건강보조식품의 포장 및 라벨링</p>
					<ul style="display:block;text-align:justify;">
                        건강 보조 식품의 품질을 보장하기 위해 관리가 필요한 제조 공정 및 단계에 대한 모든 세부사항, 그리고 건강 보조 식품의 완제품 제조 기록에 명시된 대로 포장 및 라벨링에 표시되어야 합니다. <br><br>
                        &#9678; 건강 보조 식품의 제조에 사용되는 부품의 사양<br>
                        &#9678; 중간 생산에 대한 사양<br>
                        &#9678; 건강 보조 식품의 라벨이나 포장 사양<br>
                        &#9678; 건강 보조 식품 완제품에 대한 제품 사양<br>
                        &#9678; 건강 보조 식품으로서 포장 및 라벨링에 대해 공급자로부터 받은 제품에 대한 사양<br>
                        &#9678; 포장 및 라벨 표시가 완료된 건강 보조 식품에 대한 포장 및 라벨 사양<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg" style="width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:560px;">
				<div class="txt_area">
					<p class="tit">IGC인증원의 역량 </p>
					<ul style="display:block;text-align:justify;">
                      &#8284; IGC는 수년간 쌓아온 기술력 및 전문성을 통해 제품 인증의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br> 
                      &#8284; IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
                      &#8284; IGC는 식품 분야에서의 다양한 인증 관련 서비스를 제공하고 있습니다. <br><br>
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
			<span style="font-weight:bold;font-size:120%;"></span>
				<li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 22000, FSSC 22000, FDA FSMA, Global HACCP)</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품 인증 (Vegan 인증, HALAL 인증, 유라시아 인증, 위생등록, FDA 등록/승인)</span></p></li>
				<li><p><em><strong>03</strong></em><span>FDA (시험, FSMA 인증, 등록/승인) </span></p></li>
				<li><p><em><strong>04</strong></em><span>심사자격 인증</span></p></li>
				<li><p><em><strong>05</strong></em><span>전문인력 양성 교육</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>
   </article><!--+++++ 컨텐츠 06 미주 제품인증 / 건강보조식품  종료+++++-->  
   
   
   <article style="display:block;"><!--+++++ 컨텐츠 07 미주 제품인증 / 화장품  시작+++++-->
       <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">화장품</span> / 미주 제품인증</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            <span style="font-weight:bold;"> &#8284; 미주 화장품 인증 개요</span><br>
            미국 FDA는 미주 내의 소비자 보호를 위해 미주에서 판매되는 화장품을 규제하고 있는데 그 규제가 까다로워 충분한 이해 없이 화장품을 수출할 경우 문제가 발생할 수 있습니다. 이 때문에 미주에 화장품을 수출하는 기업은 관련 내용을 충분히 이해하고 적용한 후에 제품을 수출해야 합니다.<br><br>
            화장품이 의약품으로 구분될 경우 기업은 FDA에 제조업체 등록 후 의약품에 대한 허가절차를 통과하여야 하며, 일반화장품으로 분류될 경우는 FDA 허가가 아닌 자율등록을 통해 제품을 판매할 수 있습니다.<br><br>
            기업은 미국 FDA의 화장품 자율등록 프로그램에 해당 제품과 관련하여 회사정보, 제품, 원료를 등록할 수 있습니다.<br><br>
            이 등록 프로그램은 The Voluntary Cosmetic Registration Program (VCRP)이며 미국에서 상업적으로 유통되는 화장품을 제조, 포장, 유통하는 기업이 FDA에 보고하는 시스템입니다. VCRP은 2 개의 항목으로 나누어져 있으며, 프로그램의 두 항목 또는 한 항목에 참가할 수 있습니다. VCRP 규정은 21 CFR part 710 및 720에서 상세히 확인할 수 있습니다.<br><br>
            </span></h2>
	</div>

	<div class="business_type9">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">VCRP 등록 적용 대상</p>
					<ul style="display:block;text-align:justify;">
						VCRP는 미국에서 소비자에게 판매되는 화장품에만 적용됩니다. 미용실, 스파, 또는 피부 클리닉에서 사용된 제품과 같은 전문가용으로 사용되는 화장품에는 적용되지 않습니다. 또한 호텔의 샘플, 무료 선물 또는 친구에게 주기 위해서 집에서 만드는 화장품 등의 판매 목적 이외의 제품에도 적용되지 않습니다.<br><br>
                        추가로 화장품이 치료 또는 예방의 목적으로도 쓰이는 제품은 화장품인 동시에 의약품으로도 간주되기 때문에 관련 의약품 조항을 적용하여 법적 요구사항을 준수해야 합니다.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit">VCRP 등록의 장점</p>
					<ul style="display:block;text-align:justify;">
                       VCRP은 FDA가 미국시장으로 판매되는 화장품을 규제하는 책임을 수행하도록 지원합니다. 제품 제출 및 시설 등록이 필수 사항은 아니지만 자발적인 제출을 통해 FDA가 화장품 및 성분, 사용 빈도, 제조 및 유통 관련 사업 등에 관해 유용한 정보를 얻을 수 있도록 자료를 제공하게 되며 이는 곧 기업의 수출 활동의 촉진에 도움을 줄 수 있습니다.<br><br>
                       VCRP 데이터베이스의 정보는 화장품 성분 검토 (CIR, Cosmetic Ingredient Review)에도 사용이 되는데 독립적인 업계 지원 전문가 패널 CIR 전문가 패널이 성분 안전성 검토의 일부로 성분 안전성을 평가하기 위해 우선 순위를 정하는 것에 도움을 주기 위해 사용되고 있습니다.<br><br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">VCRP 등록에 관한 주의사항</p>
					<ul style="display:block;text-align:justify;">
                       &#8278; 화장품은 FDA 판매전 승인(Pre-market Approval)이 아닙니다.<br>
                       &#8278; VCRP는 화장품 승인 프로그램 또는 판매촉진 도구가 될 수 없습니다.<br>
                       &#8278; 화장품 등록, 등록번호 부여, 화장품 파일링 또 CPIS 번호부여는 FDA가 회사 및 제품을 승인했다는 의미는 아닙니다.<br>
                       &#8278; VCRP는 수입화장품에 대해 사전신고 제도가 아니며 미국 내 수입회사는 FDA 등록이 요구되지 않습니다.<br>
                       &#8278; VCRP에 등록하는 것은 화장품과 성분이 안전하고, 적합하게 라벨링 표시 관련법 준수를 확인하는 것이 회사의 책임이다 라는 것을 의미합니다.<br>
                       &#8278; 공식적인 승인 인상을 주는 광고나 라벨링의 표현은 화장품을 부정표시제품(misbranded)으로 만들 수 있습니다.<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">등록 방법</p>
					<ul style="display:block;text-align:justify;">
                     <span style="color:#ff00ff;">1. 화장품 제조 및/또는 포장 시설의 등록</span><br>
                     화장품 시설은 화장품이 제조 및/포장되는 장소를 의미하며 사업장 운영만 행해지는 장소는 해당되지 않습니다. 화장품 제조 또는 포장 시설의 소유자 또는 운영자만 각 시설의 위치에 대해 양식을 사용하여 시설을 등록할 수 있으며, 유통업자는 시설을 등록할 수 없습니다. 미국 외에 위치한 회사는 화장품을 미국으로 판매하기 위해 수출한 후에 시설을 자발적으로 등록할 수 있습니다. FDA는 각 시설 위치에 등록 번호를 할당하게 됩니다.<br><br>
                     <span style="color:#ff00ff;">2. 화장품 성분표 (CPIS, Cosmetic Product Ingredient Statement)의 작성</span><br>
                     화장품 제조업체, 포장업체 또는 유통업체는 회사가 미국에서 상업적 유통을 시작한 각 제품에 대한 진술서(Statement)를 제출할 수 있습니다. 각 계통에 대한 별도의 양식을 사용해야 합니다. FDA는 VCRP에 제출된 각 계통에 대해 CPIS 번호를 할당하게 됩니다.<br><br>
                     <span style="color:#ff00ff;">3. 제품 계통의 수정 또는 중단</span><br>
                     CPIS는 작성 양식과 연속 양식으로 수정하거나 중단할 수 있습니다. 브랜드명 또는 성분에 대한 변경은 제품이 상업적 유통에 들어간 후 60일 이내에 제출해야 합니다. CPIS는 상업적 유통의 배포 중단을 알게 된 후 180일 이내에 중단해야 합니다.<br>
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
                      &#8284; IGC는 미국내에 위치한 PATS Corp.와의 협력을 바탕으로 미주 판매 화장품에 대한 등록을 도와드리며 전반적인 가이드라인을 제공합니다.<br><br>
                      &#8284; PATS Corp. (Pan America Technical Service, Corp.)는 미국의 LA에 위치하고 있으며, 미국 FDA의 규정 준수 및 cGMP의 국내외 기업에게 신속하고 경쟁력 있는 지원 서비스를 제공하고 있습니다.<br><br>
					</ul>
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
				<li><p><em><strong>01</strong></em><span>시스템 인증 (ISO 22716) </span></p></li>
				<li><p><em><strong>02</strong></em><span>제품인증 (Vegan 인증, 유라시아 인증, VCRP, EWG, CPNP)</span></p></li>
				<li><p><em><strong>03</strong></em><span>심사자격 인증</span></p></li>
				<li><p><em><strong>04</strong></em><span>전문인력 양성 교육</span></p></li>
			</ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
 </article><!--+++++ 컨텐츠 07 미주 제품인증 / 화장품  종료+++++-->  
 </div><!------div class="tab_con" 종료 --------->		
</div> <!--------// div class="content_wrap"  종료  ------------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>