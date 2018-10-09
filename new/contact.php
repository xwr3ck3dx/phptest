<?php include('inc/header.php'); ?>
        <div class="main-body" style="height:600px">
            <h1>this is Contact page</h1>
        </div>
        <script>
        $(document).ready(function(){
                // var test =$(".main-body").parent().find(".navbar");
                // var x = $(test).find(".nav-link");
                // $(x).each(function(){
                //     if($(this).attr("href") == "contact.php"){
                //       $('[href="contact.php"]').addClass("active");
                //     }
                    
                // });
                $("a#contact").addClass("active");
                
        });
        </script>
<?php include('inc/footer.php'); ?>