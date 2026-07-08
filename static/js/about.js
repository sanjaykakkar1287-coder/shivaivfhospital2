$(document).ready(function() {
            var counted = false;
            $(window).on('scroll', function() {
                if (counted) return; 
                
                var oTop = $('.about-stats-row').offset().top - window.innerHeight;
                if ($(window).scrollTop() > oTop) {
                    $('.counter').each(function () {
                        var $this = $(this);
                        var target = $this.data('target');
                        
                        $({ Counter: 0 }).animate({ Counter: target }, {
                            duration: 2500, 
                            easing: 'swing',
                            step: function () {
                                $this.text(Math.ceil(this.Counter));
                            },
                            complete: function() {
                                $this.text(target);
                            }
                        });
                    });
                    counted = true; 
                }
            });
            $(window).trigger('scroll'); 
        });