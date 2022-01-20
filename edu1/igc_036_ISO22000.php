<?php
	include_once('./_common.php');
$g5['title'] = '교육/식품';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:33%; vertical-align:middle; padding:3px;} /* 이미지 가로 중앙, 폭 설정 */
	.vision_type5 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}
	.vision_type5 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background:#ffffff;}
    .vision_type5 .vision_area:nth-child(5) ul li .i_box {background:#ffffff;}
    .vision_type5 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type5 .vision_area:nth-child(7) ul li .i_box {background:#339999;}
	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px; padding: 50px 50px;}
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:auto; padding:30px 40px;line-height:auto;} /* 텍스트 내용 상하 */
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type5 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
    
    /* FSSC 22000 시작  */
    .vision_type6 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type6:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type6 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type6 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type6 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type6 .vision_area ul {margin:0; padding:0; }
	.vision_type6 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type6 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; margin: 0 auto;} /* 이미지 폭*/
    .vision_type6 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}
	.vision_type6 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}
	.vision_type6 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;}
    .vision_type6 .vision_area:nth-child(4) ul li .i_box {background:#ffffff;}
    .vision_type6 .vision_area:nth-child(5) ul li .i_box {background:#ffffff;}
    .vision_type6 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type6 .vision_area:nth-child(7) ul li .i_box {background:#339999;}
    .vision_type6 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type6 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type6 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type6 .vision_area ul li .con_txt {display:table-cell; width:70%; height:auto; padding:30px 40px;line-height:auto;} /* 텍스트 내용 상하 */
	.vision_type6 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all;margin-top:15px; }
	.vision_type6 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type6 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type6 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type6 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
     /* FSSC 22000 종료  */
    
    
    /*FDA FSMA 시작*/
    .vision_type7 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type7:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type7 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type7 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type7 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type7 .vision_area ul {margin:0; padding:0; }
	.vision_type7 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type7 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle; }
	.vision_type7 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}
	.vision_type7 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}
	.vision_type7 .vision_area:nth-child(3) ul li .i_box {background:#ffffff;}
    .vision_type7 .vision_area:nth-child(4) ul li .i_box {background:#339999;}
    .vision_type7 .vision_area:nth-child(5) ul li .i_box {background:#ccccff;}
    .vision_type7 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type7 .vision_area:nth-child(7) ul li .i_box {background:#339999;}
	.vision_type7 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type7 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type7 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type7 .vision_area ul li .con_txt {display:table-cell; width:70%; height:auto; padding:30px 40px;line-height:auto;} /* 텍스트 내용 상하 */
	.vision_type7 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type7 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type7 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type7 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type7 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    /*FDA FSMA 종료*/
    
    /* FSPCAS 승인 PCQI양성과정 시작 */
    .vision_type8 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type8:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type8 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type8 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type8 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type8 .vision_area ul {margin:0; padding:0; }
	.vision_type8 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type8 .vision_area ul li .i_box {display:table-cell; width:32%; vertical-align:middle;}
	.vision_type8 .vision_area:nth-child(1) ul li .i_box {background:#ffffff;}
	.vision_type8 .vision_area:nth-child(2) ul li .i_box {background:#ffffff;}
	.vision_type8 .vision_area:nth-child(3) ul li .i_box {background:#005bab;}
    .vision_type8 .vision_area:nth-child(4) ul li .i_box {background:#ffcccc;}
    .vision_type8 .vision_area:nth-child(5) ul li .i_box {background:#36b1d4;}
    .vision_type8 .vision_area:nth-child(6) ul li .i_box {background:#00ffff;}
    .vision_type8 .vision_area:nth-child(7) ul li .i_box {background:#339999;}
	.vision_type8 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type8 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type8 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type8 .vision_area ul li .con_txt {display:table-cell; width:70%; height:auto; padding:30px 40px;line-height:auto;} /* 텍스트 내용 상하 */
	.vision_type8 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type8 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type8 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type8 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type8 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    /* FSPCAS 승인 PCQI양성과정 종료 */
    
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
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 사업영역, 우리가 제공하는 서비스 모바일 View */
        
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

        .vision_type8 .vision_area h2.title { font-size:1.5em; }
		.vision_type8 .vision_area span.stitle{font-size:1em; width:90%;}
		.vision_type8 .vision_area ul li {width:100%;}
		.vision_type8 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
		.vision_type8 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
		.vision_type8 .vision_area ul li .con_txt span { padding:0 30px; }
	}
</style>


<div class="content_wrap">

<!--+++ 20.05.07 탭메뉴 +++-->
	<div class="tab_menu tab01">
		<ul style="display:inline-block;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">ISO 22000</a></li>
			<li><a href="javascript:;">FSSC 22000</a></li>
			<li><a href="javascript:;">FDA FSMA</a></li>
			<li><a href="javascript:;">PCQI</a></li>
		</ul>
	</div>
	<!--+++ /20.05.07 탭메뉴 +++-->
	
	
  <!--+++ 20.05.07 탭컨텐츠 영역 +++-->
  <div class="tab_con"><!------------ class="tab_con"  시작 ---------------->	
	<article style="display: block">
	<!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	  <section class="page_title">
	  <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:0px;width:100%;">
	  <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:20px;margin-top:0px;width:100%;"><br><br>
	  	<h1 class="sub_tit"> ISO 22000 <span class="fc_pointer"> 전문인력 양성 교육</span> </h1>
	  	<h2 class="sub_txt">식품안전경영시스템 교육과정 </h2>
	  </section>
	
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title">ISO 22000:2018 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/iso_22000_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
                      ISO 22000은 인간의 소비시점에서 식품이 안전하다는 것을 보장하기 위해 식품의 원재료 생산, 제조, 가공, 보존, 유통단계 등의 식품 안전 위해요소를 관리하기 위한 식품안전경영시스템에 대한 요구사항을 규정한 국제표준 규격입니다. <br><br>
					</span>
					<span style="margin:0 auto;display:inline-block;text-align:justify;">
                      최종 소비자가 섭취하기 전까지 각 단계에서 발생할 우려가 있는 요소를 규명하고, 이를 중점적으로 관리하기 위한 중요관리점을 설정, 관리함으로써 식품의 안전성을 확보하는 위생관리 체계라고 할 수 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

        
		<div class="vision_area">
            <h2 class="title">ISO 22000 교육의 중요성</h2>
            <ul>
                <li>
                    <div class="i_box">
                        <div class="icon" style="background-image:url(./images/iso_22000_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
                         <em>
                          <!------ EDUCATION --------->
                         </em>
                        </div>
                    </div>
                    <div class="con_txt">
                        <span style="margin:0 auto;display:inline-block;text-align:justify;">
                            ISO 22000은 프로세스 형태 및 사용시설과 관련될 수 있는 위해요소를 포함하여, 식품사슬에서 발생할 것이 예측되는 모든 위해요소를 파악하여 식품안전경영시스템을 달성할 수 있도록 지원하고 있습니다. 
                        </span><br><br>
                        <span style="margin:0 auto;display:inline-block;text-align:justify;">
                            ISO 22000의 효과적인 적용을 위하여 기업과 산업체는 적격성을 갖춘 전문가를 필요로 합니다. ISO 22000 심사원 인증 과정의 목적은 이 프로그램을 통해 인증받은 심사원 및 개인이 적격하다는 신뢰성을 인증원과 기업 및 산업 분야에 제공하기 위함입니다.
                        </span><br><br>
                        <span style="margin:0 auto;display:inline-block;text-align:justify;">
                            인증 절차의 일환으로 적격성을 규정하는 핵심 기술, 지식 및 경험을 반영하는 요구사항에 따라 평가가 진행될 것입니다. ISO 22000 교육 프로그램은 ISO 22000 규격을 기본으로 하고 있고, 심사 가이던스 규격 ISO 19011:2018에 근간을 두고 있습니다.
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
   </article><!--+++ /20.05.25 탭컨텐츠 영역  종료+++-->

     
    <article><!--+++ /Tab Menu 컨텐츠 02, 20.05.25 탭컨텐츠 영역  시작+++-->
       <section class="page_title">
		    <h1 class="sub_tit">FSSC 22000 <span class="fc_pointer"> 전문인력 양성 교육</span> </h1>
		    <h2 class="sub_txt">식품안전시스템 교육과정 </h2>
	    </section>
	    
	    <section class="vision_type6">
            <div class="vision_area">
                <h2 class="title">FSSC 22000 Ver. 5 개요</h2>
                <ul>
                    <li>
                        <div class="i_box">
                            <div class="icon" style="background-image:url(./images/edu_iso_fssc_22000_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
                             <em>
                              <!------ EDUCATION --------->
                             </em>
                            </div>
                        </div>
                        <div class="con_txt">
                            <span style="margin:0 auto;display:inline-block;text-align:justify;">
                              FSSC 22000은 글로벌 식품 안전 표준으로, 식품 관리 시스템 표준 ISO 22000과 PRP(Pre-Requisite Program) 및 추가 요건들을 기반으로 식품안전 리스크 관리에 대한 포괄적인 기준을 제시합니다.<br><br>
                              이 표준은 식품 안전 경영시스템 뿐만 아니라 보관 및 운송에 대한 지침도 포함하고 있기때문에 식품안전 및 품질 책임 관리를 위한 틀을 제공합니다.<br><br>
                            </span>
                            <span style="margin:0 auto;display:inline-block;text-align:justify;">
                              IGC는 FSSC로부터 FSSC 22000 Full License에 대한 교육 권한을 부여받아, 다음 교육을 제공합니다.<br><br>
                              &#10112; 조직, 인증기관, 컨설턴트 및 기타 사람들을 위한 과정<br>
                              &#10113; FSSC 22000 내부 심사원 과정<br>
                              &#10114; FSSC 22000 선임 심사원 과정<br><br>
                            </span>
                        </div>
                    </li>
                </ul>
		      </div>
           <a name="fssc_edu"></a>
            <div class="vision_area">
                <h2 class="title">FSSC 22000 교육의 중요성</h2>
                <ul>
                    <li>
                        <div class="i_box">
                            <div class="icon" style="background-image:url(./images/edu_iso_fssc_22000_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
                             <em>
                              <!------ EDUCATION --------->
                             </em>
                            </div>
                        </div>
                        <div class="con_txt">
                            <span style="display:inline-block;text-align:justify;">
                                FSSC 22000 요구사항에 대한 일반적인 지식에 관심이 있고, 다른 식품 사슬 조직에서 어떻게 적용될 수 있는지 이해하기 위한 조직, 인증기관, 컨설턴트 및 기타 사람들을 위한 과정입니다.<br><br>
                                다양한 식품 사슬 범주 내에서 FSSC 22000이 어떻게 구현될 수 있는지를 보여줍니다.
                            </span><br><br>
                            <span style="display:inline-block;text-align:justify;">
                                <span style="font-weight:bold;">01 내부 심사원 과정</span>
                                내부 심사원에 대한 교육 요구사항을 충족하기 위해 FSSC 22000을 구현하는 조직을 위해 설계되었습니다. 교육은 ISO 19011:2018에 명시된 모든 요소를 다룹니다.
                            </span><br><br>
                            <span style="display:inline-block;text-align:justify;">
                                <span style="font-weight:bold;">02 선임 심사원 과정</span>
                                인증기관에서 인증 받은 선임 심사원이 될 수 있도록 설계되었습니다. 내부 심사 기술 및 컨설턴트를 추가로 개발하려는 조직에도 적용될 수 있습니다. FSSC 22000에 대한 사전 지식이 필요합니다. 교육은 ISO 19011:2018, ISO/IEC 17021-1:2015 및 ISO/TS 22003:2013에 명시된 모든 요소를 다루며, 연습 과정(예: case study)과 필기 시험이 포함되어 있습니다. 교육 시간은 총 40시간입니다.

                            </span>
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="vision_area">
                <h2 class="title">교육과정 소개</h2>
                <ul>
                    <li>
                        <div class="i_box">
                            <div class="icon" style="background-image:url(./images/edu_iso_fssc_22000_03.png);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
                             <em>
                              <!------ EDUCATION --------->
                             </em>
                            </div>
                        </div>
                        <div class="con_txt">
                            <span style="display:inline-block;text-align:justify;">
                                IGC는 FSSC로부터 지정 받은 <strong style="color:#1f88e5">Training Organization</strong> 기관입니다. IGC가 제공하는 FSSC 공인 교육과정은 IGC인증원만의 풍부한 경험을 바탕으로 체계적이고 심도 있게 구성되었으며, 양질의 심사 스킬을 습득할 수 있도록 준비된 최고의 심사원 양성과정입니다.
                            </span><br><br>
                            
                        </div>
                    </li>
                </ul>
            </div>
            
            <div class="vision_area">
                <h2 class="title">교육의 이점</h2>
                <ul>
                    <li>
                        <div class="i_box">
                            <div class="icon" style="background-image:url(./images/edu_iso_fssc_22000_04.png);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
                             <em>
                              <!------ EDUCATION --------->
                             </em>
                            </div>
                        </div>
                        <div class="con_txt">
                            <span style="margin:0 auto;display:inline-block;text-align:justify;">
                              IGC는 FSSC로부터 지정 받은 <strong style="color:#1f88e5">Training Organization</strong> 기관으로, 다음과 같은 이점이 있습니다.
                            </span><br><br>
                            <span style="margin:0 auto;display:inline-block;text-align:justify;">
                              &#10112; 수료증에 FSSC 22000 마크가 포함되어, 신뢰성을 줄 수 있습니다.<br>
                              &#10113; 교육이 FSSC 22000 요구사항을 충족한다는 확신을 제공하며, 최신의 FSSC 22000 요구사항을 반영할 수 있습니다.<br>
                              &#10114; 실제로 조직에 FSSC 22000이 어떻게 적용될 수 있는지에 대한 방법을 제공합니다.<br>
                              &#10115; FSSC 22000과 관련된 문의 사항에 빠르게 접근할 수 있습니다.<br>
                              &#10116; IGC의 FSSC 22000 심사원 등록과 연계가 가능하여 빠르게 등록절차 진행이 가능합니다.<br><br>
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
   </article><!--+++ / Tab Menu 컨텐츠 02, 20.05.25 탭컨텐츠 영역  종료+++-->
     
    
   <article><!--+++ /Tab Menu 컨텐츠 03, 20.05.25 탭컨텐츠 영역  시작+++-->
      <section class="page_title">
		<h1 class="sub_tit">FDA FSMA <span class="fc_pointer"> 전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">식품안전현대화법 교육과정</h2>
	  </section>
	<section class="vision_type6">
		<div class="vision_area">
		<h2 class="title">FSMA(식품안전현대화법, FOOD SAFETY MODERNIZATION ACT) 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_fda-fsma_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt" style="line-height:332px;">
					<span style="text-align:justify;text-justify: inter-word;">
						FDA는 FSMA법을 통해 미국으로 수출하는 모든 식품 관련 기업이 식품안전시스템을 구비하고 위해요소가 있는 식품에 대해 리콜 조치를 취할 수 있는 권한을 갖게 되어, 식품 안전문제를 효과적으로 예방할 수 있게 되었습니다.

					</span>
					<span style="text-align:justify;text-justify: inter-word;">
                        미국 식품 공급망에 관련된 모든 국가와 기업이 FSMA의 대상이 될 수 있습니다. 따라서 FSMA에 대응해 미국으로의 식품 수출을 원활히 추진하기 위해서는 미국으로 식품을 수출하는 기업들의 준비가 필요합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">FSMA (식품안전현대화법, FOOD SAFETY MODERNIZATION ACT)란 ?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_fda-fsma_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt" style="line-height:332px;">
					<span style="text-align:justify;text-justify: inter-word;">
						FDA FSMA 3자 인증은 미국 이외의 지역에 위치한 식품 생산 시설에 대하여 FSMA 규정 준수 여부를 제 3의 공인된 인증기관이 심사를 실시하여 요구사항에 부합할 경우 인증서를 발행하는 제도입니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						FSMA는 미국 정부에서 2011년 1월 4일 ‘사전 예방을 통한 식품 공급 안정성 및 국민건강 보호’를 목적으로 제정되었습니다.
                        FDA는 FSMA법을 통해 미국으로 수출하는 모든 식품 관련 기업이 식품안전시스템을 구비하고 위해요소가 있는 식품에 대해 리콜 조치를 취할 수 있는 권한을 갖게 되어, 식품 안전문제를 효과적으로 예방할 수 있게 되었습니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
                        미국 식품 공급망에 관련된 모든 국가와 기업이 FSMA의 대상이 될 수 있습니다. 따라서 FSMA에 대응해 미국으로의 식품 수출을 원활히 추진하기 위해서는 미국으로 식품을 수출하는 기업들의 준비가 필요합니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">PCQI란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/edu_fda-fsma_03.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt" style="line-height:332px;">
					<span style="text-align:justify;text-justify: inter-word;">
						PCQI는 식품안전예방관리전문가 (PCQI: Preventive Controls Qaulified Individual)입니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						FSMA 규정에 따르면 식품제조회사는 위해 요소 분석 뿐만 아니라 잠재적인 위험성을 사전에 예방관리 하기 위한 식품안전계획을 수립하고 운영하도록 요구하고 있으며 또한 식품안전예방관리전문가에 의해 식품안전계획이 수립되어야 하고 예방관리의 유효성이 확인되어야 하며 관련 기록은 정기적으로 재검토할 것을 요구하고 있습니다.<br>
					</span>
				</div>
			</li>
		</ul>
		
		<br>
		<ul>
		    <li>
		      <dl>
			   <dd>
				<span style="font-weight:bold;">PCQI 교육 내용은 다음과 같습니다.</span><br><br>		
                &#8280;	FSMA 대응을 위한 예방관리 개념 교육  <br> 
                &#8280;	식품 안전 계획 개요<br>
                &#8280;	GMP와 기타 선행요건 프로그램 운영<br>   
                &#8280;	생물학적 식품안전 위해요소<br> 
                &#8280;	화학적, 물리적, 경제적 측면에서의 식품안전 위해요소<br>
                &#8280;	식품안전 계획의 개발을 위한 사전 단계<br> 
                &#8280;	식품안전 계획의 준비를 위한 지원 (자료)<br>
                &#8280;	위해요소 분석과 예방관리점의 결정-개요<br>
                &#8280;	위해요소 분석과 예방관리점의 결정<br>
                &#8280;	예방관리<br>
                &#8280;	식품의 알러지원 예방관리<br>
                &#8280;	위생 예방관리<br>
                &#8280;	공급망 예방관리<br>
                &#8280;	검증 및 유효성 확인절차<br>  
                &#8280;	기록의 보관 및 관리<br>
                &#8280;	회수계획<br>
                &#8280;	법규개요 (cGMP, 위험성분석, 위험성 기반의 예방관리)<br>	
			  </dd>
		     </dl>
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
    </article><!--+++ /Tab Menu 컨텐츠 03, 20.05.25 탭컨텐츠 영역  종료+++-->
     
     
    <article><!--+++ /Tab Menu 컨텐츠 04, 20.05.25 탭컨텐츠 영역  시작+++-->
           
	  <section class="page_title">
		<h1 class="sub_tit">PCQI <span class="fc_pointer"> 전문인력 양성 교육</span> </h1>
		<h2 class="sub_txt">식품안전예방관리전문가 교육과정</h2>
	  </section>
	<section class="vision_type7">
		
		<div class="vision_area">
		<h2 class="title">FSPCA 승인 PCQI 양성과정 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/EDU_FSPCA_PCQI_01.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						FDA FSMA법에 따라 FDA FSMA 3자 인증을 위하여 식품 생산시설은 반드시 한 명 이상의 PCQI 전문가를 확보하여야 합니다.
					</span><br><br>
					<span style="text-align:justify;text-justify: inter-word;">
						PCQI란 각 기업 내, Food Safety Plan(식품안전 계획)을 수립하는 인원이며, 각 기업은 적정 인원의 Preventive Control Qualified Individual (PCQI: 자격을 가진 예방관리 담당자)을 통해 Food Safety Plan을 수립하여 FSMA법을 준수할 수 있습니다.
					</span><br><br>
					<span style="text-align:justify;text-justify: inter-word;">
                        이 자격은 PCQI 교육 수행을 미국 FDA로부터 위탁받아 수행하는 미국 내, 지정 기관인 FSPCA(Food Safety Preventive Control Alliance : 식품 안전 예방 관리 협회)가 주관하는 PCHF(Preventive Controls for Human Food) Lead Instructor 교육 과정을 이수한 이후 certificate을 획득한 인원에게 부여됩니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">PCQI란?</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon" style="background-image:url(./images/EDU_FSPCA_PCQI_02.jpg);background-repeat:no-repeat;overflow:hidden;display:flex;align-items:center:justify-content:center;with:auto;height:332px;"><i class="fab fa-medapps"></i>
					 <em>
					  <!------ EDUCATION --------->
					 </em>
					</div>
				</div>
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						PCQI는 식품안전예방관리전문가 (PCQI: Preventive Controls Qaulified Individual)입니다. PCQI(Preventive controls qualified individual) 예방관리(통제)에 관해 자격을 갖춘 자는 위해에 기반을 둔 예방관리의 개발 및 적용을 통해 FDA가 적합하다고 인정하는 표준화된 커리큘럼과 동등한 교육을 성공적으로 이수하여 자격이 주어지거나, 그렇지 않으면 식품안전시스템의 개발 및 적용 경력을 통해 자격이 주어진 개인을 뜻합니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">			
                        식품에 대한 예방적 방제규정에는 특정 식품안전 관련 업무는 반드시 PCQI에 의해 수행되거나 관리·감독을 받아야 한다고 명시되어 있어, 해당 식품 시설에서 PCQI를 고용하거나 기술적 자 문을 받는 것을 의무로 규정하고 있습니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">			
                        PCQI의 자격을 취득하기 위해서 식품안전 관련 종사자는 FSPCA에서 실시하는 US FDA 공인 표준 교과과정을 성공적으로 이수해야 합니다.
					</span>
					<span style="text-align:justify;text-justify: inter-word;">			
                        PCQI 교육 내용은 다음과 같습니다.<br><br>

                        ⁘ FSMA 대응을 위한 예방관리 개념 교육<br>
                        ⁘ 식품 안전 계획 개요<br>
                        ⁘ GMP와 기타 선행요건 프로그램 운영<br>
                        ⁘ 생물학적 식품안전 위해요소<br>
                        ⁘ 화학적, 물리적, 경제적 측면에서의 식품안전 위해요소<br>
                        ⁘ 식품안전 계획의 개발을 위한 사전 단계<br>
                        ⁘ 식품안전 계획의 준비를 위한 지원 (자료)<br>
                        ⁘ 위해요소 분석과 예방관리점의 결정-개요<br>
                        ⁘ 위해요소 분석과 예방관리점의 결정<br>
                        ⁘ 예방관리<br>
                        ⁘ 식품의 알러지원 예방관리<br>
                        ⁘ 위생 예방관리<br>
                        ⁘ 공급망 예방관리<br>
                        ⁘ 검증 및 유효성 확인절차<br>
                        ⁘ 기록의 보관 및 관리<br>
                        ⁘ 회수계획<br>
                        ⁘ 법규개요 (cGMP, 위험성분석, 위험성 기반의 예방관리)<br>
					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">PCQI의 중요성</h2>
		<ul>
			<li>
				
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						식품에 대한 예방적 방제규정에 따르면, PCQI는 첫째, 식품안전계획을 수립하고 둘째, 예방적 방제에 대해 검증하고 셋째, 기록을 검토하고 넷째, 식품안전계획을 재분석하는 업무를 수행하거나 관리·감독하도록 되어있습니다. 
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
						이처럼 PCQI의 고용은 현재 식품에 대한 예방적 방제규정 요건을 충족시키기 위한 필수요건입니다. PCQI는 해당 식품 관련 시설의 고용인일 수도 있으며, 또는 식품안전계획 수립 시 외부 PCQI의 자문을 받을 수도 있고, 경우에 따라서는 2명 이상의 PCQI들이 식품안전계획을 수립하는 데 효과적일 수도 있습니다.
					</span>
				</div>
			</li>
		</ul>
		</div>
			
		<div class="vision_area">
		<h2 class="title">PCQI의 요건</h2>
		<ul>
			<li>
				
				<div class="con_txt">
					<span style="text-align:justify;text-justify: inter-word;">
						한 명 또는 그 이상의 예방관리에 대해 자격을 갖춘 자는 반드시 다음을 실행하거나 감독해야 합니다
					</span>
					<span style="text-align:justify;text-justify: inter-word;">
                        <p>&#9640; 식품안전계획의 준비</p>
                        <p>&#9640; 예방관리의 검증</p>
                        <p>&#9640; 적용되는 식품의 생산 첫 90일 이후 실행된 검증에 대한 타당한 이유의 증명서류</p>
                        <p>&#9640; 검증이 요구되지 않는다는 결정</p>
                        <p>&#9640; 기록 검토</p>
                        <p>&#9640; 모니터링 및 시정조치 기록의 검토가 7일 이내에 이루어지지 않은 것에 대한 타당한 이유의 증명서류</p>
                        <p>&#9640; 식품안전계획의 재분석</p>
                        <p>&#9640; 적용 식품의 생산 후 90일 이후, 예방관리의 특성과 해당 시설의 식품안전시스템에서의 역할에 적합하게 재분석이 완료되며, 추가적 예방관리가 검증될 수 있다는 결정</p>

					</span>
				</div>
			</li>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title">IGC 인증원의 역량</h2>
		<ul>
			<li style="padding:20px;">
					<span>
						IGC인증원은 미국 FDA와 IAS로부터 전 세계 7번째, 국내에서는 최초로 FDA FSMA 3자 인증기관으로 인정받았습니다. <br>
						 <button onclick="window.open('https://www.fda.gov/food/importing-food-products-united-states/accredited-third-party-certification-program-public-registry-accredited-third-party-certification')" style="margin-top:7px;border-radius:30px 30px 30px 30px;border-width:1px;border-color:#0099ff;"> &nbsp; <span style="color:#0099ff;margin:10px 10px 10px 10px;">인정 정보 확인 : FDA 사이트 바로가기 </span> &nbsp; </button> <br>
					</span><br>
					<span>
						FDA FSMA 3자 인증을 위하여 식품 생산기업은 필히 한 명 이상의 PCQI 전문가를 확보하여야 합니다. IGC는 FSPCA로부터 PCQI 양성과정과 FSVP 전문가 양성에 대한 교육권한 (Lead Instructor 지정)을 부여받아 FSMA 및 PCQI, FSVP 전문가 양성 교육 서비스를 제공합니다.
					</span>
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
   </article><!--+++ /Tab Menu 컨텐츠 04, 20.05.25 탭컨텐츠 영역  종료+++-->
  </div><!------------ class="tab_con"  종료 ---------------->	
</div><!------class="content_wrap" 종료----------->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>