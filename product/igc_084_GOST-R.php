<?php
	include_once('./_common.php');
$g5['title'] = '러시아 제품 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_ce-mdd_01.png') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_russia_gost-r01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_russia_gost-r03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_russia_gost-r04.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_russia_gost-r05.jpg') no-repeat center top;}
	.business_type3 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type3 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type3 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }


     /* 1번째 컨텐츠, 제품인증, 의료기기 러시아 등록 시작 */
    .business_type4{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type4:after{content:""; display:block; clear:both;}
	.business_type4 .business_info{ width:100%; }
	.business_type4 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type4 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type4 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type4 .business_info .backImg:nth-child(1){background:url('images/product_medical_divice_registration_01.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(2){background:url('images/product_medical_divice_registration_05.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(3){background:url('images/product_medical_divice_registration_03.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(4){background:url('images/product_medical_divice_registration_04.jpg') no-repeat center top; }
    .business_type4 .business_info .backImg:nth-child(5){background:url('images/product_medical_divice_registration_02.jpg') no-repeat center top; }
    .business_type4 .business_info .backImg:nth-child(6){background:url('images/product_medical_divice_registration_06.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type4 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type4 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type4 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }

    /* (주)아이지씨인증원 사업영역 시작  */	
	.partner_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.partner_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.partner_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.partner_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}
	.partner_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.partner_type2 .con_box:after{content:""; display:block; clear:both;}
	.partner_type2 .con_box ul { padding:0; margin:0; }
	.partner_type2 .con_box ul li {float:left; width:90%; list-style:none; margin:10px 0; }
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
	}

	@media screen and (max-width:480px){

		.business_type3 .business_info .backImg {width:100%;}
		.business_type3 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type3 .business_info .backImg .txt_area{ height:auto; padding:15px;}
		.business_type4 .business_info .backImg {width:100%;}
		.business_type4 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type4 .business_info .backImg .txt_area{ height:auto; padding:15px;}
	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>


<!-- /* 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">

    <!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 시작 +++-->
	<div class="tab_menu tab01">
		<ul style="display:inline-block;position:relative;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">GOST-R</a></li>
			<li><a href="javascript:;">의료기기 러시아 등록</a></li>
		</ul>
	</div>
	<!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 종료  +++-->

<!-----내용구분 선 2개 ------>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:5px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

  <!--+++ 20.05.01 탭컨텐츠 영역 시작 +++-->
  <div class="tab_con">

  <article style="display:block">	<!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">GOST-R</span> / 러시아 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
            GOST는 Euro-Asian Council for Standardization, Metrology and Certification (EASC)에서 규정한 국가기술표준규격으로 러시아어로 연방 규격을 뜻하는 GOsudarstvennyy STandart의 약어입니다.<br><br>
            
                <h1 style="margin:0 auto; width:40%;text-align:center;">
                 <img src="images/product_russia_gost-r_01.jpg" alt="GOST-R 로고">
                </h1>
             <br><br>
            현재 국가별 발행되는 GOST 인증서와 발행하는 인증기관의 주체가 다른 만큼, 국가별 GOST 인증서는 각각 다른 인증서이며 러시아는 GOST-R, 카자흐스탄은 GOST-K 등으로 구분지어 불리고 있습니다.<br><br>
            관세동맹국가 간 발효된 통합 인증제도인 EAC의 도입 이후 러시아 내에서 GOST-R 인증 비중은 예전에 비하여 크게 줄었습니다. 하지만 아직 관세동맹국간에 협의가 이루지지 않은 강제인증 품목들에 한해서는 여전히 수입통관 시 GOST-R 인증이 요구됩니다.<br><br>
            </span></h2>
	</div>

	<div class="business_type3">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
				<br>
					<p class="tit" style="text-align:left;">&#10020; GOST R 인증서 유형</p>
					<ul style="display:block;text-align:justify;">				
						  &#9633; <span style="font-weight:bold">GOST R CoC</span><br>
                          의무적으로 적합성 인증을 받아야하는 대상에 대해 발급됩니다. GOST R CoC는 러시아로 수입되는 물품에 대해 아이템 및 제조공정라인이 러시아 안전 규정에 따라 적합함을 인증해주는 인증서이며, GOST R CoC의 발행은 인정을 받은 인증기관 (Accredited Certification Body) 에서 이루어져야 합니다.<br><br>
                          
                          <h1 style="margin:0 auto; width:40%;text-align:center;">
                            <img src="images/product_russia_gost-r_03_gostrCoC.jpg" alt="GOST-R 로고"><br>
                            <span>- GOST R 인증서 -</span>
                          </h1>
                          <br><br><br><br>
                          &#9633; <span style="font-weight:bold">GOST R DoC</span><br>
                          의무적으로 적합성 선언을 받아야하는 대상에 대해 발급됩니다. 적합성 선언 (GOST R DoC)은 의무적인 적합성인증 (GOST R CoC)에 비해 간소화된 유형의 인증서입니다.<br><br>
                          
                          <h1 style="margin:0 auto; width:40%;text-align:center;">
                            <img src="images/product_russia_gost-r_04_gostrDoC.jpg" alt="GOST-R 로고"><br>
                            <span>- GOST R DoC 인증서 - </span>
                          </h1>
                          <br><br><br><br>
                          &#9633; <span style="font-weight:bold">GOST Voluntary (자발적 GOST)</span><br>
                          GOST Voluntary는 의무적으로 GOST 인증을 받아야 하는 제품은 아니지만 제품이 적용 규정과 지침에 따라 만들어 졌음을 증명하는 인증서로, EAC 인증을 받는 기업이 GOST Voluntary를 추가적으로 신청하여 받을 경우 기업의 홍보, 신뢰 확보 등의 효과가 있습니다.<br><br>
                          
                          <h1 style="margin:0 auto; width:40%;text-align:center;">
                            <img src="images/product_russia_gost-r_05_gostrVoluntary.jpg" alt="GOST-R 로고"><br>
                            <span>- GOST Voluntary 인증서 - </span>
                          </h1>
                          <br><br>
					</ul>
					<br>
					<p class="tit" style="text-align:left;">&#10020; GOST R 인증서 유효기간</p>
					<ul style="display:block;text-align:justify;">				
						  GOST R 인증은 최소 1년에서 최대 3년까지 유효합니다.<br>
					</ul>
					<br><br>
					<p class="tit" style="text-align:left;">&#10020; GOST R 인증 절차</p>
					<ul style="display:block;text-align:justify;">				
                      1. 인증기관에 신청서 및 제품 관련 서류 제출<br>
                      2. 서류 검토<br>
                      3. 적용되는 인증서 유형 확인<br>
                      4. 샘플 시험 및 공장심사 여부 확인<br>
                      5. 견적서 발행 및 계약<br>
                      6. 샘플 시험 필요 시, 샘플 발송 후 시험 및 시험 성적서 발행<br>
                      7. 공장심사 필요 시, 심사 진행<br>
                      8. 인증서 초안 발행 및 고객 확인<br>
                      9. 인증서 발행<br>
					</ul>
					<br><br>
					<p class="tit" style="text-align:left;">&#10020; GOST R 인증 제출 서류</p>
					<ul style="display:block;text-align:justify;">				
                      - 신청서<br>
                      - HS Code<br>
                      - 제품 설명서 (러시아어 또는 수출국 언어)<br>
                      - 기 보유 시험 성적서<br>
                      - 기 보유 인증서<br>
                      - 도면 (해당 시)<br>
                      - 기술문서 (해당 시)<br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit">왜 중요한가? </p>
					<ul>
						<li style="margin:0 auto;text-align:justify;">
                        관세동맹국가 간 발효된 통합 인증제도인 EAC의 도입 이후 러시아 내에서 GOST-R 인증 비중은 예전에 비하여 크게 줄었지만 아직 관세동맹국간에 협의가 이루지지 않은 강제인증 품목들에 한해서는 여전히 수입통관 시 GOST-R 인증이 요구됩니다.
                        </li>
                        <br>
                        <li style="margin:0 auto;text-align:justify;">
                        그러므로, 관세동맹국간에 협의가 이루지지 않은 강제인증 품목들에 포함되어 있는 제품을 러시아 지역으로 수출하고자 하는 기업은 경우 적합성 준수를 증명하는 GOST R 인증을 받아야 하며 제품, 포장 또는 첨부 문서에 GOST R 적합성 마크를 표시해야 해당 국가로 수출이 가능합니다.
                        </li>
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
						IGC인증기관은 RUS-TEST PACIFIC인증기관과 협력하여 고객과 이해관계자들에게 경쟁력 있는 최고의 가치를 제공하여, 지속적 동반 성장을 통해 세계적인 인증기관으로 거듭나고 있습니다.<br><br>
                        IGC는 다음을 준수합니다.<br><br>
                        &#10048; 법적 요구사항 준수<br><br>
                        &#10048; 팀워크 및 조직원간의 연대<br><br>
                        &#10048; 성실성과 공정성<br><br>
                        &#10048; 사회적 및 환경적 책임<br><br> 
                        &#10048; 인증 및 등록 서비스 제공 업체로서의 지식과 학습을 통한 지속적인 발전과 개선활동<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">왜 IGC인가? </p>
					<ul style="display:block;text-align:justify;">
                      IGC는 여러 강점을 통해 고객에게 경쟁력 있고 만족스러운 서비스를 제공합니다.<br><br>
                      &#10070; 다양한 분야의 인증 사업을 통해 확보한 지식과 기술력을 바탕으로 한 경쟁력 있는 서비스 제공<br><br>
                      &#10070; 경쟁력 있는 인증 비용<br><br>
                      &#10070; 신속한 인증 서비스 진행을 통한 최소한의 기간 소요<br><br>
                      &#10070; 자회사를 통한 유라시아 이외 분야의 각종 시스템 및 제품 인증에 대하여 One Stop Service 제공<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
		</div><!--------//  div class="business_info" 종료  --------------->
	</div>
	
	
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
   
<article><!--+++++ 컨텐츠 02 러시아 제품인증 / GOST-R  시작+++++-->
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">의료기기 러시아 등록</span> / 러시아 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
              <span style="font-weight:bold;">의료기기 러시아 등록 개요</span> <br>
              건강 및 사회 발전 서비스를 제공하는 러시아 연방 보건 감독청인 Roszdravnadzor가 발행하는 공식 문서인 의료기기등록 인증서가 관련 의료기기에 대한 사전 평가를 통과하였기에 생산, 수입, 판매 및 러시아 내에서의 사용에 적합함을 승인하는 것입니다. 러시아에서 생산된 의료기기뿐만 아니라 해외에서 러시아로 수입된 모든 의료기기는 등록이 되어야 합니다.
            </span></h2>
	</div>

	<div class="business_type4">
		<div class="business_info">
			<div class="backImg" style="width:100%; margin-top:0; float:none; margin-left:0px; padding-top:200px;margin:0 auto;">
				<div class="txt_area">
					<p class="tit">의료기기 Class 분류</p>
					<ul style="display:block;text-align:justify;">
						러시아에서 운영중인 의료기기에 대한 명명 및 등급은 Order N4H “About Conformation of Nomenclature Classification of Medical Devices”에 정리되어 있으며 체외진단 장비는 포함되지 않습니다. 체외진단 장비는 별도의 등급 규정에 따릅니다.<br><br>
                          &nbsp; &nbsp; &#10070; Class 1 – 낮은 위험<br>
                          &nbsp; &nbsp; &#10070; Class 2a – 중간 위험<br>
                          &nbsp; &nbsp; &#10070; Class 2b – 높은 위험<br>
                          &nbsp; &nbsp; &#10070; Class 3 – 최상위 위험<br><br>
					</ul>
					
					<p class="tit">의료기기 등록 진행 시험 종류</p>
					<ul style="display:block;text-align:justify;">
						의료기기 등록에 따른 시험은 06.05.2011 N 352 법령에 따라 등록된 시험소에서만 진행이 가능하고, 임상 시험에 관해서는 이 기능을 수행할 수 있는 기관 목록이 Roszdravnadzor 웹사이트에 게시되어 있습니다.<br><br>
                          &nbsp; &nbsp; &#10070; 독성시험<br>
                          &nbsp; &nbsp; &#10070; 기능시험<br>
                          &nbsp; &nbsp; &#10070; 전자파검사<br>
                          &nbsp; &nbsp; &#10070; 임상시험<br><br>
					</ul>
	
					<p class="tit">의료기기 등록 유효기간</p>
					<ul style="display:block;text-align:justify;">
						영구 (인증서에 등록된 해당제품이 단종될 때까지 유효합니다)<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg" style="width:100%; margin-top:0; float:none; margin-left:0px; padding-top:360px;margin:0 auto;">
				<div class="txt_area">
					<p class="tit">의료기기 등록 절차 </p>
					<ul style="display:block;text-align:justify;">
					   1. 기업의 대리인은 Rosdravnadzor가 러시아로 샘플을 보내는 것에 동의하는 허가 신청을 해야 하며, 이 권한은 6 개월 동안 유효합니다. 또한 대리인은 신청 제품에 대한 설명, 시험소와의 계약서, 변호사 또는 제조업체와의 계약서 등을 제공하여야 합니다.<br><br>
                       2. 대리인은 샘플이 세관을 통과할 수 있도록 수속을 하여야 합니다. 또한 대표자는 샘플 외에도 계약서, 세관 공무원에게 제출할 문서 및 송장을 제공하여야 합니다.<br><br>
                       3. 인정을 받은 실험소에서 독성시험, 기술시험 및 전기제품의 경우 전자파 시험을 실시합니다.<br><br>
                       4. (3단계와 동시 진행) 기업은 등록에 필요한 기술문서 전체를 준비하여야 합니다.<br><br>
                       5. 의료 기기의 등급을 확정하고, 러시아에 등록된 유사 의료기기가 없는 경우 첫 번째 단계로 품질 평가, 효율성 및 안전성 시험이 실시되고, 그 이후 두 곳의 다른 의료기관에서 임상평가가 실시되어 두 번째 단계의 품질 평가, 효율성 및 안전성 평가가 수행됩니다. <br><br>
                       6. 기업은 전체 기술문서를 Rosdravnadzor에 제출합니다. 의료기기등록을 마친 후, 등록증을 근거로 GOST-R 인증서와 품목에 따른 위생인증서 및 제품의 특성에 따라 계측기 인증서를 확보하여야 합니다.<br><br>
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">의료기기 등록 제출 서류</p>
					<ul style="display:block;text-align:justify;">
                        &#10070; 등록 및 인증 절차 진행에 따른 제조자의 위임장 (공증 요망)<br>
                        &#10070; 본국의 회사 등록 증빙 자료 (예로서 상공회의소 자료, 내면 FDA 등록에 따른 증빙 자료 혹은 회사 등록 인증서, 사업 허가증)들은 공증이 되어 제출하여야 합니다.<br>
                        &#10070; 의료기기 적용 가능한 국내 혹은 국제 기관 발행의 ISO 9001 혹은 ISO 13485 인증서<br> 
                        &#10070; 93/42/EEC의 요구 사항에 따른 적합성 인증서, 적합성 선언서, 자유판매 증명서, FDA 인증 증빙 자료, 자국 혹은 기타 국에 대한 의료기기 인증 증빙 자료. (공증하여 제출하여야 함)<br>
                        &#10070; 안전을 입증하는 시험 성적서 (IEC 60601-1, IEC 60601-1-2, ISO 10993 등) – 정확한 성적서는 시험소에서의 기술검사시 업무를 간략히 하는데 도움을 줄 수 있습니다.<br>
                        &#10070; 독성안전/생체적합성에 대한 안전성 시험 성적서<br> 
                        &#10070; 기술 및 독성 시험 진행을 위한 샘플 제공<br>
                        &#10070; 의료기기 신규 등록 신청서 혹은 갱신 등록 신청서. 신청서는 반드시 신청자 (러시아에서 등록을 수행할 권한이 있는 법인) 레터 헤드를 사용하여야 합니다. 신청은 해당 의료기기 혹은 장비에 포함되는 모든 구성품 및 부품에 대한 설명을 포함하여야 합니다. 신청은 러시아어로 제출하여야 합니다.<br>
                        &#10070; 신청 업무를 수행할 법적 대리인 선임에 대한 위임장을 제출합니다. 제조 회사는 등록 권한이 있는 법인 (법인 책임자에게 주소 지정)에게 위임장을 발급해 주어야 하며 제조업체의 원산지 국가에서 공증을 받아야합니다. 또한 러시아어로 번역되어야 하며 자국 소재의 러시아 영사관에서 공증을 받아야 합니다. 위임장은 제조업체가 신청자가 의료 기기/장비의 등록을 수행하고 상담 및 전문 작업을 수행한다는 계약에 서명하고 등록 인증서를 받도록 위임해야 한다고 명시해야 합니다.<br><br>
                        등록 프로세스에는 GMP (Good Manufacturing Practices) 심사가 필요하지 않습니다. 하지만 이러한 심사를 도입할 법안은 가까운 시일 내에 시행될 예정입니다.
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

		    <div class="backImg">
				<div class="txt_area">
					<p class="tit">왜 중요한가? </p>
					<ul style="display:block;text-align:justify;">
                      유라시아에서 생산되는 의료기기뿐만 아니라 해외에서 생산되고 유라시아로 수입되는 모든 의료기기는 연방 보건 감독청에 등록이 되어야 합니다. 의료기기에 대한 사전 평가를 통과하며 등록되어야 유라시아 지역에 수입 및 판매 가능합니다. <br><br>

                      러시아에 의료기기를 등록시키기 위해서 비록 CE 혹은 FDA등의 승인을 위하여 시험 등이 이루어졌더라도 강제적인 요구 사항에 의하여 유라시아 공인 시험소에서 실시된 별도의 시험 등이 이루어져야 합니다. 러시아는 EU 또는 미국과 인증과 관련한 협약을 매지 않았기 때문에 EU의 CE 인증 또는 미국 FDA승인 등과 같은 국제적으로 인정된 인증서를 인정하지 않습니다.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
					<br>
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit">IGC인증원의 역량</p>
					<ul style="display:block;text-align:justify;">
                       IGC인증기관은 RUS-TEST PACIFIC인증기관과 협력하여 고객과 이해관계자들에게 경쟁력 있는 최고의 가치를 제공하여, 지속적 동반 성장을 통해 세계적인 인증기관으로 거듭나고 있습니다.<br>
					</ul>
	
					<!-------------p class="tit">IGC는 다음을 준수합니다.</p------------->
					<ul style="display:block;text-align:justify;">
                       IGC는 다음을 준수합니다.<br><br>
                          &nbsp; &nbsp; &#8281;법적 요구사항 준수<br><br>
                          &nbsp; &nbsp; &#8281;팀워크 및 조직원간의 연대<br><br>
                          &nbsp; &nbsp; &#8281;성실성과 공정성<br><br>
                          &nbsp; &nbsp; &#8281;사회적 및 환경적 책임<br><br> 
                          &nbsp; &nbsp; &#8281;인증 및 등록 서비스 제공 업체로서의 지식과 학습을 통한 지속적인 발전과 개선활동<br><br>
					</ul>
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">왜 IGC인가? </p>
					<ul style="display:block;text-align:justify;">
                      IGC는 여러 강점을 통해 고객에게 경쟁력 있고 만족스러운 서비스를 제공합니다.<br><br>
                      &nbsp; &nbsp; &#8281;다양한 분야의 인증 사업을 통해 확보한 지식과 기술력을 바탕으로 한 경쟁력 있는 서비스 제공<br><br>
                      &nbsp; &nbsp; &#8281; 경쟁력 있는 인증 비용<br><br>
                      &nbsp; &nbsp; &#8281; 신속한 인증 서비스 진행을 통한 최소한의 기간 소요<br><br>
                      &nbsp; &nbsp; &#8281; 자회사를 통한 유라시아 이외 분야의 각종 시스템 및 제품 인증에 대하여 One Stop Service 제공<br><br>
                      <br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
					<br>
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
</article><!--+++++ 컨텐츠 02 러시아 제품인증 / GOST-R  종료+++++-->
</div> <!--------// div class="content_wrap"  종료  ------------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->
</div><!-------div class="tab_con" 종료 ------>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>