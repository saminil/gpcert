<?php
	include_once('./_common.php');
$g5['title'] = '식품 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<!------ Existing File Codings  시작----->

<style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:1rem; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:0px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style>
<!------ Existing File Codings  종료----->


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
    /* *:lang(en) {}  */    /* 여기 때문에 우측 아이콘 & 메인 메뉴 우측 아이콘 충돌 발생함.  */
    /* *:lang(ko) {font-family: 'Noto Sans', sans-serif;} */    /*  여기 때문에 우측 아이콘 & 메인 메뉴 우측 아이콘 충돌 발생함. */
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center;  color:#666; margin-top:20px; }

		
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
	.business_type5 ul li dl dd{width:60%; padding:50px 0; padding-top:30px; padding-left:5%;}
	.business_type5 ul li dl dd > strong{display:block; font-size:2em; line-height:80px; color:#111; font-weight:500;}
	.business_type5 ul li dl dd > p{font-size:1em; line-height:40px; color:#111; letter-spacing:-0.75px; font-weight:300; word-break:keep-all; padding-left:15px; position:relative;}
	.business_type5 ul li dl dd > p:before{display:inline-block; position:absolute; left:0; top:17px; content:""; width:6px; height:6px; background-color:#0263ac; border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%;}
    
    
    /* FSSC 22000 시작 */
    .business_type6 h1{font-size:3em; font-weight:700; color:#111; text-align:center;  margin:0 auto; margin-bottom:0px; }
	.business_type6 h2{font-weight:700; font-size:2em; color:#0078D7; text-align:center; margin-bottom:25px;}
	.business_type6 h2:after{display:block; position:relative; bottom:0; left:50%; margin-left:-2px; content:""; width:2px; height:30px; background-color:#195883; margin-top:20px;}
	.business_type6 h3{font-size:1.1em; color:#666; text-align:center; margin-bottom:50px;}
	.business_type6 h3 br.sn{display:none;}
	.business_type6 ul{width:100%;}
	.business_type6 ul > li{width:100%; border-bottom:1px solid #d1d1d1; overflow:hidden;}
	.business_type6 ul > li:first-child{border-top:1px solid #d1d1d1;}
	.business_type6 ul > li:nth-child(odd){background-color:#f4f4f4;}
	.business_type6 ul li dl{display:table;}
	.business_type6 ul li dl dt, .business_type5 ul li dl dd{display:table-cell; vertical-align:middle;}
	.business_type6 ul li dl dt{width:40%; padding-left:5%;}
	.business_type6 ul li dl dt img{max-width:100%; margin:0 auto;}	
	.business_type6 ul li dl dd{width:100%; padding:50px 0px; padding-top:30px; padding-left:5%;}
	.business_type6 ul li dl dd > strong{display:block; font-size:2em; line-height:80px; color:#111; font-weight:500;}
	.business_type6 ul li dl dd > p{font-size:1em; line-height:40px; color:#111; letter-spacing:-0.75px; font-weight:300; word-break:keep-all; padding-left:15px; position:relative;}
	.business_type6 ul li dl dd > p:before{display:inline-block; position:absolute; left:0; top:17px; content:""; width:6px; height:6px; background-color:#0263ac; border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%;}
     /* FSSC 22000 종료 */
    
    /* FDA FSMA 시작  */
    .business_type7 h1{font-size:3em; font-weight:700; color:#111; text-align:center;  margin:0 auto; margin-bottom:0px; }
	.business_type7 h2{font-weight:700; font-size:2em; color:#0078D7; text-align:center; margin-bottom:25px;}
	.business_type7 h2:after{display:block; position:relative; bottom:0; left:50%; margin-left:-2px; content:""; width:2px; height:30px; background-color:#195883; margin-top:20px;}
	.business_type7 h3{font-size:1.1em; color:#666; text-align:center; margin-bottom:50px;}
	.business_type7 h3 br.sn{display:none;}
	.business_type7 ul{width:100%;}
	.business_type7 ul > li{width:100%; border-bottom:1px solid #d1d1d1; overflow:hidden;}
	.business_type7 ul > li:first-child{border-top:1px solid #d1d1d1;}
	.business_type7 ul > li:nth-child(odd){background-color:#f4f4f4;}
	.business_type7 ul li dl{display:table;}
	.business_type7 ul li dl dt, .business_type5 ul li dl dd{display:table-cell; vertical-align:middle;}
	.business_type7 ul li dl dt{width:40%; padding-left:5%;}
	.business_type7 ul li dl dt img{max-width:100%; margin:0 auto;}	
	.business_type7 ul li dl dd{width:100%; padding:50px 0; padding-top:30px; padding-left:5%;}
	.business_type7 ul li dl dd > strong{display:block; font-size:2em; line-height:80px; color:#111; font-weight:500;}
	.business_type7 ul li dl dd > p{font-size:1em; line-height:40px; color:#111; letter-spacing:-0.75px; font-weight:300; word-break:keep-all; padding-left:15px; position:relative;}
	.business_type7 ul li dl dd > p:before{display:inline-block; position:absolute; left:0; top:17px; content:""; width:6px; height:6px; background-color:#0263ac; border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%;}
    /* FDA FSMA 종료  */
    
    /* Global HACCP 시작 */
    .business_type8 h1{font-size:3em; font-weight:700; color:#111; text-align:center;  margin:0 auto; margin-bottom:0px; }
	.business_type8 h2{font-weight:700; font-size:2em; color:#0078D7; text-align:center; margin-bottom:25px;}
	.business_type8 h2:after{display:block; position:relative; bottom:0; left:50%; margin-left:-2px; content:""; width:2px; height:30px; background-color:#195883; margin-top:20px;}
	.business_type8 h3{font-size:1.1em; color:#666; text-align:center; margin-bottom:50px;}
	.business_type8 h3 br.sn{display:none;}
	.business_type8 ul{width:100%;}
	.business_type8 ul > li{width:100%; border-bottom:1px solid #d1d1d1; overflow:hidden;}
	.business_type8 ul > li:first-child{border-top:1px solid #d1d1d1;}
	.business_type8 ul > li:nth-child(odd){background-color:#f4f4f4;}
	.business_type8 ul li dl{display:table;}
	.business_type8 ul li dl dt, .business_type5 ul li dl dd{display:table-cell; vertical-align:middle;}
	.business_type8 ul li dl dt{width:40%; padding-left:5%;}
	.business_type8 ul li dl dt img{max-width:100%; margin:0 auto;}	
	.business_type8 ul li dl dd{width:100%; padding:50px 0; padding-top:30px; padding-left:5%;}
	.business_type8 ul li dl dd > strong{display:block; font-size:2em; line-height:80px; color:#111; font-weight:500;}
	.business_type8 ul li dl dd > p{font-size:1em; line-height:40px; color:#111; letter-spacing:-0.75px; font-weight:300; word-break:keep-all; padding-left:15px; position:relative;}
	.business_type8 ul li dl dd > p:before{display:inline-block; position:absolute; left:0; top:17px; content:""; width:6px; height:6px; background-color:#0263ac; border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%;}
    /* Global HACCP 종료 */

    /* (주)아이지씨인증원 사업영역 시작  */	
    .partner_type2 {width:100%;}/* 우리가 제공하는 서비스 => 전체 가로 폭 100% */
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
		.s_tit{}
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
        
        .business_type6 h1{font-size:2.3em; }
		.business_type6 h2{font-size:1.9em; }
		.business_type6 h3{font-size:1.6em; padding:0 5px;}
		.business_type6 ul li dl, .business_type5 ul li dl dt, .business_type5 ul li dl dd{display:block; width:100%;}
		.business_type6 ul li dl dt{padding:5%;}
		.business_type6 ul li dl dt img{width:91%;}
		.business_type6 ul li dl dd > strong{line-height:30px; font-size:1.3em;}
		.business_type6 ul li dl dd{width:90%; padding:5%; padding-top:0;}
		.business_type6 ul li dl dd > p{line-height:24px; font-size:0.95em;}
		.business_type6 ul li dl dd > p:before{top:10px;}
                
        .business_type7 h1{font-size:2.3em; }
		.business_type7 h2{font-size:1.9em; }
		.business_type7 h3{font-size:1.6em; padding:0 5px;}
		.business_type7 ul li dl, .business_type5 ul li dl dt, .business_type5 ul li dl dd{display:block; width:100%;}
		.business_type7 ul li dl dt{padding:5%;}
		.business_type7 ul li dl dt img{width:91%;}
		.business_type7 ul li dl dd > strong{line-height:30px; font-size:1.3em;}
		.business_type7 ul li dl dd{width:90%; padding:5%; padding-top:0;}
		.business_type7 ul li dl dd > p{line-height:24px; font-size:0.95em;}
		.business_type7 ul li dl dd > p:before{top:10px;}
        
        .business_type8 h1{font-size:2.3em; }
		.business_type8 h2{font-size:1.9em; }
		.business_type8 h3{font-size:1.6em; padding:0 5px;}
		.business_type8 ul li dl, .business_type5 ul li dl dt, .business_type5 ul li dl dd{display:block; width:100%;}
		.business_type8 ul li dl dt{padding:5%;}
		.business_type8 ul li dl dt img{width:91%;}
		.business_type8 ul li dl dd > strong{line-height:30px; font-size:1.3em;}
		.business_type8 ul li dl dd{width:90%; padding:5%; padding-top:0;}
		.business_type8 ul li dl dd > p{line-height:24px; font-size:0.95em;}
		.business_type8 ul li dl dd > p:before{top:10px;} 
	}

	@media all and (max-width:480px){
		.business_type5 h3 br.sn{display:inline;}
	}

</style>


<div class="content_wrap">

 <!--+++ 20.05.13 탭메뉴/ 시스템인증 > 보건 및 의료기기 시작 +++-->
	<div class="tab_menu tab01">
		<ul style="display:inline-block;position:relative;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">ISO 22000</a></li>
			<li><a href="javascript:;">FSSC 22000</a></li>
			<li class="on"><a href="javascript:;">FDA FSMA</a></li>
			<li><a href="javascript:;">Global HACCP</a></li>
		</ul>
	</div><!--+++ 20.05.11 탭메뉴/ 시스템인증 > 보건 및 의료기기 종료 +++-->

<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

  <div class="tab_con">  <!--+++ 20.05.13 탭컨텐츠 영역 시작 +++-->
	<article>    <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	<section class="business_type5" class="area">
		<h1><span>ISO</span> 22000 </h1>
		<h2>식품안전 경영시스템 인증</h2>		
		<p style="display:inline-block;text-align:justify;">
            ISO 22000은 장비의 생산, 재료 포장, 세제, 첨가제 및 원료 등의 관련 기업을 포함하여 전체 식품 체인 비즈니스에 적합한 국제적인 표준입니다. ISO 22000은 ISO 9001 및 HACCP의 주요 내용이 혼합 및 보완된 규격으로, 이로 인해 식품안전경영시스템(FSMS)의 개발, 수행 및 지속적 개선을 위한 효과적인 프레임워크를 제공합니다. 
		</p>
		<br><br>
			2018년 6월 ISO 22000이 전면 개정됨에 따라, 기존 ISO 22000:2005 인증서는 2021년 6월 1일에 만료됩니다. 기존 ISO 22000:2005 고객은 만료일 이전까지 ISO 22000:2018로의 전환이 완료되어야 하며, 2020년 6월 이후로 모든 신규, 갱신 고객은 ISO 22000:2018로 인증을 받아야 합니다.<br><br>
            ISO 22000:2018의 주요한 변경사항은 다음과 같습니다.<br><br>
            &#10021;	리더십의 책임에 관한 보다 강력한 강조<br>
            &#10021;	식품안전 경영시스템 개발에서의 리스크 기반 접근법을 적용<br>
            &#10021;	다음을 포함한 주요 개념의 명백화<br>
                &nbsp; &nbsp; &#8227;계획-실행-확인-조치(Plan-Do-Check-Act) 사이클: 하나는 경영 시스템을 다루고, 하나는 HACCP원칙을 다루는 두 개의 개별 사이클을 가지고<br> 
                &nbsp; &nbsp; 이 표준 내에서 함께 작동<br>
                &nbsp; &nbsp; &#8227;중요관리점(CCPs), 운용선행요건프로그램(Operational PRPs), 선행요건 프로그램(PRPs)를 포함한 주요 용어의 차별화<br>
            &#10021;	High Level Structure 구조를 가진 표준의 내용 재배치를 통해 다른 ISO 경영 시스템과의 개선된 범용성<br>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/iso_22000_01.jpg" alt="ISO 22000 요구사항">
					</dt>
					<dd>
						<strong><span>ISO</span> 22000:2018 요구사항</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                         ISO 22000:2018은 ISO 9001:2015 등 규격에 적용되는 High Level Structure가 적용되어, 다른 규격과 통합하여 관리가 가능합니다. 또한, 일관된 구조와 정의, 용어 사용으로 표준의 명확성 및 적용 가능성이 향상됩니다.
                       <br><br>
                           1. 적용범위<br><br>
                           2. 인용표준<br><br>
                           3. 용어와 정의<br><br>
                           4. 조직 상황<br><br>
                           5. 리더십<br><br>
                           6. 기획<br><br>
                           7. 지원<br><br>
                           8. 운용<br><br>
                           9. 성과 평가<br><br>
                           10.개선<br><br>
                        </span>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso_22000_02.jpg" alt="ISO 22000 인증의 중요성">
					</dt>
					<dd>
						<strong><span>ISO</span> 22000의 중요성</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                       ISO 22000은 국제식품규격위원회가 개발한 위해요소중점관리기준(HACCP) 시스템의 원칙과 적용단계를 통합하고 있습니다. <br>이 표준은 프로세스 형태 및 사용시설과 관련될 수 있는 위해요소를 포함하여, 식품사슬에서 발생할 것이 예측되는 모든 위해요소를 파악하고 평가하도록 요구하고 있습니다. 따라서 ISO 22000은 파악된 위해요소 중 관리될 필요가 있는 것과 없는 것을 구분하도록 도와주고 문서화를 위한 수단을 제공합니다.
                        <br><br>
                        <strong >이 규격은 다음 사항들에 도움을 줍니다.</strong><br><br>
                            <p>1. 구축과정에서 효과적인 식품안전 경영시스템 관리수단의 확립 및 위험 최소화</p><br>
                            <p>2. 고객 신뢰성 확보 </p><br>
                            <p>3. 종업원의 책임의식 향상 </p><br>
                            <p>4. 비즈니스의 지속가능성 향상 </p><br><br>
                        <strong >이 규격은 다음을 포함한 식품 체인 내 직접 또는 간접 관여된 모든 조직에 적용 가능합니다.</strong><br><br>
                            <p>1. 농장, 어류 및 낙농장 </p><br>
                            <p>2. 고기, 어류 및 사료 생산</p> <br>
                            <p>3. 빵, 씨리얼, 음료 및 냉동식품 제조사</p><br>
                            <p>4. 레스토랑, 패스트푸드 체인점, 병원, 호텔 및 출장 연회를 포함한 식품 서비스 제공자</p><br>
                            <p>5. 식품 보관 및 납품, 식품 가공 기계, 첨가제, 원재료, 청소 및 살균 제품 및 포장지 납품업체</p><br>
                        결론적으로 일부 또는 모든 ISO 22000 요구사항들은 식품 산업 또는 식품 체인 관련 모든 제품에 적용될 것입니다.
                          </span> 
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/iso_22000_03.jpg" alt="ISO 22000 인증의 기대효과">
					</dt>
					<dd>
						<strong><span>ISO</span> 22000 기대효과</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                         
                           1. 고객 만족: 품질, 안전 및 적법성을 포함한 고객 요구사항을 지속적으로 충족하는 제품 납품을 통해 달성<br><br>
                           2. 운영 비용 감소: 지속적 프로세스 개선 및 운영 효율성으로 인한 비용 감소<br><br>
                           3. 운영 효율성: 선행 요건 (PRPs & OPRPs) 및 ISO 9001 계획-실행-검토-조치 철학 통합을 통해, 식품안전경영시스템 효과성 증가<br><br>
                           4. 주주 관계 개선: 직원, 고객 및 납품업체 포함<br><br>
                           5. 법규 준수: 내부심사 및 경영검토를 통해 법적/규제적 요구사항이 어떻게 귀사, 고객 및 시험 규정 준수에 영향을 끼치는지 이해<br><br>
                           6. 리스크 관리 개선: 제품 일치성 및 추적성 증가를 통해 달성<br><br>
                           7. 검증된 사업 신뢰도: 인정된 규격에 대한 독립적 검증을 통해 달성<br><br>
                           8. 사업 확대: 특히 고객은 납품 조건으로 인증서를 요구하는 경우 해당<br><br>
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
						<strong>IGC 인증원의 역량</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                         IGC는 미국의 인정기구인 IAS로부터 ISO 22000에 대한 인정을 받아 경영시스템에 대한 인증 서비스를 제공하고 있습니다. IGC는 글로벌 경쟁력을 기반으로 ISO 22000 인증 외에 식품분야에 대하여 다양한 서비스를 제공하고 있습니다.<br><br>
                         
                            <span>1. FSSC 22000 인증</span><br><br>
                            <span>2. ISO 22000 심사원 교육</span><br><br>
                            <span>3. Vegan 인증</span><br><br>
                            <span>4. 식품 시험 (ISO 17025인정)</span><br><br>
                            <span>5. FDA FSMA 3자 인증기관</span><br><br>
                            <span>6. PCQI Lead Instructor 보유 (2명)</span>
                       </span><br><br>
					</dd>
				</dl>	
			</li>
		</ul>
	</section>
<br><br>
	<!----(주)아이지씨인증원 사업영역=우리가 제공하는 서비스 시작-------->
	<section class="partner_type2" style="font-size:1.5em;text-align:justify;margin-right:10px;display:inline-block;">
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
   </section><!---------(주)아이지씨인증원 사업영역=우리가 제공하는 서비스 종료 ------>	
</article> <!--------+++++++/ <article style="display:block"> 종료 /++++++++----------->


<article><!--------+++++++/ 컨텐츠 02 시스템인증 > 식품 인증 > FSSC 22000  시작 /++++++++----------->
   <section class="business_type6" class="area">
		<h1><span>FSSC</span> 22000</h1>
		<h2>식품안전 시스템 인증</h2>		
		<p style="display:inline-block;text-align:justify;">
            FSSC 22000 (Food Safety System Certification) 표준은 식품제조회사들에게 가장 영향력 있는 국제식품안전기구 (GFSI: Global Food Safety Initiative)가 식품산업 전반에 적합한 식품안전인증제도를 도입하기 위하여 승인한 식품 안전 표준입니다.<br><br>
                 
            세계 인구가 증가함에 따라 저렴하고 안전하며 양질의 식품에 대한 수요가 증가하고 있습니다. 이러한 요구를 충족시키기 위해 FSSC 22000은 신뢰할 수 있는 식품 안전 플랫폼을 식품 업계에 제공합니다.
            FSSC 22000은 ISO 22000을 기반으로 식품 및 그 성분의 공급자에 대한 분야별 선행요건 프로그램(PRPs)과 추가적인 FSSC 22000 요구사항을 조합한 것으로, 조직의 규모, 복잡성, 위치에 관계없이 모든 식품 제조기업에 적용됩니다. 또한, 수송 및 생산현장에서의 보관도 인증 범위에 포함됩니다. <br><br>
            </p>
             <div style="text-align: center;margin:0 auto;width:60%;">
		        <img src="./image/FSSC22000_01.jpg" alt="FSSC 22000 식품안전 시스템 인증">
	       </div><br><br>
         <p style="display:inline-block;text-align:justify;">   
            IGC는 IAS로부터 인정받은 FSSC 22000 인증 기관으로써, 국내 인증원 중 가장 많은 FSSC 22000 인증 scope와 고객 수를 보유하고 있습니다.
            따라서, FSSC 22000 인증을 받은 식품 제조 업체는 GFSI 승인 규격의 국제적 수요 증가에 따라 바이어들로부터 많은 신뢰를 받을 수 있고, 특히 IGC에서 받은 FSSC 22000 인증서를 통해 신뢰성 있는 인증원으로부터 인증서를 획득하였다는 점을 증명함으로써 업체의 이미지 제고 및 경쟁력 강화에 도움이 될 수 있습니다.<br><br>
		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/FSSC22000_05.jpg" alt="FSSC 22000 요구사항">
					</dt>
					<dd>
						<strong><span>FSSC</span> 22000 요구사항</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                       FSSC 22000 요구사항은 다음과 같은 항목으로 구성되어 있습니다.
                       <br><br>
                       &#10049;	ISO 22000:2018<br><br>
                       &#10049;	PRP (선행요건 프로그램) <br>
                            <p>&nbsp; &nbsp; &#10048;	ISO 22002-1 (식품 제조)<br></p>
                            <p>&nbsp; &nbsp; &#10048;	ISO 22002-4 (식품 포장재 제조)<br></p>
                            <p>&nbsp; &nbsp; &#10048;	PAS 221 (식품 도매 및 소매)<br><br></p>
                       &#10049;	FSSC 22000 추가 요구사항 <br>
                            <p>&nbsp; &nbsp; &#10048;	서비스의 관리<br></p>
                            <p>&nbsp; &nbsp; &#10048;	제품 라벨링<br></p>
                            <p>&nbsp; &nbsp; &#10048;	식품 방어<br></p>
                            <p>&nbsp; &nbsp; &#10048;	식품 사기 완화<br></p>
                            <p>&nbsp; &nbsp; &#10048;	로고 사용<br></p>
                            <p>&nbsp; &nbsp; &#10048;	알레르기 유발물질의 관리<br></p>
                            <p>&nbsp; &nbsp; &#10048;	환경 모니터링 (카테고리 C, I에 해당)<br></p>
                            <p>&nbsp; &nbsp; &#10048;	운송 및 배송 (카테고리 FI에 해당)<br><br></p>
                       FSSC 요구사항은 FSSC 22000 웹사이트에 공개되어 있으며, 하기 url을 통해 확인하실 수 있습니다.<br><br>
                       <p><a href="https://www.fssc22000.com/wp-content/uploads/19.0528-FSSC-22000-Scheme-Version-5.pdf" target="_blank">< "FSSC 22000 요구사항(PDF파일)" 확인 바로가기 &#9756;Click! ></FSSC></a></p><br>
                       PDF 파일 url : <br>https://www.fssc22000.com/wp-content/uploads/19.0528-FSSC-22000-Scheme-Version-5.pdf <br>
                        </span>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/FSSC22000_02.jpg" alt="FSSC 22000 인증의 필요성 및 장점">
					</dt>
					<dd>
						<strong><span>FSSC</span> 22000의 중요성</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                            <strong style="font-weight:bold;">인증의 필요성</strong><br><br>
                              1. 소비자의 식품에 대한 안정성 의식 증대 및 안전에 대한 정확한 관리 요구 증대<br>
                              2. 국내/외 바이어들이 식품 안전을 보증할 수 인증 요구에 따라 ISO 22000 등을 포괄할 수 있는 인증의 필요성 증대<br>
                              3. 식품안전에 따른 국제 상거래에 있어서의 무역장벽요소 대두<br>
                              4. 식품안전사고의 사전예방 및 비상사태에 대한 대응<br>
                              5. 식품관련 공급자, 내부 및 협력업체 등 관련자와의 효과적인 의사소통<br>
                              6. 식품안전 관리수준 향상 및 사전예방<br><br><br>
                            <strong style="font-weight:bold;">인증의 장점</strong><br><br>
                              1. 위생관리 시스템 효율성 극대화<br>
                              2. 국내/외 식품안전 규정 및 법규 강화에 따른 대응 용이<br>
                              3. 식품 관련 법률 준수<br>
                              4. 공급체인과의 의사소통 원활<br>
                              5. 식품 업계 종사자의 책임의식 상향화<br>
                              6. 식품과 관련한 다양한 프로그램을 통합적으로 운영 (HACCP, PRPs, Food Defense & Fraud)<br>
                              7. FSSC 22000 인증 유지에 따른 회사 이미지 제고, 신뢰성 향상 및 수출증대 효과<br>
                        </span>
					</dd>
				</dl>			
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/FSSC22000_03.jpg" alt="FSSC 22000 IGC인증원의 역량">
					</dt>
					<dd>
						<strong style="">IGC 인증원의 역량</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                      IGC는 미국의 인정기구인 IAS로부터 FSSC 22000에 대한 인정을 받아 경영시스템에 대한 인증 서비스를 제공하고 있습니다. IGC는 글로벌 경쟁력을 기반으로 FSSC 22000 인증 외에 식품분야에 대하여 다양한 서비스를 제공하고 있습니다.<br><br><br>
                      
                       1. FSSC 22000 Training Organization (FSSC 22000 Foundation 공식 지정 교육기관)<br><br>
                       2. ISO 22000 인증<br><br>
                       3. Vegan 인증<br><br>
                       4. 식품 시험 (ISO 17025인정)<br><br>
                       5. FDA FSMA 3자 인증기관<br><br>
                       6. PCQI Lead Instructor 보유 (2명)
                       <br><br>
                       </span><br><br>
					</dd>
				</dl>	
			</li>
			
		</ul>
	</section>
<br><br>
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2" style="font-size:1.5em;text-align:justify;margin-right:10px;display:inline-block;">
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
</article><!--------+++++++/ 컨텐츠 02  시스템인증 > 식품 인증 > FSSC 22000  종료 /++++++++----------->


<article style="display:block;"><!--------+++++++/ 컨텐츠 03 시스템인증 > 식품 인증 > FDA FSMA 시작 /++++++++----------->
   <section class="business_type7" class="area">
		<h1><span>FDA </span> FSMA </h1>
		<h2>식품안전 경영시스템 인증</h2>		
		<p style="display:inline-block;text-align:justify;">
           <span style="font-size:1.6em;color:#1f2558">FSMA (식품안전현대화법, Food Safety Modernization Act)</span><br><br>
            2011년 01월 04일, 미국정부는 사전예방을 통한 식품공급 안전성 및 국민건강 보호를 목적으로 식품안전현대화법 (Food Safety Modernization Act, FSMA)을 제정하였습니다. 이에 따라 FDA는 FSMA 제정으로 식품안전문제를 예방하는데 초점을 맞출 수 있게 되었습니다. FSMA의 적용대상은 식품이나 사료를 제조, 가공, 포장 또는 보관하는 시설입니다. 또한 생산농가, US 수입업체, 화주업체, 수취업체, 선적업체, 운송업체 등 미국으로 식품을 보내는 업체도 FSMA를 준수해야 합니다. 따라서 업체들은 FSMA에 따라 위해요소 분석에 기반한 예방관리가 포함된 식품안전시스템을 구축하고, 문서화된 식품안전계획서를 작성하는 등의 각종 준비가 필요합니다.
		</p><br><br>
                        <span style="text-align:justify;margin-right:10px;display:inline-block;">
                        <strong style="font-weight:bold;">
                        </strong><br>
                        </span><br>
                        <div style="display:block;width:50%;margin:0 auto;">
                        <img src="./image/FDA_FSMA_01.jpg" alt="세계식품 안전 기구 로고">
                        <br><br><br>
                        </div>
		<br><br>

		<ul>
			<li style="display:block;background-color:#ffffff;">
				<dl>
					<dd>
						<strong style="color:#1f2558"><span style="font-family:">FSMA</span>  제 3자 인증</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                       IGC는 미국 FDA와 IAS로부터 전 세계 7번째, 국내에서는 최초로 FDA FSMA 제 3자 인증기관으로 인정받았습니다.
                       </span><br><br>
                         <div style="width:100%;">
                       	   <img src="./image/FDA_FSMA_02.jpg" alt="FDA FSMA 제3자인증기관 인증서 샘플1" style="display:block;float:left;width:40%; padding:5px;margin:0 auto;" > 
					       <img src="./image/FDA_FSMA_03.jpg" alt="FDA FSMA 제3자인증기관 인증서 샘플2" style="width:40%;padding:5px;display:block;margin:0 auto;">
					     </div>
                       <br>
                        <span style="font-weight:bold;"><a href="https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification" target="_blank">인정 정보 확인 Click </a></span><br>
                        <a href="https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification" target="_blank">https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification </a>
                      <br><br> 
                      <span style="text-align:justify;margin-right:10px;display:inline-block;">
                       FSMA에는 ‘공인된 제 3자 인증 프로그램 (Accredited Third-Party Certification Program)’이라는 규정이 있습니다. 본 프로그램은 미국 외 지역에서 생산되어 미국으로 수입되는 식품들의 생산시설들이 FSMA에서 요구하는 규정을 잘 준수하고 있는지 공인된 제 3의 기관이 심사를 하여 요구사항을 충족하는 경우 인증서를 발행하는 프로그램입니다. 
                       이렇게 발행된 인증서는 자발적 적격 수입업자 프로그램 (Voluntary Qualified Importer Program, VQIP)의 참여 자격을 얻는데 사용하거나 미국 소비자들에게 위해가 될 수 있는 식품의 반입을 예방하기 위해 FDA가 인증서를 요구할 경우 사용됩니다.
                       </span>
                        <br><br>
                        <span style="text-align:justify;margin-right:10px;display:inline-block;">
                        <strong style="font-weight:bold;">
                        1. VQIP (Voluntary Qualified Importer Program)</strong><br> 
                        FDA가 식품 수입 업체들에게 통관 혜택을 주어 해당 식품을 미국에 신속하게 들여올 수 있도록 하는 프로그램
                        </span><br><br>
                        <span style="text-align:justify;margin-right:10px;display:inline-block;">
                        <strong style="font-weight:bold;">
                        2.인증절차</strong><br> 
                        인증 신청 &#8658; 계약 체결 &#8658; 심사비 납부 &#8658; 서류 제출 &#8658; 1단계 심사 &#8658; 인증심의 (1단계) &#8658; 2단계 심사 &#8658; 인증 심의 (2단계) &#8658; 인증서 발행 &#8658; 사후심사 &#8658; 재인증 심사
                        </span><br><br>
                        <span style="text-align:justify;margin-right:10px;display:inline-block;">
                        <strong style="font-weight:bold;">
                        3.제3자 인증 프로세스</strong><br>
                        </span><br>
                        <div style="display:block;width:50%;margin:0 auto;">
                        <img src="./image/FDA_FSMA_04.jpg" alt="FDA FSMA 제3자인증기관 인증서 샘플2">
                        </div>
                        <span style="display:block;text-align:center;">미국 식품안전현대화법 대응 가이드북</span>
                        <br><br><br>
                        <span style="text-align:justify;margin-right:10px;display:inline-block;">
                        <strong style="font-weight:bold;">
                        4.공인된 제3자 인증의 면제 대상 ★</strong><br> 
                          - 특정 상황에서 외국 시설에서 제조한 알코올 음료<br>
                          - 수입시점에서 USDA가 감독하는 특정 육류, 가금류 및 계란제품<br>
                        </span><br><br>
					</dd>
				</dl>
			</li>
			
			
			<li>
				<dl>
					<dt>
						<img src="./image/FDA_FSMA_05.jpg" alt="FDA FSMA 제3자 인증 준비사항">
					</dt>
					<dd>
						<strong style="color:#1f2558"><span>FSMA</span> 제3자 인증 준비사항</strong>
				        <span style="text-align:justify;margin-right:10px;display:inline-block;">
                          식품시설은 위해요소 분석과 위해를 기반으로 한 예방관리를 포함하는 식품안전시스템을 구축하고 실행해야 합니다. 또한 식품안전계획서를 반드시 서면으로 작성하고 식품안전계획서는 자격을 갖춘 식품예방관리전문가 (PCQI, Preventive    Control Qualified Individual)에 의해 검토되어야 합니다. <br><br>
                          식품안전시스템에는 다음의 내용을 포함하는 식품안전계획을 설정하여야 합니다.<br><br>
                          1. 위해요소 분석<br><br>
                          2. 예방관리 (공정, 식품 알레르기 유발물질, 위생, 공급망 및 기타, 회수계획)<br><br>
                          3. 예방관리의 감시 및 운영<br><br>
                          4. 시정조치 및 시정<br><br>
                          5. 검증<br><br>
                          식품안전계획에는 회수계획을 세워 식품안전에 문제가 되는 제품에 대해서는 회수조치 가능하도록 작성해야 합니다. 이에 대응해 IGC는 미국시장에 수출하고 있거나 수출을 계획 중인 식품업체들을 위한 식품예방관리전문가 (PCQI) 교육과정 또한 마련하고 있습니다.
                     </span>
					</dd>
				</dl>
			</li>

			
			<li>
				<dl>
					<dt>
						<img src="./image/FDA_FSMA_06.jpg" alt="FDA FSMA 제3자 인증 준비사항">
					</dt>
					<dd>
						<strong style="color:#1f2558"><span>FSMA</span> 제3자 인증의 중요성</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                       FSMA는 식품 안전의 중점을 예방에 둠으로써, 미국 및 미국 이외 국가의 식품 제조업자, 시설 및 수입업체에 새로운 사항들을 요구합니다. 따라서 미국 시장에 제품을 판매하고 유통하려면 새로운 요구사항을 준수해야 합니다. 이와 같이 FSMA에 대응해 미국시장에 식품 수출을 원활히 추진하기 위해서는 미국으로 식품을 수출하는 기업들의 세심한 준비가 필요합니다.
                        </span><br><br>
					</dd>
				</dl>			
			</li>
			<li>
				<dl>
					<dt>
						<img src="./image/ISO_9001_03.jpg">
					</dt>
					<dd>
						<strong>IGC 인증원의 역량</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                        &#10052; IGC는 미국 FDA와 IAS로부터 전 세계 7번째, 국내에서는 최초로 FDA FSMA 3자 인증기관으로 인정받았습니다.<br><br> 
                        &#10052; IGC는 식품 시험소 운영 및 다양한 식품 관련 인증을 진행하고 있기에 식품안전 규정에 관한 광범위한 지식을 보유하고 있습니다. <br><br>
                        &#10052; IGC는 고객들을 위해 빠르고 정확한 서비스를 제공하며, 고객이 올바른 선택을 하고 FSMA 준수 서비스를 통해 실사를 입증하도록 도와드립니다. <br><br>
                        &#10052; IGC는 FDA FSMA 3자 인증의 선두기관으로서 빠르고 정확한 인증서비스를 제공합니다. <br>
                       </span><br><br>
					</dd>
				</dl>	
			</li>
		</ul>
	</section>
<br><br><br><br><br><br>
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2" style="font-size:1.5em;text-align:justify;margin-right:10px;display:inline-block;">
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
</article><!--------+++++++/ 컨텐츠 03  시스템인증 > 식품 인증  종료 /++++++++----------->


<article><!--------+++++++/ 컨텐츠 04 시스템인증 > 식품 인증 > Global HACCP 시작 /++++++++----------->
   <section class="business_type8" class="area">
		<h1><span>Global HACCP</span></h1>
		<h2>식품 안전에 대한 국제 권장 사항</h2>		
		<p style="display:inline-block;text-align:justify;">
            국제식품규격위원회 (CODEX)에서는 HACCP 적용을 위한 지침을 제시하여 전 세계적으로 이 지침에 의거하여 HACCP을 적용하고 있습니다. <br><br>
            HACCP 은 원료 생산, 조달 및 취급에서 완제품 제조 및 유통, 소비에 이르기까지 생물학적, 화학적, 물리적 위험에 대한 분석 및 제어를 통해 식품안전을 다루는 관리 시스템입니다.<br><br>
            HACCP 기반 시스템은 1 차 생산을 제외하고는 모든 국가에서 미국과 EU를 포함한 여러 국가에서 법적 요구사항입니다.<br><br>
            HACCP 준수를 통해 식품안전에 대한 진정한 의지를 증명하는 것은 브랜드를 변화시키고 효과적인 시장 진출 도구로서의 역할을 수행하여 전세계의 새로운 비즈니스 기회를 열어줍니다.<br>
		</p>
		<br><br><br><br>
		<ul>
			<li>
				<dl>
					<dt>
						<img src="./image/Global HACCP_01.jpg" alt="Global HACCP7원칙">
					</dt>
					<dd style="display:block;margin-left:15%;">
						<strong><span>Global HACCP 7원칙</span> </strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                         국제식품규격위원회 (CODEX)에서는 HACCP 적용을 위한 7원칙 지침을 제시하였다
                           <br><br>
                         1.	위해요소분석 실시<br><br>
                         2.	중요관리점 결정<br><br>
                         3.	한계기준 결정<br><br>
                         4.	중요관리점에 대한 모니터링 방법 설정<br><br>
                         5.	모니터링 결과 중요관리점 관리 상태 위반시 개선조치 설정<br><br>
                         6.	HACCP가 효과적으로 시행되는지 검증<br><br>
                         7.	HACCP원칙 및 적용에 대한 문서화 및 기록 방법 설정 <br>                       
                        </span>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt>
						<img src="./image/Global HACCP_02.jpg" alt="HACCP의 중요성">
					</dt>
					<dd>
						<strong><span>HACCP의 중요성</span></strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                       국제식품규격위원회 (CODEX)가 개발한 위해요소중점관리기준(HACCP) 시스템의 원칙은 ISO 22000, FSSC 22000, FSMA 등 많은 인증 스킴의 기반이 되고 있습니다. 이 지침은 프로세스 형태 및 사용시설과 관련될 수 있는 위해요소를 포함하여, 식품사슬에서 발생할 것이 예측되는 모든 위해요소를 파악하고 평가하도록 요구하고 있습니다.  
                        <br><br>
                        Global HACCP를 통하여 조직은 다음과 같은 효과를 기대할 수 있습니다.<br><br>
                         1. 구축과정에서의 효과적인 식품안전 경영 시스템 관리수단의 확립 및 위험 최소화<br><br>
                         2. 고객 신뢰성 확보<br><br>
                         3. 종업원의 책임의식 향상<br><br>
                         4. 비즈니스의 지속 가능성 향상<br><br>
                          </span>
					</dd>
				</dl>			
			</li>
	
			<li>
				<dl>
					<dt>
						<img src="./image/Global HACCP_03.jpg" alt="IGC의 역량">
					</dt>
					<dd>
						<strong>IGC 인증원의 역량</strong>
						<span style="text-align:justify;margin-right:10px;display:inline-block;">
                         IGC는 풍부한 경험과 전문지식을 보유한 다수의 숙달된 심사원을 보유하고 있습니다. <br><br>
                         IGC는 ISO 22000, FSSC 22000 및 EAC인증과 FSVP, PCQI 전문가 양성 과정을 통한 추가지원으로 귀사의 성장을 위해 필요한 과정을 빠르고 정확하게 지원합니다.
                       </span><br><br>
					</dd>
				</dl>	
			</li>
		</ul>
	</section>
<br><br><br><br><br><br>
	<!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2" style="font-size:1.5em;text-align:justify;margin-right:10px;display:inline-block;">
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
</article><!--------+++++++/ 컨텐츠 04  시스템인증 > 식품 인증 > Global HACCP 종료 /++++++++----------->
</div> <!------------+++++++/    <div class="tab_con"> 종료  /+++++++++++--------------->
</div><!--------++++++++/ <div class="content_wrap">  /++++++++---------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>