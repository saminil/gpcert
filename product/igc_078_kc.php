<?php
	include_once('./_common.php');
$g5['title'] = '한국 KC 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    
    table{width:100%;border: 1px solid #444444;}
    th,td{border: 1px solid #444444;margin:5px;font-size:0.9em;}

	table,td p {font-size:0.9em;margin-left:0px;padding:5px;}
    td {font-size:96%;padding:5px;}
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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_ce-mdd_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_ce-mdd_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_ce-mdd_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_ce-mdd_04.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
    .business_type3 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type3 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 20%; }

    
    /* E-MARK 자동차인증 유럽 제품 인증 시작*/
	.business_type13{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type13:after{content:""; display:block; clear:both;}
	.business_type13 .business_info{ width:100%; }
	.business_type13 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type13 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type13 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
    .business_type13 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type13 .business_info .backImg:nth-child(1){background:url('images/igc_078_kc_00.jpg') no-repeat center top; }
	.business_type13 .business_info .backImg:nth-child(2){background:url('images/igc_078_kc_01.jpg') no-repeat center top; }
	.business_type13 .business_info .backImg:nth-child(3){background:url('images/igc_078_kc_02.jpg') no-repeat center top; }

    
	.business_type13 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
	.business_type13 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type13 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type13 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 5%; }

    /* (주)아이지씨인증원 사업영역 시작  */	
	.partner_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.partner_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.partner_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.partner_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}

	.partner_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.partner_type2 .con_box:after{content:""; display:block; clear:both;}
	.partner_type2 .con_box ul { padding:0; margin:0; }
	.partner_type2 .con_box ul li {float:left; width:50%; list-style:none; margin:10px 0; }
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
        
        .business_type10 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type10 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
        
        .business_type11 .business_info .backImg{float:none; margin:0 auto; text-align:center;  }
		.business_type11 .business_info .backImg:nth-child(2n-1){ margin:0 auto;}
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
        
        .business_type10 .business_info .backImg {width:100%;}
		.business_type10 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type10 .business_info .backImg .txt_area{ height:auto; padding:15px;}
        
        .business_type11 .business_info .backImg {width:100%;}
		.business_type11 .business_info .backImg .txt_area .tit{font-size:1.2em;}
        .business_type11 .business_info .backImg .txt_area{ height:auto; padding:15px;1}

        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃  사업영역 설정  */
	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>


<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->

<div class="content_wrap">
   
    <!--+++ 20.05.07 탭메뉴 +++-->
<!--
	<div class="tab_menu tab01">
		<ul>
			 처음 활성화 메뉴에 class="on" 
			<li><a href="javascript:;">CE MDD</a></li>
		</ul>
	</div>
-->
	<!--+++ /20.05.07 탭메뉴 +++-->
	
	<!-----내용구분 선 2개 ------>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:5px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
<!--+++ 20.05.07 탭컨텐츠 영역 +++-->
<div class="tab_con">
  <article style="display:block;"><!--+++++ 컨텐츠 01 KC (처음 활성화 컨텐츠에만 style="display:block") +++++-->	
  <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">KC |</span> 안전인증/전자파인증</h1>
		<h2 class="sub_txt">
            <span style="display:block;text-align:justify;color:dodgerblue;font-weight:blue;font-size:1.5rem">
              KC인증이란?<br>
            </span>
            <span style="margin:0 auto;display:inline-block;text-align:justify;font-size:1rem;">
            해외 수입 또는 국내에서 제조한 전기제품이 국내에서 유통 및 판매되어 소비자가 사용시 화재, 감전 등 안전사고 방지를 위하여 안전인증기관으로부터 인증 받은 제품만이 유통 및 판매하도록 한국 정부가 지정한 강제 인증 제도입니다.<br><br>
            인증대상에 포함된 제품이 인증을 받지 않은 경우 대한민국 내에서 판매가 불가능합니다.<br>
            해외제품을 수입하는 경우 KC 인증서가 없으면 제품은 통관이 불가능합니다.<br>
            <br>
            </span></h2>
	</div>

	<div class="business_type13">
		<div class="business_info">
		
		    <div class="backImg">
				<div class="txt_area"><br>
					<p class="tit" style="text-align:left;color:dodgerblue;">KC인증의 종류</p>
					<ul style="display:block;text-align:justify;">
                        KC인증은 크게 '안전인증'과  '전자파인증'으로 구분됩니다.<br>
                        이 경우 주관부처가 다르기 때문에 각각 인증을 진행하여야 하며, 인증이 완료되면 별도의 인증번호와 인증서가 발행됩니다.<br>
                        '안전인증' 및 '전자파인증'은 대상제품의 품목(종류)/기능(사양)에 따라 아래와 같이 세분화됩니다.
					</ul>
					
					<ul style="display:block;text-align:justify;">
