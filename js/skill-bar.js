// on page load...
   $(window).load(function() {
        moveProgressBar();
    });
    // on browser resize...
    $(window).resize(function() {
        moveProgressBar();
    });

    // SIGNATURE PROGRESS
    function moveProgressBar() {
      console.log("moveProgressBar");

        for(i=1; i<7; i++){
            var getPercent = ($('.progress-wrap'+i).data('progress-percent'+i) / 100);
            var getProgressWrapWidth = $('.progress-wrap'+i).width();
            var progressTotal = getPercent * getProgressWrapWidth;
            var animationLength = 2500;
            
            // on page load, animate percentage bar to data percentage length
            // .stop() used to prevent animation queueing
            $('.progress-bar'+i).stop().animate({
                left: progressTotal
            }, animationLength);
            }
    }