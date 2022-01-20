<?php
	include_once('./_common.php');
$g5['title'] = '교육/비즈니스 운영';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.vision_type5 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;background-color: rgba( 255, 255, 255, 0.5 );}
	.vision_type5 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;background-color: rgba( 255, 255, 255, 0.5 );}
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;background-color: rgba( 255, 255, 255, 0.5 );}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#ffffff;background-color: rgba( 255, 255, 255, 0.5 );}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#ffffff;background-color: rgba( 255, 255, 255, 0.5 );}
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#ffffff;background-color: rgba( 255, 255, 255, 0.5 );}
    .vision_type5 .vision_area:nth-child(7) ul li .i_box {background:#ffffff;background-color: rgba( 255, 255, 255, 0.5 );}
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
	<!--+++ 20.05.13 탭메뉴/  +++-->
		<div class="tab_menu tab01">
			<ul style="display:inline-block;position:relative;text-align:center;">
				<!-- 처음 활성화 메뉴에 class="on" -->
				<li><a href="javascript:;">ISO 13053</a></li>
				<li><a href="javascript:;">ISO 21500</a></li>
				<li class="on"><a href="javascript:;">ISO 30301</a></li>
				<li><a href="javascript:;">ISO 55001</a></li>
			</ul>
		</div><!--+++ 20.05.11 탭메뉴/ 종료 +++-->
	
	<!--------------/  문단 구분선 / ------------->
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
<!--+++ 20.05.13 탭컨텐츠 영역 시작 +++-->
<div class="tab_con">
   <!--+++++ 컨텐츠 01ISO 13053  (처음 활성화 컨텐츠에만 style="display:block") +++++-->
 <article>	
	<section class="page_title">
		<h1 class="sub_tit">ISO 13053 <span class="fc_pointer"> 전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">공정 개선의 정량적 방법-6 시그마 교육과정</h2>
	</section>
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title">ISO 13053(ISO 13053-1:2011, ISO 13053-2:2011) 개요</h2>
		<ul>
			<li>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO 13053은 6 시그마 방법론을 설명하는 국제 표준입니다. 이 방법론은 조직의 비즈니스 프로세스를 향상시키기 위해 사용됩니다. 많은 기업들은 종종 폐기물 낭비와 같은 결함과 오류를 초래하는 프로세스 변형을 겪고 있습니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						<img src="./images/edu_iso_13053_01.jpg" alt="6시그마" style="display:block;margin: 0 auto;">
					</span>
					<br>
					<span style="text-align:justify;text-justify: inter-word;">
						6시그마의 목적은 통계적 접근법을 사용함으로써 오류율을 낮추고 품질 성능을 높이기 위해 통계적 접근법을 사용함으로써 변이를 식별 및 크게 줄이는 것입니다. 게다가, 6 시그마 방법론은 새로운 서비스, 제품 또는 프로세스 개발에 사용되는 DMAIC (정의, 측정, 분석, 개선 및 제어) DMADV (정의, 측정, 분석, 설계 및 검증)를 통해 기존 프로세스를 개선하는 데 사용할 수 있습니다.
					</span>
					
					<span style="text-align:justify;text-justify: inter-word;">
						DMADV는 정의(Define), 측정(Measure,), 분석(Analyze), 개선(Improvement), 관리(Control)를 거쳐 최종적으로 6시그마 기준에 도달하게 되는 것을 의미하며 각 단계의 내용은 다음과 같습니다.
					<br><br>
					    <span> 1) 정의(Define)</span>
                        기업 전략과 소비자 요구사항과 일치하는 디자인 활동의 목표를 정합니다.<br>
                        <span> 2) 측정(Measure)</span>
                        현재의 프로세스 능력, 제품의 수준, 위험 수준을 측정하고 품질에 결정적 영향을 끼치는 요소(CTQs, Criticals to qualities)를 밝혀냅니다.<br>
                        <span> 3) 분석(Analyze)</span>
                        디자인 대안, 상위 수준의 디자인을 만들기 그리고 최고의 디자인을 선택하기 위한 디자인 가능성을 평가하는 것을 개발하는 과정입니다.<br>
                        <span> 4) 개선(Improvement)</span>
                        바람직한 프로세스가 구축될 수 있도록 시스템 구성요소들을 개선합니다.<br>
                        <span> 5) 관리(Control)</span>
                        개선된 프로세스가 의도된 성과를 얻도록 투입요소와 변동성을 관리합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">ISO 13053 교육의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><img src="./images/edu_iso_13053_02.jpg" alt="6시그마" style="display:block;margin: 0 auto;"></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
						6 시그마를 이해하고 직업에서 그것의 실무를 운영 할 수 있다면 향후 커다란 효과를 가질 수 있습니다. 
					</span>
					<br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
						비용 절감, 비즈니스 프로세스 개선 및 이익 증대에 대한 지식으로 이 인증은 귀하의 분야에서 다른 전문가와 차별화됩니다. ISO 13053에 대한 인증을 받은 개인은 또한 시그마의 방법론에 대한 정보뿐만 아니라 직장에서의 변화를 위한 주도자가 될 능력이 있기 때문에 리더십 역할을 수행할 준비가 되어있습니다.
					</span>
					<br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
						 당사는 적격성을 정의하는 주요능력, 지식 그리고 경험을 반영하는 요구사항에 대비하여 평가를 할 것입니다. 교육 프로그램은 심사 주요 표준에 기초합니다.
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
</article> <!--------+++++++/ <article style="display:block"> 종료 /++++++++----------->


