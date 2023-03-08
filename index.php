<?php
include_once "layer.php";
?>
<main>
    <div class="containerWperc dFlex fDirectionColumn jcCenter" id="main_section">
        <div class="blur">
            <h1>I am <span>Varshil</span> Patel.</h1>
            <p class="taRight dFlex">PROGRAMMER</p>
            <a href="contact.php" class="aReset tUpr fw700 bcWhite  mt3 cBlack px4 py1 capsule">Contact</a>
        </div>
    </div>
    <!-- About Section -->
    <section class="containerWperc dFlexCenter fDirectionColumn py5 px10" id="about_section">
        <h1 class="tUpr head_title cWhite">About Me</h1>
        <div class="line mt2 capsule bcWhite"></div>
        <div class="dFlexCenter mt5" id="about_details">
            <img src="static/20230308_160149.png">
            <div class="about_para">
                <p class="fw400 containerWperc">Hey! there, My self Varshil Patel. I am pursuing BCA from Silver Oak University. I am so curious to learn new technologies and build something, which can fix problems With that motive, I am trying to shape my career in the IT industry.</p>
            </div>
        </div>
    </section>
    <section class="containerWperc dFlexCenter fDirectionColumn py5 px10" id="project_section">
        <h1 class="tUpr head_title">My Work</h1>
        <div class="line mt2 capsule bcBlack"></div>
        <div class="dFlexCenter mt5 project_details fWrap">
            <div class="first_project pRel">
                <div class="layer pAbs"></div>
                <p>A complete login system in PHP and MySQL</p>
                <a href="http://login-sys.epizy.com" target="_blank"><img src="static/remove_red_eye_white_24dp.svg" class="pAbs eye_btn"></a>
                <span class="pAbs tUpr">Show now</span>
            </div>
        </div>
    </section>
</main>
<?php
include_once "endLayer.php";
?>