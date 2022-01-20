<?php
include_once('./_common.php');
$g5['title'] = '오시는 길';
include_once(G5_THEME_PATH.'/head.php');
?>
<?php
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


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<?php
	/*
		주의사항 
		관리자모드 내용관리등 에디터로 내용을 등록하실 경우, 보안문제로 자바스크립트와 css가 필터될 수 있습니다.
		이럴 경우 공통 css 파일에 아래 style을 별도 추가하고, 내용관리 에디터의 HTML 모드로 태그를 넣으시면 됩니다.(에디터마다 HTML 모드 버튼이 있으니 HTML 모드로 넣어주세요.)
		javascript 를 사용한다면 공통하단 파일 </body> 위에 코드를 복사하여 추가 합니다.	
	
	*/
?>
<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
    
    /*회사안내- 오시는길 페이지 시작-YR 2100728*/
    .clear{ /*float 문제 해결*/
        content="";
        display:block;
        clear:both;
    }
    .content_wrap{
        font-size:1rem;
        font-weight:400;
        color:#333;
        line-height:1.8rem;
        text-align:justify;
        overflow-x:hidden;
    }
    .container_title{/* 서브페이지 상단 타이틀 생성 / 20210730 전산: 이혜정 */
        display: block !important;
        color:#555; font-size:1.6rem;
        line-height:1; font-weight:700;
        text-align:center;
        border-radius:15px;
        background:#fff;
        box-shadow: 1px 2px 8px #eee;
        width:100%; padding:30px 0; margin: 0 0 50px;
    }
    .top_tt{
        text-align:center;
        color:#5d94c3;
        font-size:2.2rem;
        font-weight:700;
        padding:50px 0;
        line-height:3.4rem;
    }
    .top_tt:after { /*밑줄선*/
        content: "";
        clear: both;
        display: block;
        width: 40px;
        margin: 50px auto 0;
        border: 1px solid #999;
    }
    
    /*지아이씨인증원 정보(텍스트)*/
    .way_to_gic{
        width:100%;
        height:auto;
        padding:45px 7% 35px;
        background:#f9f9f9;
        border-top:3px solid #eee;
    }
    .way_to_gic li{
        margin-bottom:5px;
        font-size:1rem;
        color:#333;
        font-weight:400;
        line-height:1.8rem;
    }
    .way_to_gic_tt{
        display:inline-block;
        width:150px;
        font-weight:500;
        color:#5d94c3;
        font-size:1.1rem;
        margin-bottom:5px;
        vertical-align: top;
    }
    .way_to_gic_txt_subway{
        display:inline-block;
        width:500px;
        margin-left:-3px;
        line-height:1.8rem;
        color:#333;
    }
    /*오시는길*/
    .way_to_gic_img{margin:80px 0;}
    .way_to_gic_img .content_title, .content_title{
        font-size:1.8rem;
        font-weight:500;
        color:#333;
        margin-bottom:40px;
    }
     .way_to_gic_img .content_title:before, .content_title:before{ /*제목 위 border*/
        content: "";
        display:block;
        width:35px;
        height:3px;
        background:#5d94c3;
        margin-bottom:13px;
    }


