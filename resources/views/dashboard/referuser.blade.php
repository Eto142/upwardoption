@include('dashboard.header')
<!-- content @s -->
                 <div class="container">
        <div class="row mt-30 mb-30">
          <div class="col-sm-12 col-md-3">
            <div class="share-boxes">
              <img src="https://i.ibb.co/PtYrLNy/img1.png" alt="img1" border="0">
              <p>Share with your friends</p>
            </div>
          </div>
          <div class="col"></div>
          <div class="col-sm-12 col-md-3">
            <div class="share-boxes">
              <img src="https://i.ibb.co/P5TdfkT/img2.png" alt="img2" border="0">
              <p>Give her to $5 Discount</p>
              <img src="https://i.ibb.co/Sr5F70S/dotted-arrow1.png" alt="dotted-arrow1" class="dotted-line">
              <img src="https://i.ibb.co/Fqs2KxB/dotted-arrow2.png" alt="dotted-arrow2" class="dotted-line2">
            </div>
          </div>
          <div class="col"></div>
          <div class="col-sm-12 col-md-3">
            <div class="share-boxes">
              <img src="https://i.ibb.co/StC3RWk/img3.png" alt="img3" border="0">
              <p>Get $1 for every $5</p>
            </div>
          </div>
        </div>
        <div class="row refer-form-sec">
          <div class="col">
            <div class="refer-image">
              <img src="https://i.ibb.co/72ngXX8/big-image.jpg" alt="big-image" border="0" />
            </div>
          </div>
          <div class="col">
            <div class="refer-form">
              
            </div>
           <!-- <div class="refer-form-content">
              <h2>Friends To Friends</h2>
              <p>Talking about friends sexually helps to normalize it. You can start <a href="#">NOW!</a></p> -->
              <!--<form action="" method="post">-->
                <!--<input type="text" name="Your Name" placeholder="Your Friend Name">-->
                <!--<input type="email" name="Your Email" placeholder="Your Friend Email">--><br>
                <input type="text" id="refer" value="https:// Upwardoptiontrades.net/src/auths/register.php?refer=94388539" disabled>
                <!--<input type="text" id="refer" value="https:// Upwardoptiontrade.com/src/auths/register.php?refer=94388539">-->
                <!--<p>-->
                <!--  <label class="container-checkbox">i have read and accept the T & C and privacy policy-->
                <!--    <input type="checkbox">-->
                <!--    <span class="checkmark"></span>-->
                <!--  </label>-->
                <!--</p>-->
                <div class="modal-footer bg-lighter" id="copy_text" style="display: none;">
                    <p>Referral link has been copied to your clipboard</p>
                    
                </div>
                  
                <button name="refer" onclick="copy()" class="btn btn-lg btn-primary btn-block">REFER & EARN</button>
              <!--</form>-->
            </div>
          </div>
        </div>
        <div class="row mt-30 mb-30">
          <div class="col">
            <div class="referal-progress">
              <h2>YOUR REFERAL PROGRESS</h2>
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <td>No. of referral</td>
                    <td><strong>0</strong></td>
                  </tr>
                  <tr>
                    <td>Referral Bonus</td>
                    <td><strong>0 USD</strong></td>
                  </tr>
                  <!--<tr>-->
                  <!--  <td>No. of friends who have purchased</td>-->
                  <!--  <td><strong>USD : 10.00</strong></td>-->
                  <!--</tr>-->
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <style>
        
        * {
    margin: 0px;
    padding: 0px;
    transition: all 0.5s ease 0s;
    -webkit-transition: all 0.5s ease 0s;
    -moz-transition: all 0.5s ease 0s;
    -ms-transition: all 0.5s ease 0s;
    -o-transition: all 0.5s ease 0s;
}
html, body, address, blockquote, div, dl, form, h1, h2, h3, h4, h5, h6, ol, p, pre, table, ul, dd, dt, li, tbody, td, tfoot, th, thead, tr, button, del, ins, map, object, a, abbr, acronym, b, bdo, big, br, cite, code, dfn, em, i, img, kbd, q, samp, small, span, strong, sub, sup, tt, var, legend, fieldset, p {
    margin: 0;
    padding: 0;
    border: none;
}
a, input, select, textarea {
    outline: none;
    margin: 0;
    padding: 0;
}
a:hover,focus{
    text-decoration:none;
    outline: none;
    border: none;
}
img, fieldset {
    border: 0;
}
a {
    outline: none;
    border: none;
}
img {
    max-width: 100%;
    height: auto;
    width: auto\9;
    vertical-align: middle;
    border: none;
    outline: none;
}
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
    display: block;
    margin: 0;
    padding: 0;
}
div, h1, h2, h3, h4, span, p, input, form, img, hr, img, a {
    margin: 0;
    padding: 0;
    border: none;
}
.mt-30, .mb-30{margin: 30px 0;}
.clear {
    clear: both;
}
.share-boxes p {margin: 15px 0 0; font-size: 15px; font-weight: bold;}
.share-boxes {background: #f9f9f9; text-align: center; border-radius: 10px;  box-shadow: 0 0 17px #ccc;
    padding: 20px 0;  position: relative;}
