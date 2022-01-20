<?php
	include_once('./_common.php');
$g5['title'] = 'Part 1';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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

    /* 심사원 인증 요구사항 | 심사원 인증==> 확인 2020.07.31 */
    table{width:100%;border: 1px solid #444444;}
	table,td p {font-size:0.9em;margin-left:0px;padding-left:10px;}
    th,td{border: 1px solid #444444;margin-left:3px;font-size:0.9em;}
    td {font-size:100%;padding:3px;}
    } 
    
    /* 작은 타이틀 배경 */
    .txtBox00 { background-color:LightGray;} 
    .txtBox01 { background-color:#e0ecf3;} 
    .txtBox02 { background-color:#99ffff;} 
    .txtBox03 { clear:both;background-color:#ffcc99;} 
    .txtBox04 { background-color:#ffcccc;}
    
    /* 상세페이지 표, 테이블 디자인 */
    .txtBox00, .txtBox01, .txtBox02, .txtBox03, .txtBox04 { 
        border-width: 2px; 
        padding: 3px; 
        margin:10px;
        word-break: break-all; 
        width:250px;
        text-align:center;
        float:left;
        border-radius:15px;
</style>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	.fc_pointer {color:#BC0000; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
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
    
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:auto; padding:40px 40px;line-height:auto;} /* 텍스트 내용 상하 */
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
		.vision_type5 .vision_area span.stitle{font-size:1em; width:100%;}
		.vision_type5 .vision_area ul li {width:100%;}
		.vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:90px 0; }
		.vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:30px 0; margin:0;}
		.vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃  사업영역 설정  */
	}
</style>

<div class="content_wrap">

	<div class="tab_menu tab01"><!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 시작 +++-->
		<ul style="display:inline-block;position:relative;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">ISO 9001</a></li>
			<li><a href="javascript:;">ISO 14001</a></li>
			<li><a href="javascript:;">ISO 13485</a></li>
			<li><a href="javascript:;">OHSAS 18001 or ISO 45001</a></li>
		</ul>
	</div><!--+++ 20.05.11 탭메뉴/ 러시아 제품인증 종료  +++-->
	
	<hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:00px;width:100%;">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
	
  <div class="tab_con"><!--+++ 20.05.01 탭컨텐츠 영역 시작 +++-->
  
  <article style="display:block;"><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO 9001:2015 품질경영시스템(QMS)  </span> | 심사원 인증</h1>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		  IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 과의 협력을 바탕으로 ISO 9001 품질경영시스템 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.
		</h3>
	</section>
	
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 9001:2015 인증 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso9001_01.jpg" alt="식ISO 9001:2015 인증 개요" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				<div class="con_txt">
					<span style="display:block; display: table-cell; vertical-align: middle;text-align:justify;">
						ISO 9001은 품질경영시스템 (QMS)를 위한 국제적으로 인정된 규격입니다. 이는 전 세계적으로 가장 많이 사용되는 규격이며, 178개 국가 내 고객들에게 1,100만개 이상의 인증서가 발행되고 있습니다.
					</span>
					<br><br>
					<span style="display:block; display: table-cell; vertical-align: middle;text-align:justify;">
						오늘날 많은 기업은 고객의 요구를 단순히 충족시키는 것뿐만 아니라 더욱 향상된 제품 및 서비스를 제공하기를 원하고 있습니다. 또한, 비용 절감을 통해 경쟁력을 유지하기 원합니다. 대기업이든 중소기업이든 품질 및 가격 경쟁력을 개선하기 위한 종합적인 솔루션이 필요하고, ISO 9001은 이러한 기업에게 효과적인 품질경영 프로세스를 제공합니다. 
					</span>
					<br><br>
					<span style="display:block; display: table-cell; vertical-align: middle;text-align:justify;">
						소프트웨어 개발은 식품제조나 상담서비스 제공과는 다릅니다. 그러나 ISO 9001은 모든 산업에 적용될 수 있습니다. 제조 회사, 소프트웨어 개발 회사, 거래 조직, 서비스 조직, 경찰서, 프로 축구 팀 및 시의회 등 다양한 조직이 ISO 9001:2015 시스템을 성공적으로 적용하였습니다. 이처럼 ISO 9001의 요구사항은 포괄적이며, 조직의 형태, 규모 또는 제공되는 제품 및 서비스에 관계없이 모든 조직에 적용될 수 있습니다. 그렇기에, 이 표준은 전세계적으로 가장 보편적으로 사용되고 있는 품질 경영 표준입니다. 
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;display:block;text-align:left;">ISO 9001 심사원 인증 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso9001_02.jpg" alt="ISO 9001 심사원 인증 요구사항" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
					<span style="font-weight:bold;">기본 요구사항</span><br><br>
                        &nbsp; &nbsp; &#8278; 중등교육 이상의 학력<br><br>
                        &nbsp; &nbsp; &#8278; 공인된 교육기관에서의 교육 수료 및 시험 합격<br><br>
					</span>
				</div>
			</li>
		</ul>
		<br><br>
		
		<table cellspacing="0" cellpadding="0">
            <col width="115">
            <col width="303" span="4">
            <col width="193">
            <tr>
              <td width="86" align="center" bgcolor="#BBEFF0">　</td>
              <td width="191" align="center" bgcolor="#BBEFF0">심사원</td>
              <td width="190" align="center" bgcolor="#BBEFF0">선임심사원</td>
              <td width="252" align="center" bgcolor="#BBEFF0">검증 심사원</td>
              <td width="198" align="center" bgcolor="#BBEFF0">내부심사원</td>
              <td width="217" align="center" bgcolor="#BBEFF0">심사원보</td>
            </tr>
            <tr>
              <td width="86" align="center">교육</td>
              <td colspan="5">중등    교육 이상</td>
            </tr>
            <tr>
              <td width="86" align="center">업무 경력</td>
              <td colspan="2" align="center">5년    이상<br>
                (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</td>
              <td width="252" align="center">10년    이상<br>
                (해당 규격 관련 품질 또는 환경 분야 5년 이상의 경력 포함)</td>
              <td width="198" align="center">3년    이상<br>
                (해당 규격 관련 품질 또는 환경 분야 1년 이상의 경력 포함)</td>
              <td width="217" align="center">해당    사항 없음</td>
            </tr>
            <tr>
              <td width="86" align="center">심사 경력</td>
              <td width="191" align="center">최근    3년 이내에 심사원 또는 선임심사원으로서 20 M/D 이상의 심사 이력</td>
              <td width="190" align="center">최근    3년 이내에 심사원 또는 선임심사원으로서 35 MD 이상의 심사 이력(그 중 15 M/D 이상은 선임심사원으로서 심사 이력)</td>
              <td width="252" align="center">최근    3년 이내 선임심사원으로서 15 M/D 이상의  심사 이력(공인된 개인    인증 기관으로부터 선임 심사원 자격 취득 후의 이력만 수용 가능)</td>
              <td width="198" align="center">최근    3년 이내 5회 시상 + 최소 15 M/D 이상의  심사 이력</td>
              <td width="217" align="center">해당    사항 없음</td>
            </tr>
            <tr>
              <td width="86" align="center">교육 훈련</td>
              <td colspan="5" align="center">*심사원/선임심사원    교육 과정<br>
                (공인된 개인 인증 기관 혹은 그로부터 지정 받은 연수 기관의 발행 수료증만 수용 가능)</td>
            </tr>
            <tr>
              <td width="86" align="center">시험</td>
              <td colspan="5" align="center">GPC    지식 및 인성 시험 합격</td>
            </tr>
        </table>
       </div>
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">심사원인증 ISO 9001 절차</h2>
		<ul>
			<li>
				<div class="i_box">
				<img src="images/audit_iso9001_03.jpg" alt="심사원인증 ISO 9001 절차" style="display:block;margin:0px auto;max-width:100%;height:auto;">
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
   </article> <!-------+++++++ / article style="display:block" 종료 /  ++++++++++--------------->      
   
   
   <article><!-------+++++++ / 컨텐츠 02 article  심사원인증 > ISO 14001 시작  /++++++++++--------------->   
       <section class="page_title">
		<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO 14001 </span> | 환경경영시스템(EMS) 심사원 인증</h1>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		  IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 과의 협력을 바탕으로 ISO 14001 환경경영시스템 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.      
		</h3>
	    </section>
	    <section class="vision_type5">	
	       
	       	<div class="vision_area">
	       	<h2 class="title" style="color:#009999;display:block;text-align:left;">ISO 14001:2015 인증 개요</h2>
                <ul>
                    <li>
                    <span  style="display:block;margin:3%;">
                      ISO 14001:2015는 환경경영시스템(EMS)를 위한 국제 규격으로 환경경영시스템 구성 및 유지를 위한 요구사항을 명시한 주요 경영시스템 규격입니다. 한국 내 많은 기업들이 조직의 환경경영 위해 인증을 받고 있으며, 전 세계적으로는 25만개 이상의 인증서가 발행되고 있습니다.
                    </span>
                    <span  style="display:block;margin:3%;">
                      ISO 14001은 환경경영시스템에 대한 원칙, 시스템 및 지원 기술에 관한 일반 가이드라인과 함께 환경경영시스템 수립, 시행, 유지 및 개선과 같은 이슈들을 다룹니다. 이는 고객사의 환경측면을 통제하고, 환경영향을 감소시키며, 법규 준수를 보장합니다.
                    </span>
                    </li>
                </ul>
            </div>
            
        <div class="vision_area">
		<h2 class="title" style="color:#009999;display:block;text-align:left;">ISO 14001 심사원 인증 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso9001_04.jpg" alt="ISO 14001 심사원 인증 요구사항" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
					<span style="font-weight:bold;">기본 요구사항</span><br><br>
                        &nbsp; &nbsp; &#8278; 중등교육 이상의 학력<br><br>
                        &nbsp; &nbsp; &#8278; 공인된 교육기관에서의 교육 수료 및 시험 합격<br><br>
					</span>
				</div>
			</li>
		</ul>
		<br><br>
		
		<table cellspacing="0" cellpadding="0">
            <col width="115">
            <col width="303" span="4">
            <col width="193">
            <tr>
              <td width="86" align="center" bgcolor="#BBEFF0">　</td>
              <td width="191" align="center" bgcolor="#BBEFF0">심사원</td>
              <td width="190" align="center" bgcolor="#BBEFF0">선임심사원</td>
              <td width="252" align="center" bgcolor="#BBEFF0">검증 심사원</td>
              <td width="198" align="center" bgcolor="#BBEFF0">내부심사원</td>
              <td width="217" align="center" bgcolor="#BBEFF0">심사원보</td>
            </tr>
            <tr>
              <td width="86" align="center">교육</td>
              <td colspan="5">중등    교육 이상</td>
            </tr>
            <tr>
              <td width="86" align="center">업무 경력</td>
              <td colspan="2" align="center">5년    이상<br>
                (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</td>
              <td width="252" align="center">10년    이상<br>
                (해당 규격 관련 품질 또는 환경 분야 5년 이상의 경력 포함)</td>
              <td width="198" align="center">3년    이상<br>
                (해당 규격 관련 품질 또는 환경 분야 1년 이상의 경력 포함)</td>
              <td width="217" align="center">해당    사항 없음</td>
            </tr>
            <tr>
              <td width="86" align="center">심사 경력</td>
              <td width="191" align="center">최근    3년 이내에 심사원 또는 선임심사원으로서 20 M/D 이상의 심사 이력</td>
              <td width="190" align="center">최근    3년 이내에 심사원 또는 선임심사원으로서 35 MD 이상의 심사 이력(그 중 15 M/D 이상은 선임심사원으로서 심사 이력)</td>
              <td width="252" align="center">최근    3년 이내 선임심사원으로서 15 M/D 이상의  심사 이력(공인된 개인    인증 기관으로부터 선임 심사원 자격 취득 후의 이력만 수용 가능)</td>
              <td width="198" align="center">최근    3년 이내 5회 시상 + 최소 15 M/D 이상의  심사 이력</td>
              <td width="217" align="center">해당    사항 없음</td>
            </tr>
            <tr>
              <td width="86" align="center">교육 훈련</td>
              <td colspan="5" align="center">*심사원/선임심사원    교육 과정<br>
                (공인된 개인 인증 기관 혹은 그로부터 지정 받은 연수 기관의 발행 수료증만 수용 가능)</td>
            </tr>
            <tr>
              <td width="86" align="center">시험</td>
              <td colspan="5" align="center">GPC    지식 및 인성 시험 합격</td>
            </tr>
        </table>
       </div>
       
		<div class="vision_area">
		<h2 class="title" style="color:#009999;display:block;text-align:left;">ISO 14001 심사원 인증 절차</h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso9001_05.jpg" alt="ISO 14001 심사원 인증 절차" style="display:block;margin:0px auto;max-width:100%;height:auto;">
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
      	<p style="text-align:left;">우리가 제공하는 관련 서비스</p>
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
   </article><!-------+++++++ / 컨텐츠 02  article  심사원인증 > ISO 14001 종료  /++++++++++-------------->   
   
   
    <article><!-------+++++++ / 컨텐츠 03 article  심사원인증 > ISO 13485 시작  /++++++++++--------------->   
       <section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;letter-spacing: -1px;"> ISO 13485:2016 의료기기 품질경영시스템 (MDQMS)</span><br> 심사원 인증</h1>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 과의 협력을 바탕으로 ISO 13485 의료기기 품질경영시스템 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.
		</h3>
	</section>
	
	<section class="vision_type5">
	
	    <div class="vision_area">
		<h2 class="title"  style="color:#009999;">ISO 13485 인증 개요</h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso9001_06.jpg" alt="ISO 13485 인증 개요" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				<div class="con_txt">
					<span style="text-align:justify;">
                      ISO 13485는 의료기기의 설계 및 개발, 생산, 설치 및 부가서비스를 제공하는 조직의 품질 경영 시스템에 대한 요구사항을 규정한 규격입니다. 또한 이 규격은 의료기기 조직에 멸균, 교정, 판매 등의 서비스를 제공하는 외부 조직에도 적용될 수 있어, 의료기기 및 관련 서비스 제공 조직에 품질 경영 시스템의 기반을 제공합니다.<br>
					</span>
					
					<span style="text-align:justify;">
                      의료기기는 인간의 생명 및 건강에 직접 영향을 끼치기 때문에 다른 어떤 제품보다도 높은 수준의 안정성에 대한 보장이 필요합니다. 그래서 의료기기 산업은 국내 규제제도, 국제적인 표준 및 다른 기타 요구사항 등 충족해야 하는 규제가 다양합니다. EU 의료기기 지침의 요구사항 충족을 위해서는 품질 시스템을 구축하여야 하며, 캐나다 등 일부 국가에서는 제품 판매를 위해 ISO 13485 인증을 요구하고 있습니다.<br>
					</span>
					
					<span style="text-align:justify;">
                      의료기기 제조사는 ISO 13485 시스템인증을 통해 조직의 시스템이 품질경영시스템에 대한 포괄적인 요구사항 및 의료기기에 대한 특별한 요구사항에 부합함을 입증할 수 있습니다.<br>
					</span>
				</div>
			</li>
		</ul>
		</div>

        <div class="vision_area">
		<h2 class="title" style="color:#009999;display:block;text-align:left;">ISO 13485 심사원 인증 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso9001_07.jpg" alt="ISO 13485 심사원 인증 요구사항" style="display:block;margin:0px auto;max-width:100%;height:auto;">
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
					<span style="font-weight:bold;">기본 요구사항</span><br><br>
                        &nbsp; &nbsp; &#8278; 중등교육 이상의 학력<br><br>
                        &nbsp; &nbsp; &#8278; 공인된 교육기관에서의 교육 수료 및 시험 합격<br><br>
					</span>
				</div>
			</li>
		</ul>
		<br>
		
		<table cellspacing="0" cellpadding="0">
            <col width="115">
            <col width="303" span="4">
            <col width="193">
            <tr>
              <td width="86" align="center" bgcolor="#BBEFF0">　</td>
              <td width="191" align="center" bgcolor="#BBEFF0">심사원</td>
              <td width="190" align="center" bgcolor="#BBEFF0">선임심사원</td>
              <td width="252" align="center" bgcolor="#BBEFF0">검증 심사원</td>
              <td width="198" align="center" bgcolor="#BBEFF0">내부심사원</td>
              <td width="217" align="center" bgcolor="#BBEFF0">심사원보</td>
            </tr>
            <tr>
              <td width="86" align="center">교육</td>
              <td colspan="5">중등    교육 이상</td>
            </tr>
            <tr>
              <td width="86" align="center">업무 경력</td>
              <td colspan="2" align="center">5년    이상<br>
                (해당 규격 관련 품질 또는 환경 분야 2년 이상의 경력 포함)</td>
              <td width="252" align="center">10년    이상<br>
                (해당 규격 관련 품질 또는 환경 분야 5년 이상의 경력 포함)</td>
              <td width="198" align="center">3년    이상<br>
                (해당 규격 관련 품질 또는 환경 분야 1년 이상의 경력 포함)</td>
              <td width="217" align="center">해당    사항 없음</td>
            </tr>
            <tr>
              <td width="86" align="center">심사 경력</td>
              <td width="191" align="center">최근    3년 이내에 심사원 또는 선임심사원으로서 20 M/D 이상의 심사 이력</td>
              <td width="190" align="center">최근    3년 이내에 심사원 또는 선임심사원으로서 35 MD 이상의 심사 이력(그 중 15 M/D 이상은 선임심사원으로서 심사 이력)</td>
              <td width="252" align="center">최근    3년 이내 선임심사원으로서 15 M/D 이상의  심사 이력(공인된 개인    인증 기관으로부터 선임 심사원 자격 취득 후의 이력만 수용 가능)</td>
              <td width="198" align="center">최근    3년 이내 5회 시상 + 최소 15 M/D 이상의  심사 이력</td>
              <td width="217" align="center">해당    사항 없음</td>
            </tr>
            <tr>
              <td width="86" align="center">교육 훈련</td>
              <td colspan="5" align="center">*심사원/선임심사원    교육 과정<br>
                (공인된 개인 인증 기관 혹은 그로부터 지정 받은 연수 기관의 발행 수료증만 수용 가능)</td>
            </tr>
            <tr>
              <td width="86" align="center">시험</td>
              <td colspan="5" align="center">GPC    지식 및 인성 시험 합격</td>
            </tr>
        </table>
        
        <br><br>
        
        <ul>
			<li style="line-height:30px; list-style:none;padding-left:3%;">

             <span style="display:block;font-size:1.3em;text-align:left;margin-top:20px;margin-left:-10px;">ISO 13485:2016 심사원 요구사항</span><br>
             &#8281; 학력: 대학교(4년제) 졸업 이상<br>
             &#8281; 전공: 생물학, 미생물학, 화학, 생화학, 컴퓨터 및 소프트웨어 기술, 전기, 전자, 기계, 생물 공학, 인간생리학, 약학, 물리학<br>
             &#8281; 또는 경력: 의료기기, 의료 연구 분야에서 4년 이상 정규직으로 일한 사람<br><br><br>
             
             
             <span style="display:block;font-size:1.3em;text-align:left;margin-left:-10px;">특별 요구사항 및 기술적 역량</span><br>
             1. 의료기기에 대한 기본 지식과 다음을 포함한 관련 생산활동의 이해<br>
              &#8281; 사용목적<br>
              &#8281; 위험분석을 포함한 의료기기의 분류<br>
              &#8281; 법적 규제 프레임 워크와 인증기관의 역할<br>
              &#8281; 의료기기 위험평가(ISO 14971)<br>
              &#8281; 의료기기 평가 관련 제품 규격<br>
              &#8281; 인증기관의 ISO 13485 인증<br>
              &#8281; 의료기기 사업/기술에 대한 지식<br><br>

            2. 통계분석<br>
              &#8281; 신뢰성, 표준 편차 등을 고려한 샘플링 및 트렌드 분석에 따른 확률과 통계에 대한 기본 지식<br><br>

            3. 다음사항에 대한 지식<br>
              &#8281; 멸균기술 및 검증 기술<br>
              &#8281; 미생물학 및 BIO-Burden 모니터링<br>
              &#8281; 생체 적합성 및 검증<br>
              &#8281; 클린룸 운영<br>
              &#8281; 환경 모니터링 및 제어<br>
              &#8281; 포장 기술<br>
              &#8281; 안정성 시험<br>
              &#8281; 위험 관리 기반<br>
              &#8281; 세척 및 소독<br>
              &#8281; 의료기기의 생물학적 평가<br>
              &#8281; 의료기기의 임상 평가<br>
              &#8281; 의료기기의 물리적, 화학적 평가<br>
              &#8281; 공정 검증 관행에 대한 지식<br>
              &#8281; 소프트웨어 검증 기술<br><br>
			</li>
		</ul>
       </div>
       
       <div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 13485 심사원 인증 절차</h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_iso9001_08.jpg" alt="ISO 13485 심사원 인증 절차" style="display:block;margin:0px auto;max-width:100%;height:auto;">
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
    </article><!-------+++++++ / 컨텐츠 03 article  심사원인증 > ISO 13485 종료  /++++++++++-------------->
    
       
    <!--   4번째 컨텐트 OHSAS 18001 OR ISO 45001 Insert 시작 -->
    <article><!-------+++++++ / article  컨텐츠 04 심사원인증 >  ISO 45001:2018  시작  /++++++++++--------------->   
       <section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> ISO 45001:2018 안전보건 경영시스템(OHMS) </span> <br> 심사원 인증</h1>
            <span>
            IGC는 ISO/IEC 17024 기반 공인 개인인증기관인 GPC (Global Personnel Certification) 과의 협력을 바탕으로 ISO 45001 안전보건 경영시스템 심사원보, 심사원, 선임심사원, 내부심사원, 검증심사원 등의 인증 서비스를 제공하고 있습니다.
            </span><br>
            
	       <section class="vision_type5">	
	       	<div class="vision_area">
	       	<h2 class="title" style="color:#009999;display:block;text-align:left;">ISO 45001:2018 인증 개요</h2>       
                <ul>
                  <li>    
                    <div class="i_box">
					<img src="images/audit_ohsas18001_03.jpg" alt="ISO 45001 심사원 인증 요구사항" style="display:block;margin:0px auto;max-width:100%;height:auto;">
					</div>
				    <div class="con_txt">
				    	<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;">
                            ISO 45001은 안전보건경영시스템으로, 기존의 OHSAS 18001:2007 규격이 2018년 ISO 45001로 대체되었습니다. 이는 ISO 9001 및 14001 관리 시스템과 호환되는 산업 보건 및 안전 관리 시스템을 통해 보건 및 안전 관리 책임을 관리하기 위한 프레임워크를 제공합니다. <br><br>
                            이 표준은 국제적 사용을 위해 개발되었으며 조직이 보건 및 안전 위험을 제어하고 성능을 향상시킬 수 있도록 합니다.<br><br>
                            ISO 45001은 127개국 이상의 9만개 이상 조직에게 적합합니다. 만약에 귀사의 조직이 책임이 있는 사람들의 안전관리의 '모범 사례'를 보여야 한다면 귀사에게 맞을 것입니다. IGC는 관공서, 제조업, 서비스업, 식품회사, 프랜차이즈점을 포함한 다양한 분야의 다양한 조직에게 인증을 부여하고 있습니다.
                        </span>
				    </div>    
                     </li>
                  </ul>
               </div>
           </section>
	 </section>
	
	 <section class="vision_type5">
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO 45001 심사원 인증 요구사항</h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_ohsas18001_01.jpg" alt="ISO 45001 심사원 인증 요구사항" style="display:block;margin:0px auto;max-width:100%;height:auto;">
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
                <td><p>최근 3년    이내에 심사원 또는 선임심사원으로서 20MD 이상의 심사 이력</p></td>
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
		<h2 class="title" style="color:#009999;">ISO 45001 심사원 인증 절차 </h2>
		<ul>
			<li>
				<div class="i_box">
					<img src="images/audit_ohsas18001_02.jpg" alt="ISO 45001 심사원 인증 요구사항" style="display:block;margin:0px auto;max-width:100%;height:auto;">
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
   </article><!-------+++++++ / article  컨텐츠 04 심사원인증 >  ISO 45001:2018 종료  /++++++++++-------------->   

  </div><!-----------+++++++ / div class="tab_con" 종료 / ++++++++------------------------>
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>