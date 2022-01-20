<?php
include_once('./_common.php');
$g5['title'] = '행동강령';
include_once(G5_THEME_PATH.'/head.php');
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
    
/*회사안내- 행동강령 페이지 시작-YR 210729*/
    .content_wrap{
        font-size:1rem;
        font-weight:400;
        color:#333;
        line-height:1.8rem;
        text-align:justify;
    }
    .clear{ /*float 문제 해결*/
        content="";
        display:block;
        clear:both;
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
        font-weight:600;
        padding:50px 0;
        line-height: 3.4rem;
    }
    .top_tt:after { /*밑줄선*/
        content: "";
        clear: both;
        display: block;
        width: 40px;
        margin: 50px auto 0;
        border: 1px solid #999;
    }
    .top_txt{
        font-size:1rem;
        color:#333;
        font-weight:400;
        line-height:1.8em;
        text-align:justify;
    }
    .img_div img{/*이미지*/
        margin:60px 20% 30px; 
        width:60%;
    }
    /*행동강령 9가지*/
    
    .vision_type1 ul{
        margin-top:40px;
        display:flex;
        flex-wrap:wrap;
    }
    .vision_type1 ul li{
        flex:auto;
        flex-basis: 100%;
        height:auto;
        background:#f9f9f9;
        border:1px solid #f9f9f9;
        border-radius:5px;
        margin-bottom:12px;
        padding:20px 3%;
        text-align:justify;
        color:#333;
        font-weight:400;
        box-sizing: border-box;
        letter-spacing:-0.02em;
    }
    .act_tt span{ /*9가지 블럭 숫자*/
        display:inline-block;
        width:32px;
        height:32px;
        border-radius:50%;
        font-size:1.05rem;
        font-weight:400;
        background:#fff;
        color:#f34747;
        text-align:center;
        line-height:32px;
        margin-right:5px;
    }
    .act_tt{ /*9가지 블럭 숫자 영역*/
        float:left;
        width:5%;
    }
    .act_box>li>.act_txt{ /*9가지 행동강령 텍스트*/
        display:inline-block;
        width:95%;
        float:left;
    }
    
   

/*회사안내- 행동강령 페이지 종료*/
    
    
    
/* -----------------------------------------------------반응형 시작 -210803 yr*/   
    
    /* 놋북,태블릿 사이즈, 최대 1280px 화소까지 적용 */
    @media (max-width:1280px) {
        .container_title{width:100%;}
        
        .act_tt{ /*9가지 블럭 숫자 영역*/
            float:left;
            width:6%;
        }
        .act_box>li>.act_txt{ /*9가지 행동강령 텍스트*/
            display:inline-block;
            width:94%;
            float:left;
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
        /*-----1024px에서 텍스트 크기 변경되는 class -----*/
        
        .act_tt{ /*9가지 블럭 숫자 영역*/
            float:left;
            width:8%;
        }
        .act_box>li>.act_txt{ /*9가지 행동강령 텍스트*/
            display:inline-block;
            width:92%;
            float:left;
        }
        .img_div img{/*이미지*/
            margin:40px 20% 20px; 
            width:60%;
        }
    }
    

    /*  최대 768px 화소까지 적용 */
    @media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
        .container_title{display:none !important;} /*탭메뉴와 중복되어서 안보이게함*/
        
        .img_div img{/*이미지*/
            margin:40px 20% 10px; 
            width:60%;
        }
        
        .act_tt{ /*9가지 블럭 숫자 영역*/
            float:left;
            width:7%;
        }
        .act_box>li>.act_txt{ /*9가지 행동강령 텍스트*/
            display:inline-block;
            width:93%;
            float:left;
        }
    }


    /* 모바일(가장 작은 사이즈: SAMSUNG GALAXY S6) 가로 버전 사이즈, 최소 360px ~ 최대 640px(가로로 볼때) 화소까지 적용 */    
    @media all and (max-device-width : 640px) { 
        .top_tt{
            padding:20px 0 40px;
        }
        .img_div img{/*이미지*/
            margin:30px 0% 10px; 
            width:100%;
        }
        .vision_type1 ul li{
            padding:20px 6%;
            margin-bottom:15px;
            background:#eff3f7;
        }
        .act_tt{ /*9가지 블럭 숫자 영역*/
            float:static;
            width:10%;
        }
        .act_tt span{ /*9가지 블럭 숫자*/
            font-weight:500;
            color:#5e98d9;
        }
        .act_box>li>.act_txt{ /*9가지 행동강령 텍스트*/
            display:block;
            width:100%;
            float:static;
            margin-top:10px;
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
            padding:0px 0 30px;
            line-height:2.2rem;
        }
        .top_tt:after { /*밑줄선*/
            margin: 30px auto 0;
        }
        .top_txt{
            font-size:0.95rem;
        }
        .vision_type1 ul li{
            padding:20px 7%;
            margin-bottom:10px;
        }
        .act_tt span{ /*9가지 블럭 숫자*/
            display:inline-block;
            width:30px;
            height:30px;
            border-radius:50%;
            font-size:1rem;
            font-weight:400;
            background:#fff;
            text-align:center;
            line-height:30px;       
        }
        
    }  