/*회사안내- 오시는길 페이지 종료*/
    
    
    /* -----------------------------------------------------반응형 시작 -210803 yr*/   
    
    /* 놋북,태블릿 사이즈, 최대 1280px 화소까지 적용 */
    @media (max-width:1280px) {
        .container_title{width:100%;}
        .way_to_gic_txt_subway{
            display:inline-block;
            width:400px;
            margin-left:-3px;
            line-height:1.8rem;
            color:#333;
        }
    }

    
    /* 최대 1024px 화소까지 적용 */
    @media (max-width:1024px) {
        /*-----1024px에서 텍스트 크기 변경되는 class -----*/
         .top_tt{
            padding:40px 0 40px;
            font-size:1.85rem;
        }
        .top_tt:after { /*밑줄선*/
            margin: 40px auto 0;
        }
         .way_to_gic_img .content_title, .content_title{
            font-size:1.6rem;
        }
        /*-----1024px에서 텍스트 크기 변경되는 class -----*/
        
        /*지아이씨인증원 정보(텍스트)*/
        .way_to_gic{
            width:100%;
            height:auto;
            padding:35px 7% 25px;
            background:#f9f9f9;
            border-top:3px solid #eee;
        }
        .way_to_gic_tt{
            margin-bottom:0px;
        }
        .way_to_gic_txt{
            display:block;
            line-height:1.8rem;
        }
        .way_to_gic li{
            margin-bottom:15px;
            font-size:1rem;
            color:#333;
            font-weight:400;
        }
        .way_to_gic_txt_subway{
            margin-left:0px;
        }
    }
    

    /*  최대 768px 화소까지 적용 */
    @media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
        .container_title{display:none !important;} /*탭메뉴와 중복되어서 안보이게함*/
    }


    /* 모바일(가장 작은 사이즈: SAMSUNG GALAXY S6) 가로 버전 사이즈, 최소 360px ~ 최대 640px(가로로 볼때) 화소까지 적용 */    
    @media all and (max-device-width : 640px) { 
        .top_tt{
            padding:20px 0 40px;
        }
        .way_to_gic_txt_subway>span{ /*도보 12분 텍스트 숨김*/
            display:none;
        }
        .hide{display:none;}
    }


    /* 모바일(가장 큰 사이즈: iPhone 6/7/8 Plus) 세로 버전 사이즈, 최소 360px ~ 최대 414px 화소까지 적용 */
    @media all and (min-width:360px) and (max-device-width : 414px) { 
        /*----- 360px ~ 414px에서 텍스트 크기 변경되는 class -----*/
        .content_wrap{
            font-size:0.95rem;
        }
        .top_tt{
            font-size:1.35rem;
            padding:0px 0 30px;
            line-height:2.2rem;
        }
        .top_tt:after { /*밑줄선*/
            margin: 30px auto 0;
        }
         .way_to_gic_img .content_title, .content_title{
            margin-bottom:20px;
            font-size:1.4rem;
        }
        .way_to_gic{
            padding:25px 7% 15px;
        }
        .way_to_gic_tt{
        display:inline-block;
            font-size:1rem;
        }
        .way_to_gic li{
            margin-bottom:15px;
            font-size:0.95rem;
        }
        .way_to_gic_txt_subway>span{ /*도보 12분 텍스트 숨김*/
            display:none;
        }
    }  
/*---------------------------------------------------------------반응형 끝*/
    

	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>

<div class="content_wrap animatedParent">
    
    <div class="top_tt animated fadeInUpShort">GPC 오시는 길</div>

    <ul class="way_to_gic animated fadeInUpShort">
        <li>
            <span class="way_to_gic_tt">주소</span><span class="way_to_gic_txt">(08504) 서울특별시 금천구 서부샛길 638, 대륭테크노타운7차 501-1호</span>
        </li>
         <li>
            <span class="way_to_gic_tt">대표 전화/ 팩스</span><span class="way_to_gic_txt">+82 2 6749 0710 / +82 2 6749 0711</span>
        </li>
        <li>
            <span class="way_to_gic_tt">이메일</span><a href="mailto: info@gicert.org" title="이메일 보내기"><span class="way_to_gic_txt">info@gpcert.org</span></a>
        </li>
        <li>
            <span class="way_to_gic_tt">주차</span><span class="way_to_gic_txt">지하 주차장 이용 가능 (1시간 무료)</span> 
        </li>
         <li>
            <span class="way_to_gic_tt">대중교통</span>   
            <span class="way_to_gic_txt way_to_gic_txt_subway">
                지하철 1호선 가산디지털단지역 7번 출구<span>(도보 12분)</span><br>
                지하철 7호선  가산디지털단지역 6번 출구<span>(도보 12분)</span>
            </span>
        </li>
    </ul>
    
    <!--------------------오시는길--------------------->
    <div class="way_to_gic_img  animated fadeInUpShort">
        <h2 class="content_title">위치안내<small>(대중교통 이용시)</small></h2>
        <div>         
          <img src="images/GPC-location.png" alt="(주)지피씨인증원 찾아오기 지도(약도)" style="display:block;margin:0 auto;">
        </div>
    </div>
    
     <!--------------------카카오지도--------------------->
    <h2 class="content_title animated fadeInUpShort">카카오 지도 보기<small class="hide">(지도 이동, 확대 &amp; 축소 기능)</small></h2> <!--   오시는길 텍스트와 동일한 폰트사이즈를 적용해도 크기가 상이하여 style로 별도의 폰트사이즈 적용 210617 yr-->
   
    <hr style="display:block;width:100%;height:1px;background:#ddd;margin-bottom:20px;">
	<!-- 1. 약도 노드 -->
	<div id="daumRoughmapContainer1584435077831" class="root_daum_roughmap root_daum_roughmap_landing"></div>
	
	<!-- 2. 설치 스크립트 -->
    <div class="border">
	   <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
    </div>
	
	<!-- 3. 실행 스크립트 -->
	<script charset="UTF-8">
		new daum.roughmap.Lander({
			"timestamp" : "1584435077831",
			"key" : "xj65",
			"mapWidth" : "",
			"mapHeight" : ""
		}).render();
	</script>
    <hr style="display:block;width:100%;height:1px;background:#ddd;margin:20px 0;">
    
</div> <!--------------------------// class="content_wrap" //------------------------------->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>