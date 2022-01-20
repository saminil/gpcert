<?php
	include_once('./_common.php');
$g5['title'] = '시험/생물학적 시험';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
        
    /* 신규 테이블 삽입   */
    table{width:80%;min-width:240px;border: 1px solid #444444;overflow-x: auto;}
    th,td{border: 1px solid #444444;font-size:100%;padding:20px;}
    
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
    
    table{width:100%;border: 1px solid #444444;}
    th,td{border: 1px solid #444444;margin-left:10px;font-size:0.9em;}

	table,td p {font-size:0.9em;margin-left:0px;padding-left:10px;}
    td {font-size:96%;padding-left:10px;}
    
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
	/*.vision_type5 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; } */
    .vision_type5 .vision_area h2.title:before{position:absolute; top:15px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #009999; background:#fff; }
	.vision_type5 .vision_area ul {margin:0; padding:0; }
	.vision_type5 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/clinicaltest_Nutrition&analysis_03.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/clinicaltest_Nutrition&analysis_04.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/clinicaltest_Nutrition&analysis_05.jpg);}
    .vision_type5 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/clinicaltest_Nutrition&analysis_04.jpg);}
    .vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; list-style-type : none;padding-left: 0px;}
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:0px; margin-bottom:15px; list-style-type : none}
	.vision_type5 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
    /*제공서비스 > 시험 > 생물학적 시험> 위생 테스트 sanitation text 시작*/
    .vision_type6 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type6:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type6 .vision_area {width:100%; margin-bottom:80px; }
    
	.vision_type6 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type6 .vision_area h2.title:before{position:absolute; top:15px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #009999; background:#fff; }
    
	.vision_type6 .vision_area ul {margin:0; padding:0; }
	.vision_type6 .vision_area ul li {clear:both; display:table; padding:10; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type6 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle;background-repeat:no-repeat;background-size:contain;background-position:center;} /* 이미지 위치 크기 */
    .vision_type6 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/clinicaltest_Sanitationtest_01.jpg);}
/*    .vision_type6 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/clinicaltest_Sanitationtest_02.jpg);}*/
    .vision_type6 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/clinicaltest_Sanitationtest_02.jpg);}
    .vision_type6 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/clinicaltest_Sanitationtest_03.jpg);}
    .vision_type6 .vision_area:nth-child(4) ul li .i_box {background-image:url(images/clinical_06constructionmaterials_01.jpg);}
	.vision_type6 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type6 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type6 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type6 .vision_area ul li .con_txt {display:table-cell; width:70%; height:auto; padding:30px 40px;line-height:auto;} /* 텍스트 내용 상하 */
	.vision_type6 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type6 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type6 .vision_area dl {width:95%; margin:20px auto; list-style-type : none;padding-left: 10px;}
	.vision_type6 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:10px; margin-bottom:15px; list-style-type : none}
	.vision_type6 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
    .images03{display:block;margin-bottom:50px;}
        
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
        .vision_type5 .vision_area span.stitle{font-size:1em; width:100%;}
        .vision_type5 .vision_area ul li {width:100%;}
        .vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ } /* 모바일에서 이미지 확대 하기 위해 padding 100px으로 수정하고, 이미지와 텍스트 상하 간격을 padding 30px값을 줌 */
        .vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type5 .vision_area ul li .con_txt span { padding:30px; }
        .vision_type5 .vision_area ul li img{display:block;margin-bottom:90px;margin:0 auto;} /*  화학&생물학 시험인증 IGC자격 증서 */
        
        
        /*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type6 .vision_area h2.title { font-size:1.5em; }
        .vision_type6 .vision_area span.stitle{font-size:1em; width:100%;}
        .vision_type6 .vision_area ul li {width:100%;}
        .vision_type6 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ } /* 모바일에서 이미지 확대 하기 위해 padding 100px으로 수정하고, 이미지와 텍스트 상하 간격을 padding 30px값을 줌 */
        .vision_type6 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type6 .vision_area ul li .con_txt span { padding:30px; }
        .vision_type6 .vision_area ul li img{display:block;margin-bottom:90px;margin:0 auto;} /*  화학&생물학 시험인증 IGC자격 증서 */
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃  사업영역 설정  */
	}
</style>

<div class="content_wrap">

