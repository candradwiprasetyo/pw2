
<div class="new_background">
    <div id="project_page"></div>
<div class="12u" style="text-align:center; ">
              
                <header>
                  <h2 style="padding-top:1em;">My <strong>Latest Work</strong> </h2>
                </header>
                 </div>              
                           
<div id="elastic_grid_demo"></div>
   
            <script type="text/javascript" src="js/portofolio/elastic_grid.min.js"></script>
            <script type="text/javascript">
                $(function(){
                    $('#filterEffect, #hoverDirection, #hoverInverse, #hoverDelay, #expandingSpeed').bind('change', function(){
                        var filterEffect = $('#filterEffect :selected').val();
                        var hoverDirection = $('#hoverDirection').val();
                        var hoverInverse = $('#hoverInverse').val();
                        var hoverDelay = $('#hoverDelay').val();
                        var expandingSpeed = $('#expandingSpeed').val();
                        $.get('demo.php',
                            {'filterEffect' : filterEffect, 'hoverInverse' : hoverInverse, 'hoverDirection' : hoverDirection, 'hoverDelay' : hoverDelay, 'expandingSpeed' : expandingSpeed},
                            function(res){
                                $('#elastic_grid_demo').html(res);
                        });
                    });

                    $.get('index/portofolio_gallery.php', function(res){
                        $('#elastic_grid_demo').html(res);
                    });
                });
            </script>

           <!-- <div style="height:50px"></div>-->
        </div>