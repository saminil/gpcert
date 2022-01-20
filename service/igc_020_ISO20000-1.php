<?php
	include_once('./_common.php');
$g5['title'] = '정보보안 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<!------ Existing File Codings  시작----->

<style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:1rem; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style>
<!------ Existing File Codings  종료----->

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
    /* *:lang(en) {font-family: georgia;} */ 
    /* *:lang(ko) {font-family: 'Noto Sans', sans-serif;} */
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

    .business_type5 h1{font-size:3em; font-weight:700; color:#111; text-align:center;  margin:0 auto; margin-bottom:0px; }
	.business_type5 h2{font-weight:700; font-size:2em; color:#0078D7; text-align:center; margin-bottom:25px;}
	.business_type5 h2:after{display:block; position:relative; bottom:0; left:50%; margin-left:-2px; content:""; width:2px; height:30px; background-color:#195883; margin-top:20px;}
	.business_type5 h3{font-size:1.1em; color:#666; text-align:center; margin-bottom:50px;}
	.business_type5 h3 br.sn{display:none;}
	.business_type5 ul{width:100%;}
	.business_type5 ul > li{width:100%; border-bottom:1px solid #d1d1d1; overflow:hidden;}
	.business_type5 ul > li:first-child{border-top:1px solid #d1d1d1;}
	.business_type5 ul > li:nth-child(odd){background-color:#f4f4f4;}
	.business_type5 ul li dl{display:table;}
	.business_type5 ul li dl dt, .business_type5 ul li dl dd{display:table-cell; vertical-align:middle;}
	.business_type5 ul li dl dt{width:40%; padding-left:5%;}
	.business_type5 ul li dl dt img{max-width:100%; margin:0 auto;}	
	.business_type5 ul li dl dd{width:60%; padding:20px 0; padding-top:30px; padding-left:5%;}
	.business_type5 ul li dl dd > strong{display:block; font-size:2em; line-height:80px; color:#111; font-weight:500;}
	.business_type5 ul li dl dd > p{font-size:1em; line-height:40px; color:#111; letter-spacing:-0.75px; font-weight:300; word-break:keep-all; padding-left:15px; position:relative;}
	.business_type5 ul li dl dd > p:before{display:inline-block; position:absolute; left:0; top:17px; content:""; width:6px; height:6px; background-color:#0263ac; border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%;}
    
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
	}

	@media all and (max-width:768px){
		.business_type5 h1{font-size:2.3em; }
		.business_type5 h2{font-size:1.9em; }
		.business_type5 h3{font-size:1.6em; padding:0 5px;}
		.business_type5 ul li dl, .business_type5 ul li dl dt, .business_type5 ul li dl dd{display:block; width:100%;}
		.business_type5 ul li dl dt{padding:5%;}
		.business_type5 ul li dl dt img{width:91%;}
		.business_type5 ul li dl dd > strong{line-height:30px; font-size:1.3em;}
		.business_type5 ul li dl dd{width:90%; padding:5%; padding-top:0;}
		.business_type5 ul li dl dd > p{line-height:24px; font-size:0.95em;}
		.business_type5 ul li dl dd > p:before{top:10px;}
	}

	@media all and (max-width:480px){
		.business_type5 h3 br.sn{display:inline;}
        .business_type5 ul li dl dd{width:90%; padding:5%; padding-top:0;}
		.business_type5 ul li dl dd > p{line-height:24px; font-size:0.95em;}
		.business_type5 ul li dl dd > p:before{top:10px;}
	}
    
</style>

<div class="content_wrap">
	
	<!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul style="display:inline-block;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">ISO/IEC 27001</a></li>
			<li><a href="javascript:;">ISO/IEC 27701</a></li>
			<li class="on"><a href="javascript:;">ISO/IEC 20000-1</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
<!-----내용구분 선 2개 ------>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
	<!--+++ 20.05.07 탭컨텐츠 영역 +++-->
	<div class="tab_con"><!------------ class="tab_con"  시작 ---------------->

<article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	<section class="business_type5" class="area">
		<h1><span>ISO/IEC</span> 27001 </h1>
		<h2>개인정보보안 경영시스템 인증</h2>		
		<p style="display:inline-block;text-align:justify;">
            ISO/IEC 27001은 국제표준화기구 (ISO: International Organization for Standardization) 및 국제전기기술위원회 (IEC: International Electrotechnical Commission)에서 제정한 정보보호 관리체계에 대한 국제 표준이자 정보보호 분야에서 가장 권위 있는 국제 인증표준으로, 정보보호정책, 물리적 보안, 정보접근 통제 등 정보보안 관련 11개 영역, 133개 항목을 다루고 있습니다.
		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_IEC 27001_02.jpg" alt="ISO/IEC 27001 구조">
					</dt>
					<dd>
				    <strong><span>ISO/IEC</span> 27001:2013 요구사항</strong>
				    <span style="text-align:justify;margin-right:10px;display:inline-block;">
                       ISO/IEC 27001은 조직 환경, 리더십, 계획, 지원, 운영, 성과 평가, 개선의 10가지 항목과 14가지의 통제항목 (통제 항목은 ISO/IEC 27002를 참조)으로 구성되어 있습니다. 이 표준의 요구사항은 조직의 유형, 규모, 특성에 상관없이 모든 조직에 적용할 수 있도록 일반적인 내용으로 수립되었습니다.
                       </span><br><br>
                        <span>1.적용범위</span><br><br>
                        <span>2.인용표준</span><br><br>
                        <span>3.용어와 정의</span><br><br>
                        <span>4.조직 상황</span><br><br>
                        <span>5.리더십</span><br><br>
                        <span>6.기획</span><br><br>
                        <span>7.지원</span><br><br>
                        <span>8.운용</span><br><br>
                        <span>9.성과 평가</span><br><br>
                        <span>10.개선</span><br><br>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_IEC 27001_01.jpg" alt="ISO/IEC 27001 인증효과">
					</dt>
					<dd>
						<strong><span>ISO/IEC</span> 27001의 중요성</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                       ISO/IEC 27001 인증 취득을 통해 조직은 다음과 같은 혜택을 얻을 수 있습니다.<br><br>
                          &#8280; <strong style="font-weight:bold;">고객 만족</strong><br>
                                  고객정보를 안전하게 보호함으로써 고객만족 도모<br><br>
                          &#8280; <strong style="font-weight:bold;">비즈니스 연속성</strong><br>
                                  리스크 관리, 법규 준수 및 미래 보안 이슈 및 우려사항에 대한 경계를 통해 사업의 안정성 확보<br><br>
                          &#8280; <strong style="font-weight:bold;">법규 준수</strong><br>
                                  법적/규제적 요구사항이 어떻게 귀사 및 고객에 영향을 끼치며, 법적 제재에 따른 리스크를 감소시키는 방법 이해<br><br>
                          &#8280; <strong style="font-weight:bold;">리스크 관리 증대</strong><br>
                                  고객 기록, 회계 정보 및 지적재산권이 체계적인 프레임워크를 통해 손실, 절도 및 손상으로부터 보호됨을 보장<br><br>
                          &#8280; <strong style="font-weight:bold;">증명된 사업 신뢰도</strong><br>
                                  인정된 글로벌 산업 규격에 대한 독립적 검증으로 신뢰성 확보<br><br>
                          &#8280; <strong style="font-weight:bold;">사업 확대</strong><br>
                                  고객은 종종 납품 조건으로 인증서를 요구하기 때문에 인증을 통한 사업 확대 가능<br>
                        </span><br><br>
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_IEC 27001_04.jpg" alt="ISO/IEC 27001 IGC인증원의 역량">
					</dt>
					<dd>
						<strong>IGC인증원의 역량</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                         IGC는 정보보안을 포함하여 다양한 산업 분야의 품질경영시스템에 대한 인증활동에 많은 지식과 풍부한 경험을 보유하고 있습니다.<br><br>
                         여러 국제 표준에서 요구되는 IT 시험 및 인증을 종합적으로 수행한 노하우를 바탕으로 빠르고 정확한 인증 서비스를 제공합니다.<br>
                       </span><br><br>
					</dd>
				</dl>	
			</li>
		</ul>
	</section>
<br><br><br><br><br><br>

	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2" style="text-align:justify;margin-right:10px;display:inline-block; width:100%;">
        <h2 class="con_arrow" style="font-size:0.7em;">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
		    <ul>
              <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
              <li><p><em><strong>02</strong></em><span>환경 인증</span></p></li>
              <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
              <li><p><em><strong>04</strong></em><span>보건&의료기기 인증</span></p></li>
              <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
              <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
              <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
              <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
              <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
              <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
              <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
              <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
              <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
            </ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>	
   </article> <!--+++++ /컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	
	
   <article><!--+++ 02컨텐츠 /20.06.08 ISO/IEC 27701 탭컨텐츠 영역  시작+++-->
     <section class="business_type5" class="area">
		<h1><span>ISO/IEC </span>27701</h1>
		<h2>개인정보 경영시스템 인증</h2>
		<ul>
		     <li>
				<dl>
					<dd>
						<!-----------strong>1. 개요</strong----------->
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                           데이터 수집 및 처리가 현저하게 늘어나는 가운데 개인 정보 위협을 줄이기 위해 데이터를 관리하고 처리해야 하는 방법에 대한 요구가 더욱 증가하고 있습니다.
                           <br><br>
                           이는 국제 표준인 ISO/IEC 27701 표준의 제정의 배경이 되었습니다.<br><br>
                           ISO/IEC 27701은 ISO/IEC 27001 및 ISO/IEC 27002의 확장 형태로서 조직의 프라이버시 관리를 위해 PIMS(Privacy Information Management System)를 수립, 구현, 유지관리 및 지속적으로 개선하기 위한 요구사항 및 지침을 제공합니다.<br><br>
                           또한 개인식별정보(PII, Personally Identifiable Information) 처리에 대한 책임과 책임을 갖는 PII 컨트롤러와 PII 프로세서에 대한 지침을 제공합니다.<br><br>
                           ISO/IEC 27701은 ISO/IEC 27001을 기반으로 한 Information Security Management System (ISMS) 내에서 PII를 처리하는 PII 컨트롤러 또는 PII 프로세서를 포함하는 공공 및 민간 기업, 정부 기관 및 비영리 조직을 포함한 모든 유형의 조직과 규모에 적용될 수 있습니다.
                    </span><br><br>
					</dd>
				</dl>
			</li>
			<br>

            <li>
				<dl>
					<dt>
						<img src="./image/ISO_IEC 27701_02.jpg">
					</dt>
					<dd>
						<strong>ISO/IEC 27701:2019</strong>
						1. 일반사항<br><br>
                        2. ISO/IEC 27001 관련 PIMS 특정 요구 사항<br><br>
                        3. ISO/IEC 27002 관련 PIMS 관련 지침<br><br>
                        4. PII 컨트롤러에 대한 추가 ISO/IEC 27002 지침<br><br>
                        5. PII 프로세서에 대한 추가 ISO/IEC 27002 지침<br><br>
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_IEC 27701_03.jpg">
					</dt>
					<dd>
						<strong>ISO/IEC 27701의 중요성</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                         1. 개인 정보 관리 능력에 대한 신뢰를 구축<br><br>
                         2. 조직내 역할과 책임의 명확화<br><br>
                         3. 내부 역량 향상 및 프로세스 개선을 통한 위반 방지<br><br>
                         4. 프라이버시 관리를 위한 확립된 통제 및 투명성 제공<br><br>
                         4. 비즈니스 파트너와의 합의를 촉진<br><br>
                         6. 선도적인 정보보안 표준 ISO/IEC 27001과 쉽게 통합 가능<br><br>
                       </span><br><br>
					</dd>
				</dl>	
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_IEC 27701_04.jpg">
					</dt>
					<dd>
						<strong>ISO/IEC 27701의 기대효과</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                          1. 범용 운영 제어 집합을 사용하여 여러 규제 요구사항을 조정하여 일관되고 효율적인 구현을 가능하게 합니다.<br><br>
                          2. PIMS는 여러 규정 요구 사항에 대해 평가함으로써 인증 심사에 소모되는 비용을 절감할 수 있습니다.<br><br>
                          3. 대부분의 조직들이 전 세계에 걸쳐 퍼져 있기 때문에 ISO 국제 표준을 사용하여 규정 준수를 관리하는 것이 좋습니다.<br><br>
                          이러한 규정 준수에 대한 의존도로 인해 표준에 대한 인증의 중요성은 높아집니다.<br>
                          특히 많은 양의 중요한 데이터 처리가 관련된 경우에는 파트너 및 공급업체로부터 이익을 얻을 수 있습니다.
                       </span><br><br>
					</dd>
				</dl>	
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_IEC 27701_05.jpg">
					</dt>
					<dd>
						<strong>IGC 인증원의 역량</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                         &#10022; 풍부한 경험을 통해 인정된 경영시스템 인증을 제공하는 IGC는 정보보안을 포함하여 다양한 산업 분야의 품질경영시스템에 대한 인증활동에 많은 지식과 풍부한 경험을 보유하고 있습니다.<br><br>
                         &#10022; 여러 국제 표준에서 요구되는 IT 시험 및 인증을 종합적으로 수행한 노하우를 바탕으로 빠르고 정확한 인증 서비스를 제공합니다.<br><br>
                         &#10022; ISO 9001: 품질경영시스템, ISO/IEC 20000-1: 서비스경영시스템, ISO/IEC 27001: 정보보호경영시스템의 관련 서비스와 연계하여 조직의 효과적인 시스템을 구현할 수 있는 서비스를 제공합니다.<br><br>
                       </span>
					</dd>
				</dl>	
			</li>
			
		</ul>
	</section>
<br>
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
			<ul>
              <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
              <li><p><em><strong>02</strong></em><span>환경 인증</span></p></li>
              <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
              <li><p><em><strong>04</strong></em><span>보건&의료기기 인증</span></p></li>
              <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
              <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
              <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
              <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
              <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
              <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
              <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
              <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
              <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
            </ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>
   </article><!--+++ 03 컨텐츠 /20.06.08 ISO/IEC 27701 탭컨텐츠 영역 종료 +++-->
   
   
   <article style="display:block;"><!--+++ 03 컨텐츠 /20.05.25 탭컨텐츠 영역 시작 +++-->
   <section class="business_type5" class="area">
		<h1><span>ISO/IEC</span> 20000-1</h1>
		<h2>IT서비스경영시스템 인증</h2>		
		<p style="display:inline-block;text-align:justify;">
            Service Management System(SMS)는 조직이 수행하는 IT서비스의 설계, 계획, 제공, 운영 및 제어하기 위해 수행되는 활동에 적용됩니다. ISO/IEC 20000-1은 이러한 유형에 적용되는 최초의 국제 표준이며, 2005년 제정되어 2011년과 2018년 2번의 개정을 거쳐왔습니다.<br>
            ISO/IEC 20000-1은 서비스 요구사항을 충족하고 가치를 제공하기 위한 서비스 계획, 디자인, 전환, 제공 및 개선이 포함됩니다.<br>
		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/iso20000-1_1.jpg" alt="ISO IEC 20000-1 표준구조">
					</dt>
					<dd>
						<strong><span>ISO/IEC</span> 20000-1:2018 요구사항</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                       ISO/IEC 20000-1은 조직 환경, 리더십, 계획, 지원, 운영, 성과 평가 및 개선의 10가지 항목으로 구성되어 있습니다.<br><br>
                       가이드 문서는 ISO/IEC 20000-3을, 모범사례는 ISO/IEC 20000-5를 참조하십시오.<br><br> 
                       이 표준의 요구사항은 조직의 유형, 규모, 특성에 상관없이 서비스를 제공하는 모든 조직에 적용할 수 있도록 일반적인 내용으로 수립되었습니다.<br><br>
                            <span>1.적용범위</span><br><br>
                            <span>2.인용표준</span><br><br>
                            <span>3.용어와 정의</span><br><br>
                            <span>4.조직 상황</span><br><br>
                            <span>5.리더십</span><br><br>
                            <span>6.기획</span><br><br>
                            <span>7.서비스경영시스템의 지원</span><br><br>
                            <span>8.서비스경영시스템의 운용</span><br><br>
                            <span>9.성과 평가</span><br><br>
                            <span>10.개선</span>
                       </span><br><br>
                        <br><br>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso20000-1_2.jpg" alt="ISO/IEC 20000-1의 중요성">
					</dt>
					<dd>
						<strong><span>ISO/IEC </span> 20000-1의 중요성</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                        <br>
                         조직은 ISO/IEC 20000-1 인증을 통하여 다음과 같은 효과를 얻을 수 있습니다.<br><br>
                          a) 서비스 품질 향상<br><br>
                          b) 일관된 서비스 품질 수준 유지<br><br>
                          c) 서비스의 기획, 설계, 전환, 전달 및 개선에 대한 능력을 입증<br><br>
                          d) SMS 및 서비스의 모니터링, 측정 및 검토<br><br>      
                          e) 서비스상품화, 서비스통합, 업체별 공급업체관리, 고객의 서비스 가치결정<br><br>                   
                        </span>
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_9001_03.jpg">
					</dt>
					<dd>
						<strong>IGC인증원의 역량</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                          IGC의 심사원은 부문별 IT 경험과 기술적 자격을 갖춘 전문가로서 ISO/IEC 20000-1 경영시스템의 구현 및 효과에 대한 철저하고 정직한 심사를 제공합니다.<br><br>
                          또한 귀사의 비즈니스 요구에 부합하는 지식과 역량을 갖추고 있으므로 경영시스템의 효과적이고 철저한 심사를 제공합니다.<br><br>
                       <br><br>
                        </span>
					</dd>
				</dl>	
			</li>
		</ul>
	</section>
    <br><br><br><br><br><br>

	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2" style="text-align:justify;margin-right:10px;display:inline-block; width:100%;">
        <h2 class="con_arrow" style="font-size:0.7em;">
			<p>우리가 제공하는 관련 서비스</p>
		</h2>
		<div class="con_box">
		<ul>
              <li><p><em><strong>01</strong></em><span>품질경영 인증</span></p></li>
              <li><p><em><strong>02</strong></em><span>환경 인증</span></p></li>
              <li><p><em><strong>03</strong></em><span>안전보건 인증</span></p></li>
              <li><p><em><strong>04</strong></em><span>보건&의료기기 인증</span></p></li>
              <li><p><em><strong>05</strong></em><span>식품 인증</span></p></li>
              <li><p><em><strong>06</strong></em><span>에너지 경영인증</span></p></li>
              <li><p><em><strong>07</strong></em><span>정보보안 인증</span></p></li>
              <li><p><em><strong>08</strong></em><span>부패방지 인증</span></p></li>
              <li><p><em><strong>09</strong></em><span>교육 인증</span></p></li>
              <li><p><em><strong>10</strong></em><span>사업연속성 인증</span></p></li>
              <li><p><em><strong>11</strong></em><span>화장품 인증</span></p></li>
              <li><p><em><strong>12</strong></em><span>고객만족 인증</span></p></li>
              <li><p><em><strong>13</strong></em><span>사회적 책임 인증</span></p></li>
            </ul>
		</div>
   </section><!---------(주)아이지씨인증원 사업영역 종료 ------>	
   </article><!--+++ /20.05.25 탭컨텐츠 영역  종료+++-->
</div> <!------------ class="tab_con"   종료 ---------------->
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>