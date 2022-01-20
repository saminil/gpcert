<?php
	include_once('./_common.php');
$g5['title'] = '연속성 및 복원력';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:1rem; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	.fc_pointer {color:#BC0000; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto; font-family:georgia; font-size:1.2em;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

	.vision_type5 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type5:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type5 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type5 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type5 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type5 .vision_area ul {margin:0; padding:0; }
	.vision_type5 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; }
    
	.vision_type5 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}  
	.vision_type5 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}   
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;}   
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#ffffff;}   
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#36b1d4;}
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#339999;}
    .vision_type5 .vision_area:nth-child(7) ul li .i_box {background:#339999;}
        
	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:auto; padding:50px 40px;line-height:auto;} /* 텍스트 내용 상하 */
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type5 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
    
   /* (주)아이지씨인증원 사업영역 CSS 시작  */
    .partner_type2 .con_area .txtArea ul li{margin-top:15px;}
	.partner_type2 .con_area .txtArea ul li:first-child{margin-top:0}
	.partner_type2 .con_area .txtArea ul li span{font-weight:700; margin-right:10px; }
	.partner_type2 .con_area .txtArea ul li p{display:inline-block; }
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
    /* (주)아이지씨인증원 사업영역 CSS 종료  */
    
	@media screen and (max-width:768px){
		
		.content_wrap{width:96%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		/*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type5 .vision_area h2.title { font-size:1.5em; }
		.vision_type5 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type5 .vision_area ul li {width:100%;}
		.vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃 설정  */

	}
</style>

<div class="content_wrap">

	<!--+++ 20.05.26 탭메뉴/ 시스템인증 > 보건 및 의료기기 시작 +++-->
		<div class="tab_menu tab01">
			<ul style="display:inline-block;position:relative;text-align:center;">
				<!-- 처음 활성화 메뉴에 class="on" -->
				<li><a href="javascript:;">ISO 22301</a></li>
				<li><a href="javascript:;">ISO 22316</a></li>
				<li class="on"><a href="javascript:;">ISO/TS 22317</a></li>
				<li><a href="javascript:;">ISO 22320</a></li>
			</ul>
		</div>
		<!--+++ 20.05.26 탭메뉴/ 시스템인증 > 보건 및 의료기기 종료 +++-->
	
<!-----내용구분 선 2개 ------>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">

<!--+++ 20.0526.13 탭컨텐츠 영역 시작 +++-->
<div class="tab_con">	  
<!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
<article><!--------+++++++/ 컨텐츠 02 심사원 교육 > 연속성, 복원령 및 복구 인증 > ISO 22301  시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO 22301 <span class="fc_pointer"> 전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">비즈니스 연속성 경영시스템 교육과정</h2>
	</section>
	<section class="vision_type5">
	
		<div class="vision_area">
		<h2 class="title">ISO 22301:2019 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22301_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                        ISO 22301은 비즈니스 연속성 관리 시스템으로, 시장의 위험뿐만 아니라 도난, 자연재해, 질병 등 중단적 사고가 발생했을 때 조직이 이에 대한 방어, 발생 가능성의 감축, 대비, 대응 및 복구를 위해 문서화된 경영시스템을 수립하고 이 시스템을 실행, 운영, 모니터링 및 지속적인 개선활동을 하기위한 요구사항을 규정하고 있습니다.
					</span>
					<br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
						비즈니스 연속성 관리 시스템은 모든 산업 분야 및 활동에 적용할 수 있으며 조직의 각종 위협에 대한 영향을 파악하고, 효과적인 대응능력 및 조직 회복 능력을 구축하는 프레임워크를 제공합니다. 이 표준은 중단 이후의 비즈니스 운영을 지속하기 위한 비즈니스 연속성의 지침을 제공하며, 중단 시 제품 및 서비스가 즉시 제공되고 복구될 수 있도록 보장하여 제품 및 서비스에 미치는 영향을 최소화하고자 합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 22301 교육의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22301_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                       각종 테러와 자연재해와 같은 사업의 중단을 초래할 수 있는 예기치 못한 사고가 발생했을 때, 조직은 효과적으로 대응하고 사전에 계획한대로 제품과 서비스 공급을 지속할 수 있도록 해야 합니다.
					</span>
					<br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
						경쟁력과 능력을 갖추기 위하여 기업과 산업체는 적격성을 갖춘 심사원을 필요로 합니다. ISO 22301 경영 시스템 심사원 인증 과정의 목적은 이 프로그램을 통해 인증받은 심사원이 적격하며, 인증원과 기업 및 산업 분야에 신뢰성을 제공하기 위함입니다.
					</span>
					<br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
						인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO 22301 교육 프로그램은 ISO 22301 규격을 기본으로 하고 있고, 심사 가이던스 규격 ISO 19011:2018에 근간을 두고 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<!----(주)아이지씨인증원 사업영역 HTML5 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>우리가 제공하는 관련 서비스</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         			<li><p><em><strong>02</strong></em><span>환경</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>안전 보건</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>의료기기</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>식품</span></p></li>
	         			<li><p><em><strong>06</strong></em><span>정보 보안</span></p></li>
	         			<li><p><em><strong>07</strong></em><span>위험 관리</span></p></li>
	         			<li><p><em><strong>08</strong></em><span>교통, 통신 및 에너지</span></p></li>
	         			<li><p><em><strong>09</strong></em><span>연속성 및 복원력</span></p></li>
	         			<li><p><em><strong>10</strong></em><span>비즈니스 운영</span></p></li>
	         			<li><p><em><strong>11</strong></em><span>사회적 책임 및 부패관리</span></p></li>
	         			<li><p><em><strong>12</strong></em><span>시험 및 교정</span></p></li>
	         		</ul>
	         	</div>
            </section><!---------(주)아이지씨인증원 사업영역 HTML5 종료 ------>
	</section>
</article><!--------+++++++/ 컨텐츠 01  심사원 교육 > 연속성, 복원령 및 복구 인증 > ISO 22301  종료 /++++++++----------->
<article><!--------+++++++/ 컨텐츠 02 심사원 교육 > 연속성, 복원령 및 복구 인증 > ISO 22316  시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO 22316 <span class="fc_pointer"> 전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">조직 회복 탄력성(레질리언스)-원리 및 속성 교육과정</h2>
	</section>
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title">ISO 22316:2017 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22316_01.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span>
						‘Resilience (회복 탄력성)’는 지속적 번영을 바라는 조직이라면 갖추어야 할 비즈니스의 핵심입니다. 이 국제표준은 조직이 문제점을 마주하게 되었을 때, 더 유리한 입장에서 이를 대응할 수 있도록 합니다. 또한 이 표준은 강력하고 자율적 리더십을 바탕으로, 기존의 리스크 관리 형태에 더하여 이를 구축하는 것을 포함하며 조직원들이 공유가치 및 변화하는 상황에 대한 인식을 가지는 내용도 포함하고 있습니다. 
					</span>
					<br>
					<span>
						ISO 22316 (보안 및 탄력성, 조직 레질리언스, 원리와 속성/Security and Resilience, Organizational Resilience, Principles and Attributes)는 조직이 미래의 비즈니스를 보장하는 데 도움을 줍니다. 이 표준은 조직 내에 레질리언스를 강화할 수 있는 요소들을 폭넓게 다루고 있습니다. 또한, 이 표준은 강력하고 자율적인 리더십을 바탕으로 기존의 리스크 관리 형태에 더하여 이를 구축하는 것을 포함하며, 조직원들이 공유 가치 및 변화하는 상황에 대한 인식을 가지는 내용도 포함하고 있습니다. 따라서 조직이 목표를 달성하고 실현하기 위해 노력함과 동시에 예측 불가능한 요소들을 받아들이고 적응할 수 있도록 하기 위해 ISO 22316은 필요합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 22316 교육의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/iso-22316_02.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span>
					ISO 22316의 효과적인 적용을 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 22316 교육과정의 목적은 이 프로그램을 통해 교육받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.
					</span>
					<br><br>
					<span style="border-bottom: 1px solid #ccc; display: inline-block; ">
					인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO 22316 교육 프로그램은 ISO 22316 규격을 기본으로 하고 있습니다.
					</span>

				</div>
			</li>
		</ul>
		</div>

			<!----(주)아이지씨인증원 사업영역 HTML5 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>우리가 제공하는 관련 서비스</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         			<li><p><em><strong>01</strong></em><span>품질</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>환경</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>안전 보건</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>의료기기</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>식품</span></p></li>
	         			<li><p><em><strong>06</strong></em><span>정보 보안</span></p></li>
	         			<li><p><em><strong>07</strong></em><span>위험 관리</span></p></li>
	         			<li><p><em><strong>08</strong></em><span>교통, 통신 및 에너지</span></p></li>
	         			<li><p><em><strong>09</strong></em><span>연속성 및 복원력</span></p></li>
	         			<li><p><em><strong>10</strong></em><span>비즈니스 운영</span></p></li>
	         			<li><p><em><strong>11</strong></em><span>사회적 책임 및 부패관리</span></p></li>
	         			<li><p><em><strong>12</strong></em><span>시험 및 교정</span></p></li>
	         		</ul>
	         	</div>
            </section><!---------(주)아이지씨인증원 사업영역 HTML5 종료 ------>
	</section>
</article><!--------+++++++/ 컨텐츠 02  심사원 교육 > 연속성, 복원령 및 복구 인증 > ISO 22316  종료 /++++++++----------->
<article style="display:block;"><!--------+++++++/ 컨텐츠 03 심사원 교육 > 연속성, 복원령 및 복구 인증 > ISO 22317  시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO/TS 22317 <span class="fc_pointer"> 전문인력 양성 교육</span></h1>
		<h2 class="sub_txt">사회적 보안, 비즈니스 연속성 관리 시스템-비즈니스 영향 분석(BIA)에 대한 가이드라인 교육과정</h2>
	</section>
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title">ISO/TS 22317:2015 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22317_01.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span>
						이 국제 표준은 비즈니스 영향 분석 (BIA) 프로세스를 수립, 구현 및 유지하는 방법에 대한 자세한 지침을 제공하는 기술 사양입니다. 비즈니스 영향 분석을 수행하는데 있어 획일적인 프로세스는 아니지만 조직이 요구사항을 충족하는 BIA 프로세스를 설계하도록 지원합니다. 
					</span>
					<br>
					<span>
						조직은 BIA를 ISO/TS 22317로 인증할 수 없습니다. 하지만, BIA 프로세스를 효과적으로 구현하기 위한 지침으로 사용할 수 있습니다. ISO/TS 22317은 비즈니스 영향 분석만을 다루는 유일한 표준입니다. 
					</span>
					<br>
					<span>
						ISO 22301을 보완하도록 설계되었음에도 불구하고 독립 실행 형 표준으로 사용할 수 있습니다. 비즈니스 영향 분석 프로세스의 목표는 조직에서 지장을 주는 일들의 실제 영향을 분석하는 것입니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/TS 22317 교육의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22317_03.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-hands-helping"></i></div>
				</div>
				<div class="con_txt">
					<span>
						예기치 않은 사업중단의 결과는 지대한 영향을 가져오며, 생명 손실, 자산이나 소득 손실 또는 조직의 생존이 달린 제품이나 서비스 제공의 무능력함을 이끌어 냅니다.
					</span>
					<br>
					<span>
						2019년 12월 시작된 COVID-19 인한 각국이 여행제한과 봉쇄 조치를 통하여 세계 경제적 불황이 기정 사실화 되었고, 불과 한달 만에 세계 경제에 심각한 경제적 영향을 주게 되었습니다. 실제로 크고 작은 많은 기업들이 심각한 타격을 입었습니다. 이렇듯 모든 조직은 붕괴될 가능성이 있습니다. 이는 기술장애, 홍수, 유틸리티 중단, 화재, 테러공격을 포함합니다.
					</span>
					<br>
					<span>
						이런 상황에 대처하기 위해 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO/TS 22317심사원 인증 과정의 목적은 이 프로그램을 통해 교육받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<!----(주)아이지씨인증원 사업영역 HTML5 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>우리가 제공하는 관련 서비스</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         			<li><p><em><strong>01</strong></em><span>품질</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>환경</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>안전 보건</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>의료기기</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>식품</span></p></li>
	         			<li><p><em><strong>06</strong></em><span>정보 보안</span></p></li>
	         			<li><p><em><strong>07</strong></em><span>위험 관리</span></p></li>
	         			<li><p><em><strong>08</strong></em><span>교통, 통신 및 에너지</span></p></li>
	         			<li><p><em><strong>09</strong></em><span>연속성 및 복원력</span></p></li>
	         			<li><p><em><strong>10</strong></em><span>비즈니스 운영</span></p></li>
	         			<li><p><em><strong>11</strong></em><span>사회적 책임 및 부패관리</span></p></li>
	         			<li><p><em><strong>12</strong></em><span>시험 및 교정</span></p></li>
	         		</ul>
	         	</div>
            </section><!---------(주)아이지씨인증원 사업영역 HTML5 종료 ------>
	</section>
</article><!--------+++++++/ 컨텐츠 03  심사원 교육 > 연속성, 복원령 및 복구 인증 > ISO 22317  종료 /++++++++----------->
<article><!--------+++++++/ 컨텐츠 04 심사원 교육 > 연속성, 복원령 및 복구 인증 > ISO 22320  시작 /++++++++----------->
   
   <section class="page_title">
		<h1 class="sub_tit">ISO 22320 <span class="fc_pointer"> 전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">보안 및 회복탄력성-비상사태 관리-사고관리를 위한 가이드라인 교육과정</h2>
	</section>
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title">ISO 22320:2018 개요</h2>
		 <ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22320_01.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span>
					ISO 22320은 사고대응 요구 사항을 정의하는 국제 표준입니다. 재해, 테러 및 기타 주요 사건의 재난을 최소화하고 비상재난 상황관리 및 재난대응을 위해 제정된 규격으로 물 공급 및 식량 공급, 건강, 구조 서비스, 연료 공급 및 전기 등이 포함됩니다.
					</span>
                    <br><br>
					<span>
					ISO 22320은 효과적인 사고대응을 위한 최소한의 요구사항을 규정하며 사고대응 조직의 내부에서 지휘통제, 운영정보, 조정 및 협력을 위한 기본사항을 제공합니다. 이것은 지휘통제 조직체계 및 절차, 의사결정 지원, 추적가능성, 정보 관리와 상호운영을 포함하고 있습니다.
					</span>
				</div>
			</li>
		 </ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">ISO 22320의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso22320_04.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span>
						전세계에서 발생할 수 있는 각종 재난 및 사고에 대하여 각 나라, 각 지역의 사회적 상황뿐만 아니라 인구 등의 각각의 영향에 맞는 재난대응조치와 이에 상응하는 관리를 위해 국제적으로 통용 가능한 표준이 필요시 되었습니다.
					</span>
					<br>
					<span>
						공공 및 민간 조직이 ISO 22320의 중요성에 관계없이 모든 종류의 응급 상황에 대응할 수 있는 능력을 확립하고 강화할 수 있게 함으로써 위협, 혼란 및 피해를 최소화하고 기본 시설의 연속성을 보장할 수 있습니다.
					</span>
					<br>
					<span>
						표준 ISO 22320의 효과적인 적용을 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 22320 교육 과정의 목적은 이 프로그램을 통해 교육받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.
					</span>
					<br>
					<span>
						당사는 적격성을 정의하는 주요능력, 지식 그리고 경험을 반영하는 요구사항에 대비하여 평가를 할 것입니다. 교육 프로그램은 심사 주요 표준에 기초합니다
					</span>
				</div>
			</li>
		</ul>		
		</div>

		<!----(주)아이지씨인증원 사업영역 HTML5 시작-------->
	         <section class="partner_type2">
                <h2 class="con_arrow">
	         		<p>우리가 제공하는 관련 서비스</p>
	         	</h2>
	         	<div class="con_box">
	         		<ul>
	         			<li><p><em><strong>01</strong></em><span>품질</span></p></li>
	         			<li><p><em><strong>02</strong></em><span>환경</span></p></li>
	         			<li><p><em><strong>03</strong></em><span>안전 보건</span></p></li>
	         			<li><p><em><strong>04</strong></em><span>의료기기</span></p></li>
	         			<li><p><em><strong>05</strong></em><span>식품</span></p></li>
	         			<li><p><em><strong>06</strong></em><span>정보 보안</span></p></li>
	         			<li><p><em><strong>07</strong></em><span>위험 관리</span></p></li>
	         			<li><p><em><strong>08</strong></em><span>교통, 통신 및 에너지</span></p></li>
	         			<li><p><em><strong>09</strong></em><span>연속성 및 복원력</span></p></li>
	         			<li><p><em><strong>10</strong></em><span>비즈니스 운영</span></p></li>
	         			<li><p><em><strong>11</strong></em><span>사회적 책임 및 부패관리</span></p></li>
	         			<li><p><em><strong>12</strong></em><span>시험 및 교정</span></p></li>
	         		</ul>
	         	</div>
            </section><!---------(주)아이지씨인증원 사업영역 HTML5 종료 ------>
	</section>
</article><!--------+++++++/ 컨텐츠 04  심사원 교육 > 연속성, 복원령 및 복구 인증 > ISO 22320  종료 /++++++++----------->
</div> <!------------+++++++/    <div class="tab_con"> 종료  /+++++++++++--------------->
</div><!--------++++++++/ <div class="content_wrap">  /++++++++---------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>