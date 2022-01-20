<?php
include_once('./_common.php');
$g5['title'] = 'CI&amp;Mark';
include_once(G5_THEME_PATH.'/head.php');
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
    /*회사안내- 로고 페이지 시작-YR 210728*/
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
    
    .ci_mark_content{width:100%;height:auto;}
    
     /*ci 소제목*/
    .content_title{
        font-size:1.8rem;
        font-weight:500;
        color:#333;
        margin-bottom:40px;
        line-height:2rem;
    }
    .content_title:before{  /*제목 위 border*/
        content: "";
        display:block;
        width:35px;
        height:3px;
        background:#5d94c3;
        margin-bottom:13px;
    }

    
    /*1) CI*/
    .ci_box1, .ci_box2, .ci_box3{
        width:100%;
        margin:40px 0 80px;
        padding:20px 3%;
    }
    .ci_tt{ /*문단 제목*/
        font-size:1.3rem;
        font-weight:500;
        color:#333;
        padding:3px 0;
        height:28px;
        width:40%;
    }
    .ci_tt_underline{
        display:inline-block;
        width:100%;
        height:2px;
        margin:10px 0 20px;
        background:#ddd;
    }
    .basic_logo>img{ /*로고 이미지*/
        width:80%;
        margin:30px 10% 40px;
        border:1px solid #eee;
        padding:35px 3%;
    }
    .ci_txt{
        color:#333;
        font-weight:400;
        text-align:justify;
    }
    /*2) 형태규정*/
    
    .basic_logo_size>img, .basic_logo_size_2>img{ /*로고형태규정 이미지*/
        width:80%;
        margin:30px 10% 0;
    }
    .basic_logo_size_2>img{margin:20px 10% 40px;}

    .ci_txt_box{padding:0 2%;}
    .ci_txt_box>li{margin:5px 0;}
    .ci_txt_tt{
        font-size:1.1rem;
        font-weight:500;
    }
    .ci_txt_box>li>span{
        display:inline-block;
        color:#333;
        font-weight:400;
        margin:5px 0 20px;
        text-align:justify;
        margin-left:20px;
    }
    /*다운로드 버튼*/
    .gic_logo_download_btn{margin-top:30px;}
    .gic_logo_download_btn a{
        display:block;
        background:#fff;
        border:1px solid #666;
        font-weight:500;
        color:#555;
        font-size:1rem;
        height:44px;
        line-height:42px;
        width:300px;
        text-align:center;
        margin:20px auto 0px;
        transition:all 0.2s; /*마우스 오버시 효과 YR*/
    }
    .gic_logo_download_btn a:hover{
        background:#eee;
        border:1px solid #eee;
    }
    .gic_logo_download_btn .material-icons{
        vertical-align:middle;
        font-size:1.2em;
        color:#8f84c9;
    }
    /*3) 색상규정*/
    .basic_logo_color{margin:30px 0 0;display:flex;padding:0 5%;}
    .basic_logo_color li{
        width:45%;
        margin-right:10%;
        height:260px;
    }
    .basic_logo_color li:last-child{margin-right:0%;}
    
    .basic_logo_color .color_box{width:100%;height:80px;}
    .red_color{background:#a1301d;} /*GPC Red*/
    .pp_color{background:#7171ae;} /*GPC Purple*/
    .basic_logo_color li>p{
        margin:30px 0% 10px;
        font-size:1.2rem;
        color:#333;
        font-weight:500;
    }
    .basic_logo_color .color01>p{color:#c7270c;padding-bottom:10px;border-bottom:2px solid #c7270c;} /*GPC Red*/
    .basic_logo_color .color02>p{color:#7474ca;padding-bottom:10px;border-bottom:2px solid #7474ca;} /*GPC Purple*/
    
    .basic_logo_color li>span{
        display:block;
        margin:0 2%;
        font-size:1rem;
        color:#666;
        line-height:1.8rem;
        font-weight:300;
    }
    .basic_logo_color li .color_tt{
        display:inline-block;
        font-weight:400;
        width:70px;
    }
    
    /*주의사항 */
    .vision_type1 {
        width:100%; 
        margin:0 auto; 
    }
    .mark_info{
        padding:35px 3% 10px;
        border:1px solid #e8e8e8;
        line-height:1.8em;
    }
    .mark_info_txt{
        margin:0 2%;
        font-weight:400;
    }
    .mark_info_content{margin:20px 20px;}
    .mark_info_content>p{padding:3px 0;font-size:0.98rem;}

/*회사안내- 로고 페이지 종료*/
    
    
    
/* -----------------------------------------------------반응형 시작 -210803 yr*/    
    
    /* 놋북,태블릿 사이즈, 최대 1280px 화소까지 적용 */
    @media (max-width:1280px) {
        .container_title{width:100%;}
    }

    
    /* 최대 1024px 화소까지 적용 */
    @media (max-width:1024px) {
        /*-----1024px에서 텍스트 크기 변경되는 class -----*/
         .top_tt{
            padding:40px 0 40px;
            font-size:1.85rem;
        }
        .content_title{
            font-size:1.6rem;
        }
        .basic_logo_color li>p {
            font-size: 1.1rem;
        }
        /*-----1024px에서 텍스트 크기 변경되는 class -----*/
        
        /*1) CI*/
        .ci_box1, .ci_box2, .ci_box3{
            width:100%;
            margin:40px 0 60px;
            padding:20px 0%;
        }
        .ci_tt{ /*문단 제목*/
            width:60%;
        }
        /*3) 색상규정*/
        .basic_logo_color{margin:30px 0;display:flex;padding:0 0%;}
        .basic_logo_color li{
            width:48%;
            margin-right:4%;
            height:260px;
        }
        .basic_logo_color li:last-child{margin-right:0%;}
        
        .mark_info_content{margin:20px 0px;}
    }
    

    /*  최대 768px 화소까지 적용 */
    @media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
        .container_title{display:none !important;} /*탭메뉴와 중복되어서 안보이게함*/
        .basic_logo>img{ /*로고 이미지*/
            width:80%;
            margin:20px 10% 40px;
            border:1px solid #eee;
            padding:35px 3%;
        }
        .basic_logo_size>img, .basic_logo_size_2>img{ /*로고형태규정 이미지*/
            width:80%;
            margin:20px 10% 0;
        }
        .ci_txt_box{margin-top:40px;}
        .basic_logo_color{margin:20px 0;display:flex;padding:0 0%;}
    }


    /* 모바일(가장 작은 사이즈: SAMSUNG GALAXY S6) 가로 버전 사이즈, 최소 360px ~ 최대 640px(가로로 볼때) 화소까지 적용 */    
    @media all and (max-device-width : 640px) { 
        .content_wrap{
            overflow:hidden;
        }
        .top_tt{
            padding:20px 0 40px;
        }
        .ci_tt{width:100%;}
        .basic_logo>img{ /*로고 이미지*/
            width:100%;
            margin:0px 0% 15px;
            border:none;
            padding:35px 3%;
        }
        .ci_txt{ margin-bottom:0px;}
        .basic_logo_size>img, .basic_logo_size_2>img{ /*로고형태규정 이미지*/
            width:100%;
            margin:20px 0% 0;
        }
        .ci_txt_box>li>span{ /*형태규정 텍스트*/
            display:inline-block;
            color:#333;
            font-weight:400;
            margin:5px 0 20px;
            text-align:justify;
            margin-left:0px;
        }
         /*다운로드 버튼*/
        .gic_logo_download_btn{margin-top:40px;}
        .gic_logo_download_btn a{width:70%;margin:20px auto 0px;}
        .gic_logo_download_btn .hide{display:none;}
        
        /*3) 색상규정*/
        .basic_logo_color{margin:20px 0 0;display:block;padding:0 0%;}
         .basic_logo_color li{
            width:100%;
            height:auto;
            padding-bottom:12px;
        }
        .basic_logo_color li>span{color:#444;}
        .basic_logo_color .color01{margin-bottom:40px;border-bottom:1px solid #c7270c;}
        .basic_logo_color .color02{border-bottom:1px solid #7474ca;}
        
         .basic_logo_color .color01>p{border-bottom:1px solid #c7270c;} /*GPC Red*/
         .basic_logo_color .color02>p{border-bottom:1px solid #7474ca;} /*GPC Purple*/
        
        .basic_logo_color .color_box{width:100%;height:120px;} /*컬러박스*/
        
        .basic_logo_color li>p{
            margin:15px 0% 10px;
        }
    }


    /* 모바일(가장 큰 사이즈: iPhone 6/7/8 Plus) 세로 버전 사이즈, 최소 360px ~ 최대 414px 화소까지 적용 */
    @media all and (min-width:360px) and (max-device-width : 414px) { 
        /*----- 360px ~ 414px에서 텍스트 크기 변경되는 class -----*/
        .content_wrap{
            font-size:0.95rem;
        }
        .top_tt{
            font-size:1.35rem;
            padding:0px 0 40px;
            line-height:2.2rem;
        }
        .content_title{
            margin-bottom:20px;
            font-size:1.4rem;
        }
        .ci_tt{font-size:1.1rem;}
        
         /*1) CI*/
        .ci_box1, .ci_box2, .ci_box3{
            width:100%;
            margin:20px 0 30px; 
            border:0;
            padding:20px 0%;
        }
        .ci_txt_tt{
            font-size:1rem;
        }
        .basic_logo_color li>p{
           padding: 0 3%;
            font-size:1.1rem;
        }
        .basic_logo_color li>span{
             padding: 0 2.5%;
             font-size:0.95rem;
        }
        .basic_logo_color .color_box{width:100%;height:110px;} /*컬러박스*/
        .vision_type1{margin-top:50px;}
        .mark_info_content>p{padding:3px 0;font-size:0.95rem;}
    }  
/*---------------------------------------------------------------반응형 끝*/


</style>

<div class="content_wrap">
	<section class="ci_mark_content animatedParent">
        <div class="top_tt animated fadeInUpShort">GPC CI 소개</div>
        <h2 class="content_title animated fadeInUpShort">GPC 로고</h2>
        
        <!-------------- ci_box1 --------------->
        <div class="ci_box1 animated fadeInUpShort">
            <h2 class="ci_tt">Corporate Identity(CI)</h2> <!--문단 타이틀 -->
            <span class="ci_tt_underline"></span>
            
            <div class="basic_logo">
               <img src="./images/GPC_ci.png" alt="(주)지아이씨인증원 로고"> <!--로고 이미지 -->
            </div>
            <div class="ci_txt">
              워드마크의 디자인은 정직함과 명료함을 강조하고 있습니다. 기본 조형인 선과 선 사이에 G자와 P자, C자를 질서 있게 위치하는 부문을 통해 내부와 외부를 소통하게 함으로써 세계와 호흡하고 인류사회에 이바지하려는 의지를 담았습니다. <br>영문 로고 디자인은 기술주의와 인문주의를 통합한 고객지향 의지, 글로벌 기업의 이미지를 현대적인 감각으로 표현한 것입니다.
            </div>
        </div>

        <!-------------- ci_box2 --------------->
        <div class="ci_box2 clear animated fadeInUpShort">
            
            <h2 class="ci_tt">형태규정</h2> <!--문단 타이틀 -->
            <span class="ci_tt_underline"></span>
            
            <div class="basic_logo_size">
               <img src="./images/GPC_ci_design.png" alt="(주)지피씨인증원 로고 형태규정"> <!--basic logo image -->
            </div>
            <div class="basic_logo_size_2">
               <img src="./images/GPC_ci_size.png" alt="(주)지피씨인증원 로고 형태규정"> <!--grid logo image -->
            </div>
            
            <ul class="ci_txt_box">
               <li>
                    <p class="ci_txt_tt">1) 시그니처</p>
                   <span>
                    시그니처는 GPC 인증원의 아이덴티티 형성을 위해 기본적인 심볼과 로고타입의 일정한 규칙에 의해 조합한 것으로, 재생시 변형을 막기 위하여 원고를 정비례로 확대 · 축소하여 사용해야 합니다.
                   </span>
               </li>
               <li>
                    <p class="ci_txt_tt">2) 최소공간규정</p>
                   <span>
                    Clear Space는 로고가 다른 요소로부터 침범 받지 않도록 최소한의 공간을 확보해 주는 규정입니다.
                    각종 매체에 로고를 적용할 때 최소 공간을 유지하며, 다른 요소나 복잡한 패턴에 의해 침범 받는 경우가 없도록 주의해야 합니다.
                   </span>
                <li>   
                    <p class="ci_txt_tt">3) 사용금지규정</p>
                    <span>
                    GPC 인증원의 로고는 인증마크가 아니며, 고객에 의해 사용될 수 없습니다. 또한 시각적 일관성 유지를 위해 절대 임의로 변경해서는 안되며, 반드시 규정된 형태와 색상을 사용해야 합니다.
                    </span>
                </li>
                <li>
                    <!--지피씨 로고 다운로드 버튼-->
                    <div class="gic_logo_download_btn">
                        <a class="btn" href="/data/file/gpclogo/GPC_Logo.zip" download> <span class="material-icons">file_download</span> GPC 로고 <span class="hide">AI(일러스트)</span> 다운로드</a>
                    </div>
                </li>
            </ul>
        </div>
        
        <!-------------- ci_box3 --------------->
        <div class="ci_box3 animated fadeInUpShort"> 	
            <h2 class="ci_tt">색상 규정</h2> <!--문단 타이틀 -->
            <span class="ci_tt_underline"></span>
            
            <ul class="basic_logo_color clear">
                <li class="color01">
                    <div class="red_color color_box"></div>
                    <p>GPC Red</p>
                    <span><span class="color_tt">Pantone</span> 484c</span>
                    <span><span class="color_tt">CMYK</span> 0 / 95 / 100 /29 </span>
                    <span><span class="color_tt">RGB</span> 161 / 48 / 29 </span>
                </li>
                <li class="color02">
                    <div class="pp_color color_box"></div>
                    <p>GPC Purple</p>
                    <span><span class="color_tt">Pantone</span> 2725c</span>
                    <span><span class="color_tt">CMYK</span> 70 / 70 / 0 / 0 </span>
                    <span><span class="color_tt">RGB</span> 113 / 113 / 174 </span>
                </li>
            </ul>
        </div>
	</section>	

    <!--------------품질인증 마크--------------->
	<section class="vision_type1 animatedParent">
        <h2 class="content_title animated fadeInUpShort">주의사항</h2>
        <div class="mark_info animated fadeInUpShort">
           <div  class="mark_info_txt">
               GPC를 통해서 인증 받은 고객은 하기 규율에 따라 인증마크와 인정마크를 올바르게 사용해야 하며, 인증서, 로고 및 마크의 사용 시 인증 제도의 관련 규정을 준수해야 합니다.
                <div class="mark_info_content"> 
                   <p>1) 인증서가 유효한 상태에서만 인증마크와 인정마크를 사용할 수 있습니다.</p>
                   <p>2) 부여된 인증범위 내에서만 인증마크와 인정마크를 사용할 수 있습니다.</p>
                   <p>3) GPC인증원이 인증 받지 아니한 개인을 마치 인증한 것처럼 보이는 느낌을 주는 방식으로 표기되는 인증마크와 인정마크의 사용은 절대 불가합니다.</p>
                   <p>4) GPC가 제공하는 방식 외에 인증마크와 인정마크는 사용할 수 없습니다.</p>
                   <p>5) 오해의 소지가 있는 방식으로는 인증서, 로고 및 마크를 사용하지 않습니다.</p>
                   <p>6) 인증이 정지되거나 취소될 경우에는 인증을 언급하는 표식이 있는 광고는 일체 할 수 없습니다.</p>
                   <p>7) 인증조건이 축소될 경우에는 모든 광고를 수정해야 합니다.</p>
                   <p>8) GPC 인증원의 명예를 손상시킬 수 있는 방식으로 인증을 사용하지 않으며, 인증원이 오해의 소지가 있거나 허가하지 않았다고 간주할 수 있는 인증과 관련된 진술을 하지 않습니다.</p>
                   <p>9) 인증의 정지 또는 취소 시, 인증기관 또는 인증에 대한 언급을 포함하는 인증과 관련된 모든 권리의 이용을 중단하고, 인증기관이 발급한 모든 인증서를 반납해야 합니다.</p>
                   <p>10) 인증마크와 인정마크는 항상 같이 표식이 되어야 합니다.</p>
                </div>
           </div>
        </div>  
        
        
    </section>
</div> <!--------------------------// class="content_wrap" //------------------------------->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>