<article><!--------+++++++/ 컨텐츠 02 심사원교육 > ISO 21500 시작 /++++++++----------->
   <section class="page_title">
		<h1 class="sub_tit">ISO 21500 <span class="fc_pointer"> 전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">프로젝트 관리에 대한 가이던스 교육과정</h2>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title">ISO 21500:2012 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso21500_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						 ISO 21500은 프로젝트 관리에 대한 가이던스로서 프로젝트 관리 이외의 비즈니스 운영의 중단을 최소화하면서 예산 및 시간 제약 내에서 프로젝트를 성공적으로 완료할 수 있도록 합니다.
					</span>
					<br><br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						또한, 조직이 모든 프로젝트 관리 요구사항을 충족하며 프로젝트 실패의 가능성을 줄일 수 있도록 지원합니다. 
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">ISO 21500란?</h2>
		<ul>
			<li>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
					ISO 21500 교육대상은 아래와 같습니다.<br><br>
                    ⁙ 프로젝트 관리에 관련된 개인<br><br>
                    ⁙ 프로젝트 관리의 주요 프로세스에 대한 지식을 얻으려는 개인 및 심사원<br><br>
                    ⁙ 프로젝트 관리 경력을 쌓고자 하는 개인<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title">ISO 21500의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso21500_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 21500은 프로젝트를 이끌고 팀을 관리하는 데 필요한 지식을 제공하며 교육 이수자가 성공적인 프로젝트 관리에 필요한 기술 및 지식을 보유하고 있음을 증명합니다.  
					</span>
					<br><br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
					    프로젝트의 효과적인 관리를 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 21500 교육 과정의 목적은 이 프로그램을 이수한 심사원 및 개인의 능력이 적격하며, 인증원과 기업 및 산업 분야에 신뢰성을 제공하기 위함입니다.
					</span>
					<br><br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						교육 과정의 일환으로 당사는 적격성을 정의하는 주요능력, 지식 그리고 경험을 반영하는 요구사항에 대비하여 평가를 할 것입니다. 교육 프로그램은 심사 주요 표준에 기초합니다. 
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
</article><!--------+++++++/ 컨텐츠 02  심사원교육 > ISO 21500 종료 /++++++++----------->


