<?php
include_once('./_common.php');
$g5['title'] = '공정성';
include_once(G5_THEME_PATH.'/head.php');
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
    /*회사안내- 공정성 페이지 시작-YR 210729*/
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
        line-height:3.4rem;
    }
    .top_tt:after { /*밑줄선*/
        content: "";
        clear: both;
        display: block;
        width: 40px;
        margin: 60px auto 0;
        border: 1px solid #999;
}
    .img_div img{/*이미지*/
        margin:20px 20%; 
        width:60%;
    }
    
    /*공정성 9가지*/
    .mid_content{width:100%;}
    .mid_content p{margin-bottom:8px;}
    .mid_content01{margin:60px 0 50px;}
    .mid_content01>h2, .mid_content02>h2{
        float:left;
        width:17%;
        margin-right:3%;
        color:#3a8de2;
        font-weight:600;
        border-top:2px solid #ccc;
        padding-top:20px;
        line-height:1.8em;
        margin-bottom:30px;
        font-size:1.3rem;
        text-align:justify;
    }
    .mid_content01_list, .mid_content02_list{
        float:left;
        width:80%;
        font-size:1rem;
        border-top:2px solid #ccc;
        padding-top:24px;
        text-align:justify;
    }
/*    .mid_content02>h2, .mid_content02_list{border-top:none;} 공정성 선언 보더 빼기*/
    .mid_content02_list>p:first-child{margin-bottom:20px;}
    .mid_content02_list span{color:#666;} /*첫째~일곱째*/
    

/*회사안내- 공정성 페이지 종료*/

  
    
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
        .top_tt:after { /*밑줄선*/
            margin: 40px auto 0;
        }
        /*-----1024px에서 텍스트 크기 변경되는 class -----*/
        
        .mid_content01>h2, .mid_content02>h2{
            float:static;
            width:100%;
            margin-right:0%;
            font-weight:600;
            border-top:none;
            border-bottom:2px solid #ccc;
            padding:0px 0px 10px;
            margin-bottom:25px;
            font-size:1.3rem;
        }
        .mid_content01_list, .mid_content02_list{
            float:static;
            width:100%;
            font-size:1rem;
            border-top:none;
            padding-top:0px;
            text-align:justify;
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
        .img_div img{/*이미지*/
            margin:20px 0% 0px; 
            width:100%;
        }
        .mid_content01>h2, .mid_content02>h2{
            float:static;
            width:100%;
            margin-right:0%;
            font-weight:600;
            border-top:none;
            border-bottom:2px solid #ccc;
            padding:0px 0px 10px;
            margin-bottom:25px;
            font-size:1.3rem;
        }
        .mid_content01_list, .mid_content02_list{
            float:static;
            width:100%;
            font-size:1rem;
            border-top:none;
            padding:25px 5%;
            text-align:justify;
            background:#f9f9f9;
        } 
    }


    /* 모바일(가장 큰 사이즈: iPhone 6/7/8 Plus) 세로 버전 사이즈, 최소 360px ~ 최대 414px 화소까지 적용 */
    @media all and (min-width:360px) and (max-device-width : 414px) { 
        /*----- 360px ~ 414px에서 텍스트 크기 변경되는 class -----*/
        .top_tt{
            font-size:1.35rem;
            padding:0px 0 30px;
            line-height:2.2rem;
        }
        .top_tt:after { /*밑줄선*/
            margin: 30px auto 0;
        }
         .mid_content01>h2, .mid_content02>h2{
            font-size:1.2rem;
        }
        .mid_content01_list, .mid_content02_list{
            font-size:0.95rem;
        } 
        /*----- 360px ~ 414px에서 텍스트 크기 변경되는 class -----*/
        
        .img_div img{/*이미지*/
            margin:20px 0%; 
            width:100%;
        }
        .mid_content01{margin:50px 0 50px;}

    }  
    
/*---------------------------------------------------------------반응형 끝*/
    
    
</style>

<div class="content_wrap">
    
    <!--------------------공정성 선언문-------------------->
	<section class="vision_type1 animatedParent">
        <div class="top_tt animated fadeInUpShort">공정성 선언문</div>
        
        <!--공정성 선언문 이미지-->
		<div class="img_div animated fadeInUpShort">
		   <img src="./images/impartiality_img.png" alt="공정성 이미지">
		</div>
        
        <!--공정성 선언문 컨텐츠 시작-->
        <div class="mid_content animated fadeInUpShort">
            <div class="mid_content01 clear"> <!--mid_content01-->
                <h2>공정의 약속</h2>
                 <div class="mid_content01_list">
                    <p>GPC의 최고 경영자는 GPC 인증 활동의 공정성에 대해 확약합니다.</p>
                    <p>GPC의 모든 구성원들은 모든 활동에 대하여 공정하고 이해 상충이 없도록 수행되도록 노력합니다.</p>
                    <p>GPC의 모든 구성원들은 이해의 상충이 발생할 수 있는 업무에 대해 GPC에게 통지할 의무를 가집니다. 인증 프로세스의 결과에 영향을 미칠 수 있는 상업적, 재정적 또는 기타 압력이 없어야 합니다.</p>
                    <p>GPC는 공정성을 보장하기 위해 주기적으로 운영 및 절차를 검토합니다.</p>
                    <p>GPC는 공정성에 위협받은 경우, 신속하게 조치합니다.</p>
                </div>

            </div>

            <div class="mid_content02 clear"> <!--mid_content02-->
                <h2>공정성 선언</h2>
                <div class="mid_content02_list">
                    <p>나는 GPC의 구성원으로서, 다음을 엄격히 준수할 것을 선언합니다.</p>

                    <p><span>첫째,</span> 나는 공정성 활동을 수행하는 동안 이해당사자로서 공정하게 행동할 것입니다.</p>
                    <p><span>둘째,</span> 나는 GPC의 절차 및 방침을 준수할 것입니다.</p>
                    <p><span>셋째,</span> 나는 신청자 및 평가 대상의 접근을 방해하기 위해 GPC의 절차를 남용하지 않을 것입니다.</p>
                    <p><span>넷째,</span> 나는 지속적인 공정성에 대한 위협을 발견하고 인식할 책임이 있으며, 이를 즉시 상급자 또는 공정성 위원회에 보고할 것입니다.</p>
                    <p><span>다섯째,</span> 나는 GPC운영에 대한 어떠한 정보도 내부 또는 외부 단체에 공개하지 않습니다.</p>
                    <p><span>여섯째,</span> 나는 GPC의 모든 방침과 공정성을 보호하기 위해 GPC의 규정 및 약속한 모든 서술들을 준수할 것을 선언합니다.</p>
                    <p><span>일곱째,</span> 나는 GPC의 방침과 규칙을 위반하는 경우, GPC에 의해 결정되는 처벌을 받아들이고 모든 결과에 책임을 지겠습니다.</p>
                </div>
            </div>
        </div>
        
         <!--공정성 선언문 컨텐츠 끝-->
	</section>
    
</div>  <!--------------------------// class="content_wrap" //------------------------------->
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>