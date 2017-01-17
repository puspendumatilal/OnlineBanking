/ *!
 * CxSlide 2.0.2
 * Http://code.ciaoca.com/
 * Https://github.com/ciaoca/cxSlide
 * E-mail: ciaoca@gmail.com
 * Released under the MIT license
 * Date: 2016-01-14
 * /
(Function (factory) {
  if (typeof define === 'function' && define.amd) {
    define (['jquery'], factory);
  } Else {
    factory (jQuery);
  };
} (Function ($) {
  $ .cxSlide = Function () {
    var cxSlide = {
      dom: {},
      api: {}
    };

    cxSlide.init = function () {
      var self = this;
      var _settings;
      var _callback;

      // Check whether the DOM element
      var _isElement = function (o) {
        if (o && (typeof HTMLElement === 'function' || typeof HTMLElement === 'object') && o instanceof HTMLElement) {
          return true;
        } Else {
          return (o && o.nodeType && o.nodeType === 1) true:? false;
        };
      };

      // Check whether the jQuery object
      var _isJquery = function (o) {
        return (o && o.length && (typeof jQuery === 'function' || typeof jQuery === 'object') && o instanceof jQuery) true: false;?
      };

      // Assign parameters
      for (var i = 0, l = arguments.length; i <l; i ++) {
        if (_isJquery (arguments [i])) {
          self.dom.el = arguments [i];
        } Else if (_isElement (arguments [i])) {
          self.dom.el = $ (arguments [i]);
        } Else if (typeof arguments [i] === 'function') {
          _callback = arguments [i];
        } Else if (typeof arguments [i] === 'object') {
          _settings = arguments [i];
        };
      };

      if (self.dom.el.length!) {return};

      self.settings = $ .extend ({}, $ .cxSlide.defaults, _settings);

      self.build ();

      self.api = {
        play: function () {
          self.settings.auto = true;
          self.play ();
        },
        stop: function () {
          self.settings.auto = false;
          self.stop ();
        },
        goto: function () {
          self.goto.apply (self, arguments);
        },
        prev: function () {
          self.goto (self.now - 1);
        },
        next: function () {
          self.goto ();
        }
      };

      if (typeof _callback === 'function') {
        _callback (self.api);
      };
    };

    cxSlide.build = function () {
      var self = this;
      var _html;

      self.dom.box = self.dom.el.find ('box.');
      self.dom.list = self.dom.box.find ('list.');
      self.dom.items = self.dom.list.find ('li');
      self.itemSum = self.dom.items.length;
      self.baseClass = self.dom.el.attr ('class');

      if (self.itemSum <= 1) {return};

      self.dom.numList = self.dom.el.find ('btn.');
      self.dom.numBtns = self.dom.numList.find ('li');
      self.dom.plusBtn = self.dom.el.find ('plus.');
      self.dom.minusBtn = self.dom.el.find ('minus.');
      self.boxWidth = self.dom.box.width ();
      self.boxHeight = self.dom.box.height ();
      self.now = 0;

      // Elements: No. toggle button
      if (self.settings.btn &&! self.dom.numList.length) {
        _html = '';
        for (var i = 1; i <= self.itemSum; i ++) {
          _html + = '<li class = "b_' + i + '">' + i + '</ li>';
        };
        . self.dom.numList = $ ('<ul> </ ul>', {'class': 'btn', 'html': _html}) appendTo (self.dom.el);
        self.dom.numBtns = self.dom.numList.find ('li');
      };

      // Elements: left toggle button
      if (self.settings.plus &&! self.dom.plusBtn.length) {
        self.dom.plusBtn = $ ('<div> </ div>', {'class': 'plus'}). appendTo (self.dom.el);
      };
      if (self.settings.minus &&! self.dom.minusBtn.length) {
        . self.dom.minusBtn = $ ('<div> </ div>', {'class': 'minus'}) appendTo (self.dom.el);
      };

      // Event: the mouse moved to stop, remove the start
      if (self.settings.hoverLock) {
        self.dom.box.on ('mouseenter', function () {
          self.stop ();
        });
        self.dom.box.on ('mouseleave', function () {
          self.play ();
        });
      };

      // Event: No. buttons
      if (self.settings.btn) {
        self.dom.numList.on (self.settings.events, 'li', function () {
          self.goto ($ (this) .index ());
        });
      };
  
      // Event: left toggle button
      if (self.settings.minus) {
        self.dom.minusBtn.on (self.settings.events, function () {
          self.goto (self.now - 1);
        });
      };
      if (self.settings.plus) {
        self.dom.plusBtn.on (self.settings.events, function () {
          self.goto ();
        });
      };

      self.goto (self.settings.start);
    };

    // Method: Start
    cxSlide.play = function () {
      var self = this;

      if (self.settings.auto!) {return};
      self.stop ();

      self.run = setTimeout (function () {
        self.goto ();
      }, Self.settings.time);
    };

    //: Stop
    cxSlide.stop = function () {
      if (typeof (this.run)! == 'undefined') {
        clearTimeout (this.run);
      };
    };

    // Method: Rotation process
    cxSlide.goto = function (n) {
      var self = this;
      var _next = typeof (n) === 'undefined' self.now + 1: parseInt (n, 10);?
      var _now = self.now;
      var _max = self.itemSum - 1;
      var _moveVal;

      if (_next> _max) {
        _next = 0;
      } Else if (_next <0) {
        _next = _max;
      };

      if (self.dom.numList.length) {
        self.dom.numBtns.removeClass ('in out selected');
      };

      self.stop ();
      self.dom.el.attr ('class', self.baseClass + 'to_' + _next);

      if (_now === _next) {
        self.dom.numBtns.eq (_next) .addClass ('in selected');
        self.dom.items.eq (_next) .addClass ('in');
        self.play ();
        return;
      };

      self.dom.numBtns.eq (_now) .addClass ('out') end () eq (_next) .addClass ('in selected')..;
      ... self.dom.items.removeClass ('in out') eq (_now) .addClass ('out') end () eq (_next) .addClass ('in');

      switch (self.settings.type) {
        // CSS Animation
        // Prior to this anime has finished processing the class, and other types of animation can also be set to use, no special treatment here now
        // Case 'anime':
          // Break
       // Transparent transition
        case 'fade':
          self.dom.items.css ({
            'Display': 'none',
            'Position': 'absolute',
            'Top': 0,
            'Left': 0,
            'ZIndex': ''
          });
          self.dom.items.eq (_now) .css ({
            'Display': '',
            'ZIndex': 1
          });
          self.dom.items.eq (_next) .css ({
            'ZIndex': 2
          .}) FadeIn (self.settings.speed);
          break

        // Direct switch
        case 'toggle':
          . self.dom.items.hide () eq (_next) .show ();
          break
 
// Horizontal scrolling
        case 'x':
          _moveVal = self.boxWidth * _next;

          if (_next === 0 && _now === _max) {
            self.dom.items.eq (0) .css ({
              'Left': self.boxWidth * self.itemSum
            });
            _moveVal = self.boxWidth * self.itemSum;

          } Else if (_now === 0) {
            self.dom.items.eq (0) .css ({
              'Left': ''
            });
            self.dom.box.scrollLeft (0);
          };

          self.dom.box.stop (true, false) .animate ({
            'ScrollLeft': _moveVal
          }, Self.settings.speed);
          break

        // Vertical scrolling
        case 'y':
          _moveVal = self.boxHeight * _next;

          if (_next === 0 && _now === _max) {
            self.dom.items.eq (0) .css ({
              'Top': self.boxHeight * self.itemSum
            });
            _moveVal = self.boxHeight * self.itemSum;

          } Else if (_now === 0) {
            self.dom.items.eq (0) .css ({
              'Top': ''
            });
            self.dom.box.scrollTop (0);
          };

          self.dom.box.stop (true, false) .animate ({
            'ScrollTop': _moveVal
          }, Self.settings.speed);
          break

        // Not default
      };

      self.now = _next;
      self.dom.box.queue (function () {
        self.play ();
        self.dom.box.dequeue ();
      });
    };
    
    cxSlide.init.apply (cxSlide, arguments);

    return this;
  };
  
  // Defaults
  $ .cxSlide.defaults = {
    events: 'click', // Button event
    type: 'x', // Transition effect
    start: 0, // He began to show ID
    speed: 800, // Switching Speed
    time: 5000, // Automatic rotation interval
    auto: true, // Whether automatic carousel
    hoverLock: true, // Mouse moved out of locking
    btn: true, // Whether using the number buttons
    plus: false, // Whether to use the plus button
    minus: false // Whether to use the minus button
  };

  $ .fn.cxSlide = Function (settings, callback) {
    this.each (function (i) {
      $ .cxSlide (This, settings, callback);
    });
    return this;
  };
}));