<!--					<img src="./images/kc_numbers01.png" alt="KC인증의 종류" style="width:100%;height:auto;"><br><br>-->
                            <table cellspacing="0" cellpadding="0">
                              <col width="139">
                              <col width="165">
                              <col width="638">
                              <tr>
                                <td width="139" rowspan="6" align="left">안전 인증</td>
                                <td width="165" rowspan="2" align="left">안전 인증</td>
                                <td width="638" rowspan="2" align="left">엄격한 관리가 필요한 제품군으로 제품    심사 및 제조공장에 대한 공장 심사를 실시합니다. </td>
                              </tr>
                              <tr> </tr>
                              <tr>
                                <td rowspan="2" align="left">안전    확인</td>
                                <td rowspan="2" align="left">국가에서 지정한 안전인증기관을 통해 제품 심사를    실시합니다.</td>
                              </tr>
                              <tr> </tr>
                              <tr>
                                <td rowspan="2" align="left">공급자    적합성 확인</td>
                                <td rowspan="2" align="left">공급자 스스로 또는 민간시험소에서 실시한 제품    시험도 인정됩니다.</td>
                              </tr>
                              <tr> </tr>
                            </table>
                            <p>&nbsp;</p>
                            <table cellspacing="0" cellpadding="0">
                              <col width="139">
                              <col width="165">
                              <col width="638">
                              <tr>
                                <td width="139" rowspan="4" align="left">전자파 인증</td>
                                <td width="165" rowspan="2" align="left">전자파 적합 등록</td>
                                <td width="638" rowspan="2" align="left">무선기능이 없는 일반 전기제품을 대상으로    하며 제품 심사를 실시합니다.</td>
                              </tr>
                              <tr> </tr>
                              <tr>
                                <td rowspan="2" align="left">적합    인증</td>
                                <td rowspan="2" align="left">무선기능이 있는 일반 전기제품을 대상으로 하며 제품    심사를 실시합니다.</td>
                              </tr>
                              <tr> </tr>
                            </table>
                    </ul>

					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area"><br>
					<p class="tit" style="text-align:left;color:dodgerblue;">KC인증의 절차</p>
					<br><br>
					
					<span style="display:block;font-weight:800;text-align:left;">1. 안전인증 신청</span>
					<ul style="display:block;text-align:justify;">
                        안전인증 대상 전기용품을 국내에서 제조하거나 해외에서 제조하여 한국으로 수출하려는 조직은 전기용품 안전인증기관으로부터 모델별로 인증을 받아야 합니다. 인증을 받으려는 신청자는 출고 전이나 통관하기 전에 전기용품 안전인증 신청서에 해당 서류를 첨부하여 안전 인증기관에 제출하여야 하며, 외국 제조자가 안전인증을 신청하는 경우에는 국내에 거주하는 자를 대리인으로 선정하여 안전 인증신청을 할 수 있으며, 이 경우 인증의 모든 권한은 제조자에게 있습니다.
					</ul>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<span style="display:block;font-weight:800;text-align:left;">2. 신청 서류</span>
					<ul style="display:block;text-align:justify;">
                        - 전기용품 안전인증 신청서<br><br>
                        - 제품 사용 설명서<br><br>
                        - 제품 사양서<br><br>
                        - 전기회로 도면<br><br>
                        - 부품 리스트 (인증품 여부 및 인증서 포함)<br><br>
                        - 대리인임을 증명하는 서류 (대리인이 신청하는 경우)<br><br>
                        - 제품시험 시료 1개 (안전기준에서 다르게 정한 것이 없을 때는 1개로 하되, 전자파 장해시험이 포함된 경우에는 1개 추가)<br><br>
                        - 관련 부품 (안전 인증 대상 전기용품으로서 인증을 받지 않는 부품)<br><br>
                    외국 제조업자가 안전인증을 신청한 경우, 시험에 필요한 수입시료를 통관하기 위하여 그 외국 제조업자의 시료 확인서 발급신청이 있으면 안전인증 시료 확인서를 작성하여 발급할 수 있습니다.
					</ul>
					
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					
					<img src="images/products_09_04.jpg" alt="3. KC인증 절차, 이미지" style="width:50%;height:auto;margin-bottom:50px;">
				
					<span style="display:block;font-weight:800;text-align:left;">3. KC인증 절차</span>
					<ul style="display:block;text-align:justify;">
                        - 제조자가 안전인증기관에 안전인증신청서 제출<br><br>
                        - 안전인증기관에서 신청서 접수 및 검토<br><br>
                        - 안전인증기관에서 공장검사와 제품시험 실시<br><br>
                        - 합격 시 안전인증서 발급 후 인증서 수령 및 안전인증 표시<br><br>
                        - 이후 정기검사 실시 (불합격시 결과 조치)<br><br>
					</ul>
					
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class=backImg>
				<div class="txt_area">
					<p class="tit" style="text-align:left;color:dodgerblue;">IGC인증원의 역량</p>
					<ul style="display:block;text-align:justify;">
                        &#8281; IGC는 전세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
                        &#8281; IGC는 자동차 분야에서의 고객들에게 전문적이고 경쟁력 있는 서비스를 제공합니다.<br><br>
                        &#8281; IGC는 유럽의 크로아티아 교통관련 기관과 협력하여 E-Mark 인증 서비스를 제공합니다.
					</ul>
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
		</div>  <!--------//  div class="business_info" 종료  --------------->
	</div><!-------/// class="business_type12" 종료----------->
	
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
  </article><!--+++++ /컨텐츠 11번째 E-MARK 종료 +++++-->
  
</div><!--+++ /20.05.07 탭컨텐츠 영역 +++-->
</div> <!--------// div class="content_wrap"  종료  ------------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>