.share-boxes img.dotted-line {position: absolute; left: -167px; top: 5px; transform: rotate(-3deg);}
.share-boxes img.dotted-line2 {position: absolute; right: -173px; top: 5px; transform: rotate(-4deg);}
.refer-image img {width: 100%;}
.refer-form ul li {float: left; list-style: none; width: 33.333%; text-align: center;}
.refer-form ul li a {background: #9fb0f8; display: block; padding: 14px; color: #fff; text-transform: uppercase;
    font-weight: 600;}
.refer-form ul {margin: 0;}
.refer-form ul li.facebook-color a{background: #9fb0f8}
.refer-form ul li.youtube-color a{background: #eb8c8c}
.refer-form ul li.twitter-color a{background: #9cd0fc}
.refer-form ul li.facebook-color a:hover{background: #4667f7; text-decoration: none;}
.refer-form ul li.youtube-color a:hover{background: #dd2020; text-decoration: none;}
.refer-form ul li.twitter-color a:hover{background: #40a7ff; text-decoration: none;}
.refer-form-content {float: left; width: 100%; background: #f9f9f9; padding: 30px; }
.refer-form-content h2 {color: #3a8dfe; font-weight: bold; text-transform: uppercase; font-size: 25px; margin: 0 0 10px; }
.refer-form-content P a {color: #3a8dfe; font-weight: 500; }
.refer-form-content input{height: 50px; width: 100%; padding: 15px; border-radius: 1px; margin-bottom: 20px; box-shadow: 0 0 6px #ccc; }
.container-checkbox {display: block; position: relative; padding-left: 30px; margin-bottom: 12px; cursor: pointer; font-size: 16px; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; }
.container-checkbox input {position: absolute; opacity: 0; cursor: pointer; height: 0; width: 0; } 
.checkmark {position: absolute; top: 3px; left: 0; height: 20px; width: 20px; background-color: transparent; border: 2px solid #3a8dfe; }
.container-checkbox:hover input ~ .checkmark {background-color: #ccc; } 
.container-checkbox input:checked ~ .checkmark {background-color: #3a8dfe; } 
.checkmark:after {content: ""; position: absolute; display: none; } 
.container-checkbox input:checked ~ .checkmark:after {display: block; } 
.container-checkbox .checkmark:after {left: 5px; top: 0px; width: 7px; height: 12px; border: solid white; border-width: 0 3px 3px 0; -webkit-transform: rotate(45deg); -ms-transform: rotate(45deg); transform: rotate(45deg); } 
.refer-form-content form button {background: #3a8dfe; color: #fff; font-weight: 500; font-size: 18px; width: 100%; height: 50px; cursor: pointer; } 
.refer-form-content form button:hover{background: #000;}
.refer-form-content input::placeholder{color:#c5c5c5; font-size: 14px;}
.row.refer-form-sec {height: 450px; overflow: hidden; margin-top: 55px; }
.referal-progress table td:nth-child(2) {text-align: right; } 
.referal-progress table td {border: 1px solid #cccc; padding: 15px 20px; } 
.row.refer-form-sec .col:first-child {padding-right: 0; } 
.row.refer-form-sec .col:last-child {padding-left: 0; }
.referal-progress h2 {color: #3a8dfe; font-size: 22px; margin: 10px 0 15px; }
.share-boxes:after {content: ""; background: url("https://i.ibb.co/WHdS3G1/circle.png") no-repeat 0 0; position: absolute; left: 0; right: 0; bottom: -65px; margin: 0 auto; z-index: 99999; height: 60px; width: 20px; }
@media only screen and (max-width: 1100px){
.share-boxes img.dotted-line, .share-boxes img.dotted-line2 {
    display: none;
}

}
@media only screen and (max-width: 767px){
.share-boxes {
    margin: 0 0 52px;
}
.row.refer-form-sec {
    height: auto;
    overflow: hidden;
    margin-top: 55px;
    display: block;
}
.row.refer-form-sec .col:first-child {
    padding-right: 15px;
    margin: 0 0 30px;
}
.row.refer-form-sec .col:last-child {
    padding-left: 15px;
}
}
@media only screen and (max-width: 380px){
.refer-form ul li a {
    padding: 9px;
    font-size: 14px;
}
.refer-form-content h2 {
    font-size: 22px;
}
}
    </style>
                    </div>
                </div>
    @include('dashboard.footer')