/*---------------------------------------------------------------반응형 끝*/



</style>

<div class="content_wrap">
	<section class="vision_type1 animatedParent">
        <div class="top_tt animated fadeInUpShort">GPC 심사원 행동강령</div>
        <h2 class="animated fadeInUpShort top_txt">
            GPC 행동강령은 GPC가 인증한 심사원이 충족해야 하는 심사원의 행동 및 윤리적 요구사항에 대한 기준을 제시합니다. GPC 인증 심사원은 아래의 행동강령에 동의하여 GPC 인증 심사원으로서 요구되는 기준을 입증하게 됩니다.
        </h2>
        
        <!-------행동강령 이미지------->
		<div class="img_div animated fadeInUpShort"><img src="./images/code_of_conduct_img.jpg" alt="행동강령 이미지"></div>

        <!--------------------------행동강령 컨텐츠 ----------------------------->
        
		<ul class="clear act_box animated fadeInUpShort">
            <li>
                <span class="act_tt"><span>01</span></span>
                <span class="act_txt">GPC심사원은 객관적이고 전문적으로 업무를 행한다.</span>
            </li>
            <li class="second_box">
                <span class="act_tt"><span>02</span></span>
                <span class="act_txt">GPC심사원은 스스로 전문적인 능력을 개발하고 정확한 심사를 위해 최상의 상태를 유지한다.</span>
            </li>
            <li class="right_box">
                <span class="act_tt"><span>03</span></span>
                <span class="act_txt">GPC심사원은 이해의 충돌을 일으킬 수 있는 어떠한 것에도 관여하지 않는다.</span>
            </li >
            <li class="second_box">
                <span class="act_tt"><span>04</span></span>
                <span class="act_txt">GPC심사원은 인증기관의 명성, 이해관계, 신뢰성을 해치는 행위를 하지 않는다.</span>
            </li>
            <li>
                <span class="act_tt"><span>05</span></span>
                <span class="act_txt">GPC심사원은 심사를 받는 조직 및 인증기관이 서면으로 재가하지 않는 한, 심사 발견사항 및 심사 도중 알게 된 정보를 포함하여 어떠한 것도 외부에 누설하지 않는다.</span>
            </li>
            <li class="right_box second_box">
                <span class="act_tt"><span>06</span></span>
                <span class="act_txt">GPC심사원은 심사를 받는 조직 또는 이해관계자로부터 금품, 선물 등 기타 이득을 취하지 않는다.</span>
            </li>
            <li>
                <span class="act_tt"><span>07</span></span>
                <span class="act_txt">GPC심사원은 심사 또는 심사원 인증 절차의 온전성을 손상시킬 수 있는, 또는 오해의 소지가 있는 정보를 전달하지 않는다.</span>
            </li>
            <li class="second_box">
                <span class="act_tt"><span>08</span></span>
                <span class="act_txt">GPC심사원은 다른 심사원의 심사업무에 대해 정당하지 않고 불합리한 비판을 발표하거나 다른 방법으로 전달하지 않는다.</span>
            </li>
            <li class="right_box">
                <span class="act_tt"><span>09</span></span>
                <span class="act_txt">GPC심사원은 본 행동강령의 어떠한 부분도 위반하지 않으며 GPC의 행동강령을 지키기 위해 요청되는 모든 공식 조사에 전적으로 협조한다.</span>
            </li>
		</ul>
	</section>	

</div> <!--------------------------// class="content_wrap" //------------------------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>