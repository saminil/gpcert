<?php
	include_once('./_common.php');
$g5['title'] = 'Part 2';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:1rem; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
    
    table{width:100%;border: 1px solid #444444;}
    th,td{border: 1px solid #444444;margin-left:10px;font-size:0.9em;}

	table,td p {font-size:0.9em;margin-left:0px;padding:5px;}
    td {font-size:96%;padding:5px;}
    
    /*심사원의 종류*/
    .txtBox00, .txtBox01, .txtBox02, .txtBox03, .txtBox04 { 
        border-width: 2px; 
        padding: 12px; 
        margin:20px;
        word-break: break-all; 
        width:250px;
        text-align:center;
        float:left;
        border-radius:15px;
    } 
    .txtBox00 { background-color:LightGray;} 
    .txtBox01 { background-color:#e0ecf3;} 
    .txtBox02 { background-color:#99ffff;} 
    .txtBox03 { clear:both;background-color:#ffcc99;} 
    .txtBox04 { background-color:#ffcccc;}
</style>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	.fc_pointer {color:#BC0000; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:left; font-size:1.2em; color:#666; margin-top:20px; }

	.vision_type5 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type5:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type5 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type5 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type5 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #009999; background:#fff; }
	.vision_type5 .vision_area ul {margin:0; padding:0; }
	.vision_type5 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
    
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */

	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
    
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; list-style-type : none;padding-left: 0px;}
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:0px; margin-bottom:15px; list-style-type : none}
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
	.partner_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#009999; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}
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
		.vision_type5 .vision_area span.stitle{font-size:1em; width:100%;}
		.vision_type5 .vision_area ul li {width:100%;}
		.vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px; } /* 모바일에서 이미지 확대 하기 위해 padding 100px으로 수정하고, 이미지와 텍스트 상하 간격을 padding 30px값을 줌 */
		.vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:30px 0; margin:0;}
		.vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
        
        /*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type6 .vision_area h2.title { font-size:1.5em; }
        .vision_type6 .vision_area span.stitle{font-size:1em; width:100%;}
        .vision_type6 .vision_area ul li {width:100%;}
        .vision_type6 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ } /* 모바일에서 이미지 확대 하기 위해 padding 100px으로 수정하고, 이미지와 텍스트 상하 간격을 padding 30px값을 줌 */
        .vision_type6 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type6 .vision_area ul li .con_txt span { padding:0 30px; }
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃  사업영역 설정  */
        
        /*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type7 .vision_area h2.title { font-size:1.5em; }
        .vision_type7 .vision_area span.stitle{font-size:1em; width:90%;}
        .vision_type7 .vision_area ul li {width:100%;}
        .vision_type7 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ } /* 모바일에서 이미지 확대 하기 위해 padding 100px으로 수정하고, 이미지와 텍스트 상하 간격을 padding 30px값을 줌 */
        .vision_type7 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type7 .vision_area ul li .con_txt span { padding:0 30px; }
        
        /*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type8 .vision_area h2.title { font-size:1.5em; }
        .vision_type8 .vision_area span.stitle{font-size:1em; width:90%;}
        .vision_type8 .vision_area ul li {width:100%;}
        .vision_type8 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ } /* 모바일에서 이미지 확대 하기 위해 padding 100px으로 수정하고, 이미지와 텍스트 상하 간격을 padding 30px값을 줌 */
        .vision_type8 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 30px; margin:0;}
        .vision_type8 .vision_area ul li .con_txt span { padding:0 30px; }
	}
</style>

<div class="content_wrap">
	<div class="tab_menu tab01"><!--+++ 20.05.11 탭메뉴/ 심사원인증2 > ISO 27001 시작 +++-->
		<ul style="display:inline-block;position:relative;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">ISO 20000-1</a></li>
			<li><a href="javascript:;">ISO/IEC 27001</a></li>
			<li><a href="javascript:;">ISO 22716</a></li>
			<li class="on"><a href="javascript:;">ISO 50001</a></li>
		</ul>
	</div><!--+++ 20.05.11 탭메뉴/ 심사원인증2 > ISO 27001 종료  +++-->
	
	<hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:00px;width:100%;">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
	
  <div class="tab_con"><!--+++ 20.05.15 탭컨텐츠 영역 시작 +++-->
  
  
   <!--+++++ 컨텐츠 01 ISO 20000-1 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	<article>
	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO/IEC 20000-1:2018 </span> <br>IT 서비스 경영시스템I 심사원 인증</h1>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 과의 협력을 바탕으로 ISO/IEC 20000-1 IT 서비스 경영시스템 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.
		</h3>
	</section>
	
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO/IEC 20000-1:2018 인증 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso20000_02.jpg" alt="ISO/IEC 20000-1:2018 인증 개요" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
						ISO/IEC 20000은 서비스 제공자가 SMS를 계획, 수립, 구현, 운용, 감시, 검토, 유지, 개선하기 위한 요건을 명시하고 있는 서비스 관리를 위한 최초의 국제 표준이다. 이 표준은 서비스 제공자가 고객에게 제공하는 서비스의 품질을 개발하는 방법을 식별할 수 있도록 하는 두 가지 주요 부분을 포함한다.<br><br>
						Part 1은 서비스 관리 시스템의 개발 및 구현에 대한 요구사항을 명시하고 있으며,<br>
						part 2는 ISO/ IEC 20000-1의 범위 내에서 서비스 관리 시스템의 적용에 관한 지침이 포함되어 있다.<br><br>
						IT Infrastructure Library (ITIL)에서는 ISO/IEC 20000에서 필요로 하는 동일한 서비스 품질 수준을 달성할 수 있는 모범사례를 설명하고 있지만,<br>
						ITL 인증은 보통 개인에 적용되는데 반해 ISO/IEC 20000은 전체 기업에 대한 인증을 가능하게 합니다. 
					</span>
				</div>
			</li>
		</ul>
		<br>
		</div>

         <div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO/IEC 20000-1 심사원 인증 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso20000_01.jpg" alt="ISO/IEC 20000-1 심사원 인증 요구사항" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
						
                    <span style="font-weight:bold;">심사원 등록 제출 서류</span><br><br>
                        &nbsp; &nbsp; &#8278; 경력증명서<br><br>
                        &nbsp; &nbsp; &#8278; 심사원증<br><br>
                        &nbsp; &nbsp; &#8278; 교육수료증<br><br>
                        &nbsp; &nbsp; &#8278; 심사이력 로그시트 작성<br><br>
					</span>
				</div>
			</li>
			<br>
            <div style="overflow-x:auto;font-size:1.2em;">
            <table border="1" cellspacing="0" cellpadding="0">
              <tr>
                <td><p>&nbsp;</p></td>
                <td><p align="center">선임심사원 </p></td>
                <td><p align="center">심사원 </p></td>
                <td><p align="center">검증심사원 </p></td>
                <td><p align="center">내부심사원 </p></td>
                <td><p align="center">심사원보 </p></td>
              </tr>
            
              <tr>
                <td><p>교육 </p></td>
                <td colspan="5"><p>중등교육 이상 </p></td>
              </tr>
              <tr>
                <td><p>업무경력 </p></td>
                <td colspan="2"><p>5년    이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의    경력 포함)</p></td>
                <td><p>10년    이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의    경력 포함)</p></td>
                <td><p>3년    이상( 해당 규격 관련 품질 또는 환경 분야 1년 이상의    경력 포함)</p></td>
                <td><p>해당사항 없음 </p></td>
              </tr>
              <tr>
                <td><p>심사경력 </p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 35MD 이상의 심사 이력(그    중 15MD이상은 선임심사원으로서의 심사이력)</p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 20MD 이상의 심사 이력 </p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 15MD 이상의 심사 이력(공인된    개인인증기관으로부터 선임심사원 자격 취득후의 이력만 수용 가능)</p></td>
                <td><p>최근 3년    이내 5회 이상 + 최소 15MD 이상의 심사 이력 </p></td>
                <td><p>해당사항 없음 </p></td>
              </tr>
              <tr>
                <td><p>교육훈련 </p></td>
                <td colspan="5"><p align="center">*심사원/선임심사원    교육과정 <br>
                  (공인된 개인인증기관 혹은 그로부터 지정 받은 연수기관의 발행    수료증만 수용 가능)</p></td>
              </tr>
              <tr>
                <td><p>시험 </p></td>
                <td colspan="5"><p align="center">GPC 지식 및 인성시험 합격 </p></td>
              </tr>
            </table>		
            </div>		
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO/IEC 20000-1 심사원 인증 절차</h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso20000_03.jpg" alt="ISO/IEC 20000-1 심사원 인증 절차" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                         &#10021;신청자는 신청할 심사원의 등급을 결정합니다.<br>
                         &#10021;신청서를 작성하고 자격을 증명하기 위해 아래의 증빙서류를 제출해야 합니다. (증빙자료가 충분하지 않을 경우 추가자료 증빙을 통해 입증 가능해야 합니다.)<br>
                         &nbsp; &nbsp; &#8278; 졸업증명서<br>
                         &nbsp; &nbsp; &#8278; 경력증명서<br>
                         &nbsp; &nbsp; &#8278; 심사이력<br>
                         &nbsp; &nbsp; &#8278; 교육수료증<br>
                         &nbsp; &nbsp; &#8278; 검증심사 평가기록<br>
					</span>
				</div>
			</li>
		</ul>
		<br>
		<ul>
			<li style="line-height:40px; list-style:none;padding-left:5%;">
				&#10021;신청자는 평가 대상자로 지식 및 인성시험 통과 시 자격이 부여됩니다.<br>
                &#10021;심사원 신청 시 수용 가능한 교육 수료 기준은 다음과 같습니다.<br>
                &nbsp; &nbsp; &#8278; 교육기관의 요구사항을 충족하는 GPC가 승인한 경영시스템 심사원 또는 선임심사원 교육과정 수료증<br>
                &nbsp; &nbsp; &#8278; ISO/IEC 17024 기반 공인된 기관으로부터 지정 받은 교육연수기관이 제공하는 경영시스템 심사원 또는 선임심사원 교육과정 수료증<br>
                &#10021;인증은 발행일로부터 3년간 유효하며, 매년 인증받은 주기에 따라 유지비용을 지불해야 하며 3년 차인 갱신주기에는 추가 요구사항을 충족해야 합니다.<br>
			</li>
		</ul>
		</div>
	</section>
	
    <hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:50px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
    
    <!----(주)아이지씨인증원 사업영역 시작-------->
    <section class="partner_type2">
            <h2 class="con_arrow">
    	<p>우리가 제공하는 관련 서비스</p>
            </h2>
            <div class="con_box">
              <ul>
              	<li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
              	<li><p><em><strong>02</strong></em><span>시험</span></p></li>
              	<li><p><em><strong>03</strong></em><span>전문인력 양성 교육</span></p></li>
              	<li><p><em><strong>04</strong></em><span>제품 인증</span></p></li>
              	<li><p><em><strong>05</strong></em><span>심사원 인증</span></p></li>
              	<li><p><em><strong>06</strong></em><span>연수기관 지정</span></p></li>
              </ul>
            </div>
    </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------>      
   </article> <!-------+++++++ / 컨텐츠 01 ISO 20000-1 article style="display:block" 종료 /  ++++++++++--------------->      
  
	<article><!--+++++ 컨텐츠 02 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;">ISO/IEC 27001:2013 </span> <br> 정보보안 경영시스템 I 심사원 인증</h1>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 과의 협력을 바탕으로 ISO/IEC 27001(ISMS) 정보보안 경영시스템 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.
		</h3>
	</section>
	
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO/IEC 27001:2013 인증 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso27001_01.jpg" alt="식ISO 9001:2015 인증 개요" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				<div class="con_txt">
					<span style="text-align:justify;">
						ISO/IEC 27001은 국제표준화기구 (ISO: International Organization for Standardization) 및 국제전기기술위원회 (IEC: International Electrotechnical Commission)에서 제정한 정보보호 관리체계에 대한 국제 표준이자 정보보호 분야에서 가장 권위 있는 국제 인증표준으로, 정보보호정책, 물리적 보안, 정보접근 통제 등` 정보보안 관련 11개 영역, 133개 항목을 다루고 있습니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		<br>
		<ul>
		  <li style="height:100px; display: table-cell; vertical-align: middle;text-align:justify; padding:20px;">
		     <div> 
				ISO/IEC 27001은 조직 환경, 리더십, 계획, 지원, 운영, 성과 평가, 개선의 10가지 항목과 14가지의 통제항목 (통제 항목은 ISO/IEC 27002를 참조)으로 구성되어 있습니다. 이 표준의 요구사항은 조직의 유형, 규모, 특성에 상관없이 모든 조직에 적용할 수 있도록 일반적인 내용으로 수립되었습니다.
              </div>
          </li>
		</ul>
		</div>

      <div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO/IEC 27001 심사원 인증 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso27001_02.jpg" alt="식ISO 9001:2015 인증 개요" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
						
                    <span style="font-weight:bold;">심사원 등록 제출 서류</span><br><br>
                        &nbsp; &nbsp; &#8278; 경력증명서<br><br>
                        &nbsp; &nbsp; &#8278; 심사원증<br><br>
                        &nbsp; &nbsp; &#8278; 교육수료증<br><br>
                        &nbsp; &nbsp; &#8278; 심사이력 로그시트 작성<br><br>
					</span>
				</div>
			</li>
			<br>
            <div style="overflow-x:auto;font-size:1.2em;">
            <table border="1" cellspacing="0" cellpadding="0">
              <tr>
                <td><p>&nbsp;</p></td>
                <td><p align="center">선임심사원 </p></td>
                <td><p align="center">심사원 </p></td>
                <td><p align="center">검증심사원 </p></td>
                <td><p align="center">내부심사원 </p></td>
                <td><p align="center">심사원보 </p></td>
              </tr>
            
              <tr>
                <td><p>교육 </p></td>
                <td colspan="5"><p>중등교육 이상 </p></td>
              </tr>
              <tr>
                <td><p>업무경력 </p></td>
                <td colspan="2"><p>5년 이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</p></td>
                <td><p>10년 이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</p></td>
                <td><p>3년 이상( 해당 규격 관련 품질 또는 환경 분야 1년 이상의 경력 포함)</p></td>
                <td><p>해당사항 없음 </p></td>
              </tr>
              <tr>
                <td><p>심사경력 </p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 35MD 이상의 심사 이력(그    중 15MD이상은 선임심사원으로서의 심사이력)</p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 20MD 이상의 심사 이력 </p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 15MD 이상의 심사 이력(공인된    개인인증기관으로부터 선임심사원 자격 취득후의 이력만 수용 가능)</p></td>
                <td><p>최근 3년    이내 5회 이상 + 최소 15MD 이상의 심사 이력 </p></td>
                <td><p>해당사항 없음 </p></td>
              </tr>
              <tr>
                <td><p>교육훈련 </p></td>
                <td colspan="5"><p align="center">*심사원/선임심사원 교육과정 <br>
                  (공인된 개인인증기관 혹은 그로부터 지정 받은 연수기관의 발행    수료증만 수용 가능)</p></td>
              </tr>
              <tr>
                <td><p>시험 </p></td>
                <td colspan="5"><p align="center">GPC 지식 및 인성시험 합격 </p></td>
              </tr>
            </table>		
            </div>		
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO/IEC 27001 심사원 인증 절차</h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso27001_03.jpg" alt="식ISO 9001:2015 인증 개요" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                         &#10021;신청자는 신청할 심사원의 등급을 결정합니다.<br>
                         &#10021;신청서를 작성하고 자격을 증명하기 위해 아래의 증빙서류를 제출해야 합니다. (증빙자료가 충분하지 않을 경우 추가자료 증빙을 통해 입증 가능해야 합니다.)<br>
                         &nbsp; &nbsp; &#8278; 졸업증명서<br>
                         &nbsp; &nbsp; &#8278; 경력증명서<br>
                         &nbsp; &nbsp; &#8278; 심사이력<br>
                         &nbsp; &nbsp; &#8278; 교육수료증<br>
                         &nbsp; &nbsp; &#8278; 검증심사 평가기록<br>
					</span>
				</div>
			</li>
		</ul>
		<br>
		<ul>
			<li style="line-height:40px; list-style:none;padding-left:5%;">
				&#10021;신청자는 평가 대상자로 지식 및 인성시험 통과 시 자격이 부여됩니다.<br>
                &#10021;심사원 신청 시 수용 가능한 교육 수료 기준은 다음과 같습니다.<br>
                &nbsp; &nbsp; &#8278; 교육기관의 요구사항을 충족하는 GPC가 승인한 경영시스템 심사원 또는 선임심사원 교육과정 수료증<br>
                &nbsp; &nbsp; &#8278; ISO/IEC 17024 기반 공인된 기관으로부터 지정 받은 교육연수기관이 제공하는 경영시스템 심사원 또는 선임심사원 교육과정 수료증<br>
                &#10021;인증은 발행일로부터 3년간 유효하며, 매년 인증받은 주기에 따라 유지비용을 지불해야 하며 3년 차인 갱신주기에는 추가 요구사항을 충족해야 합니다.<br>
			</li>
		</ul>
		</div>
	</section>
	
    <hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:0px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
    
    <!----(주)아이지씨인증원 사업영역 시작-------->
    <section class="partner_type2">
           <h2 class="con_arrow">
    <p>우리가 제공하는 관련 서비스</p>
           </h2>
           <div class="con_box">
             <ul>
             	<li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
             	<li><p><em><strong>02</strong></em><span>시험</span></p></li>
             	<li><p><em><strong>03</strong></em><span>전문인력 양성 교육</span></p></li>
             	<li><p><em><strong>04</strong></em><span>제품 인증</span></p></li>
             	<li><p><em><strong>05</strong></em><span>심사원 인증</span></p></li>
             	<li><p><em><strong>06</strong></em><span>연수기관 지정</span></p></li>
             </ul>
           </div>
    </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------>      
   </article> <!-------+++++++ / 컨텐츠 02 article style="display:block" 종료 /  ++++++++++--------------->      
   
   <article><!-------+++++++ / article  컨텐츠 03 심사원인증 >  ISO 22716 심사원 인증  시작  /++++++++++--------------->   
	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;">ISO 22716:2007 화장품 GMP 우수 제조 및 품질관리<br> 기준에 대한 가이드 라인 </span> 심사원 인증</h1>
        <ul>
		   <li>   
             <h2>
              IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 과의 협력을 바탕으로 ISO 22716 CGMP 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.
             </h2> 
           </li>
        </ul>
		<br>
		
	<section class="vision_type5">
		<div class="vision_area">
		   <li>
            <h2 class="title" style="color:#009999;">ISO 22716:2007 인증 개요</h2>   
           </li>
           
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso27716_01.jpg" alt="ISO 22716:2007 인증 개요" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				
				<div class="con_txt">
					<span style="display: table-cell; vertical-align: middle;text-align:justify;">
                     ISO 22716은 화장품 제품을 위한 GMP(Good Manufacturing Practices) 안내서를 제공하는데 목적이 있습니다. 이 가이드라인은 제조업의 화장품 분야의 특정 요구를 고려하여 마련되었습니다.
					</span>
					 <br><br>
					<span style="display:block; display: table-cell; vertical-align: middle;text-align:justify;">
                     ISO 22716 은 제품의 품질에 영향을 미치는 요인들 관리에 있어서 조직적이고 실질적인 조언을 제공합니다.
					</span>
					 <br><br>
					<span style="display: table-cell; vertical-align: middle;text-align:justify;">
                     ISO 22716은 화장품 수출을 위한 필수 조건으로 변화하고 있습니다. 특히 유럽의 새로운 화장품 EU regulation에서는 화장품 제조사에게 harmonized standard를 준수하도록 요구하고 있는데 이 harmonized standard가 ISO 22716입니다.
					</span>
				</div>
			</li>
		</ul>
		</div>

        <div class="vision_area">
        <h2 class="title" style="color:#009999;">ISO 22716 심사원 인증 요구사항</h2> 
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso27716_02.jpg" alt="ISO 22716:2007 인증 개요" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
						
                    <span style="font-weight:bold;">심사원 등록 제출 서류</span><br><br>
                        &nbsp; &nbsp; &#8278; 경력증명서<br><br>
                        &nbsp; &nbsp; &#8278; 심사원증<br><br>
                        &nbsp; &nbsp; &#8278; 교육수료증<br><br>
                        &nbsp; &nbsp; &#8278; 심사이력 로그시트 작성<br><br>
					</span>
				</div>
			</li>
			<br>
            <div style="overflow-x:auto;font-size:1.2em;">
            <table border="1" cellspacing="0" cellpadding="0">
            
              <tr>
                <td><p>&nbsp;</p></td>
                <td><p align="center">선임심사원 </p></td>
                <td><p align="center">심사원 </p></td>
                <td><p align="center">검증심사원 </p></td>
                <td><p align="center">내부심사원 </p></td>
                <td><p align="center">심사원보 </p></td>
              </tr>
            
              <tr>
                <td><p>교육 </p></td>
                <td colspan="5"><p>중등교육 이상 </p></td>
              </tr>
              <tr>
                <td><p>업무경력 </p></td>
                <td colspan="2"><p>5년    이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의    경력 포함)</p></td>
                <td><p>10년    이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의    경력 포함)</p></td>
                <td><p>3년    이상( 해당 규격 관련 품질 또는 환경 분야 1년 이상의    경력 포함)</p></td>
                <td><p>해당사항 없음 </p></td>
              </tr>
              <tr>
                <td><p>심사경력 </p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 35MD 이상의 심사 이력(그    중 15MD이상은 선임심사원으로서의 심사이력)</p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 20MD 이상의 심사 이력 </p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 15MD 이상의 심사 이력(공인된    개인인증기관으로부터 선임심사원 자격 취득후의 이력만 수용 가능)</p></td>
                <td><p>최근 3년    이내 5회 이상 + 최소 15MD 이상의 심사 이력 </p></td>
                <td><p>해당사항 없음 </p></td>
              </tr>
              <tr>
                <td><p>교육훈련 </p></td>
                <td colspan="5"><p align="center">*심사원/선임심사원    교육과정 <br>
                  (공인된 개인인증기관 혹은 그로부터 지정 받은 연수기관의 발행    수료증만 수용 가능)</p></td>
              </tr>
              <tr>
                <td><p>시험 </p></td>
                <td colspan="5"><p align="center">GPC 지식 및 인성시험 합격 </p></td>
              </tr>
            </table>		
            </div>		
		</ul>
		</div>
		
		<div class="vision_area">
         <h2 class="title" style="color:#009999;">ISO 22716 심사원 인증 절차 </h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso27716_03.jpg" alt="ISO 22716:2007 인증 개요" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                         &#10021;신청자는 신청할 심사원의 등급을 결정합니다.<br>
                         &#10021;신청서를 작성하고 자격을 증명하기 위해 아래의 증빙서류를 제출해야 합니다. (증빙자료가 충분하지 않을 경우 추가자료 증빙을 통해 입증 가능해야 합니다.)<br>
                         &nbsp; &nbsp; &#8278; 졸업증명서<br>
                         &nbsp; &nbsp; &#8278; 경력증명서<br>
                         &nbsp; &nbsp; &#8278; 심사이력<br>
                         &nbsp; &nbsp; &#8278; 교육수료증<br>
                         &nbsp; &nbsp; &#8278; 검증심사 평가기록<br>
					</span>
				</div>
			</li>
		</ul>
		<br>
		<ul>
			<li style="line-height:40px; list-style:none;padding-left:5%;">
				&#10021;신청자는 평가 대상자로 지식 및 인성시험 통과 시 자격이 부여됩니다.<br>
                &#10021;심사원 신청 시 수용 가능한 교육 수료 기준은 다음과 같습니다.<br>
                &nbsp; &nbsp; &#8278; 교육기관의 요구사항을 충족하는 GPC가 승인한 경영시스템 심사원 또는 선임심사원 교육과정 수료증<br>
                &nbsp; &nbsp; &#8278; ISO/IEC 17024 기반 공인된 기관으로부터 지정 받은 교육연수기관이 제공하는 경영시스템 심사원 또는 선임심사원 교육과정 수료증<br>
                &#10021;인증은 발행일로부터 3년간 유효하며, 매년 인증받은 주기에 따라 유지비용을 지불해야 하며 3년 차인 갱신주기에는 추가 요구사항을 충족해야 합니다.<br>
			</li>
		</ul>
		</div>
	</section>  <!-----------+++++++++/ section class="vision_type5" 종료   /+++++++++++++++-------------------->
	
    <hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:0px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:40px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
    
    <!----(주)아이지씨인증원 사업영역 시작-------->
    <section class="partner_type2">
            <h2 class="con_arrow">
    	<p>우리가 제공하는 관련 서비스</p>
            </h2>
            <div class="con_box">
              <ul>
              	<li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
              	<li><p><em><strong>02</strong></em><span>시험</span></p></li>
              	<li><p><em><strong>03</strong></em><span>전문인력 양성 교육</span></p></li>
              	<li><p><em><strong>04</strong></em><span>제품 인증</span></p></li>
              	<li><p><em><strong>05</strong></em><span>심사원 인증</span></p></li>
              	<li><p><em><strong>06</strong></em><span>연수기관 지정</span></p></li>
              </ul>
            </div>
    </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------> 
   </section>
   </article><!-------+++++++ / article  컨텐츠 03 심사원인증 > ISO 22716 심사원 인증  종료  /++++++++++-------------->   
      
        
   <article style="display:block;"><!-------+++++++ / article  컨텐츠 04 심사원인증 >  ISO 50001 심사원 인증  시작  /++++++++++---->   
       <section class="page_title">
           <h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;">ISO 50001:2018 에너지 경영시스템(EMS)</span> <br> 심사원 인증</h1>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 과의 협력을 바탕으로 ISO 50001:2018 에너지 경영시스템 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.
		</h3>
	</section>
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 50001:2018 인증 개요 </h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso50001_01.jpg" alt="ISO 50001:2018 인증 개요" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				<div class="con_txt">
					<span style="display:block;height:200px ; line-height:30px;display: table-cell; vertical-align: middle;text-align:justify;">
                        'ISO 50001'은 국제표준화기구(ISO)가 2011년 6월 발효한 에너지경영시스템 국제표준으로, 에너지 효율화와 절감을 위한 프로세스와 요구사항을 규정하고 있습니다. 고유가 체제의 장기화와 국제적인 에너지 환경변화의 대응으로 효율적인 에너지 경영이 중요한 이슈로 대두되고 있습니다. <br>이러한 산업의 요구와 필요성으로 ISO 50001인증 수요가 지속적으로 증가하고 있으며 이에 따라 ISO 50001에 대한 전문가와 심사원의 수요 또한 증가하고 있습니다.<br><br>
                        조직은 이 요구사항을 바탕으로 에너지방침을 개발하고 실행할 수 있으며, 중요에너지 이용과 관련된 법적 요구사항 및 정보를 고려한 목표, 세부목표 및 실행계획을 수립할 수 있습니다. 
                        <br><br>
                        EnMS(Energy Management Systems)는 조직이 조직의 방침 의지를 달성하고, 에너지성과 개선에 필요한 활동을 하고 이 표준의 요구사항에 그 시스템의 적합성을 실증하는 것을 가능하게 합니다. <br>이 표준은 조직의 관리하에 있는 활동들에 대하여 적용되며, 이 표준의 적용은 시스템 복잡성, 문서화 정도 및 자원을 포함하는 조직의 특정 요구사항에 맞도록 조정될 수 있습니다.
					</span>
				</div>
			</li>
			<br>
          </ul>
		</div>

        <div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 50001 심사원 인증 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso50001_02.jpg" alt="ISO 50001 심사원 인증 요구사항" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
						
                    <span style="font-weight:bold;">심사원 등록 제출 서류</span><br><br>
                        &nbsp; &nbsp; &#8278; 경력증명서<br><br>
                        &nbsp; &nbsp; &#8278; 심사원증<br><br>
                        &nbsp; &nbsp; &#8278; 교육수료증<br><br>
                        &nbsp; &nbsp; &#8278; 심사이력 로그시트 작성<br><br>
					</span>
				</div>
			</li>
			<br>
            <div style="overflow-x:auto;font-size:1.2em;">
            <table border="1" cellspacing="0" cellpadding="0">
            
              <tr>
                <td><p>&nbsp;</p></td>
                <td><p align="center">선임심사원 </p></td>
                <td><p align="center">심사원 </p></td>
                <td><p align="center">검증심사원 </p></td>
                <td><p align="center">내부심사원 </p></td>
                <td><p align="center">심사원보 </p></td>
              </tr>
            
              <tr>
                <td><p>교육 </p></td>
                <td colspan="5"><p>중등교육 이상 </p></td>
              </tr>
              <tr>
                <td><p>업무경력 </p></td>
                <td colspan="2"><p>5년    이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의    경력 포함)</p></td>
                <td><p>10년    이상 (해당 규격 관련 품질 또는 환경 분야 2년 이상의    경력 포함)</p></td>
                <td><p>3년    이상( 해당 규격 관련 품질 또는 환경 분야 1년 이상의    경력 포함)</p></td>
                <td><p>해당사항 없음 </p></td>
              </tr>
              <tr>
                <td><p>심사경력 </p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 35MD 이상의 심사 이력(그    중 15MD이상은 선임심사원으로서의 심사이력)</p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 20MD 이상의 심사 이력 </p></td>
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 15MD 이상의 심사 이력(공인된    개인인증기관으로부터 선임심사원 자격 취득후의 이력만 수용 가능)</p></td>
                <td><p>최근 3년    이내 5회 이상 + 최소 15MD 이상의 심사 이력 </p></td>
                <td><p>해당사항 없음 </p></td>
              </tr>
              <tr>
                <td><p>교육훈련 </p></td>
                <td colspan="5"><p align="center">*심사원/선임심사원    교육과정 <br>
                  (공인된 개인인증기관 혹은 그로부터 지정 받은 연수기관의 발행    수료증만 수용 가능)</p></td>
              </tr>
              <tr>
                <td><p>시험 </p></td>
                <td colspan="5"><p align="center">GPC 지식 및 인성시험 합격 </p></td>
              </tr>
            </table>		
            </div>		
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 50001 심사원 인증 절차 </h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso50001_03.jpg" alt="IISO/IEC 27001 심사원 인증 절차" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:40px;">
                         &#10021;신청자는 신청할 심사원의 등급을 결정합니다.<br>
                         &#10021;신청서를 작성하고 자격을 증명하기 위해 아래의 증빙서류를 제출해야 합니다. (증빙자료가 충분하지 않을 경우 추가자료 증빙을 통해 입증 가능해야 합니다.)<br>
                         &nbsp; &nbsp; &#8278; 졸업증명서<br>
                         &nbsp; &nbsp; &#8278; 경력증명서<br>
                         &nbsp; &nbsp; &#8278; 심사이력<br>
                         &nbsp; &nbsp; &#8278; 교육수료증<br>
                         &nbsp; &nbsp; &#8278; 검증심사 평가기록<br>
					</span>
				</div>
			</li>
		</ul>
		<br>
		<ul>
			<li style="line-height:40px; list-style:none;padding-left:5%;">
				&#10021;신청자는 평가 대상자로 지식 및 인성시험 통과 시 자격이 부여됩니다.<br>
                &#10021;심사원 신청 시 수용 가능한 교육 수료 기준은 다음과 같습니다.<br>
                &nbsp; &nbsp; &#8278; 교육기관의 요구사항을 충족하는 GPC가 승인한 경영시스템 심사원 또는 선임심사원 교육과정 수료증<br>
                &nbsp; &nbsp; &#8278; ISO/IEC 17024 기반 공인된 기관으로부터 지정 받은 교육연수기관이 제공하는 경영시스템 심사원 또는 선임심사원 교육과정 수료증<br>
                &#10021;인증은 발행일로부터 3년간 유효하며, 매년 인증받은 주기에 따라 유지비용을 지불해야 하며 3년 차인 갱신주기에는 추가 요구사항을 충족해야 합니다.<br>
			</li>
		</ul>
		</div>
	</section>
	
    <hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:0px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
    
   <!----(주)아이지씨인증원 사업영역 시작-------->
   <section class="partner_type2">
           <h2 class="con_arrow">
   	<p>우리가 제공하는 관련 서비스</p>
           </h2>
           <div class="con_box">
             <ul>
             	<li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
             	<li><p><em><strong>02</strong></em><span>시험</span></p></li>
             	<li><p><em><strong>03</strong></em><span>전문인력 양성 교육</span></p></li>
             	<li><p><em><strong>04</strong></em><span>제품 인증</span></p></li>
             	<li><p><em><strong>05</strong></em><span>심사원 인증</span></p></li>
             	<li><p><em><strong>06</strong></em><span>연수기관 지정</span></p></li>
             </ul>
           </div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------> 
   </article><!-------+++++++ / 컨텐츠 04 심사원인증 > ISO 50001 심사원 인증  종료  /++++++++++-------------->          
  </div><!-----------+++++++ / div class="tab_con" 종료 / ++++++++------------------------>
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>