<!--+++ 20.05.19 탭메뉴/    시험 /식품영양 분석 시작 +++-->
	<div class="tab_menu tab01">
		<ul style="display:inline-block;position:relative;text-align:center;">
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li><a href="javascript:;">식품 미생물 시험</a></li>
			<li class="on"><a href="javascript:;">위생테스트</a></li>
		</ul>
	</div>
	<!--+++ 20.05.19 탭메뉴/ 시험 /식품영양 분석  종료  +++-->
 
	<hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:00px;width:100%;">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>
	
	<!--+++ 20.05.19 탭컨텐츠 영역 시작 +++-->
  <div class="tab_con">

      
	<article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
	 <section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> 생물학적 시험 > 식품 미생물 시험</span></h1>
	</section>
	<section class="vision_type5">
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">식품 미생물 시험 개요</h2>
		<ul>
			<li style="padding:0px 20px 0px; 0px;"><!------ style="padding:0px 20px 70px; 0px;"-------->
			  <div class="con_txt">
              <span style="text-align:justify;">
                         FDA의 식품 안전 요구사항은 식품별로 모두 다르기 때문에 제조업자는 식품마다 FDA에서 요구하는 사항을 잘 파악하여 위해요소 분석을 하여야 합니다. 
                         이러한 위해요소를 분석하기 위해선 생물학적, 화학적 및 물리적 위해요인을 확인하는 단계를 거쳐야 합니다.<br>
                         IGC의 식품 미생물 시험을 통해 국내·외 식품업체는 위해요인 분석과 이를 기반으로 효과적인 식품안전체계를 구축할 수 있습니다.
				</span>
			    <div  style="text-align:center;">
				   <img src="images/clinicaltest_Nutrition&analysis_07.jpg" alt="생물학적 시험 항목" style="max-width: 100%;height:auto;"><br>
				   <p style="text-align:center;color:#006633;">생물학적 시험 항목</p>
                </div>
			  </div>
			</li>
          </ul>
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">ISO/IEC 18025 인정 시험기관</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 140px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                     미국의 시험소 인정기관인 IAS는 식품 시험소 인정 요구사항을 언급한 Guideline을 발간하였고, Guideline에서는 ISO/IEC 17025에 따른 인정 획득과 인정 시 사용하는 시험규격에 대해 미국 국가 규격 및 국제 공인규격의 사용을 요청하고 있습니다. 이에는 AOAC, BAM 등이 사용됩니다.<br><br>
                     IGC의 식품 시험소는 AOAC, BAM에 의거한 ISO/IEC 17025 인정을 취득하여 보다 신뢰성 있는 시험 서비스를 제공합니다.<br><br>
                     <span style="font-weight:bold;color:#0dafc8">시험 항목</span>
                     &#10022; E. coli<br>
                     &#10022; E. coli / Total Coliform Counts <br>
                     &#10022; Salmonella Sp.<br>
                     &#10022; Listeria Sp. / Listeria monocytogenes <br>
                     &#10022; Staphylococcus aureus<br>
                     &#10022; Aerobic Plate Counts <br>
                     &#10022; Yeast and Mold<br> 
                     &#10022; Bacillus cereus<br> 
					</span>
				</div>
			</li>
			<br>
		</ul>
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">IGC인증원의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:20px;">
                       &#10046; IGC는 고객사의 인증 획득에 필요한 시험검사 업무를 지원하고자 시험소를 운영하고 있습니다.<br><br>
                       &#10046; 의료기기, 전기전자 제품 및 기계류에 대한 시험업무를 시작으로 지속적인 발전을 달성하여 식품에 대한 시험 업무로 영역을 확대하였습니다. <br><br>
                       &#10046; IAS로부터 ISO/IEC 17025 인정을 취득한 IGC 식품 시험소는 국제적으로 인정된 검사방법인 AOAC 및 BAM에 따라 FDA FSMA 3자 인증을 위한 식품 안전 및 생산현장 안전성 시험 서비스를 제공하고 있습니다 <br><br>
                       &#10046; IGC LAB에서 발행하는 성적서는 ilac과 MRA가 체결된 인정기관인 IAS로부터 인정을 받은 시험기관의 성적서이므로, IGC LAB의 성적서는 전 세계 어디에서도 통용될 수 있습니다.
					</span>
				</div>
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
          	<li><p><em><strong>01</strong></em><span>CE LVD/EMC 인증</span></p></li>
          	<li><p><em><strong>02</strong></em><span>유라시아 인증</span></p></li>
          	<li><p><em><strong>03</strong></em><span>제품 등록 (CPNP, FDA)</span></p></li>
          	<li><p><em><strong>04</strong></em><span>시험 및 인증을 위한 기술 지원 서비스 제공</span></p></li>
          </ul>
        </div>
       </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------>    
   </article><!-------+++++++ / article  시험 /식품영양 분석  종료  /++++++++++-------------->  
   
   
   <article style="display:block;"><!-------+++++++ / article  시험 > 위생테스트(Sanitation test) [ Insert ] 시작  /++++++++++--------------> 
    <section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> 생물학적 시험 > 위생테스트</span></h1>
	</section>
 	<section class="vision_type6">
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">위생 테스트 개요</h2>
		<ul>
			<li>
				<div class="i_box">

				</div>
				<div class="con_txt">
					<span style=" display: table-cell; vertical-align: middle;text-align:justify;padding:10px;">
                      미국으로 식품을 수출하는 해외 업체는 미국 FDA 식품안전현대화법(FSMA) 요구사항에 따라 식품 안전 시스템을 운용하고 있음을 입증해야 합니다.
                      이는 ‘FSMA 인증을 받으려는 식품 생산 시설은 FDA 또는 ISO/IEC 17025 인정 시험소에서 현장 위생 테스트를 진행해야 한다’는 요구사항을 포함합니다.<br><br>
                      미국 FDA 실사단에 의해 실사 진행 시 environment swab test의 방법, 미생물학적 검사방법, 빈도 등을 점검하기 때문에 수출업체는 위생 테스트를 실시하여야 합니다.
                      ISO/IEC 17025 인정 시험소인 IGCLAB에서 제공하는 위생 테스트를 통해 이를 대비하고 미국 FDA 규정을 준수함을 입증할 수 있습니다.
					</span>
				</div>
			</li>
			<br>
          </ul>
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">위생 테스트의 중요성</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"></div>
				</div>
				<div class="con_txt">
					<span style=" display: table-cell; vertical-align: middle;text-align:justify;padding:10px;">
                     2011년 미국에서 제정되어 본격적으로 시행중인 FSMA(식품현대안전화법)는 식품에 영향을 끼치는 위해요소 중 특히 생물학적 위해요소의 관리를 강조하고 있습니다.<br><br>
                     FSMA는 대상이 되는 모든 식품 제조업체에 식품예방관리(HARPC)를 적용합니다.<br><br>
                     HARPC는 식품공급에 대한 잠재적 위험을 식별하고 방지하기 위해 기존 GMP와 HACCP 과는 다른 접근방식을 취하며, 특히 식품 제조과정에서의 생물학적 위해요소 관리를 강조하고 있습니다.<br><br>
                     또한 FSMA 예방관리 요구사항에는 알레르기 유발물질 관리, 위생관리 등을 규정하고 있으며 이에 따라 위생 테스트에 대한 철저한 준비가 요구됩니다.<br><br>
                     IGC에서 제공하는 위생 테스트를 통해 이러한 요구사항을 충족할 수 있습니다.<br><br>
                     IGC는 다양한 인증 및 시험 서비스 제공 경험과 전문성을 바탕으로 식품 시설에 요구되는 사항에 대한 맞춤 서비스를 지원하고 있습니다.<br><br>
					</span>
				</div>
			</li>
		</ul>
		</div>
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">IGC인증원의 역량</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"></div>
				</div>
				<div class="con_txt">
					<span style=" display: table-cell; vertical-align: middle;text-align:justify;padding:10px;">
                      &#10054; IGCLAB은 고객사의 해외시장 진출을 지원하기 위한 다양한 서비스를 지원하고 있습니다.<br><br>
                      &#10054; IGCLAB에서 발행하는 성적서는 ILAC과 MRA가 체결된 인정기관인 IAS로부터 인정을 받은 시험기관의 성적서로 전 세계 어디에서도 통용될 수 있습니다.<br><br>
                      &#10054; IGC의 FSMA 제 3자 인증 또는 FSVP 인증 진행 시 제품에 대한 적격성 제시로서 성적서를 활용함으로써 식품 시설의 해외 진출을 위한 서비스를 편리하게 제공받을 수 있습니다.<br><br>
                      ❆ IGCLAB은 고객사의 해외시장 진출을 지원하기 위한 다양한 서비스를 지원하고 있습니다.<br><br>
                      ❆ IGCLAB에서 발행하는 성적서는 ILAC과 MRA가 체결된 인정기관인 IAS로부터 인정을 받은 시험 성적서로 전 세계 어디에서도 통용될 수 있습니다.<br><br>
                      ❆ IGC인증원에서 제공하는 FSMA 제 3자 인증 또는 FSVP 인증 진행 시 IGC가 발행한 시험 성적서를 활용할 수 있습니다.<br><br>
					</span>
				</div>
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
          	<li><p><em><strong>01</strong></em><span>CE LVD/EMC 인증</span></p></li>
          	<li><p><em><strong>02</strong></em><span>유라시아 인증</span></p></li>
          	<li><p><em><strong>03</strong></em><span>제품 등록 (CPNP, FDA)</span></p></li>
          	<li><p><em><strong>04</strong></em><span>시험 및 인증을 위한 기술 지원 서비스 제공</span></p></li>
          </ul>
        </div>
       </section>
    <!---------(주)아이지씨인증원 사업영역 종료 ------>
  </article><!-------+++++++ / article  심사원인증 > Sanitation test [ Insert ] 종료  /++++++++++--------------> 
 </div><!-----------+++++++ / div class="tab_con" 종료 / ++++++++------------------------>
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>