<?php include('inc/header.php'); ?>
        <div class="main-body" style="height:600px">
            <h1>This is about page</h1>
        </div>
        <script>
        $(document).ready(function(){
                var test =$(".main-body").parent().find(".navbar");
                var x = $(test).find(".nav-link");
                $(x).each(function(){
                    if($(this).attr("href") == "info.php"){
                      $('[href="info.php"]').addClass("active");
                    }
                    
                });
                
                
        });
        </script>
<?php include('inc/footer.php');?>