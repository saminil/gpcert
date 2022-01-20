<?php
	include_once('./_common.php');
$g5['title'] = '중국 제품인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    
    
    table tr td {
        text-align:left;
        padding-left:10px;
        border:1px solid;
        font-size:0.9em;
    }

    
</style>


<?php
	/*
		CSS파일 로드(25~26라인)
		구매하신 (주)아이지씨인증원에 사용하신다면 적용하지 않아도 됩니다.
		(주)아이지씨인증원가 아닌 다른 곳에 적용하신다면 24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">


<?php
	/*
		주의사항 
		그누보드 관리자모드 내용관리등 에디터로 내용을 등록하실 경우, 보안문제로 자바스크립트와 css가 필터될 수 있습니다.
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
	.business_type3 .business_info .backImg:nth-child(1){background:url('images/product_china_cfda_01.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(2){background:url('images/product_china_cfda_02.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(3){background:url('images/product_china_cfda_03.jpg') no-repeat center top; }
	.business_type3 .business_info .backImg:nth-child(4){background:url('images/product_china_cfda_04.jpg') no-repeat center top; }
    .business_type3 .business_info .backImg:nth-child(5){background:url('images/product_china_cfda_05.jpg') no-repeat center top;}
    
	.business_type3 .business_info .backImg .txt_area{width:95%; margin:0 auto; padding:30px 30px 50px 30px; text-align:center; box-sizing:border-box; height:auto; background:#fff; }  /* 이미지 하단 텍스트 꾸밈 */
    
	.business_type3 .business_info .backImg .txt_area .tit{font-size:1.5em; line-height:1.4em; color:#000;  }
	.business_type3 .business_info .backImg .txt_area ul{ margin-top:30px; padding:0; }
	.business_type3 .business_info .backImg .txt_area ul li{text-align:left; font-size:1em; line-height:1.4em; color:#777; padding-left:15px; margin-bottom:10px; background:url('../image/arr.png') no-repeat left 50%; }

    /* 중국제품 인증/ 식품 위생 등록 시작  */
    .business_type4{ width:100%; max-width:1200px; margin:0 auto;}
	.business_type4:after{content:""; display:block; clear:both;}
	.business_type4 .business_info{ width:100%; }
	.business_type4 .business_info .backImg{width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:360px;}
	.business_type4 .business_info .backImg:nth-child(2n-1){margin:0 auto;} /* 홀수 번째 이미지 위치  */
    .business_type4 .business_info .backImg:nth-child(2n){margin:0 auto;} /* 짝수 번째 이미지 위치  */
	.business_type4 .business_info .backImg:nth-child(1){background:url('images/product_china_registration_01.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(2){background:url('images/product_china_registration_02.jpg') no-repeat center top; }
	.business_type4 .business_info .backImg:nth-child(3){background:url('images/product_china_registration_03.jpg') no-repeat center top; }
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
	}

	@media screen and (max-width:480px){

		.business_type3 .business_info .backImg {width:100%;}
		.business_type3 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type3 .business_info .backImg .txt_area{ height:auto; padding:15px;}
        .business_type4 .business_info .backImg {width:100%;}
		.business_type4 .business_info .backImg .txt_area .tit{font-size:1.2em;}
		.business_type4 .business_info .backImg .txt_area{ height:auto; padding:15px;}
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
			<li><a href="javascript:;">CFDA</a></li>
			<li class="on"><a href="javascript:;">식품 위생 등록</a></li>
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
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">CFDA(중국 국가식품약품 감독관리총국)</span> <br> 중국 제품인증 소개</h1>
        <h2 class="sub_txt"></h2>
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
               NMPA(National Maternity and Perinatal Audit)는 중국 국무원 산하 기관으로 전국의 의료기기에 대한 관리 및 감독의 책임을 지고 있으며, 한국 식약처와 유사합니다. 중국 내 수입 의료기기 중 NMPA의 대상 제품은 승인 후 시장 판매가 가능합니다.<br><br>
               
               NMPA(National Maternity and Perinatal Audit)는 2018년 3월 정부 기구 개편으로 중국국가식약품감독관리총국이 CFDA에서 NMPA로 변경되었고, 보건식품(한국의 건강기능식품)은 국가 시장 감독 관리국에서 관리 감독한다고 규정하였습니다.<br><br>
               
               NMPA는 과거 CFDA로 볼 수 있으며, 현재 두 기관으로 나뉘어 있으나 편의상 NMPA로 통칭합니다.<br><br>
            </span>
	</div>

	<div class="business_type3">
		
		<div class="business_info">
		
		    
			<div class="backImg" style="width:100%;/*본문 좌우 폭*/ margin-top:0; float:none; margin-left:10px; padding-top:160px;">
				<div class="txt_area">
					<p class="tit">NMPA 등록이란?</p>
					<ul style="display:block;text-align:justify;">
                       다음 항목에 포함되는 제품군이 중국 규정에 따라 중국 NMPA에서 인증을 받는 등록 절차를 뜻합니다.<br> 
                         &nbsp; &nbsp; &#10049; 의료기기 (체외진단기기 포함)<br> 
                         &nbsp; &nbsp; &#10049; 화장품<br>
                         &nbsp; &nbsp; &#10049; 의약품, 의약품 포장재 원료와 원성분<br>
                         &nbsp; &nbsp; &#10049; 유아용 분유<br>
                         &nbsp; &nbsp; &#10049; 건강식품 (영양제 그리고 특수 건강 기능 식품)<br> 
                         &nbsp; &nbsp; &#10049; 특수 의료용 목적의 식품<br> <br>
                       NMPA 인증은 중국이 세계화에 직면하면서 제도적인 격차를 파악한 후 국제 경쟁이 심화되자 국제 요구 사항과 견줄 수 있도록 도입된 제도입니다.<br> 
                       상기 제품의 수입, 판매 및 사용은 품질 보증과 제품 안전을 위해 유효한 NMPA 인증이 있어야만 허용됩니다.<br> 

					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>

			<div class="backImg">
				<div class="txt_area">
					<p class="tit">NMPA 관련 규정</p>
					<ul style="display:block;text-align:justify;">
                        끊임없이 변화하는 법률과 늘어나는 규제 요건은 최초 신청자뿐만 아니라 신청 경험이 많은 기업에게도 신청 절차를 복잡하고 어렵게 느껴지게 합니다.<br> 
                        특정 제품군에 대한 NMPA 인증 관련 법률이 최근에야 도입되어 지속적으로 개정되고 있기 때문입니다.<br> <br>
                        NMPA 등록 규정은 국제 표준과 유사합니다. <br>
                          &nbsp; &nbsp; &#10049; GB표준 (국가 표준) <br>
                          &nbsp; &nbsp; &#10049; YY표준 (산업 표준) <br>
                          특히 보건식품 경고 문구 표시 지침이 2020년부터 시행될 예정으로 보건식품은 최소 포장(용기)에 경고 문구, 생산일자, 품질보증기간을 표기해야 합니다. 또한 보건식품 원료 목록 및 보건기능 목록 관리 방법 시행에 따라 등록제가 적용되는 보건식품이 늘어날 전망입니다.<br> 
					</ul>
					
				    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">SAMR 이란?</p>
					<ul style="display:block;text-align:justify;">
                     &#10050; 2018년3월13일, 제13차 전국인민대표대회 때 중국 내각은 장관급 부처를 축소하기로 결정하고, 관련 규정과 등기 담당 공무원들은 그대로 유지하기로 하였습니다. <br><br>
                     &#10050; 중국에서의 ‘보건식품’ 이란 특정 혹은 일반 소비자에게 영양소를 공급하거나 체내 기능을 조절할 수 있는 식품으로, 치료를 목적으로 하지 않고 인체에 급성, 만성 위해가 없는 식품을 말합니다. SAMR 보건식품 허가 및 등록은 보건식품을  중국으로 수출 시 거쳐야 하는 필수 관문으로 국가시장감독관리총국 (SAMR)에서 허가한 보건식품만이 중국에서 정식 판매가 가능합니다. <br><br>
                     &#10050; SAMR(State Administration for Market Regulation) 과 CDA(China Drug Administration)가 CFDA를 대체하기로 하였습니다.<br><br>
                     &#10050; IGC 에서는 모든 개정 사항이 아직 확정되지 않았기 때문에 CFDA라는 용어와 함께 혼용하여 사용하고 있습니다.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">의료기기 등급분류</p>
					<ul>
                        <table border="1" cellpadding="0" cellspacing="0">
                          <col width="72">
                          <col width="251" span="2">
                          <col width="155">
                          <tr>
                            <td width="72" align="center" bgcolor="#116FB3"><strong style="display:block;color:#ffffff; padding-left:0px;">등급분류</strong></td>
                            <td width="251" align="center" bgcolor="#116FB3"><strong style="display:block;color:#ffffff; text-align:center;">정의</strong></td>
                            <td width="251" align="center" bgcolor="#116FB3"><strong style="display:block;color:#ffffff; text-align:center;">제품</strong></td>
                            <td width="155" align="center" bgcolor="#116FB3"><strong style="display:block;color:#ffffff; text-align:center;">　</strong></td>
                          </tr>
                          <tr>
                            <td width="72" rowspan="5" align="center"><strong>1등급</strong></td>
                            <td rowspan="5" width="251">일반적인 관리로 안전성 및 유효성을 보장할 수 있는 의료기기 </td>
                            <td width="251">기초 외과수술기구 </td>
                            <td rowspan="5" width="155">　</td>
                          </tr>
                          <tr>
                            <td width="251">안과/이비인후과용    수술기구 </td>
                          </tr>
                          <tr>
                            <td width="251">청진기 </td>
                          </tr>
                          <tr>
                            <td width="251">의료용    망치 </td>
                          </tr>
                          <tr>
                            <td width="251">의료용    방사선 보호설비 및 용품</td>
                          </tr>
                          
                          
                          <tr>
                            <td width="72" rowspan="13" align="center"><strong>2등급</strong></td>
                            
                            <td rowspan="13" width="251">
                             안전성 및 유효성을 보장하기 위하여
                              추가적인 관리가 요구되는 의료기기 
                            </td>
                              
                            <td width="251">의료용 봉합기 </td>
                            <td rowspan="13" width="155">　</td>
                          </tr>
                          <tr>
                            <td width="251">신경외과    수술기구 </td>
                          </tr>
                          <tr>
                            <td width="251">체온계,&nbsp;혈압계,&nbsp;폐활량계 </td>
                          </tr>
                          <tr>
                            <td width="251">심전,&nbsp;진단 기기 </td>
                          </tr>
                          <tr>
                            <td width="251">소독,&nbsp;살균    설비 기구 </td>
                          </tr>
                          <tr>
                            <td width="251">피임기구 </td>
                          </tr>
                          <tr>
                            <td width="251">혈류량    측정 기구 </td>
                          </tr>
                          <tr>
                            <td width="251">안과    광학기계 </td>
                          </tr>
                          <tr>
                            <td width="251">자기요법 기계 </td>
                          </tr>
                          <tr>
                            <td width="251">의료용 X선 부속설비 및 부품 </td>
                          </tr>
                          <tr>
                            <td width="251">초음파    물리요법기기 </td>
                          </tr>
                          <tr>
                            <td width="251">표면 봉합 재료 </td>
                          </tr>
                          <tr>
                            <td width="251">생화학분석기</td>
                          </tr>
                          
                          
                          <tr>
                            <td width="72" rowspan="11" align="center"><strong>3등급</strong></td>
                            
                            <td rowspan="11" width="251">
                              생명 보조 또는 유지에 사용되고 인체에
                              삽입되거나 인체에 대한 잠재적 위험성을
                              가지고 있어 안전성 및 유효성 관점에서
                              엄격하게 관리되어야 하는 의료기기 
                              </td>
                              
                            <td width="251">주사침 및 전자침 </td>
                            <td rowspan="11" width="155">　</td>
                          </tr>
                          <tr>
                            <td width="251">전자내시경 </td>
                          </tr>
                          <tr>
                            <td width="251">초음파    수술기 및 치료설비 </td>
                          </tr>
                          <tr>
                            <td width="251">레이저    수술 및 치료설비 </td>
                          </tr>
                          <tr>
                            <td width="251">의료용    고주파 기기 및 설비 </td>
                          </tr>
                          <tr>
                            <td width="251">MRI, X선 치료 진단 설비 </td>
                          </tr>
                          <tr>
                            <td width="251">의료용    방사선 치료 설비 </td>
                          </tr>
                          <tr>
                            <td width="251">혈액형 분석기 </td>
                          </tr>
                          <tr>
                            <td width="251">산소    공급기 인공기관 </td>
                          </tr>
                          <tr>
                            <td width="251">의료용    봉합 재료 및 접합재료 </td>
                          </tr>
                          <tr>
                            <td width="251">수액,&nbsp;수혈    기구 및 호스</td>
                          </tr>
                        </table>
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
                       &#10048; IGC는 오랜 경험과 고객과 쌓아온 신뢰를 바탕으로 인증분야 최고의 서비스를 제공할 수 있습니다.<br><br> 
                       &#10048; IGC인증원은 중국 수출 및 기타 해외인증의 최상의 파트너로서 한국 기업이 중국 시장 진출을 위해 반드시 필요한 중국 인증서 발급을 정확하게 지원합니다.<br><br>
                       &#10048; 계속적으로 급변하는 중국 위생허가국 규정에 대한 변수에 대해 발빠르게 대응이 가능하며 업무에 대한 빠른 피드백이 가능합니다.<br><br> 
                       &#10048; 북경 지사 직영 시스템으로 신속한 시험소 연결 및 발빠른 진행과정 공유가 가능합니다.<br><br>
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
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>
   </article>
   <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block")  종료+++++-->
    

  <!--+++++ 컨텐츠 02 중국 제품인증 / 식품위생 등록  시작+++++-->
   <article style="display:block">
       <div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#ff3333;">식품위생 등록</span> / 중국 제품인증 소개</h1>
		<h2 class="sub_txt">
            <span style="margin:0 auto;display:inline-block;text-align:justify;">
                해마다 중국으로의 식품 수출이 증가하면서 중국으로 식품 수출 시 통관 문제가 매우 중요해지고 있습니다.<br><br>
                현재 한국 건강기능식품 뿐만 아니라 과자류 및 라면 류 등 다양한 식품의 중국 수출이 지속적인 성장세를 보이고 있습니다.<br><br>
                해마다 중국 식품 수출이 늘어나면서 중국으로 식품을 통관하는 문제가 매우 중요해지고 있습니다. (CIQ检验检疫证明, CIQ 검사검역 증명서=위생허가)<br><br>
            </span></h2>
	</div>

	<div class="business_type4">
		<div class="business_info">
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">수입수출구(进出口)란?</p>
					<ul style="display:block;text-align:justify;">
                        한국 역시 1980년대에는 갑종 무역업 등록이라는 제도를 통해서 수출 수입을 일정한 허가를 받은 업체만 할 수 있었습니다. 이는 해외 거래처에 대한 신뢰도 확보 및 외환을 효율적으로 관리하기 위한 제도였습니다. 현재는 일반 사업자 등록증만 보유하고 있으면 언제든지 수출입을 할 수 있도록 제도가 변경되었습니다.<br><br>
                        현재의 중국은 한국의 사업자등록증에 해당되는 사업자등록증을 가지고 있다고 하더라도 수입 수출을 할 수 있는 수입 수출국 허가를 추가로 받아야만 수출 수입을 할 수 있습니다. <br><br>
                        수입 수출국 대행 제도는 중국 정부에서 인정하는 공식적인 제도입니다. 전혀 불법이 아니며 수입하는 사람이 진출구 허가가 없을 때 수입 수출을 허가받은 업체로 통관하고 실제 납세 의무자는 실수입자 회사 이름으로 수입이 가능한 제도입니다.<br><br>
					</ul>
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
					                                    &#10057; &#10057; &#10057;
					<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
				</div>
			</div>
			
			<div class="backImg">
				<div class="txt_area">
					<p class="tit">수출자 준비 서류</p>
					<ul  style="display:block;text-align:justify;">
                      <table cellspacing="0" cellpadding="0">
                        <col width="72">
                        <col width="167" span="2">
                        <col width="162">
                        <col width="66">
                        <col width="136">
                        <tr>
                          <td width="72" align="center">번호</td>
                          <td width="167" align="center">서류명(한국어)</td>
                          <td width="167" align="center">서류명(중국어)</td>
                          <td width="162" align="center">서류명(영어)</td>
                          <td width="66" align="center">발급</td>
                          <td width="136" align="center">발급 기관</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">1</td>
                          <td width="167">제조증명서(영문)</td>
                          <td width="167">制作证明书（英文）</td>
                          <td width="162">CERTIFICATE OF    MANUFACTURE</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">식품의약품안전처</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">2</td>
                          <td width="167">자유판매증명서(영문)</td>
                          <td width="167">自由贩卖证明书（英文）</td>
                          <td width="162">CERTIFICATE OF    FREE SALES</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">식품의약품안전처</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">3</td>
                          <td width="167">위생증명서(영문)</td>
                          <td width="167">卫生证明（英文）</td>
                          <td width="162">HEALTH    CERTIFICATE</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">식품의약품안전처</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">4</td>
                          <td width="167">영문 사업자등록증</td>
                          <td width="167">英文营业执照</td>
                          <td width="162">CERTIFICATE OF    BUSINESS REGISTRATION</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">국세청</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">5</td>
                          <td width="167">공장신고증(영문)</td>
                          <td width="167">工厂申报证</td>
                          <td width="162">REGISTRATION    CERTIFICATION FORM</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">관할관청 or 자체제작</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">6</td>
                          <td width="167">영양성분 검사성적서</td>
                          <td width="167">营养成分 检测书</td>
                          <td width="162">PRODUCT    INSPECTION CERTIFICATION</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">제조공장</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">7</td>
                          <td width="167">제품포장지 도면</td>
                          <td width="167">产品包装纸 图面</td>
                          <td width="162">WRAPPING PAPER    MAP</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">수출자 또는 제조자</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">8</td>
                          <td width="167">품질 표시 스티커(중국어)</td>
                          <td width="167">食品品种标签</td>
                          <td width="162">LABEL STICKER</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">수출자 또는 제조자</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">9</td>
                          <td width="167">원산지 증명서</td>
                          <td width="167">原产地证明</td>
                          <td width="162">CERTIFICATION    OF ORIGIN</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">대한상공회의소</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">10</td>
                          <td width="167">인보이스</td>
                          <td width="167">发票</td>
                          <td width="162">COMMERCIAL    INVOICE</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">수출자</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">11</td>
                          <td width="167">패킹리스트</td>
                          <td width="167">箱单</td>
                          <td width="162">PACKING LIST</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">수출자</td>
                        </tr>
                        <tr>
                          <td width="72" align="center">12</td>
                          <td width="167">업체별 제품정보리스트</td>
                          <td width="167">货物明细</td>
                          <td width="162">DETAIL PACKING    LIST</td>
                          <td width="66" align="center">한국</td>
                          <td width="136">수출자</td>
                        </tr>
                      </table>
						<br>
						
						<li>이외에도 상품 특성에 따라 몇가지 서류가 더 추가될 수 있다.</li>
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
                       IGC는 수년간 쌓아온 기술력 및 전문성을 통해 제품 인증의 적합성을 정확하게 평가하여 고객의 지속적인 발전에 일조하고 있습니다. IGC는 전 세계 주요 시장에서 다양한 특정 범위 및 법적 요구 사항에 대한 최신 지식을 보유하고 있으며, 고객 여러분의 전체 글로벌 운영을 지원하기 위한 지식 및 서비스를 제공하고 있습니다.<br><br>
                       기본적으로 중국에 수출을 할 경우에는 현지 바이어 회사가 중국 해관에 등록된 수입 라이선스가 있는 회사인지를 확인해야 합니다. 만약 라이선스가 없다면 정상 통관이 이루어지지 않습니다.<br><br>
                       이런 상황에서 저희 IGC는 수입 수출국 회사를 Contact 하여 수입 수출국 대행 통관을 진행하고 수출에 필요한 무역 실무 업무, 바이어와의 커뮤니케이션, 무역서류작성과 무역 업무 전반에 걸친 컨설팅, 배송, 통관 업무 등을 지원할 수 있습니다. <br>
                       또 상품의 특성에 맞게 가장 적합한 비용과 신속하게 통관하는 방법을 사전에 교류하여 준비할 수 있습니다.<br><br>
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
   </article>
   <!--+++++ 컨텐츠 02 중국 제품인증 제품인증 / 식품위생 등록  종료+++++-->

 </div><!------div class="tab_con" 종료 --------->	

</div> <!--------// div class="content_wrap"  종료  ------------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
