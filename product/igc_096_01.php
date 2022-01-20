<?php
	include_once('./_common.php');
$g5['title'] = '동남아시아 제품 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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

    <!-------+++++++++ 1. 동남아시아 제품인증 / 태국 의료기기 등록 시작  ++++++++---------------->
	.business_type3{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type3:after{content:""; display:block; clear:both;}
	.business_type3 .business_info{ width:100%; }
	.business_type3 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type3 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type3 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_tailand_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_tailand_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_tailand_05.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_tailand_04.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type3 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type3 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }
    <!-------+++++++++ 1. 동남아시아 제품인증 / 태국 의료기기 등록 종료  ++++++++---------------->

    <!-------+++++++++ 2. 동남아시아 제품인증 / 대만 의료기기 등록 시작  ++++++++---------------->
	.business_type4{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type4:after{content:""; display:block; clear:both;}
	.business_type4 .business_info{ width:100%; }
	.business_type4 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type4 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type4 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type4 .business_info .backImg:nth-child(1){background:url('images/product_Taiwan_01.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(2){background:url('images/product_Taiwan_02.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(3){background:url('images/product_Taiwan_03.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(4){background:url('images/product_Taiwan_04.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type4 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type4 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type4 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }
    <!-------+++++++++ 동남아시아 제품인증 / 대만 의료기기 등록 종료  ++++++++---------------->

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
	}

	@media screen and (max-width:480px){

		.business_type3 .business_info .backImg {width:100%;}
		.business_type3 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type3 .business_info .backImg .txt_area{ height:auto; padding:15px;}
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
			<li><a href="javascript:;">태국 의료기기 등록</a></li>
			<li class="on"><a href="javascript:;">대만 의료기기 등록</a></li>
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 종료  +++-->
	
<!-----내용구분 선 2개 ------>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:5px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">


  <!--+++ 20.05.01 탭컨텐츠 영역 시작 +++-->
  <div class="tab_con">
   
    <article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">태국 의료기기 등록</span> / 동남아시아 제품인증 소개</h1>
		<br><br>
		<h4 style="margin:0 auto;width:25%;">
		<img src="images/product_tailand_00.jpg" alt="태국 의료기기 등록-국기"><br><br>
		<!---------------span style="display:block; text-align:center;">- 태국 의료기기 등록 -</span--------------->
		</h4>
		<br><br>
            <p style="font-size:1.5em;font-weight:600;text-align:center;">인허가 절차</p>
                <br>
            <span>
            태국 내 수입의료기기를 취급하기 위해서는 사업자 등록 및 의료기기 수입 라이센스(Thai FDA) , 취급 의료기기 분류에 따른 인증절차 진행이 요구됩니다. 
            </span>
	</div>

	<div class="business_type3">
		<div class="business_info">
			<div class="backImg" style="width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:300px;"> <br><br>
				<div class="txt_area">
					<p style="font-size:1.5em;font-weight:600;">인허가 절차</p>
					<ul style="display:block;text-align:justify;">
                     의료기기의 적합성 평가는 의료기기 법(The Medical Device Act 2008)에서 규정하고 있으며, 공공보건부 산하의 식약청 (FDA)에서 관할하고 있습니다. 제품 인증과 관련해 태국 식약청은 의료기기를 일반 의료기기(General Medical Device), 신고 의료기기(Notified Medical Device), 면허 의료기기(Licensed Medical Device) 등 세 가지로 분류하고 있으며 모든 의료기기의 등록 유효기간은 5년이며, 5년 경과 시 연장이 요구됩니다.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area"><br><br>
					<p class="tit" style="display:block;text-align:left;">1. 일반 의료기기(General Medical Devices) 인증_Class l</p>
					<ul style="display:block;text-align:justify;">
                       이 카테고리에 해당되는 제품의 생산자, 수입업자, 혹은 유통업자는 별도의 허가를 획득할 필요가 없습니다. 그러나 이들은 제품 생산국가 정부가 발행하는 자유판매증명서(Certificate of Free Sale)를 제출해야 합니다. 예외로 일반의료기기 중에서 인체에 직접 사용되는 다음에 해당되는 의료기기의 경우 ISO 13485 또는 GMP 인증서를 제출하여야 합니다. <br><br>
                          &nbsp; &nbsp; &#10017; 임플란트<br><br>
                          &nbsp; &nbsp; &#10017; 조직(tissue origin)관련 의료기기<br><br>
                          &nbsp; &nbsp; &#10017; 진단 및 치료용 방사선 기구 체외 진단 기구(In Vitro Diagnostic Products)<br><br>
                          &nbsp; &nbsp; &#10017; 의료기기 소독 용품<br><br>
                          &nbsp; &nbsp; &#10017; 치아 충전(tooth filling), 보철 관련기기<br><br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area"><br><br>
					<p class="tit" style="display:block;text-align:left;">2. 신고 의료기기(Notified Medical Devices) 인증_Class ll</p>
					<ul style="display:block;text-align:justify;">
                        이 카테고리에 해당되는 제품의 생산자, 수입자, 혹은 유통업자는 제품 생산 국가 정부가 발행하는 자유판매 증명서(Certificate of Free Sale) 이외에도 신고서(Jor Nor 1)와 함께 제품 기술 문서를 제출해야 하며 이는 다음을 포함해야 합니다.<br><br> 
                        &#10026; 제품기술문서 : 제품 설명서, 사용법, 사양, 라벨, 생산자 및 유통업자명<br> <br>
                         &#10026; 대상 의료기기<br> <br>
                                 &nbsp; &nbsp; &#8278; 재활치료 의료기기<br> 
                                 &nbsp; &nbsp; &#8278; 혈중 알코올 진단 도구<br>
                                 &nbsp; &nbsp; &#8278; 의료용 실리콘<br>
                                 &nbsp; &nbsp; &#8278; 기타 진단 도구<br> 
                                 &nbsp; &nbsp; &#8278; 실리콘 가슴 보형물<br>
                                 &nbsp; &nbsp; &#8278; 안과용 점탄성 물질(Ophthalmic Viscosurgical Devices; OVD)<br>
                                 &nbsp; &nbsp; &#8278; 각성제 테스트기(Metamphetamine screening test in urine)<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area"><br><br>
					<p class="tit" style="display:block;text-align:left;">3. 면허 의료기기(Licensed Medical Device) Class III</p>
					<ul style="display:block;text-align:justify;">
                        이 카테고리에 해당되는 제품의 생산자, 수입자, 혹은 유통업자는 제품의 생산, 수입, 판매에 대한 면허를 획득해야 합니다. 태국 식약청은 면허권자가 제품의 생산과정, 수입, 판매, 부작용에 대한 정보를 제출하도록 요구하고 있으며  또한 태국 식약청에 제품 생산국가 정부가 발행하는 판매증명서(Certificate of Free Sale)와 허가 신청서(Khor Por 1)를 제출해야 합니다.<br><br>
                        이 카테고리에는 다음과 같이 8종류의 의료기기가 있습니다.<br><br>
                        &#8278; HIV 진단 도구<br><br>
                        &#8278; 콘돔<br><br>
                        &#8278; 실험용 장갑<br><br>
                        &#8278; 수술용 장갑<br><br>
                        &#8278; 의료용 혈액 주머니<br><br>
                        &#8278; 콘텍트 렌즈<br><br>
                        &#8278; 1회용 피하 주사기<br><br>
                        &#8278; 1회용 인슐린 주사기<br><br>
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
   </article> <!------++++++++++ article style="display:block"  종료  +++++++++--------------->


   <article style="display:block;">   <!--+++++ 컨텐츠 02 동남아시아 제품인증 / 대만 의료기기 등록  시작+++++-->
       <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">대만 의료기기 등록</span> / 대만 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
              대만에 수출되는 의료기기는 반드시 TFDA (Taiwan Food and Drug Administration)에서 요구하는 등록 요건에 따라 허가를 받아 의료기기 등록을 하여야 합니다. 대만은 2004년 2월부터 대만 내에서 판매되는 의료기기에 대해 의료기기 GMP를 의무적으로 요구하고 있으며, 이 인증은 ISO 13485의 내용을 기본으로 하여 제정되었습니다. <br><br>
              대만의 의료기기 시장은 의료시스템 개발 필요성에 대한 인식 확산에 따라 지속적인 성장을 보이고 있으며, 보건 의료시스템의 선진화, 정부의 의료기기산업지원 등으로 시장의 성장이 더욱더 촉진될 것입니다.<br><br>
            </span></h2>
	    </div>

	   <div class="business_type4">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area"><br><br>
					<p class="tit" style="display:block;text-align:left;">의료기기 정의 및 등급 분류</p>
					<ul  style="display:block;text-align:justify;">
                       대만의 약사법 (Pharmaceuticals Affairs Law)에 따르면, 의료기기는 장비, 기계, 기구와 악세서리, 부속품 등을 포함하고 있으며, 진단, 치료, 치유, 질병 완화, 질병 예방, 또는 신체의 기능이나 구조에 영향을 미칠 수 있는 제품으로 정의되고 있습니다.<br>
                       대만의 의료기기 등급 분류는 기본적으로 미국 FDA의 분류를 따르고 있습니다. 크게 일반 의료기기와 체외진단 의료기기로 나누며, 제품의 기능, 용도, 사용 및 작동 원리에 따라 17개의 카테고리로 분류됩니다. 의료기기의 특성과 위험도에 따라 3개의 등급 (Class I, II, III)으로 분류합니다.<br><br>
                       &#10055; Class I (위험도 낮음)<br>
                           &nbsp; &nbsp; 	생명을 유지하거나 연장하지 않으며 인체 훼손 방지에 있어 상당히 중요한 용도로 사용하지 않고, 질병과 부상에 대한 위험 가능성을 가지지 않은 의료기기<br><br>
                       &#10055; Class II (위험도 중간)<br>
                           &nbsp; &nbsp; 	생명 유지나 연장에 사용할 것으로 인정되는 의료기기<br><br>
                       &#10055; Class III (위험도 높음)<br>
                           &nbsp; &nbsp; 	생명을 유지하거나 연장하는 기기, 또는 인체 손상 방지를 위해 상당히 중요한 의료기기, 질병과 부상의 잠재적 위험을 줄 수 있는 의료기기<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area"><br><br>
					<p class="tit" style="display:block;text-align:left;">등록 프로세스</p>
					<ul style="display:block;text-align:justify;">
                       대만 의료기기 등록 절차는 다음과 같습니다.<br><br>
                       1.	의료기기 등급 분류<br>
                           &nbsp; &nbsp; &#10023;대만 의료기기 등록 프로세스는 모든 등급의 의료기기에 반드시 필요하며, 의료기기 등급에 따라 제출 서류가 상이합니다. 그러므로 신청 전에 제품의 올바른 등급분류가 이루어져야 합니다.<br><br>
                       2.	대만 현지대리인 지정<br>
                           &nbsp; &nbsp; &#10023;대만에 의료기기를 판매하고자 하는 해외 제조사의 경우, 대만 현지 대리인을 지정해야 합니다. 대만 대리인은 대만에 거주하고 있어야 하며, 대만 내에 판매 라이선스를 보유하고 있어야 합니다. 대리인은 업체를 대신하여 의료기기를 등록하고 TFDA와 직접 연락하며 업무를 처리합니다.<br><br>
                       3.	제품 허가/신고 신청<br>
                           &nbsp; &nbsp; &#10023;제품허가증 신청은 의료기기 등급에 따라 차이가 있습니다. <br><br>
                       4.	QSD(GMP) 준비 및 신청<br>
                           &nbsp; &nbsp; &#10023;대만 내 현지 제조사의 경우 의료기기 GMP의 취득 절차에 따라 인증을 취득해야 하며, 해외 제조사의 경우 ISO 13485 인증서 보유 시 QSD (Quality System Documentation)심사를 받아야 합니다.<br><br>
                       5.	TFDA 심사<br>
                           &nbsp; &nbsp; &#10023;품질시스템 인증 문서를 준비하여 TFDA에서 지정한 기관에 제출하면 심사기관에서 심사가 진행됩니다. 필요에 따라 해외 제조 현장 심사가 이루어집니다.<br><br>
                       6.	최종 인증 발급<br>
                           &nbsp; &nbsp; &#10023;TFDA에 의료기기 등록이 완료되면 대만에서 제품을 유통할 수 있습니다.<br> <br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area"><br><br>
					<p class="tit" style="display:block;text-align:left;">필요 정보 및 서류</p>
					<ul style="display:block;text-align:justify;">
                         대만 의료기기 허가 절차는 제품 허가 / 신고 신청과 품질시스템 인증으로 구성되어 있습니다.<br><br>
                         1.	의료기기 제조사가 제품 허가 / 신고 신청 시 준비해야할 서류는 의료기기 등급별로 상이합니다.<br><br>
                             &nbsp; &nbsp; 1)	Class I<br>
                             &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &#10043;   신청서<br>
                             &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &#10043;   의료기기 제조업 허가증 사본<br>
                             &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &#10043;   대만 현지 제조사의 경우, GMP 적합 인정서<br>
                             &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &#10043;   해외 제조사의 경우, QSD 적합 인정서<br><br>
                             &nbsp; &nbsp; 2)	Class II / III<br>
                             &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &#10043;   신청서<br>
                             &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &#10043;   의료기기 제조업 허가증 사본<br>
                             &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &#10043;   대만 현지 제조사의 경우, GMP 적합 인정서<br>
                             &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &#10043;   해외 제조사의 경우, QSD 적합 인정서 및 해당국가 제조판매허가 승인서 원본<br>
                             &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &#10043;   중문 지침 리플릿, 카탈로그 포장, 라벨링, 사용방법, 제품 외형 사진<br>
                             &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &#10043;   시험 기록 및 보고서<br>
                             &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &#10043;   기술문서<br>
                             &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &#10043;   논문 및 데이터<br>
                             &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &#10043;   임상 시험 보고서<br>
                             &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; &#10043;   방사선 제품일 경우, 안전정보 자료<br><br>
                             
                         2.	의료기기 품질시스템 인증 신청 시 대만 현지 제조업체는 의료기기 GMP 취득 절차에 따라 인증을 취득해야 하며, 해외 제조업체의 경우, ISO 13485 인증서 보유 시 QSD(Quality System Documentation)를 통해 심사가 이루어집니다. QSD는 다음 3가지로 분류됩니다.<br><br>
                         -	유럽 CE 인증 제조사 및 미국 FDA 등록 제품: QSD 간소화 대상<br>
                         &nbsp; &nbsp; &nbsp; &#10043;   신청서<br>
                         &nbsp; &nbsp; &nbsp; &#10043;   제조업체 문서<br>
                         &nbsp; &nbsp; &nbsp; &#10043;   CE 인증 제조사의 경우,  ISO 13485 인증서 사본,   가장 최근의 심사보고서,  <br> 
                              &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; 해당 국가 제조 판매 증명서 CFG (Certificate to Foreign Government)
                              <br>
                         &nbsp; &nbsp; &nbsp; &#10043;   미국 FDA 등록 제품 제조사의 경우, FDA가 발급한 공장 조사 보고서, 적합성 검증 등록 증명서, FDA 제조 판매 증명서 CFG<br><br>
                         -	그 외 해외국가의 의료기기 허가 제품: 일반 QSD 대상<br>
                         &nbsp; &nbsp; &nbsp; &#10043;   신청서<br>
                         &nbsp; &nbsp; &nbsp; &#10043;   제조업체 문서<br>
                         &nbsp; &nbsp; &nbsp; &#10043;   공장 배치도<br>
                         &nbsp; &nbsp; &nbsp; &#10043;   해당 제품에 대한 공정구역<br>
                         &nbsp; &nbsp; &nbsp; &#10043;   주요 생산 설비 리스트<br>
                         &nbsp; &nbsp; &nbsp; &#10043;   공정 프로세스<br>
                         &nbsp; &nbsp; &nbsp; &#10043;   제조공장 품질매뉴얼 및 절차서<br>
                         &nbsp; &nbsp; &nbsp; &#10043;   품질문서 목록표<br><br>
                         -	위 경우에 해당되지 않는 경우: 해외 제조사 현장 실사 대상<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area"><br><br>
					<p class="tit" style="display:block;text-align:left;">IGC인증원의 역량</p>
					<ul style="display:block;text-align:justify;">
                      &#10053; IGC는 다년간 쌓아온 기술력 및 전문성을 통해 의료기기 제품 품질 경영시스템의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다.<br><br> 
                      &#10053; IGC는 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있어 전 세계 주요 시장에서 고객들의 의료기기 인증을 지원하고 있습니다.<br><br>
                      &#10053; IGC는 해외 제품 인증 기관과의 협력관계 구축을 통해, 의료기기 분야에서 다양한 인증 관련 서비스를 제공하고 있습니다.<br><br>
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
 </article><!--+++++ 컨텐츠 02 동남아시아 제품인증 / 대만 의료기기 등록  종료+++++-->  
 </div><!------div class="tab_con" 종료 --------->	
</div> <!--------// div class="content_wrap"  종료  ------------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>