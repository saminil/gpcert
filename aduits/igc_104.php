<?php
	include_once('./_common.php');
$g5['title'] = '심사원 인증';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<!------ Existing File Codings  시작----->

<style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:1rem; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style>
<!------ Existing File Codings  종료----->

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; max-width:1200px; min-width:320px; margin:0 auto; font-size:1.2em;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:0px; }
	.partner_type2{clear:both; width:100%; min-width:320px; margin:0 auto;}
	.partner_type2:after{content:""; clear:both; display:block;}
	.partner_type2 .txt{text-align:left; font-size:1em; line-height:2em; border-left:5px solid #666; padding-left:15px; margin-bottom:50px;}
	.partner_type2 .txt span{font-weight:700; font-size:1.4em;}
	.partner_type2 .con_area{ width:33.2%; float:left;  padding:0; padding-bottom:50px; margin:0 auto; border-bottom:1px solid #eee; margin-bottom:50px;}
	
	/* 목록이미지 정렬+순수, 2020년3월26일  수정 */
	.partner_type2 .con_area:nth-child(2n){float:left; }
	.partner_type2 .con_area:after{content:""; clear:both; display:block;}
	.partner_type2 .con_area .thumb{position:relative;float:left; width:300px; height:240px; overflow:hidden;}
	.partner_type2 .con_area .thumb img{width:100%; max-width:750px;} 
	.partner_type2 .con_area .txtArea{float:left; width:300px; padding-left:40px;}
	.partner_type2 .con_area .txtArea .tit{font-size:2em; color:#023059; margin-top:10px;}
	.partner_type2 .con_area .txtArea ul{margin-top:20px; color:#023059;}
    .partner_type2 .con_area .txtArea ul a {color:#009999;}

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
		
	@media screen and (max-width:992px){	
		.content_wrap{width:96%;}
		.page_title{margin-bottom:40px;}
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.partner_type2 .con_area .thumb{float:none; width:90%; height:auto; margin:0 auto; }
        .partner_type2 .con_arrow{width:95%; margin:0 auto;}
        .partner_type2 .con_box{width:95%; margin:0 auto;}        
	}

	@media screen and (max-width:480px){
		.partner_type2 .con_area{width:100%; height:auto; 
            float:none;text-align:}
        .partner_type2 .con_arrow p{ font-size:1.5em; margin-top:30px;}
        .partner_type2 .con_box ul li { width:100%; }
	}
    
    /* 서브페이지 컨텐츠 최상위 타이틀 배경 시작 */
    .sub_tit{ 
        background: linear-gradient( to top, #009999, #009999; );
        position:relative;
        width:100%;
        height:5%;
        color:#023059;
        line-height:40px;
        padding-top:10px;
        Font-size:1.5em;
        color:#fff;
    }

    /* 서브페이지 컨텐츠 내용, 이미지 위에 텍스트 올려쓰기 시작 */
    h3 {
        position: absolute; 
        left: 50%; 
        top: 10%; 
        transform: translate(-50%, -50%); 
        /*background: rgba(255,255,255,0.5)*/
        background: linear-gradient( to top, #009999, #009999); 
        padding: 10px 30px; 
        border-radius: 0px;
        width:100%;
        height:20%;
        color:#fff;
        text-align:center;  
    }  
    
    /* 목록 앞에 화살표 기호 시작  */
    .arrow {display:inline-block; background:#009999; position:relative;}
    .arrow:after {content:''; position:absolute; width:0; height:0; border-style:solid;}
    /*.arrow.test_4 {width:20px; height:10px;}*/
    .arrow.test_4:after {border-color:transparent transparent transparent #009999; top:-15px; left:-20px;border-width:10px 10px;}
    /*.arrow.test_4:after {border-width:15px 20px;} */
</style>

<div class="content_wrap">
	<section class="page_title">
		<h3 class="sub_tit"><span>심사원</span>&nbsp;인증서비스 목록</h3>
        <!--<h2 class="sub_txt"><a href="/theme/rt_igcert/sub01/process.php">인증절차 미리보기 Click!</a></h2>-->
	</section>
	<section class="partner_type2">
<!--
         <div class="txt">
	       <span style="color:#009999;">심사원 인증 개요</span><br>
           --------strong style="font-weight:bold;">심사원 인증 개요</strong><br--------
		<p class="partner_type2_wrap" style="text-align:justify;text-justify: inter-word;line-height:1.4em;font-weight:300;">
		    심사원 인증은 자격인증기관에 대한 국제적으로 통용되는 기준을 달성하고 촉진하기위한 목적으로 개발되었습니다. 인원에 대한 자격인증은 인증 받은 자가 인증스킴의 요구 사항을 충족함을 보증하는 방법 중 하나입니다. 인원에 대한 각 인증스킴의 신뢰성은 인증 받은 자의 적격성을 평가하고 주기적으로 재평가하는 국제적으로 통용되는 프로세스를 통해 달성됩니다.<br><br>
           
            심사원 인증은 인원에 대한 인증스킴을 운영하는 자격인증기관이 일관적이고 비교 가능하며 신뢰할 수 있는 방식으로 운영됨을 보장하는 요구사항을 명시하고 있습니다. 심사원인증의 요구사항은 자격인증기관에 대한 일반 요구사항으로 고려되어야 합니다. 인원에 대한 자격인증은 반드시 인증스킴이  갖추어졌을 때에만 가능합니다. 인증스킴은 개인인증에 포함된 요구사항을 보완하도록 설계되며, 시장이 필요/희망하는 요구사항 또는 정부의 요구사항을 포함하도록 설계됩니다.<br><br>
            
            심사원 인증은 해당 인증기관의 성과에 대해 추가적인 신뢰를 획득하는 수단 중 하나입니다.<br><br>
		</p>
		</div>
-->
				
		<!-----1line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="./igc_104_ISO9001.php">
			    <h3>Part 1</h3>
				<img src="../image/audits_01.jpg" alt="심사원 인증 목록" style="display:block;max-width:100%;height:auto;">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_104_ISO9001.php"><span><div  class="arrow test_4"></div>ISO 9001</span></a></li>
					
					<li><a href="./igc_105_ISO14001.php"><span><div  class="arrow test_4"></div>ISO 14001</span></a></li>
					<li><a href="./igc_106_ISO13485.php"><span><div  class="arrow test_4"></div>ISO 13485</span></a></li>
					<li><a href="./igc_107_OHSAS18001orISO45001.php"><span><div  class="arrow test_4"></div>OHSAS 18001 or ISO 45001</span></a></li>
					
				</ul>
			</div>
		</div>	
				
        <div class="con_area">
			<div class="thumb">
              <a href="./igc_108_ISOIEC22000-1.php">
			    <h3>Part 2</h3>
				<img src="../image/audits_02.jpg" alt="심사원인증 목록" style="display:block;max-width:100%;height:auto;">
              </a>
			</div>
			<div class="txtArea">
				<ul>
				    <li><a href="./igc_108_ISOIEC22000-1.php"><span><div  class="arrow test_4"></div>ISO/IEC 20000-1</span></a></li>
				    
					<li><a href="./igc_109_ISO27001.php"><span><div  class="arrow test_4"></div>ISO/IEC 27001</span></a></li>
					<li><a href="./igc_110_ISO22716.php"><span><div  class="arrow test_4"></div>ISO 22716</span></a></li>
					<li><a href="./igc_111_ISO50001.php"><span><div  class="arrow test_4"></div>ISO 50001</span></a></li>
				</ul>
			</div>
		</div>
  
  		<div class="con_area">
			<div class="thumb">
              <a href="./igc_112_ISO22000.php">
			    <h3>Part 3</h3>
				<img src="../image/audits_03.jpg" alt="심사원 인증 목록"  style="display:block;max-width:100%;height:auto;">
              </a>
			</div>
			<div class="txtArea">
				<ul>
					<li><a href="./igc_112_ISO22000.php"><span><div  class="arrow test_4"></div>ISO 22000</span></a></li>
					
					<li><a href="./igc_113_FSSC22000.php"><span><div  class="arrow test_4"></div>FSSC 22000</span></a></li>
					<li><a href="./igc_114_FDAFSMA.php"><span><div  class="arrow test_4"></div>FDA FSMA</span></a></li>
					<li><a href="./igc_115_PCQI.php"><span><div  class="arrow test_4"></div>PCQI</span></a></li>
				</ul>
			</div>
		</div>
		
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
</div><!--------class="content_wrap 종료 -------------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>