<?php
	include_once('./_common.php');
$g5['title'] = '시험/기계';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
    .vision_type5 .vision_area:nth-child(1) ul li .i_box {background-image:url(images/clinical_06constructionmaterials_01.jpg);}
    .vision_type5 .vision_area:nth-child(2) ul li .i_box {background-image:url(images/clinical_06constructionmaterials_01.jpg);}
    .vision_type5 .vision_area:nth-child(3) ul li .i_box {background-image:url(images/clinical_06constructionmaterials_01.jpg);}
	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:auto; padding:50px 40px;line-height:auto;} /* 텍스트 내용 상하 */
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

		/*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type5 .vision_area h2.title { font-size:1.5em; }
        .vision_type5 .vision_area span.stitle{font-size:1em; width:90%;}
        .vision_type5 .vision_area ul li {width:100%;}
        .vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:100px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }
        .vision_type5 .vision_area ul li .con_txt{display:block; width:100%; height:auto; padding:10px 0; margin:0;}
        .vision_type5 .vision_area ul li .con_txt span { padding:0 30px; }
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃 설정  */
	}
</style>

<div class="content_wrap">

<hr style="border-top: 15px solid #99cccc;;display:inline-block;margin-bottom:0px;margin-top:10px;width:100%;color:">
    <span style="color:#ffffff; display:block;text-align:center;margin-bottom:70px;margin-top:-26px;"> &#10057; &#10057; &#10057; </span>

	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer" style="color:#009999;"> 기계 안전 시험 </span></h1>
		<br>
		<h3 class="sub_txt" style="display:block;text-align:justify;">
		
		<ul>
		   <li>   
             <h2>
               <span style="display:block;font-size:1.3em;text-align:left;color:#009999;"> <span style="display:block;font-size:0.2em;color:#009999;line-height:90px;height:30px;">&#9632; </span>
                 &nbsp; &nbsp; 기계 안전 개요
               </span> 
             </h2> 
           </li>
        </ul>
		
		<br>
		많은 유형의 제품들은 유럽 연합, 미국 등의 다른 주요 시장으로 수출되거나 수입하기 위하여 기계적 안전성 시험이 요구됩니다. 기계적 고장은 사용자의 부상이나 사망을 초래할 수 있기에 사용자의 안전을 보장하기 위해 그 중요성이 부각되고 있습니다.<br><br>
        기계류 제조업체는 기계류에 적용되는 건강 및 안전 요구사항을 결정하기 위하여 위험성 평가를 같이 수행하여야 합니다. 위험을 감소시키고 보호조치 및 예방조치를 통해 위험요인을 제거하는 것이 중요합니다.<br><br>
        기계적 안전 시험에는 제품의 모양과 설계, 사용자의 부상을 초래할 수 있는지 여부에 대한 평가 및 사용자의 신체부위의 끼임, 조임, 빠짐 사고 등의 발생 여부에 대한 평가를 포함하고 있습니다. 또한 구조적으로 제품의 일반적인 사용환경에서 강도 및 내구성을 평가하고, 특정 제품의 특성에 대한 시험이 포함됩니다. 완제품에 사용되는 나사와 경첩과 같은 핵심 부품의 경우에도 안전 시험을 포함하여야 합니다. <br><br>
		</h3>
	</section>
	
	<section class="vision_type5">
		
		<div class="vision_area">
		<h2 class="title" style="color:#009999;">IGC 시험소 소개</h2>
		
		IGC의 시험소는 미국 인정기구인 IAS로부터 ISO/IEC 17025  인정을 받은 시험소로 기계류 시험 및 시험성적서를 발행하고 있습니다.<br><br>
		<ul>
			<li>
				<div class="con_txt" style="text-align:center;">
                    
                    <h2 style="display:block;width:50%;margin:0 auto;"><img src="images/clinicaltest_machinery_01_1.png" alt="IGC인증원의 시험소 Scope"></h2><br>
                    자세한 사항은 IGC 시험소로 문의주시면 답변 도와드리겠습니다.
				</div>
			</li>
			<br>
			<br>
           IGC의 시험소가 보유한 장비는 다음과 같습니다.<br><br>
            <ul>
                <li style="padding:20px;">
                    
                    <h2 style="display:block; margin: 0 auto;text-align:center;">
                    <img src="images/clinicaltest_machinery_02.jpg" alt="만능재료 시험기 UTM"><br>
                    만능 재료 시험기 UTM
                    </h2>
                       <br>
                        <br>
                         <span style="font-weight:bold;color:#009999;">1.	만능 재료 시험기 UTM</span><br><br>
                         인장 또는 압축 모드로 정적 시험을 할 때 가장 일반적으로 사용되며, 푸쉬풀 시험기(Push-pull Tester)로도 알려져 있습니다. 인장, 압축, 전단, 굴곡, 박리, 인열, 사이클, 그리고 굽힘 시험을 실시할 수 있습니다.<br><br>
                         &#10054; 측정항목: 인장, 압축, 밴딩 강도, 굴곡강도, 파괴 강도 등<br>
                         &#10054; 용량(N): 10KN (1 ton)<br>
                         &#10054; 분해능: 1/100,000<br>
                         &#10054; Test Speed: 1~500mm/min<br>
                </li>
            </ul>
            
            <br>
            <ul>
                <li style="padding:20px;">
                    <h2 style="display:block; margin: 0 auto;text-align:center;">
                    <img src="images/clinicaltest_machinery_03.jpg" alt="열 충격 시험기(Thermal Shock Tester)"><br>
                   열 충격 시험기 (Thermal Shock Tester)
                    </h2>
                       <br>
                        <br>
                         <span style="font-weight:bold;color:#009999;">2.	열 충격 시험기 (Thermal Shock Tester)</span><br><br>
                         열 충격 시험은 제품이 갑작스런 온도변화에 어떤 영향을 받는지 평가하는 시험입니다. 시험은 실온에서 시작하여 규정된 횟수의 Cycle을 반복하는데, 아주 낮은 온도 (또는 고온)와 아주 높은 온도 (또는 저온)에서 비교적 짧은 시간 노출 되었다가 실온으로 돌아옵니다. 최종 Cycle을 마치면, Case와 Lead / Terminal 등을 대상으로 외관검사를 실시하거나 확대한 상태로 Marking의 정상 유무를 확인하며, 확인이 어렵거나 Case, Terminal 등에 손상이 발견되면 Failure로 판정합니다.<br><br>
                           &#10049; 장비사양<br>
                           &nbsp; &nbsp; &#10054;  Sample Basket: 350x350x350mm<br>
                           &nbsp; &nbsp; &#10054;  Temp Tange: -40℃ ~ 125℃<br> <br>
                           &#10049; 적용규격<br>
                           &nbsp; &nbsp; &#10054;  IEC 60068 2-14 Test N: Change of temperature<br>
                </li>
            </ul>
            
            <br>
            <ul>
                <li style="padding:20px;">
                    <h2 style="display:block; margin: 0 auto;text-align:center;">
                    <img src="images/clinicaltest_machinery_04.jpg" alt="항온 항습조"><br>
                       항온항습조
                    </h2>
                       <br>
                        <br>
                         <span style="font-weight:bold;color:#009999;">3. 항온항습조</span><br><br>
                          고온, 고습 환경하에서의 부품 및 장비 등의 내구성을 확인할 수 있는 장비입니다.<br><br>
                          &#10049; 항온, 항습조 사양<br>
                          &nbsp; &nbsp; &#10054; 온도: -40℃ ~ 150℃<br>
                          &nbsp; &nbsp; &#10054; 습도: 30~98%<br>
                          &nbsp; &nbsp; &#10054; Chamber Size: 500x500x500mm<br><br>
                          &#10049; 적용규격<br>
                          &nbsp; &nbsp; &#10054; IEC 60068 2-78 (Damp Heat Test)<br>
                </li>
            </ul>
          </ul>
		</div>

		<div class="vision_area">
		<h2 class="title" style="color:#009999;">CE Machinery Directive(2006/42/EEC)</h2>
		<ul>
			<li>
				<div class="con_txt" style="position:relative;float:none;">
					<span style="display:block;height: 140px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                    <span style="font-weight:bold;color:#009999;">1. CE Machinery Directive(2006/42/EEC)의 구성</span><br>
                         서 론 : 작성에 해당되는 지침과 전반적인 해설 및 유의사항<br>
                         본 문 : 지침을 적용하기 위한 조문, 가맹국에 대한 법적 의무나 권한<br>
                         Annex I : 설계 및 제조에 관한 건강과 안전의 필수 요구사항<br>
                         Annex II : 적합성 선언서에 관한 사항<br>
                         Annex III : CE – Marking에 관한 사항<br>
                         Annex IV : Notified Body로부터 EU 형식시험을 받아야 하는 기계류 목록<br>
                         Annex V : 적합성 선언 및 기술파<br>
                         Annex VI : EU 형식시험<br>
                         Annex VII : Notified Body 기준
					</span>
				</div>
			</li>
			<br>
			
			<li>
				<div class="con_txt">
					<span style="display:block;height: 140px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                    <span style="font-weight:bold;color:#009999;">2. CE Machinery Directive(2006/42/EEC) 핵심 요구사항</span><br>
                         CE Machinery Directive(2006/42/EEC)는 기계가 안전하게 사용되고 있는지, 잔여 위험이 남아있는 경우 사용자에게 올바르게 경고하고 있는지에 대한 내용을 문서화한 것이며 제조자가 준수하여야 하는 문서화 요구사항은 MD의 부속서 I의 필수 보건 및 안전 요구 사항에 있습니다.<br><br>

                         필수 요구사항은 다음과 같습니다.<br>
                         1. 안전에 대한 원칙, 취급을 용이하게 하는 설계, 인체 공학, 제어 시스템, 기계적 위험으로 보호, 전기 및 기타 에너지 온도, 화재 및 폭발 등의 기타 위험, 소음 방출 등 모든 유형의 기계에 공통적인 일반사항, 진동, 방사선 및 유해물질, 유지보수, 청소, 정보의 표시 및 경고<br>
                         2. 식품, 화장품 및 의약품 등과 같은 특정 등급의 기계류에 적용되는 요구사항<br>
                         3. 기계의 이동성으로 인한 위험을 상쇄하기 위한 요구사항<br>
                         4. 리프트 작업의 위험을 상쇄하기 위한 요구사항<br>
                         5. 지하작업용 기계에 대한 요구사항<br>
                         6. 기계 리프트 인력에 대한 요구사항<br><br>
                         
                         필수 준비문서는 다음과 같습니다.<br>
                         &nbsp; &nbsp; &#10054; 매뉴얼: 사용자 매뉴얼, 서비스매뉴얼 (전문가용)<br>
                         &nbsp; &nbsp; &#10054; Parts List (승인부품의 인증서 사본: CoC , AoC , DoC , Type approval Certificates)<br>
                         &nbsp; &nbsp; &#10054; Catalogues: 완제품 및 주요부품류<br>
                         &nbsp; &nbsp; &#10054; 도면: 제품, 조립도, 주요부 조립도<br>
                         &nbsp; &nbsp; &#10054; 유압, 공압, 전기 관련 자료<br>
					</span>
				</div>
			</li>
			<br>
			
			
			<li>
				<div class="con_txt">
					<span style="display:block;height: 140px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                    <span style="font-weight:bold;color:#009999;">3. 인증절차</span><br>
                         다음과 같이 4가지의 방식이 있습니다.<br><br>
                         
                             A) Annex 4에 기술된 고 위험군 기계류<br>
                                &nbsp; &nbsp; 승인기관 (Notified Body : NB)을 통한 인증취득<br>
                         
                             B) Annex 4가 아닌 일반 기계류 (Annex Ⅱ A)<br>
                                &nbsp; &nbsp; 자가 적합성 선언(완성품에 대한 적합성의 입증으로써 CE 마크를 부착)으로 취득<br>
                         
                             C) 기계 부품류에 관한 자기 적합성 선언(Annex Ⅱ B)<br>
                                &nbsp; &nbsp; 자가 적합성 선언(완성품에 대한 적합성의 입증으로써 CE 마크를 부착)으로 취득<br>
                         
                             D) 안전 부품류에 관한 자기 적합성 선언 (Annex Ⅱ C)<br>
                                &nbsp; &nbsp; 자가 적합성 선언(완성품에 대한 적합성의 입증으로써 CE 마크를 부착)으로 취득<br><br>
                         
                         참고: B)와 C)의 경우, 자기 적합성 선언서를 작성하고 관련 기술문서를 보관함으로써 규격에 적합함을 선언할 수 있지만 해당제품이나 포장 등에 CE 마크를 부착할 수 없습니다.
                         <br>
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
					<div class="icon"><i class="fas fa-hands-helping"></i><em></em></div>
				</div>
				<div class="con_txt">
					<span style="display:block;height: 160px ; display: table-cell; vertical-align: middle;text-align:justify;line-height:30px;">
                      IGC의 시험소는 광범위한 기계적 위험에 대한 기계적 안전 시험을 제공하며 고객사 제품의 해외시장 진출을 지원하기 위해 미국의 인정기구 IAS로부터 기계류 시험업무에 대한 인정을 획득하였습니다 (TL-799). <br>
                      IGC의 시험소는 제조업체의 세계 시장 진출을 위해 필요한 법적 요구사항을 준수할 수 있도록 지원합니다.<br>
					</span>
				</div>
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
          	<li><p><em><strong>01</strong></em><span>CE LVD/EMC 인증</span></p></li>
          	<li><p><em><strong>02</strong></em><span>유라시아 인증</span></p></li>
          	<li><p><em><strong>03</strong></em><span>제품 등록 (CPNP, FDA)</span></p></li>
          	<li><p><em><strong>04</strong></em><span>시험 및 인증을 위한 기술 지원 서비스 제공</span></p></li>
          </ul>
        </div>
       </section><!---------(주)아이지씨인증원 사업영역 종료 ------>      
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>