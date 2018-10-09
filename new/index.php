<?php include('inc/header.php'); ?>
        <div class="main-body" style="height:600px">
            <h1>Hello, world!</h1>
        </div>
        <script>
        $(document).ready(function(){
                // var test =$(".main-body").parent().find(".navbar");
                // var x = $(test).find(".nav-link");
                // $(x).each(function(){
                //     if($(this).attr("href") == "index.php"){
                //       $('[href="index.php"]').addClass("active");
                //     }
                    
                // });
                $('a#home').addClass('active');
                
        });
        </script>
<?php include 'inc/footer.php'; ?>