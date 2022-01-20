<?php
	include_once('./_common.php');
$g5['title'] = '연수기관';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }
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
    .partner_type2 .con_area .txtArea ul a {color:#FFCC66;}
	.partner_type2 .con_area .txtArea ul li{margin-top:15px;}
	.partner_type2 .con_area .txtArea ul li:first-child{margin-top:0}
	.partner_type2 .con_area .txtArea ul li span{font-weight:700; margin-right:10px; }
	.partner_type2 .con_area .txtArea ul li p{display:inline-block; }
    
    /* (주)아이지씨인증원 사업영역 시작  */	
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
    
    /* (주)아이지씨인증원 사업영역 종료  */
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
        background: linear-gradient( to top, #FFCC66, #FFCC66 );
        position:relative;
        width:100%;
        height:5%;
        color:#023059;
        line-height:40px;
        padding-top:10px;
        Font-size:1.5em;
    }
    
    /* 서브페이지 컨텐츠 내용, 이미지 위에 텍스트 올려쓰기 시작 */
    h3 {
        position: absolute; 
        left: 50%; 
        top: 10%; 
        transform: translate(-50%, -50%); 
        /*background: rgba(255,255,255,0.5)*/
        background: linear-gradient( to top, #FFCC66, #FFCC66); 
        padding: 10px 30px; 
        border-radius: 0px;
        width:100%;
        height:20%;
        color:#023059;
        text-align:center;  
    }  
    
    /* 목록 앞에 화살표 기호 시작  */
    .arrow {display:inline-block; background:#FFCC66; position:relative;}
    .arrow:after {content:''; position:absolute; width:0; height:0; border-style:solid;}
    /*.arrow.test_4 {width:20px; height:10px;}*/
    .arrow.test_4:after {border-color:transparent transparent transparent #FFCC66; top:-15px; left:-20px;border-width:10px 10px;}
    /*.arrow.test_4:after {border-width:15px 20px;} */
</style>

<div class="content_wrap">
	<section class="page_title">
		<h3 class="sub_tit"><span>연수기관</span>&nbsp;지정서비스 목록</h3>
         <!--<h2 class="sub_txt" ><a href="/theme/rt_igcert/sub01/process.php" style="position:relative;top:-40px;color:#023059;">지정/인증절차 미리보기 Click!</a></h2>-->
	</section>	
	<section class="partner_type2">
<!--
	<div class="txt">
    <span style="color:#FFCC66;">연수기관 지정이란?</span><br>
		연수기관 지정이란 다양한 산업분야에 종사하는 모든 인원들에게 적용되는 표준에 근거하여 전문 인력양성을 위한 교육서비스를 제공하는 기관을 공식 지정해주는 것을 의미합니다.<br>
        IPC (International Personnel Certification Association 국제 개인인증 협회)는 IPC의 활동분야 (개인인증 및 연수기관 지정)에 대하여 IAF (International Accreditation Forum)와 MLA 체결을 하였고 IPC의 정회원인 국제 개인인증기관 GPC (Global Personnel Certification)는 이를 근거로 하여 연수기관 지정에 대한 업무를 수행하고 있습니다.<br>
        IGC는 GPC 인증원과의 협력을 통해 연수기관 지정 서비스를 제공하고 있습니다.
		</div>
-->
		<!-----1line 시작------------>
		<div class="con_area">
			<div class="thumb">
              <a href="igc_116_012.php">
			    <h3>개요</h3>
				<img src="../image/Training_institutions_list_02.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="igc_116_012.php"><span><div  class="arrow test_4"></div>개요</span></a></li>
				</ul>
			</div>
		</div>		
        <div class="con_area">
			<div class="thumb">
              <a href="igc_117_01.php">
			    <h3>연수기관 지정 절차</h3>
				<img src="../image/Training_institutions_list_01.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="igc_117_01.php"><span><div  class="arrow test_4"></div>연수기관 지정 절차</span></a></li>
				</ul>
			</div>
		</div>
		<div class="con_area">
			<div class="thumb">
              <a href="igc_118_01.php">
			    <h3>연수기관 시험 감독관</h3>
				<img src="../image/Training_institutions_list_03.jpg" alt="이미지1">
              </a>
			</div>
			<div class="txtArea">
				<!----p class="tit">보건 및 안전 - 1라인 우측</p------>
				<ul>
					<li><a href="igc_118_01.php"><span><div  class="arrow test_4"></div>연수기관 시험 감독관</span></a></li>
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
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>