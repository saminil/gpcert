<?php
	include_once('./_common.php');
$g5['title'] = '이의제기';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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

    
/*회사안내- 이의제기 페이지 시작-YR 210728*/
    .clear{ /*float 문제 해결*/
        content="";
        display:block;
        clear:both;
    }
    .content_wrap{
        overflow:hidden;
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
        font-weight:600;
        padding:50px 0;
        line-height:3.4rem;
    }
    
    
    /*이의제기 컨텐츠*/
    .appeal_box{margin:0 0 100px;}
    .complaint_box{margin-bottom:100px;}
    .appeal_complaint_box{margin-bottom:50px;}
    .content_title{
        font-size: 1.8rem;
        font-weight: 500;
        color: #333;
        margin-bottom: 40px;
    }
    .content_title:before{ /*제목 위 border*/
        content: "";
        display:block;
        width:35px;
        height:3px;
        background:#5d94c3;
        margin-bottom:13px;
    }
    .mid_content01, .mid_content02, .mid_content03{
        font-size:1rem;
        color:#333;
        font-weight:400;
        line-height:1.8rem;
        text-align:justify;
        letter-spacing:-0.02em;
    }
    /*이메일 주소*/
    .content_txt>p{margin-top:10px;vertical-align:middle;}
    .content_txt .material-icons{
        vertical-align:middle;
        font-size:1.2rem;
        margin-bottom:2px;
        color:#2e516f;
    }
     /*이의제기 목록 ul*/
    .content_txt ul.appeal_info2 li:first-child{margin:0 0% 15px 0%;}
    .content_txt ul.appeal_info2 li:not(:first-child){height:30px;color:#2e516f;font-weight:400;margin:0 3%;}
    
    
    
    /*이의 및 불만 제기 방법*/
    .box_content_txt_list{margin:10px 3% 15px;color:#2e516f;}
    .mid_content03 ul.appeal_info{
        display:block;
        width:100%;
        height:auto;
        background:#f9f9f9;
        border-radius: 5px;
        padding:22px 20px;
        text-align: justify;
        margin-top:15px;
    }
    .mid_content03 ul.appeal_info li{
        height:38px;
        vertical-align: middle;
        text-indent:10px;
        line-height:38px;
    }
    .mid_content03 ul.appeal_info li>.appeal_info_tt{ /*불만 및 이의제기 제출 정보 타이틀*/
        display:inline-block;
        width:200px;
        font-weight:500;
    }
    .mid_content03 .material-icons{ /*아이콘*/
        font-size:1.2em;
        vertical-align: middle;
        color:#5d94c3;
        padding-right:2px;
        margin-bottom:4px;
    }
      
     
    /*고객게시판 글쓰기 버튼*/
    .write_qna_btn a{
        display:block;
        background:#fff;
        border:1px solid #666;
        font-weight:500;
        color:#444;
        font-size:1rem;
        padding:15px 10px 13px;
        width:220px;
        text-align:center;
        vertical-align:middle;
        margin:30px auto 0px;
        transition:all 0.2s; /*마우스 오버시 효과 YR*/
    }
    .write_qna_btn a:hover{
        background:#eee;
        border:1px solid transparent;
    }
    
    .write_qna_btn a .material-icons{
        vertical-align:middle;
        font-size:1.3rem;
        color:#333;
        margin-bottom:3px;
        transition:all 0.2s; /*마우스 오버시 효과 YR*/
    }
    .write_qna_btn a:hover .material-icons{
        color:#999;
    }
     /*게시판 영역 CSS 해당 페이지에서만 변경 210802 전산팀 yr*/
    .lat .lat_title {
        font-size: 1.7rem;
    }
    .lat .lat_title:before {
        content: "";
        display: block;
        width: 35px;
        height: 3px;
        background: #5d94c3;
        margin-bottom: 13px;
    }
    .lat li:first-child {
        margin-top: 20px;
        border-top: 2px solid #ddd;
    }
    .lat .lt_more {
        display: none;
    }

/*회사안내- 이의제기 페이지 종료*/
    
    
    .claim_opinion{display:block;width:80%;margin-top:20px;font-size:1rem;}
    

    
    /* -----------------------------------------------------반응형 시작 -210803 yr*/    
    
    /* 놋북,태블릿 사이즈, 최대 1280px 화소까지 적용 */
    @media (max-width:1280px) {
        .container_title{width:100%;}
        .mid_content03 ul.appeal_info li>.appeal_info_tt{ /*불만 및 이의제기 제출 정보 타이틀*/
            display:inline-block;
            width:135px;
            font-weight:500;
        }
        .mid_content03 ul.appeal_info li{
            height:38px;
            vertical-align: middle;
            text-indent:5px;
            line-height:38px;
        }
        .mid_content03 .material-icons{ /*아이콘*/
            font-size:1.2em;
            vertical-align: middle;
            color:#5d94c3;
            padding-right:8px;
        }
        
        /*게시판 영역 CSS 해당 페이지에서만 변경 210802 전산팀 yr*/
        .main_bbs .wrap{padding:0px;}
        .claim_opinion{display:block;width:100%;margin-top:20px;font-size:1rem;}
    }

    
    /* 최대 1024px 화소까지 적용 */
    @media (max-width:1024px) {
         /*-----1024px에서 텍스트 크기 변경되는 class -----*/
        .container_title{width:100%; font-size: 1.2rem;}
        .top_tt{
            padding:40px 0 40px;
            font-size:1.85rem;
        }
        .content_title{
            font-size:1.6rem;
        }
        .lat .lat_title {
            font-size: 1.6rem;
        }
        /*-----1024px에서 텍스트 크기 변경되는 class -----*/
        
        /*대표전화/팩스 등 불만 및 이의제기 제출 주소*/
        
        .mid_content03 ul.appeal_info{
            display:block;
            width:100%;
            height:auto;
            background:#f9f9f9;
            border-radius: 5px;
            padding:22px 5%;
            text-align: justify;
            margin:15px 0% 0px;
        }
        .mid_content03 ul.appeal_info li{
            height:auto;
            vertical-align: middle;
            text-indent:0px;
            margin:10px 0;
            line-height:1.8rem;
        }
        .mid_content03 ul.appeal_info .info_detail{
            display:block;
            margin-left:30px;
        }
    }
    

    /*  최대 768px 화소까지 적용 */
    @media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
        .container_title{display:none !important;} /*탭메뉴와 중복되어서 안보이게함*/ 
        .appeal_complaint_box{margin-bottom:100px;}
    }


    /* 모바일(가장 작은 사이즈: SAMSUNG GALAXY S6) 가로 버전 사이즈, 최소 360px ~ 최대 640px(가로로 볼때) 화소까지 적용 */    
    @media all and (max-device-width : 640px) { 
        .content_wrap{
            overflow:hidden;
        }
        .top_tt{
            padding:20px 0 40px;
        }
         /*이의제기 컨텐츠*/
        .appeal_box{margin:0 0 60px;}
        .complaint_box{margin-bottom:60px;}
        .appeal_complaint_box{margin-bottom:60px;}
        
        /*대표전화/팩스 등 불만 및 이의제기 제출 주소*/
        .mid_content03 ul.appeal_info{
            padding:14px 5%;
            text-align: justify;
            margin:15px 0% 0px;
        }
        
        
        /*고객게시판 글쓰기 버튼*/
        .write_qna_btn a{
            padding:16px 10px 12px;
            width:200px;
            text-align:center;
            vertical-align:middle;
            margin:30px auto 0px;
            transition:all 0.2s; /*마우스 오버시 효과 YR*/
        }
         .write_qna_btn a .material-icons{
            vertical-align:middle;
            font-size:1.2rem;
            color:#333;
            margin-bottom:3px;
        }
    }


    /* 모바일(가장 큰 사이즈: iPhone 6/7/8 Plus) 세로 버전 사이즈, 최소 360px ~ 최대 414px 화소까지 적용 */
    @media all and (min-width:360px) and (max-device-width : 414px) {  
        /*----- 360px ~ 414px에서 텍스트 크기 변경되는 class -----*/
        .content_wrap{
            font-size:0.85rem;
            line-height:1.4rem;
        }
        .top_tt{
            font-size:1.35rem;
            padding:0px 0 30px;
        }
        .content_title{
            margin-bottom:30px;
            font-size:1.4rem;
        }
        .lat .lat_title {
            font-size: 1.4rem;
        }
        .write_qna_btn a{
            padding:12px 10px 10px;
            width:180px;
            font-size:1rem;
        }
        /*----- 360px ~ 414px에서 텍스트 크기 변경되는 class -----*/
        
       /*이의제기 목록 ul*/
        .content_txt ul.appeal_info2 li:not(:first-child){margin:0 0%;}
        
        
        /*대표전화/팩스 등 불만 및 이의제기 제출 주소*/
        .mid_content03 ul.appeal_info{
            padding:14px 6%;
        }
        .mid_content03 .material-icons{ /*아이콘*/
            padding-right:6px;
        }
        .mid_content03 ul.appeal_info .info_detail{
            display:block;
            margin-left:0px;
        }
        
       /*이의 및 불만 제기 방법*/
        .box_content_txt_list{margin:10px 0% 15px;}    
    }  
/*---------------------------------------------------------------반응형 끝*/
    
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>

<!-- /* 내용관리등 에디터로 입력할 경우 여기서부터 */ -->


<body> 
    
<div class="content_wrap">
       
    <!--------------이의제기--------------->
    
    <div class="appeal_box animatedParent">
        <div class="top_tt animated fadeInUpShort">이의 및 불만제기</div>
        <h2 class="content_title animated fadeInUpShort">이의제기</h2>
        <ul class="mid_content01 animated fadeInUpShort">
            <li>
                <div class="content_txt">
                    GPC의 인증 결정에 대해 어떤 고객이라도 이의 제기를 할 수 있습니다.<br>
                    GPC의 결정에 대한 이의 제기는 결정이 통지된 지 30일 이내에 이루어져야 합니다.<br><br>

                    이의 제기는 GPC 행정부에 증빙자료와 함께 하기 이메일 주소로 제출되어야 합니다.<br>
                    <p><span class="material-icons">mail_outline</span> E-Mail : info@gpcert.org</p><br>

                    행정부는 문서의 완전성을 확인해야 하며 필요한 경우 추가 문서를 요청할 수 있습니다. 이의 제기 내용을 확인한 후 행정부장에게 전달됩니다. 행정부장은 이의 제기를 인정하지 않거나, 이의 제기 내용에 기반하여 어필패널을 구성할 권리가 있습니다. <br><br>

                    Adverse certification 또는 재인증에 대한 결정 또는 인증 취소에 대한 이의 제기는 서면으로 처리되어야 합니다. 서면으로 작성된 이의 제기는 공식적으로 문서화된 절차를 통해 빠른 시일 내로 검토 및 해결되어야 합니다. <br><br>

                    <ul class="appeal_info2">
                        <li class="first_line">이의제기는 다음과 같은 결정으로 진행 될 수 있습니다.</li>
                        <li>a. 최초 인증에 대한 승인 거절</li>
                        <li>b. 인증 유지에 대한 승인 거절</li>
                        <li>c. 인증 등급 상향 승인에 대한 거절</li>
                        <li>d. 인증 등급 하락</li>
                    </ul><br>
                    
                    이의 제기가 인정되는 경우, 행정부장은 어필패널은 구성합니다. 필요한 경우, 어필패널의 장은 이의 제기 신청자에게 참석을 요청할 수 있습니다.<br><br>

                    어필패널은 신청인의 만족을 위하여 행정부장에게 필요한 조치를 하도록 권고사항을 제공합니다. 또한 어필패널은 이러한 상황의 재발을 막기 위해 예방 조치를 권고합니다.<br>
                    행정부장은 이러한 어필패널의 권고사항을 기반으로 이의 제기에 대한 결정을 할 것이며, 행정부장의 결정은 최종결정이 될 것입니다.<br><br>

                    위의 절차는 이의제기가 접수된 후로부터 45일 안에 완료되어야 합니다.<br><br>

                    행정부장의 결정에 만족하기 어렵다면, 신청인은 GPC 인증원장에게 다시 이의를 제기할 수 있습니다. 인증원장은 3명으로 구성된 어필패널을 설립하고, 어필패널은 해당 상황을 조사하고 처리하기 위해 관련절차를 따릅니다.<br><br>

                    어필패널은 인증원장에게 권고할 수 있으며, 인증원장은 권고 사항을 기반으로 결정을 내립니다. 위의 절차는 인증원장에게 이의 제기가 보고된 후 45일 안에 완료됩니다. 인증원장은 필요한 경우, 전문가에게 조언을 구할 수 있습니다.<br><br>

                    어필패널을 구성하기 전에 개인 출석과 관련된 모든 비용은 이의신청인이 부담합니다. 또한 이의가 종료되거나 또는 이의 결정의 결과로 재평가 또는 검증이 요구되는 경우 발생하는 비용도 이의신청인이 부담합니다.<br><br>

                    만약 이의신청인이 GPC 인증원장의 결정에 만족하기 어렵다면, 인정기관에 이의를 제기할 수 있습니다. 그러나 이것은 GPC에 이의를 제기하여 문제를 해결할 수 있는 모든 절차가 진행된 후에만 가능합니다. 또한 이러한 경우, 인정기관의 이의 신청 절차를 따라야 하며, 이의 제기가 받아들여지지 않은 경우에는 이의 신청인이 비용을 부담합니다.<br><br>

                    관련 인정기관의 결정은 최종적인 것으로, 이의 신청인과 GPC, 양 당사자 모두에게 구속력을 가집니다. 행정부는 이를 해결하기 위해 취해진 조치를 포함하여 모든 기록을 보유 및 유지해야 합니다.<br><br>
                    분쟁이 발생한 경우, GPC인증원이 위치한 서울 법원이 관할이 됩니다.<br>
                </div>
            </li>
        </ul>
    </div>
    
    <!--------------불만제기--------------->
    
    <div class="complaint_box animatedParent">
        <h2 class="content_title animated fadeInUpShort">불만 제기</h2>
        <ul class="mid_content02 animated fadeInUpShort">
            <li>
                <div class="content_txt">
                    불만의 경우, 행정부가 처리합니다. 행정부는 불만을 접수하고, 검증하고, 조사할 수 있는 모든 권한과 시정조치에 대한 결정권을 가집니다.<br>
                    행정부장은 불만사항을 해결하기 위하여 필요한 시정 및 예방조치 등 GPC의 공식적인 처분을 지체없이 신청인에게 전달합니다.<br><br>

                    불만은 GPC의 모든 직원에게 서면 또는 구두로 접수할 수 있습니다.<br>
                    접수된 불만사항은 행정부장에게 전달되어 GPC의 고객불만 등록 리스트에 즉시 입력되며, 필요한 경우 불만 제기자에게 추가 정보를 요청할 수 있습니다.<br>
                    불만사항이 전화 또는 메일을 통하여 접수된 후 24시간 이내에 확인되어야 하며, 전화, 메일, interim reply를 통해 답변을 보내야 합니다. 가능하면 불만 처리 절차의 종료에 대하여 불만 제기자에게 공식적으로 통지해야 합니다.<br><br>

                    불만사항의 처리결과는 불만 제기자에게 전달되어야 합니다. 불만 제기자 및 불만사항의 내용은 GPC 불만 처리 절차에 따라 기밀 유지되어야 합니다.
                    
                </div>
            </li>
        </ul>
    </div>
    
     <!--------------이의 및 불만 제기 방법--------------->
    
    <div class="appeal_complaint_box animatedParent">
        <h2 class="content_title animated fadeInUpShort">이의 및 불만 제기 방법</h2>
        <div class="mid_content03 animated fadeInUpShort">
            <div class="content_txt">
                불만 및 이의를 제기할 경우, 다음 사항을 포함해야 합니다.
                <ul class="box_content_txt_list">
                    <li>- 이름, 연락처, 이메일 주소</li>
                    <li>- 이의를 제기하는 날짜, 자세한 설명</li>
                    <li>- 관련 증거 자료</li>
                    <li>- 서명</li>
                </ul>
                GPC는 불만 및 이의 제기에 대한 검증을 위해 추가 자료를 요청할 수 있습니다.<br><br>
                불만 및 이의 제기는 아래의 주소로 제출할 수 있습니다.<br>

            </div>
            <ul class="appeal_info animated fadeInUpShort">
                <li><span class="material-icons">inbox</span><span class="appeal_info_tt">대표전화 / 팩스</span><span class="info_detail">+82 2 6749 0710 / +82 2 6749 0711</span></li>
                <li><span class="material-icons">inbox</span><span class="appeal_info_tt">이메일</span><span class="info_detail">info@gpcert.org</span></li>
                <li><span class="material-icons">inbox</span><span class="appeal_info_tt">주소</span><span class="info_detail">(08504)서울특별시 금천구 서부샛길 638, 대륭테크노타운 7차 501-1호</span></li>
            </ul>
        </div>
    </div>
    
    <!-- Appeal & Complaint 게시판 영역 -->
    
    <section class="main_sec main_bbs animatedParent">
        <div class="wrap animated fadeInUpShort">
            <!-- 일반 최근글 /theme/구매테마/skin/latest/basic/latest.skin.php -->
            <div class="claim_opinion"><?php echo latest('theme/basic', 'claim', 5, 40); ?></div>
        </div>
             <!--고객게시판 글쓰기 버튼-->
        <div class="write_qna_btn animated fadeInUpShort"><a href="/bbs/write.php?bo_table=claim">고객게시판 글쓰기&nbsp;<span class="material-icons">edit</span></a></div>
    </section>
    
	
    <!-- Appeal & Complaint 게시판 영역  끝-->
    
   
    

<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

      
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

</body>
    
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>