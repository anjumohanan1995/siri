;
(function ($, window, document, undefined) {
    "use strict";
    
    var PageSlide = function (ele, opt) {
        this.ele = ele,
        this.child = this.ele.find('>div'),
        this.descendant = this.child.find('>div'),
        this.index = 1,
        // é»˜è®¤å‚æ•°
        this.defaults = {
            direction: 'vertical', // æ»‘åŠ¨æ–¹å‘ï¼Œå‚æ•°vertical,horizontal
            fullPage: true, // æ˜¯å¦æ˜¯å…¨å±æ»‘åŠ¨
            width: 500, // ä¸æ˜¯å…¨å±æ»šåŠ¨æ—¶ï¼Œè®¾ç½®æ»‘åŠ¨å®½åº¦
            height: 500, // ä¸æ˜¯å…¨å±æ»šåŠ¨æ—¶ï¼Œè®¾ç½®æ»‘åŠ¨é«˜åº¦
            autoSlide: false, // æ˜¯å¦è‡ªåŠ¨æ»šåŠ¨
            loop: true, // æ˜¯å¦å¾ªçŽ¯æ»šåŠ¨
            delay: 3000, // è‡ªåŠ¨æ»šåŠ¨é—´éš”æ—¶é—´ï¼Œå•ä½ms
            duration: 1000, // æ»šåŠ¨æŒç»­æ—¶é—´ï¼Œå•ä½ms
            navigation: true, // æ˜¯å¦æ˜¾ç¤ºå®šä½åˆ†é¡µ
            navigationEvent: 'click', // å®šä½åˆ†é¡µè§¦å‘äº‹ä»¶ï¼Œå¦‚mouseoverã€click
            callback: function () {}, // å›žè°ƒå‡½æ•°
        },

        this.options = $.extend(true, {}, this.defaults, opt || {}),
        this.directionFlag = this.options.direction === "vertical" ? true : false, // æ»šåŠ¨æ–¹å‘åˆ¤æ–­
        this.offset = 0,
        this.pagesCount = this.descendant.length, // é¡µé¢æ•°é‡
        this.slideFlag = true, // åˆ¤æ–­é¡µé¢æ˜¯å¦å¯ä»¥æ»‘åŠ¨
        this.timer = null // å®šæ—¶å™¨
    }
    // æ·»åŠ æ–¹æ³•
    PageSlide.prototype = {
        // åˆå§‹åŒ–
        init: function () {
            this.initLayout();
            this.setNavigation();
            this.initEvent();
        },
        // åˆå§‹åŒ–äº‹ä»¶
        initEvent: function () {
            var that = this;
            // è‡ªåŠ¨æ»‘åŠ¨
            if (that.options.autoSlide) {
                that.autoPlay();
                that.ele.on('mouseover', function () {
                    that.pausePlay();
                });
                that.ele.on('mouseout', function () {
                    that.autoPlay();
                });
            } else {
                // å…¨å±çŠ¶æ€ä¸‹ç»‘å®šé¼ æ ‡æ»šè½®äº‹ä»¶
                if (that.options.fullPage) {
                    that.ele.on("mousewheel DOMMouseScroll", function (e) {
                        e.preventDefault();
                        that.pausePlay();
                        var delta = e.originalEvent.wheelDelta || -e.originalEvent.detail;
                        if (that.slideFlag) {
                            if (delta > 0) {
                                that.prevSlide();
                            } else if (delta < 0) {
                                that.nextSlide();
                            }
                        }
                    });
                }
            }
            // ç»‘å®šå¯¼èˆªäº‹ä»¶
            that.ele.find('>ul').on(that.options.navigationEvent, function (e) {
                var target = e.target;
                that.pausePlay();
                if (target.tagName.toUpperCase() === 'LI') {
                    var currIndex = that.ele.find('>ul').find('li').index($(target));
                    if (that.slideFlag) {
                        var offset = that.offset * (that.index - currIndex - 1);
                        that.sliding(offset);
                        that.index = currIndex + 1;
                        that.activeNavigation();
                    }
                }
                if (that.options.autoSlide) {
                    that.autoPlay();
                }
            });
            // å…¨å±æ»‘åŠ¨çŠ¶æ€ï¼Œé¡µé¢å¤§å°æ”¹å˜åŽæ”¹å˜å…ƒç´ å¤§å°
            var resizeTimer = null;
            $(window).resize(function () {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function () {
                    that.ele.css({
                        'height': $(window).height(),
                        'width': $(window).width()
                    });
                    that.descendant.css({
                        'height': $(window).height(),
                        'width': $(window).width()
                    });
                    if (that.directionFlag) {
                        that.child.css({
                            'height': $(window).height() * that.pagesCount,
                            'width': $(window).width()
                        });
                    } else {
                        that.child.css({
                            'height': $(window).height(),
                            'width': $(window).width() * that.pagesCount
                        });
                    }
                    that.offset = that.directionFlag ? that.descendant.height() : that.descendant.width(); // æ ¹æ®æ»šåŠ¨æ–¹å‘ç¡®å®šåç§»è·ç¦»
                    var offsetPostion = that.directionFlag ? that.child.position().top : that.child.position().left;
                    var remainder = offsetPostion % that.offset;
                    var animateCss = that.directionFlag ? {
                        top: offsetPostion - remainder
                    } : {
                        left: offsetPostion - remainder
                    }
                    that.child.animate(animateCss, 500);
                    that.index = parseInt(-offsetPostion / that.offset);
                    that.activeNavigation();
                }, 500);
            });
        },
        // åˆå§‹åŒ–é¡µé¢å¸ƒå±€
        initLayout: function () {
            var that = this;
            that.child.prepend(that.descendant.last().clone());
            that.child.append(that.descendant.first().clone());
            that.descendant = that.child.find('>div');
            that.pagesCount = that.descendant.length;
            // ä»¥æ˜¯å¦å…¨å±å¸ƒå±€
            if (that.options.fullPage) {
                $('html, body').css({
                    'overflow': 'hidden',
                    'height': '100%'
                });
                that.ele.css({
                    'width': $(window).width(),
                    'height': $(window).height(),
                    'overflow': 'hidden'
                });
                that.descendant.css({
                    'width': $(window).width(),
                    'height': $(window).height()
                });
            } else {
                that.ele.css({
                    'width': that.options.width + 'px',
                    'height': that.options.height + 'px',
                    'overflow': 'hidden'
                });
                that.descendant.css({
                    'width': that.options.width + 'px',
                    'height': that.options.height + 'px'
                });
            }
            // ä»¥æ»‘åŠ¨æ–¹å‘å¸ƒå±€
            if (that.directionFlag) {
                that.child.css({
                    'width': that.descendant.width() + 'px',
                    'height': that.descendant.height() * that.pagesCount + 'px',
                    'position': 'relative',
                });
            } else {
                that.descendant.css({
                    'float': 'left'
                });
                that.child.css({
                    'width': that.descendant.width() * that.pagesCount + 'px',
                    'height': that.descendant.height() + 'px',
                    'position': 'relative',
                });
            }
            that.offset = that.directionFlag ? that.descendant.height() : that.descendant.width(); // æ ¹æ®æ»šåŠ¨æ–¹å‘ç¡®å®šåç§»è·ç¦»
            // å…ƒç´ åˆå§‹ä½ç½®åç§»
            var transform = that.directionFlag ? {
                top: -that.offset
            } : {
                left: -that.offset
            };
            that.child.css(transform);
        },
        // åˆ›å»ºå®šä½å¯¼èˆª
        setNavigation: function () {
            var that = this;
            if (that.options.navigation) {
                var navigationHtml = '';
                for (var i = 0; i < that.pagesCount - 2; i++) {
                    navigationHtml += '<li></li>';
                }
                navigationHtml = '<ul>' + navigationHtml + '</ul>';
                that.ele.append(navigationHtml);
                that.ele.find('ul>li').eq(0).addClass('active');
            }
        },
        // è‡ªåŠ¨æ»‘åŠ¨
        autoPlay: function () {
            var that = this;
            that.timer = setInterval(function () {
                that.nextSlide();
            }, that.options.delay);
        },
        // åœæ­¢æ»‘åŠ¨
        pausePlay: function () {
            clearInterval(this.timer);
        },
        // å‘å‰ä¸€é¡µæ»‘åŠ¨
        prevSlide: function () {
            if (this.index > 1) {
                this.index--;
                this.sliding(this.offset);
                this.activeNavigation();
            } else if (this.options.loop) {
                this.index = this.pagesCount - 2;
                this.sliding(this.offset);
                this.activeNavigation();
            }
        },
        // å‘åŽä¸€é¡µæ»‘åŠ¨
        nextSlide: function () {
            if (this.index < this.pagesCount - 2) {
                this.index++;
                this.sliding(-this.offset);
                this.activeNavigation();
            } else if (this.options.loop) {
                this.index = 1;
                this.sliding(-this.offset);
                this.activeNavigation();
            }
        },
        // é¡µé¢æ»‘åŠ¨
        sliding: function (offset) {
            var that = this;
            if (that.slideFlag) {
                that.slideFlag = false;
                var offsetPostion = that.directionFlag ? that.child.position().top : that.child.position().left;
                var animateCss = that.directionFlag ? {
                    'top': offsetPostion + offset
                } : {
                    'left': offsetPostion + offset
                };
                that.child.animate(animateCss, that.options.duration, function () {
                    that.slideFlag = true;
                    if (that.options.callback && $.type(that.options.callback) === "function") {
                        var index = that.index;
                        that.options.callback(index);
                    }
                    // æ— ç¼æ»šåŠ¨
                    var offsetPostion = that.directionFlag ? that.child.position().top : that.child.position().left;
                    var startPosition = that.directionFlag ? {
                        'top': -that.offset
                    } : {
                        'left': -that.offset
                    };
                    var endPosition = that.directionFlag ? {
                        'top': -that.offset * (that.pagesCount - 2)
                    } : {
                        'left': -that.offset * (that.pagesCount - 2)
                    };
                    if (offsetPostion < -that.offset * (that.pagesCount - 2)) {
                        that.child.css(startPosition);
                    }
                    if (offsetPostion > -that.offset) {
                        that.child.css(endPosition);
                    }
                });
            }
        },
        // æ´»åŠ¨å¯¼èˆª
        activeNavigation: function () {
            if (this.options.navigation) {
                $('ul li').removeClass('active');
                $('ul li').eq(this.index - 1).addClass('active');
            }
        }
    }
    // è®¾ç½®æ’ä»¶
    $.fn.pageSlide = function (options) {
        return this.each(function () {
            var $this = $(this);
            var pageSlide = new PageSlide($this, options);
            pageSlide.init();
        });
    };
}(jQuery, window, document));