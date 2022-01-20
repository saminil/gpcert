<?php
	include_once('./_common.php');
$g5['title'] = '교통, 통신 및 에너지';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#36b1d4;}  
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#339999;}  
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#36b1d4;}  
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#005bab;}  
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
    
    
    /* 교통, 통신 및 에너지 ISO 50001 국제에너지 경영시스템 심사원 교육 시작 */
    .vision_type6 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type6:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type6 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type6 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type6 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type6 .vision_area ul {margin:0; padding:0; }
	.vision_type6 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type6 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; }
	.vision_type6 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}
	.vision_type6 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}
	.vision_type6 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;}
    .vision_type6 .vision_area:nth-child(4) ul li .i_box {background:#ffffff;}  
    .vision_type6 .vision_area:nth-child(5) ul li .i_box {background:#ffffff;}  
    .vision_type6 .vision_area:nth-child(6) ul li .i_box {background:#339999;}
    .vision_type6 .vision_area:nth-child(7) ul li .i_box {background:#339999;}
	.vision_type6 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type6 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type6 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type6 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type6 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type6 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type6 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type6 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type6 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    /* 교통, 통신 및 에너지 ISO 50001 국제에너지 경영시스템 심사원 교육 종료 */
    
    /* 교통, 통신 및 에너지 ISO 39001 도로교통안전관리 심사원 교육 시작 */
    .vision_type7 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type7:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type7 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type7 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type7 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type7 .vision_area ul {margin:0; padding:0; }
	.vision_type7 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type7 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; }
	.vision_type7 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}  
	.vision_type7 .vision_area:nth-child(2) ul li .i_box {background:#339999;}  
	.vision_type7 .vision_area:nth-child(3) ul li .i_box {background:#00ffff;}  
    .vision_type7 .vision_area:nth-child(4) ul li .i_box {background:#339999;}  
    .vision_type7 .vision_area:nth-child(5) ul li .i_box {background:#36b1d4;}  
    .vision_type7 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type7 .vision_area:nth-child(7) ul li .i_box {background:#339999;}
	.vision_type7 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type7 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type7 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type7 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type7 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type7 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type7 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type7 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type7 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    /* 교통, 통신 및 에너지 ISO 39001 도로교통안전관리 심사원 교육 종료 */
    
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
    
    /*table */
    td,tr{padding:6px;}
    table{border-spacing:10px;}
    
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

        .vision_type6 .vision_area h2.title { font-size:1.5em; }
		.vision_type6 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type6 .vision_area ul li {width:100%;}
		.vision_type6 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type6 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type6 .vision_area ul li .con_txt span { padding:0 30px; }
        
        .vision_type7 .vision_area h2.title { font-size:1.5em; }
		.vision_type7 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type7 .vision_area ul li {width:100%;}
		.vision_type7 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type7 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type7 .vision_area ul li .con_txt span { padding:0 30px; }
	}
</style>

<div class="content_wrap">
		<!--+++ 20.05.26 탭메뉴/ 시스템인증 > 보건 및 의료기기 시작 +++-->
		<div class="tab_menu tab01">
			<ul style="display:inline-block;position:relative;text-align:center;">
				<!-- 처음 활성화 메뉴에 class="on" -->
				<li><a href="javascript:;">ISO 29001</a></li>
				<li class="on"><a href="javascript:;">ISO 39001</a></li>
				<li><a href="javascript:;">ISO 50001</a></li>
			</ul>
		</div>
		<!--+++ 20.05.26 탭메뉴/ 시스템인증 > 보건 및 의료기기 종료 +++-->
	
	<!-----내용구분 선 2개 ------>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">


<!--+++ 20.0526.13 탭컨텐츠 영역 시작 +++-->
<div class="tab_con">
 <article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->	
	<section class="page_title">
		<h1 class="sub_tit">ISO 29001 <span class="fc_pointer"> 전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">석유, 석유화학 및 천연가스 산업-분야별 품질관리시스템 교육과정</h2>
	</section>
	<section class="vision_type5">
	
		<div class="vision_area">
		<h2 class="title">ISO 29001:2020 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso29001_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 29001은 ISO 9001:2015에 대한 보충 자료로 작성되었습니다. 이는 석유, 석유화학 및 천연 가스 산업과 관련된 공급망 위험 및 기회를 관리하고 산업 내에서 채택된 보완 표준에 대한 요구사항을 조정하기 위한 프레임 워크를 제공하기 위해 개발되었습니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO 29001의 목표은 공급망 및 서비스 제공업체의 결함예방, 변동 및 폐기물 감소를 강조하여 지속적인 개선을 제공하는 품질관리 시스템의 개발입니다.<br><br>
                        또한 ISO 29001은 복수의 인증 감사를 피하고 석유화학 및 천연가스 산업의 품질 관리 시스템에 대한 공통 접근방식을 제공하기 위한 것입니다.
					</span>
				</div>
			</li>
		</ul>
		</div>		
		
		<div class="vision_area">
		<h2 class="title">ISO 29001 교육의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
                    <!--<div class="icon"><i class="ISO_29001_02"></i><em>SAFETY</em></div>-->
					<div class="icon" style="background-image:url(./images/ISO_29001_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
						석유 및 가스 산업이 재앙적인 위협에 가장 많이 노출되어 있다는 것을 고려할 때 품질 관리 프로세스와 자격을 갖춘 전문가가 이 분야에서 매우 중요합니다.                        
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
						유해한 액체 및 가스를 잘못 취급하는 경우 사람들과 환경에 심각한 피해를 줄 수 있습니다. 따라서 매끄러운 운영에 대한 안전과 유지를 보장하기 위해서는 높은 수준의 작동 신뢰성이 업계에 필수적입니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
					    인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO 29001 교육 프로그램은 ISO 29001 규격을 기본으로 하고 있고, 심사 가이던스 규격 ISO 19011:2018에 근간을 두고 있습니다.
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


<article style="display:block;"><!--------+++++++/ 컨텐츠 02 교육 > 교통, 통신 및 에너지 인증 > ISO 39001 시작 /++++++++----------->
   <section class="page_title">
		<h1 class="sub_tit">ISO 39001 <span class="fc_pointer">전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">도로 교통 안전(RTS) 경영시스템 교육과정</h2>
	</section>
	<section class="vision_type6">

		<div class="vision_area">
		<h2 class="title">ISO 39001:2012 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso39001_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:12%;">
                      ISO 39001:2012 Road Traffic Safety(RTS) management system은 세계 각국이 참여한 ISO/TC 241에 의해 제정된 도로교통안전 경영시스템 국제 표준입니다.
					</span><br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:12%;">				
                      ISO 39001은 교통사고 사망자나 심각한 부상자를 줄이는 것을 목적으로 개발되었으며, 조직의 도로 교통안전을 위한 경영시스템의 요구사항을 정하고 있습니다.
					</span><br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:12%;">				
                      ISO 39001 은 조직이 도로교통 사고로 인한 사망 및 심각한 부상의 발생률과 위험을 줄이고 궁극적으로 제거하는 데 도움이 되는 표준입니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:12%;">				
                      ISO 39001을 기반으로 하는 도로 교통안전 관리 시스템은 도로 교통 시스템과 상호 작용하는 공공 기관과 민간 기업 모두에 적용됩니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 39001란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso39001_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
                        ISO 39001은 조직 안전 및 사회적 책임 목표를 충족시킬 수 있으며, 더 나은 관리를 통해 효율성을 향상시키는 방법을 확인할 수 있습니다.
                     </span>
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:3%;">
                        ISO 39001의 대상은 아래와 같습니다. <br><br>
                        1. 도로교통안전 성과를 증진하고자 하는 조직<br><br>
                        2. 도로교통안전경영시스템의 수립 및 실행, 유지, 개선을 하고자 하는 조직<br><br>
                        3. 조직 내 도로교통안전방침의 적합성을 확립하고자 하는 조직<br><br>
                        4. 조직 내 도로교통안전방침과 이 국제표준과의 적합성을 입증하고자 하는 조직
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 39001 교육의 중요성 </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso39001_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                        도로 교통 안전 무시의 결과는 사소한 사고가 끔찍한 사고로 되는 것과 관련되어 비극이 될 수 있습니다. ISO 39001은 도로 교통 안전(RTS) 관리 시스템에 대한 요구사항을 지정하여 도로 교통 시스템과 상호 작용하는 조직이 도로 교통 사고와 관련된 사망 및 중상을 줄일 수 있도록 지원합니다.  
                    </span><br>
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                        경쟁력과 능력을 갖추기 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 39001 경영 시스템 심사원 교육 과정의 목적은 이 프로그램을 통해 인증 받은 심사원이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하는 것입니다
                    </span><br>
                    <span style="text-align:justify;text-justify:inter-word;position:relative;top:2%;">
                        인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO 39001 교육 프로그램은 ISO 39001 규격을 기본으로 하고 있습니다.
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
</article><!--------+++++++/ 컨텐츠 02  교육 > 교통, 통신 및 에너지 인증 ISO 39001 종료 /++++++++----------->


<article><!--------+++++++/ 컨텐츠 03 시스템인증 > 교통,통신 및 에너지 인증 > ISO 50001  시작 /++++++++----------->
   <section class="page_title">
		<h1 class="sub_tit">ISO 50001 <span class="fc_pointer">전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt"> 에너지 경영시스템 교육과정</h2>
	</section>
	
	<section class="vision_type6">
    <div class="vision_area">
		<h2 class="title">ISO 50001:2018 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso50001_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
					    이 표준의 목적은 조직이 에너지 효율, 이용 및 사용량을 포함한 에너지 성과를 개선하기 위하여 필요한 시스템과 프로세스를 수립할 수 있도록 하는 것입니다. 체계적인 에너지 관리를 통하여 온실가스 배출량, 에너지 비용 및 그 밖의 관련된 환경영향을 저감시킬 수 있습니다. 이 표준은 지역적, 문화적, 사회적 조건에 무관하게 모든 종류 및 규모의 조직에 적용될 수 있습니다. 성공적인 실행을 위해서는 고객 조직의 모든 부서와 기능, 특히 최고경영자의 의지가 중요합니다.
					</span>
					<br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:1%;">
						조직은 이 요구사항을 바탕으로 에너지방침을 개발하고 실행할 수 있으며, 중요에너지 이용과 관련된 법적 요구사항 및 정보를 고려한 목표, 세부목표 및 실행계획을 수립할 수 있습니다. EnMS(Energy Management Systems)는 조직이 조직의 방침 의지를 달성하고, 에너지성과 개선에 필요한 활동을 하고 이 표준의 요구사항에 그 시스템의 적합성을 실증하는 것을 가능하게 합니다. 이 표준은 조직의 관리하에 있는 활동들에 대하여 적용되며, 이 표준의 적용은 시스템 복잡성, 문서화 정도 및 자원을 포함하는 조직의 특정 요구사항에 맞도록 조정될 수 있습니다.
					</span>

				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 50001 교육의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso50001_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:5%;">
                       에너지의 효율적인 활용은 조직의 경제적 이익에도 기여할 뿐만 아니라 세계적인 화두로 급부상하고 있는 환경문제에 대하여 긍정적인 영향을 끼칠 수 있습니다.
					</span><br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:5%;">
                       ISO 50001의 효과적인 적용을 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 50001 심사원 인증 과정의 목적은 이 프로그램을 통해 교육받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.
					</span><br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:5%;">
                       인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO 50001 교육 프로그램은 ISO 50001 규격을 기본으로 하고 있고, 심사 가이던스 규격 ISO 19011:2018에 근간을 두고 있습니다.
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
</article><!--------+++++++/ 컨텐츠 03  시스템인증 > 교통,통신 및 에너지 인증 > ISO 50001  종료 /++++++++----------->
</div> <!------------+++++++/    <div class="tab_con"> 종료  /+++++++++++--------------->
</div><!--------++++++++/ <div class="content_wrap">  /++++++++---------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>