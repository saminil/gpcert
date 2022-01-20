<?php
	include_once('./_common.php');
$g5['title'] = '교육/정보 보안';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle; }
    
	/*.vision_type5 .vision_area:nth-child(1) ul li .i_box {background:#005bab;}
	.vision_type5 .vision_area:nth-child(2) ul li .i_box {background:#36b1d4;}*/
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#f48025;}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#ffcccc;}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#ccccff;}
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type5 .vision_area:nth-child(7) ul li .i_box {background:##339999;}
	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:auto; padding:30px 40px;line-height:auto;} /* 텍스트 내용 상하 */
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; text-align:justify;text-justify:inter-word;}
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type5 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
    /* 심사원 교육 > 서비스관리 .ISO 55001 START */
    .vision_type6 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type6:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type6 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type6 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type6 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type6 .vision_area ul {margin:0; padding:0; }
	.vision_type6 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type6 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle; }
	/*
    .vision_type6 .vision_area:nth-child(1) ul li .i_box {background:#005bab;}
	.vision_type6 .vision_area:nth-child(2) ul li .i_box {background:#36b1d4;}
	.vision_type6 .vision_area:nth-child(3) ul li .i_box {background:#f48025;}
    */
    .vision_type6 .vision_area:nth-child(4) ul li .i_box {background:#ffcccc;}
    .vision_type6 .vision_area:nth-child(5) ul li .i_box {background:#ccccff;}
    .vision_type6 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type6 .vision_area:nth-child(7) ul li .i_box {background:##339999;}
	.vision_type6 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type6 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type6 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type6 .vision_area ul li .con_txt {display:table-cell; width:70%; height:auto; padding:30px 40px;line-height:auto;} /* 텍스트 내용 상하 */
	.vision_type6 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; text-align:justify;text-justify:inter-word;}
	.vision_type6 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type6 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type6 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type6 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    
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

        .vision_type6 .vision_area h2.title { font-size:1.5em; }
        .vision_type6 .vision_area span.stitle{font-size:1em; width:90%;}
        .vision_type6 .vision_area ul li {width:100%;}
        .vision_type6 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
        .vision_type6 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type6 .vision_area ul li .con_txt span { padding:0 30px; }
	}

</style>

<div class="content_wrap">

    <!--+++ Tab Menu 20.07.29 탭메뉴 버튼 설정 시작 +++-->
    <div class="tab_menu tab01">
      <ul style="display:inline-block;text-align:center;">
      	<!-- 처음 활성화 메뉴에 class="on" -->
      	<li><a href="javascript:;">ISO/IEC 20000-1</a></li>
      	<li><a href="javascript:;">ISO/IEC 27001</a></li>
      	<li><a href="javascript:;">ISO/IEC 27002</a></li>
      	<li class="on"><a href="javascript:;">ISO/IEC 27005</a></li>
      	<li><a href="javascript:;">ISO/IEC 27032</a></li>
      	<li><a href="javascript:;">ISO/IEC 27035-1</a></li>
      	<li><a href="javascript:;">ISO 27799</a></li>
    	<li><a href="javascript:;">ISO/IEC 29100</a></li>
      	<li><a href="javascript:;">ISO/IEC 38500</a></li>
      </ul>
    </div>
    <!--+++ /Tab Menu 20.07.29 탭메뉴 버튼 설정 종료 +++-->
	
	<!-----내용구분 선 2개 ------>
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
		    <sapn style="display:block;text-align:center;color:#BC0000;"> &#10057; &#10057; &#10057;</sapn>
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
	
<!--+++ 20.0526.13 탭컨텐츠 영역 시작 +++-->
<div class="tab_con">
	  
<!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
<article>	
	<section class="page_title">
		<h1 class="sub_tit">ISO/IEC 20000-1 <span class="fc_pointer"> 전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">정보기술-서비스관리 교육과정</h2>
	</section>
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title">	ISO/IEC 20000-1:2018 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso20000_01.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;" >
					<i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span>
						ISO/IEC 20000-1은 정보기술(IT) 서비스 조직이 서비스 관리 시스템을 계획, 수립, 구현, 운영, 모니터링, 검토, 유지 및 개선하기 위한 요구 사항을 명시한 국제 표준입니다. 이 규격은 BSI(영국왕립표준협회)에 의해 제정된 영국 표준 BS 15000 규격을 국제표준화기구에서 표준화한 것으로, ISO/IEC 20000-1의 범위 내에서 서비스 관리 시스템의 적용에 대한 지침을 포함하고 있습니다.
					</span><br><br>
					<span>
						ISO/IEC 20000-1을 통해 조직은 IT 서비스 관리 시스템을 체계적으로 구축합니다. 공식 체계의 구축으로 조직의 서비스 및 프로세스를 개선하여 시간과 비용이 절감되고, 반복되는 오류와 사고를 예방합니다. 이를 통해 조직은 고객에게 IT 시스템에 대한 확신을 주고 서비스 품질을 개선하여 경쟁력을 확보합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 20000-1 교육의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso20000-1_02.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;" >
					<i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span>
						ISO/IEC 20000-1은 개인이 요구사항의 내용 및 목적을 이해하고, 이를 기반으로 IT 서비스 경영시스템을 관리하여 기업의 IT 서비스 관리 수준을 향상시킬 수 있도록 지원합니다. 또한, ISO/IEC 20000 교육을 통해 심사원이 심사 시 필요한 기술 및 지식을 습득하여 ITSM 심사를 수행하고 대응할 수 있도록 지원합니다.
                   </span><br><br>
                    <span>
                       인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO/IEC 20000-1 교육 프로그램은 ISO/IEC 20000-1 규격을 기본으로 하고 있고, 심사 가이던스 규격 ISO 19011:2018에 근간을 두고 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

	  <!----(주)아이지씨인증원 사업영역 시작-------->
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
            </section>
            <!---------(주)아이지씨인증원 사업영역 종료 ------>
	</section>
</article> <!--------+++++++/ <article style="display:block"> 종료 /++++++++----------->



<article>  <!----// 컨텐츠 02 ISO/IEC 27001 Tab Menu  // 20.07.29 탭메뉴 컨텐츠 영역  시작------->
    <!--+++++ (처음 활성화 컨텐츠에만 style="display:block") +++++-->

      <section class="page_title">
		<h1 class="sub_tit">ISO/IEC 27001:2013 <span class="fc_pointer">전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">정보기술, 보안기술-정보보안 경영시스템 교육과정</h2>
	</section>
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title">ISO/IEC 27001:2013 교육 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_iec_27001-2013_00.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:342px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO/IEC 27001는 국제표준화기구 (ISO: International Organization for Standardization) 및 국제전기기술위원회 (IEC: International Electrotechnical Commission)에서 제정한 정보보호 관리체계에 대한 국제 표준이자 정보보호 분야에서 가장 권위 있는 국제 인증표준으로, 정보보호정책, 물리적 보안, 정보접근 통제 등 정보보안 관련 11개 영역, 133개 항목을 다루고 있습니다.
					</span><br><br>
					<span style="text-align:justify;text-justify: inter-word;">
						ISO/IEC 27001는 정보보안을 설정, 구현, 운영, 모니터링, 검토, 유지관리 및 개선하기 위한 체계적인 비즈니스 위험 접근 방식을 기반으로 하는 관리 시스템입니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		<br><br>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 27001 교육의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso27001-2013_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						중요한 회사 정보와 개인 데이터를 안전하게 보호하는 것은 모든 비즈니스에 필수적일 뿐만아니라 법적 의무입니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						ISO/IEC 27001에 대한 신뢰성을 가지기 위해서 전문가가 필요합니다. ISO/IEC 27001 심사원 인증 프로그램의 목적은 심사원으로서 필요한 지식을 제공하는 것뿐만 아니라 관련 지식 전문가를 산업계에 제공하는데 있습니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO/IEC 27001 교육 프로그램은 ISO/IEC 27001 규격을 기본으로 하고 있고, 심사 가이던스 규격 ISO 19011:2018에 근간을 두고 있습니다.
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
                  </section>
              <!---------(주)아이지씨인증원 사업영역 HTML5 종료 ------>		
	</section>
    </article><!----// 컨텐츠 02 ISO/IEC 27001 Tab Menu // 20.07.29 탭메뉴 컨텐츠 영역  종료------->
    

    <!--+++++ 컨텐츠 03 ISO/IEC 27002 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	<article>	
	   <section class="page_title">
	   	<h1 class="sub_tit">ISO/IEC 27002 <span class="fc_pointer"> 전문인력 양성 교육</span> </h1>
	   	<h2 class="sub_txt">정보기술, 보안기술-정보보안 통제를 위한 실천규범 교육과정</h2>
	   </section>
	   <section class="vision_type5">
	
		<div class="vision_area">
		<h2 class="title">ISO/IEC 27002:2013 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_27002_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO/IEC 27002:2013은 조직의 정보 보안 위험 환경을 고려한 통제의 선택, 구현 및 관리를 포함한조직 정보 보안 표준 및 정보 보안 관리 관행에 대한 지침을 제공합니다.
					</span><br>
					<span style="text-align:justify;text-justify: inter-word;">
						ISO/IEC 27002:2013은 ISO/IEC 27001을 기반으로 정보 보안 관리 시스템을 구현하거나, 일반적으로 수용되는 정보 보안 통제를 이행하거나, 또는 자체적으로 정보 보안 관리 지침을 개발하는 조직에서 사용되도록 설계되었습니다. 
					</span><br>
					<span style="text-align:justify;text-justify: inter-word;">
						이 규격은 정보 보안 관리 시스템 구현 과정에서 통제를 선택하기 위한 참고 자료로 사용되며, 조직이 조직 간 활동에 대한 확신을 쌓고 정책, 프로세스, 조직 구조 및 소프트웨어 및 하드웨어 기능을 포함하는 적절한 제어를 구현하는 데 도움을 줄 수 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 27002 교육의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_27002_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
                    </div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO/IEC 27002를 통해서 개인은 조직 내에서 정보 보안 관리 시스템을 구현, 유지 및 개선하는 데 도움이 되는 기본 지침을 이해할 수 있습니다. 개인은 정보 보안 통제 구현에 사용되는 방법 및 기술을 습득하여 조직의 ISMS(정보 보안 관리 시스템)를 효과적으로 관리하고, 조직의 다양한 정보 보안 위험에 적절하게 대응할 수 있습니다.
					</span><br>
					<span style="text-align:justify;text-justify: inter-word;">
                        ISO/IEC 27002의 효과적인 적용을 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO/IEC 27002 교육 과정의 목적은 이 프로그램을 통해 교육받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.
					</span><br>
					<span style="text-align:justify;text-justify: inter-word;">
                        인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO/IEC 27002 교육 프로그램은 ISO/IEC 27002 규격을 기본으로 하고 있고, 심사 가이던스 규격 ISO 19011:2018에 근간을 두고 있습니다.
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
                  </section>
              <!---------(주)아이지씨인증원 사업영역 HTML5 종료 ------>
	  </section>
    </article><!----// 컨텐츠 03 ISO/IEC 27002 Tab Menu // 20.07.29 탭메뉴 컨텐츠 영역  종료------->
    
    
    <article style="display:block;">  <!----// 컨텐츠 04 ISO/IEC 27005 Tab Menu  // 20.07.29 탭메뉴 컨텐츠 영역  시작------->
    <!--+++++ (처음 활성화 컨텐츠에만 style="display:block") +++++-->
      <section class="page_title">
		<h1 class="sub_tit">ISO/IEC 27005 <span class="fc_pointer">전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">정보기술, 보안기술-정보보안 리스크관리 교육과정</h2>
	</section>
	<section class="vision_type5">
       <div class="vision_area">
		<h2 class="title">ISO/IEC 27005:2018 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_iec27005_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO/IEC 27005는 정보 보안 요구 사항에 대한 조직의 요구 사항을 파악하고 효과적인 정보 보안 관리 시스템을 구축하는 데 필요한 정보 보안 위험 관리의 체계적인 접근 방법을 확립하기 위한 지침을 제공합니다. 이 국제 표준은 ISO/IEC 27001 개념을 지원하며 위험 관리 접근법을 기반으로 한 정보 보안의 효율적인 구현을 지원하도록 설계되었습니다.
					</span><br>
					<span style="text-align:justify;text-justify: inter-word;">
						따라서 ISO/IEC 27005는 조직이 직면한 다양한 정보 보안 위험을 식별, 평가, 분석, 평가 및 처리할 수 있음을 입증하며, 조직이 위험을 우선시하고 위험을 줄이거나 완화하기 위한 적절한 조처를 할 수 있도록 지원합니다
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 27005 교육의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_iec27005_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						IISO/IEC 27005의 효과적인 적용을 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO/IEC 27005 교육과정의 목적은 이 프로그램을 통해 인증받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.
					</span><br>
					<span style="text-align:justify;text-justify: inter-word;">
						심사원 과정의 일환으로 당사는 적격성을 정의하는 주요능력, 지식 그리고 경험을 반영하는 요구사항에 대비하여 평가를 할 것입니다. 교육 프로그램은 심사 주요 표준에 기초합니다.
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
                  </section>
              <!---------(주)아이지씨인증원 사업영역 HTML5 종료 ------>
	   </section>
    </article><!----// 컨텐츠 04 ISO/IEC 27005 Tab Menu // 20.07.29 탭메뉴 컨텐츠 영역  종료------->
    

    <article>  <!----// 컨텐츠 05 ISO/IEC 27032 Tab Menu  // 20.07.29 탭메뉴 컨텐츠 영역  시작------->
    <!--+++++ (처음 활성화 컨텐츠에만 style="display:block") +++++-->

    <section class="page_title">
		<h1 class="sub_tit">ISO/IEC 27032 <span class="fc_pointer"> 전문인력 양성 교육</span></h1>
		<h2 class="sub_txt">정보기술, 보안기술-사이버보안을 위한 가이드라인 교육과정</h2>
	</section>
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title">ISO/IEC 27032:2012 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso27032_01.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;" ><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span>
						사이버 공간은 인터넷 상에서 사람, 소프트웨어 및 서비스가 상호작용하는 복잡한 환경으로, 전 세계적으로 분산된 정보통신기술 장치와 연결된 네트워크의 지원을 받고 있습니다. 그러나 사이버 공간에서 조직과 정보 제공자 간의 커뮤니케이션이 부족하고 이들 영역 사이의 격차가 있기 때문에 보안 문제가 발행할 수 있습니다. 국제 표준인 ISO/IEC 27032는 신뢰성, 협력, 정보 교환 및 사이버 공간 내 이해 관계자 간의 시스템 통합을 위한 기술 지침의 수립을 다루는 정책 프레임 워크를 제공합니다.
					</span>
					<br>
					<span>
						ISO/IEC 27032는 정보 보안, 네트워크 및 인터넷 보안, 중요한 정보 인프라 보호 (CIIP)와 관련하여 사이버 공간에서 다양한 보안들의 역할을 강조하기 위한 것입니다. ISO/IEC 국제 표준은 사이버 공간의 서로 다른 보안 도메인 사이의 격차를 해소하고, 해킹, 사이버 공격, 악성 소프트웨어 같은 사이버 보안 위험을 해결하기 위한 기술적 지침을 제공합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 27032 교육의 중요성 </h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"  style="background-image:url(./images/edu_iso27032_03.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-hands-helping"></i></div>
				</div>
				<div class="con_txt">
					<span>
						ISO/IEC 27032의 효과적인 적용을 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO/IEC 27032 교육과정의 목적은 이 프로그램을 통해 인증받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.
					</span>
					<br>
					<span>
						심사원 과정의 일환으로 당사는 적격성을 정의하는 주요능력, 지식 그리고 경험을 반영하는 요구사항에 대비하여 평가를 할 것입니다. 교육 프로그램은 심사 주요 표준에 기초합니다.
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
                  </section>
              <!---------(주)아이지씨인증원 사업영역 HTML5 종료 ------>
	   </section>
    </article><!----// 컨텐츠 05 ISO/IEC 27032 Tab Menu // 20.07.29 탭메뉴 컨텐츠 영역  종료------->
    

    <article>  <!----// 컨텐츠 06 ISO/IEC 27035-1 Tab Menu  // 20.07.29 탭메뉴 컨텐츠 영역  시작------->
    <!--+++++ (처음 활성화 컨텐츠에만 style="display:block") +++++-->

      <section class="page_title">
		<h1 class="sub_tit">ISO/IEC 27035-1 <span class="fc_pointer"> 전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">정보기술, 보안기술-정보보안 교육과정</h2>
	  </section>
	  <section class="vision_type5">

		<div class="vision_area">
		<h2 class="title">ISO/IEC 27035-1:2016 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso27035_01.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i></div>
				</div>
				<div class="con_txt">
					<span>
						오늘날 비즈니스 세계에서 정보 보안 사고는 비즈니스를 심각하게 손상시킬 수 있는 예기치 않은 위험으로 간주됩니다. 따라서, 조직은 즉시 사건을 식별, 평가 및 효과적으로 관리하기 위한 조치를 취해야 합니다. ISO/IEC 27035-1 정보 보안 사고 관리는 전략적 사고 관리 계획을 수행하고 사고 대응을 준비하기 위한 모범 사례와 지침을 제공하는 국제 표준입니다.
					</span>
					<br>
					<span>
						오정보 보안 사고 관리 기능을 갖춘 조직은 비즈니스 위험을 관리할 수 있습니다. 마찬가지로 ISO/IEC 27035-1 프레임 워크는 효과적인 정보 보안 관리, 사고 완화 및 지속 가능한 비즈니스 프로세스 구축 능력을 갖춘 조직의 보안 구조에서 중요한 기능입니다. ISO/IEC 27035-1 정보 보안 사고 관리는 포괄적인 전문 지식을 갖춘 개인이 정보 보안 사고를 탐지, 보고 및 평가할 수 있도록 지원합니다.
					</span>
				</div>
			</li>
		</ul>		
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 27035-1 교육의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso27035_03.jpg);background-size:auto 100%;background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fas fa-hands-helping"></i></div>
				</div>
				<div class="con_txt">
					<span>
						ISO/IEC 27035-1는 개인이 전 세계적으로 인정받는 보안 전문가가 되어 조직에서 사고의 영향을 최소화할 수 있도록 도와줍니다.
					</span>
					<br>
					<span>
						ISO/IEC 27035-1의 효과적인 적용을 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO/IEC 27035-1 교육과정의 목적은 이 프로그램을 통해 인증받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.
					</span>
					<br>
					<span>
						심사원 과정의 일환으로 당사는 적격성을 정의하는 주요능력, 지식 그리고 경험을 반영하는 요구사항에 대비하여 평가를 할 것입니다. 교육 프로그램은 심사 주요 표준에 기초합니다.
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
                  </section>
              <!---------(주)아이지씨인증원 사업영역 HTML5 종료 ------>
      </section>
    </article><!----// 컨텐츠 06 ISO/IEC 27035-1 Tab Menu // 20.07.29 탭메뉴 컨텐츠 영역  종료------->
    

    <article>  <!----// 컨텐츠 07 ISO 27799 Tab Menu  // 20.07.29 탭메뉴 컨텐츠 영역  시작------->
    <!--+++++ (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <section class="page_title">
		<h1 class="sub_tit">ISO 27799 <span class="fc_pointer"> 전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">건강정보학-ISO/IEC 27002를 이용한 건강분야 정보보안관리 교육과정</h2>
	   </section>
	   <section class="vision_type5">

		<div class="vision_area">
		<h2 class="title">ISO 27799:2016 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_27799_2016_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO 27799는 헬스케어 산업 및 고유한 운영 환경에서 근무하는 모든 사람의 개인 건강 데이터의 기밀성, 무결성 및 가용성을 최상으로 보호하는 방법에 대한 지침을 제공하는 국제 표준입니다.
					</span>
					<br><br>
					<span style="text-align:justify;text-justify: inter-word;">
						구체적으로는 의료기관 내 진료 및 처방기록, 검진결과 등 환자의 민감한 의료 및 개인 데이터를 적법하고 안전하게 관리할 수 있는 정보보호 관리 체계 규격입니다.
					</span>

				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO 27799 교육의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso_27799_2016_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						ISO 27799 교육은 개인 건강 정보를 보호하기 위한 기본적인 지침을 제공하기에 해당 분야에 종사하는 인원에게는 필수적입니다. 
						
						해당 표준의 이점은 크기, 유형 또는 복잡성에 관계없이 모든 의료기관에서 유효하다는 점입니다. 
					</span>
					<br>
					<span style="text-align:justify;text-justify: inter-word;">
                        ISO 27799의 효과적인 적용을 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 27799 교육과정의 목적은 이 프로그램을 통해 교육받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.
					</span>
					<br>
					<span style="text-align:justify;text-justify: inter-word;">
                        인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO 27799 교육 프로그램은 ISO 27799 규격을 기본으로 하고 있고, 심사 가이던스 규격 ISO 19011:2018에 근간을 두고 있습니다.
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
                  </section>
              <!---------(주)아이지씨인증원 사업영역 HTML5 종료 ------>
	   </section>
    </article><!----// 컨텐츠 07 ISO 27799 Tab Menu // 20.07.29 탭메뉴 컨텐츠 영역  종료------->
    
    <article>  <!----// 컨텐츠 08 ISO/IEC 29100 Tab Menu  // 20.07.29 탭메뉴 컨텐츠 영역  시작------->
    <!--+++++ (처음 활성화 컨텐츠에만 style="display:block") +++++-->
       <section class="page_title">
		<h1 class="sub_tit">ISO/IEC 29100  <span class="fc_pointer">전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">정보기술, 보안기술-개인정보 프레임워크 교육과정</h2>
	   </section>
	   <section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title">ISO/IEC 29100:2011 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso29100_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO/IEC 29100은 정보통신기술 시스템(ICT) 내에 있는 개인식별가능정보(PII)를 보호하기 위한 높은 수준의 프레임워크를 제공합니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						보안과 관련된 기존의 여러 표준 (ISO/IEC 27001, ISO/IEC 27002 및 ISO/IEC 27018 등)이 있지만 ISO/IEC 29100은 개인식별가능정보(PII) 처리에 더 중점을 둡니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						개인 식별 가능 정보(PII)를 처리하는 기술의 수를 고려하면, 조직은 PII를 보호하는 방법에 대한 지침을 제공하는 프라이버시 프레임워크를 구현하는 것이 필수적입니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						이 개인 정보 보호 프레임워크는 조직이 정보통신 기술 시스템(ICT) 내에서 개인 정보 보호를 위한 PII 관련 요구사항을 정의할 수 있도록 지원하기 위한 것입니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						이는 일반적인 개인 정보 용어를 지정하고, PII 처리에 있어 행위자와 그 역할을 정의하고, 친숙한 개인 정보 원칙을 참조하여 실행할 수 있습니다.
					</span>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						개인 식별 정보에는 제한적인 용도로만 사용되는 기밀 데이터가 포함될 수 있습니다. 조직이 PII를 보호하는 주요 이유는 다음과 같습니다.<br><br>
						&#8903;	개인의 사생활 개인식별가능정보 보호를 위해<br>
                        &#8903;	법적 및 규제 요구사항을 충족시키기 위해<br>
                        &#8903;	기업의 책임을 실천하기 위해<br>
                        &#8903;	소비자의 신뢰도를 높이기 위해<br>
                        &#8903;	보안위반 감소를 위해<br>
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 29100의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso29100_04.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO/IEC 29100에서 제공하는 이 프라이버시 프레임워크는 조직뿐만 아니라 PII를 처리하기 위해 프라이버시 제어가 필요한 ICT를 사용하는 개인에게도 적용됩니다.
					</span>
					<br><br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
						ISO/IEC 29100의 효과적인 적용을 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO/IEC 29100 교육과정의 목적은 이 프로그램을 통해 인증받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.
					</span>
					<br><br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:10%;">
					    인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO/IEC 29100 교육 프로그램은 ISO/IEC 29100 규격을 기본으로 하고 있고, 심사 가이던스 규격 ISO 19011:2018에 근간을 두고 있습니다.
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
             </section>
              <!---------(주)아이지씨인증원 사업영역 HTML5 종료 ------>
	   </section>
    </article><!----// 컨텐츠 08 ISO/IEC 29100 Tab Menu // 20.07.29 탭메뉴 컨텐츠 영역  종료------->
    

    <article>  <!----// 컨텐츠 09 ISO/IEC 38500 Tab Menu  // 20.07.29 탭메뉴 컨텐츠 영역  시작------->
    <!--+++++ (처음 활성화 컨텐츠에만 style="display:block") +++++-->
      <section class="page_title">
		  <h1 class="sub_tit">ISO/IEC 38500 <span class="fc_pointer"> 전문인력 양성 교육</span> </h1>
		  <h2 class="sub_txt">정보기술-IT관리 교육과정</h2>
	   </section>
	   <section class="vision_type5">
		<div class="vision_area">
		<h2 class="title">ISO/IEC 38500:2015 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_iso38500_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:5%;">
						ISO/IEC 38500은 IT 조직이 조직의 성과에 긍정적으로 기여할 수 있도록 관리 기관을 지원합니다. 따라서 ISO/IEC 38500 요구 사항을 충족함으로써 조직은 IT 사용을 모니터링하고 비즈니스 연속성 및 지속 가능성을 보장하며 IT를 비즈니스 요구에 맞추고 IT 자산의 적절한 구현 및 운영을 보장할 수 있습니다.
					</span>
					<br><br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:5%;">
						또한 이 표준은 ISO/IEC 38500에서 설정 한 우수한 IT 거버넌스를 위한 원칙과 모델을 준수하는 프레임 워크를 구축, 구현 및 지속적으로 개선하는 데 필요한 전문 지식과 지식을 얻는 데 도움이 됩니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">ISO/IEC 38500 교육의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_isoISO-IEC38500_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;">
					<i class="fas fa-microscope"></i>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:5%;">
					  ISO/IEC 38500을 통해 심사원 및 개인은 비즈니스 전략을 이해하고 조직에 맞게 조정할 수 있습니다.
					</span>
					<br><br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:5%;">
					  ISO/IEC 38500의 효과적인 적용을 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO/IEC 38500 교육과정의 목적은 이 프로그램을 통해 교육받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.
					</span>
					<br><br>
					<span style="text-align:justify;text-justify:inter-word;position:relative;top:5%;">
					  인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO/IEC 38500 교육 프로그램은 ISO/IEC 38500 규격을 기본으로 하고 있고, 심사 가이던스 규격 ISO 19011:2018에 근간을 두고 있습니다.
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
              </section>
              <!---------(주)아이지씨인증원 사업영역 HTML5 종료 ------>
	   </section>
	
    </article><!----// 컨텐츠 09 ISO/IEC 38500 Tab Menu // 20.07.29 탭메뉴 컨텐츠 영역  종료------->
</div> <!------------+++++++/    <div class="tab_con"> 종료  /+++++++++++--------------->
</div><!--------++++++++/ <div class="content_wrap">  /++++++++---------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>