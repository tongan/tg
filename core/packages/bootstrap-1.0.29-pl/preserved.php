<?php return array (
  '58aeed2b3f623e5815cc65fe7e829015' => 
  array (
    'criteria' => 
    array (
      'name' => 'Footer',
    ),
    'object' => 
    array (
      'id' => 3,
      'source' => 1,
      'property_preprocess' => 0,
      'name' => 'footer',
      'description' => '',
      'editor_type' => 0,
      'category' => 0,
      'cache_type' => 0,
      'snippet' => '<footer>
       <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="clearfix">
<img src="assets/img/comp/gastechno-logo.png" class="img-fluid float-left" alt="">
                  <div class="d-table">
                                         <!-- <a class="d-block" href="tel:></a> -->
                        <div class="d-block"> [[!siteStatistics? &mode=`site` &countby=``]]</div>
                    </div>
                </div>
                <p class="credentials">
                    © 2020 Gas Technologies LLC.<br>All rights reserved.
                </p>
                            </div>
                                                                    <div class="col-md-3"  style="margin-left: -100px; margin-right: 100px;">
                                             <p class="social-title">GasTechno in socials:</p>
                <div style="opacity:0.5;" <!-- class="d-flex justify-content-between social-network-links" -->
               <a href="https://www.linkedin.com/mwlite/in/walter-breidenstein-91a88160">
               <img src="assets/img/comp/icons/linkedin.svg" width="24px" alt="linkedin">
               </a>
            <a href="https://mobile.twitter.com/GasTechno">
            <img src="assets/img/comp/icons/twitter.svg" width="24px" alt="twitter">
            </a>
            <img style="visibility: hidden" src="assets/img/comp/icons/instagram.svg" width="24px" alt="instagram">
            </div>
            </div>
            <div class="col-md-3">
                <p class="contacts-title">
                    Contact sales:
                </p>
                <a class="font-weight-bold" href="mailto:info@gastechno.com">info@gastechno.com</a>
                <p style="margin-top: 5px" class="credentials">Gas Technologies LLC<br>PO Box 640<br>Walloon Lake, Michigan 49796-0640 USA
                </p>
                </div>
        </div>
    </div>
</footer>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-34703948-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(\'js\', new Date());

  gtag(\'config\', \'UA-34703948-3\');
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="assets/js/justified-columns.js"></script>
<script>
    $(document).ready(function () {
        $(\'#subscriptionInput\').focus(function(){
            $(this).data(\'placeholder\', $(this).attr(\'placeholder\'))
                .attr(\'placeholder\',\'\');
        }).blur(function(){
            $(this).attr(\'placeholder\',$(this).data(\'placeholder\'));
        });


        $(\'.grid\').masonry({
            itemSelector: \'.grid-item\',
            columnWidth: \'.grid-sizer\',
            percentPosition: true
        });

        $(\'a.scrollLink\').click(function (event) {
            // event.preventDefault();
            // 
            // var divId = $(this).attr(\'href\');
            // if (divId[0] === \'/\') {
            //     divId = divId.substr(1);
            // }
            // 
            // $(\'html, body\').animate({
            //    scrollTop: $(divId).offset().top
            //}, 500);
            if (location.pathname === \'/\') {
                event.preventDefault();
            
                var divId = $(this).attr(\'href\');
                if (divId[0] === \'/\') {
                    divId = divId.substr(1);
                }
                
                $(\'html, body\').animate({
                    scrollTop: $(divId).offset().top
                }, 500);
            }
        });
        
        $(document).on(\'af_complete\', function(event, response) {
            $(\'.ajax_form\').hide();
            $(\'.success-subscription\').css(\'display\', \'flex\');
        });
    });
</script>

<script type="text/javascript" src="/assets/components/ajaxform/js/default.js"></script>
<script type="text/javascript">AjaxForm.initialize({"assetsUrl":"\\/assets\\/components\\/ajaxform\\/","actionUrl":"\\/assets\\/components\\/ajaxform\\/action.php","closeMessage":"close all","formSelector":"form.ajax_form","pageId":1});</script>
</body>
</html>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<footer>
       <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="clearfix">
<img src="assets/img/comp/gastechno-logo.png" class="img-fluid float-left" alt="">
                  <div class="d-table">
                                         <!-- <a class="d-block" href="tel:></a> -->
                        <div class="d-block"> [[!siteStatistics? &mode=`site` &countby=``]]</div>
                    </div>
                </div>
                <p class="credentials">
                    © 2020 Gas Technologies LLC.<br>All rights reserved.
                </p>
                            </div>
                                                                    <div class="col-md-3"  style="margin-left: -100px; margin-right: 100px;">
                                             <p class="social-title">GasTechno in socials:</p>
                <div style="opacity:0.5;" <!-- class="d-flex justify-content-between social-network-links" -->
               <a href="https://www.linkedin.com/mwlite/in/walter-breidenstein-91a88160">
               <img src="assets/img/comp/icons/linkedin.svg" width="24px" alt="linkedin">
               </a>
            <a href="https://mobile.twitter.com/GasTechno">
            <img src="assets/img/comp/icons/twitter.svg" width="24px" alt="twitter">
            </a>
            <img style="visibility: hidden" src="assets/img/comp/icons/instagram.svg" width="24px" alt="instagram">
            </div>
            </div>
            <div class="col-md-3">
                <p class="contacts-title">
                    Contact sales:
                </p>
                <a class="font-weight-bold" href="mailto:info@gastechno.com">info@gastechno.com</a>
                <p style="margin-top: 5px" class="credentials">Gas Technologies LLC<br>PO Box 640<br>Walloon Lake, Michigan 49796-0640 USA
                </p>
                </div>
        </div>
    </div>
</footer>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-34703948-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(\'js\', new Date());

  gtag(\'config\', \'UA-34703948-3\');
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="assets/js/justified-columns.js"></script>
<script>
    $(document).ready(function () {
        $(\'#subscriptionInput\').focus(function(){
            $(this).data(\'placeholder\', $(this).attr(\'placeholder\'))
                .attr(\'placeholder\',\'\');
        }).blur(function(){
            $(this).attr(\'placeholder\',$(this).data(\'placeholder\'));
        });


        $(\'.grid\').masonry({
            itemSelector: \'.grid-item\',
            columnWidth: \'.grid-sizer\',
            percentPosition: true
        });

        $(\'a.scrollLink\').click(function (event) {
            // event.preventDefault();
            // 
            // var divId = $(this).attr(\'href\');
            // if (divId[0] === \'/\') {
            //     divId = divId.substr(1);
            // }
            // 
            // $(\'html, body\').animate({
            //    scrollTop: $(divId).offset().top
            //}, 500);
            if (location.pathname === \'/\') {
                event.preventDefault();
            
                var divId = $(this).attr(\'href\');
                if (divId[0] === \'/\') {
                    divId = divId.substr(1);
                }
                
                $(\'html, body\').animate({
                    scrollTop: $(divId).offset().top
                }, 500);
            }
        });
        
        $(document).on(\'af_complete\', function(event, response) {
            $(\'.ajax_form\').hide();
            $(\'.success-subscription\').css(\'display\', \'flex\');
        });
    });
</script>

<script type="text/javascript" src="/assets/components/ajaxform/js/default.js"></script>
<script type="text/javascript">AjaxForm.initialize({"assetsUrl":"\\/assets\\/components\\/ajaxform\\/","actionUrl":"\\/assets\\/components\\/ajaxform\\/action.php","closeMessage":"close all","formSelector":"form.ajax_form","pageId":1});</script>
</body>
</html>',
    ),
  ),
);