<article style="display:block;"><!--------+++++++/ 컨텐츠 03 심사원교육 > ISO 30301 시작 /++++++++----------->
    <section class="page_title">
		<h1 class="sub_tit">ISO 30301 <span class="fc_pointer">전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">정보 문서-기록 관리시스템 교육과정</h2>
	</section>
	<section class="vision_type5">
	
	<div class="vision_area">
		<h2 class="title">ISO 30301:2019 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_30301_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 30301은 기록관리를 통해 궁극적으로 조직이 원하는 조직의 임무, 성과 및 목표 달성을 지원하는 표준입니다. 조직의 성과와 목표 달성을 위한 조직의 기록경영시스템을 수립하고 이에 필요한 요구사항을 제시하고 있는 것이 ISO 30301 표준입니다.
					</span>
					<br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						기록의 생산과 관리 등 기록관리와 관련한, 조직의 경영진을 포함하여 조직의 모든 구성원들이 이 표준을 활용할 수 있고 쉽게 적용할 수 있습니다. 
					</span>
					<br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 30301 국제 표준은 기록 관리 및 기록 경영에 관심이 있고 효과적인 기록 관리를 통한 조직의 성과 및 목표 달성에 기여하고자 하는 모든 개인에게 적용됩니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
	
		<div class="vision_area">
		<h2 class="title">ISO 30301란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_30301_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 30301은 기록관리를 통해 궁극적으로 조직이 원하는 조직의 임무, 성과 및 목표 달성을 지원하는 표준입니다. 조직의 성과와 목표 달성을 위한 조직의 기록경영시스템을 수립하고 이에 필요한 요구사항을 제시하고 있는 것이 ISO 30301 표준입니다. 
					</span>
					<br><br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						기록의 생산과 관리 등 기록관리와 관련한, 조직의 경영진을 포함하여 조직의 모든 구성원들이 이 표준을 활용할 수 있고 쉽게 적용할 수 있습니다. 
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 30301 교육의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_30301_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 30301 표준은 기록 “관리”에서 멈추는 것이 아니라 기록 “경영”이라는 영역으로 넘어가면서 단순히 기록관리에서 그치지 않고 기록관리를 함으로써 궁극적으로 조직이 원하는 조직의 성과와 목표를 지원하는 표준입니다.
					</span>
					<br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						효과적인 기록관리를 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 30301 교육 과정의 목적은 이 프로그램을 이수한 심사원 및 개인의 능력이 적격하며, 인증원과 기업 및 산업 분야에 신뢰성을 제공하기 위함입니다.
					</span>
					<br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
                        교육 과정의 일환으로 당사는 적격성을 정의하는 주요능력, 지식 그리고 경험을 반영하는 요구사항에 대비하여 평가를 할 것입니다. 교육 프로그램은 심사 주요 표준에 기초합니다
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
</article><!--------+++++++/ 컨텐츠 03  심사원교육 > ISO 30301  종료 /++++++++----------->


<article><!--------+++++++/ 컨텐츠 04 심사원교육  > ISO 55001  시작 /++++++++----------->
<section class="page_title">
		<h1 class="sub_tit">ISO 55001 <span class="fc_pointer"> 전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">자산관리 경영시스템 교육과정</h2>
	</section>
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title">ISO 55001:2014 교육 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso55001_01.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;" ><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;"> 
                    Asset Management System (AMS)은 자산 경영 관리 시스템을 의미합니다. 
                    </span>
                   <br><br>
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;"> 
                    자산관리의 사전적인 의미는, 조직의 재무, 운영, 유지관리 및 기타 자산 관련 활동을 조정하여 자산에서 더 많은 가치를 실현하도록 하는 것입니다. 
                    </span>
                    <br><br>
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;"> 
                    자산 라이프 사이클 전반에 대해 계획적으로 관리하고 그 가치를 최대화하는 것을 목적으로 하는 국제 표준입니다.
                    </span>
                    <br><br>
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;"> 
                    ISO 55001은 조직의 자산관리 자체에도 도움이 되지만 대외적으로 안정적으로 재정을 운영하는 이미지를 형성함으로써 고객 및 파트너에게 신뢰성을 줄 수 있습니다. 
                    </span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 55001의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/ISO55001_02.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;" ><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
					효과적인 자산 관리를 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 55001 교육 과정의 목적은 이 프로그램을 이수한 심사원 및 개인의 능력이 적격하며, 인증원과 기업 및 산업 분야에 신뢰성을 제공하기 위함입니다.
					</span>
					<br><br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                    교육 과정의 일환으로 당사는 적격성을 정의하는 주요능력, 지식 그리고 경험을 반영하는 요구사항에 대비하여 평가를 할 것입니다. 교육 프로그램은 심사 주요 표준에 기초합니다
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
   </article><!--------+++++++/ 컨텐츠 04  심사원교육 > 식품경영식스템 > ISO/IEC 17025  종료 /++++++++----------->
</div> <!------------+++++++/    <div class="tab_con"> 종료  /+++++++++++--------------->
</div><!--------++++++++/ <div class="content_wrap">  /++++++++---------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>