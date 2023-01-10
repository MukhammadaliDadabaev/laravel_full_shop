<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Интернет Магазин: Товар</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/starter-template.css" rel="stylesheet">
  <link rel='stylesheet' type='text/css' property='stylesheet' href='//127.0.0.1:8000/_debugbar/assets/stylesheets?v=1657531602&theme=auto' data-turbolinks-eval='false' data-turbo-eval='false'>
  <script src='//127.0.0.1:8000/_debugbar/assets/javascript?v=1657531602' data-turbolinks-eval='false' data-turbo-eval='false'></script>
  <!-- <script data-turbo-eval="false">
    jQuery.noConflict(true);
  </script>
  <script>
    Sfdump = window.Sfdump || (function(doc) {
      var refStyle = doc.createElement('style'),
        rxEsc = /([.*+?^${}()|\[\]\/\\])/g,
        idRx = /\bsf-dump-\d+-ref[012]\w+\b/,
        keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl',
        addEventListener = function(e, n, cb) {
          e.addEventListener(n, cb, false);
        };
      refStyle.innerHTML = '.phpdebugbar pre.sf-dump .sf-dump-compact, .sf-dump-str-collapse .sf-dump-str-collapse, .sf-dump-str-expand .sf-dump-str-expand { display: none; }';
      (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle);
      refStyle = doc.createElement('style');
      (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle);
      if (!doc.addEventListener) {
        addEventListener = function(element, eventName, callback) {
          element.attachEvent('on' + eventName, function(e) {
            e.preventDefault = function() {
              e.returnValue = false;
            };
            e.target = e.srcElement;
            callback(e);
          });
        };
      }

      function toggle(a, recursive) {
        var s = a.nextSibling || {},
          oldClass = s.className,
          arrow, newClass;
        if (/\bsf-dump-compact\b/.test(oldClass)) {
          arrow = '▼';
          newClass = 'sf-dump-expanded';
        } else if (/\bsf-dump-expanded\b/.test(oldClass)) {
          arrow = '▶';
          newClass = 'sf-dump-compact';
        } else {
          return false;
        }
        if (doc.createEvent && s.dispatchEvent) {
          var event = doc.createEvent('Event');
          event.initEvent('sf-dump-expanded' === newClass ? 'sfbeforedumpexpand' : 'sfbeforedumpcollapse', true, false);
          s.dispatchEvent(event);
        }
        a.lastChild.innerHTML = arrow;
        s.className = s.className.replace(/\bsf-dump-(compact|expanded)\b/, newClass);
        if (recursive) {
          try {
            a = s.querySelectorAll('.' + oldClass);
            for (s = 0; s < a.length; ++s) {
              if (-1 == a[s].className.indexOf(newClass)) {
                a[s].className = newClass;
                a[s].previousSibling.lastChild.innerHTML = arrow;
              }
            }
          } catch (e) {}
        }
        return true;
      };

      function collapse(a, recursive) {
        var s = a.nextSibling || {},
          oldClass = s.className;
        if (/\bsf-dump-expanded\b/.test(oldClass)) {
          toggle(a, recursive);
          return true;
        }
        return false;
      };

      function expand(a, recursive) {
        var s = a.nextSibling || {},
          oldClass = s.className;
        if (/\bsf-dump-compact\b/.test(oldClass)) {
          toggle(a, recursive);
          return true;
        }
        return false;
      };

      function collapseAll(root) {
        var a = root.querySelector('a.sf-dump-toggle');
        if (a) {
          collapse(a, true);
          expand(a);
          return true;
        }
        return false;
      }

      function reveal(node) {
        var previous, parents = [];
        while ((node = node.parentNode || {}) && (previous = node.previousSibling) && 'A' === previous.tagName) {
          parents.push(previous);
        }
        if (0 !== parents.length) {
          parents.forEach(function(parent) {
            expand(parent);
          });
          return true;
        }
        return false;
      }

      function highlight(root, activeNode, nodes) {
        resetHighlightedNodes(root);
        Array.from(nodes || []).forEach(function(node) {
          if (!/\bsf-dump-highlight\b/.test(node.className)) {
            node.className = node.className + ' sf-dump-highlight';
          }
        });
        if (!/\bsf-dump-highlight-active\b/.test(activeNode.className)) {
          activeNode.className = activeNode.className + ' sf-dump-highlight-active';
        }
      }

      function resetHighlightedNodes(root) {
        Array.from(root.querySelectorAll('.sf-dump-str, .sf-dump-key, .sf-dump-public, .sf-dump-protected, .sf-dump-private')).forEach(function(strNode) {
          strNode.className = strNode.className.replace(/\bsf-dump-highlight\b/, '');
          strNode.className = strNode.className.replace(/\bsf-dump-highlight-active\b/, '');
        });
      }
      return function(root, x) {
        root = doc.getElementById(root);
        var indentRx = new RegExp('^(' + (root.getAttribute('data-indent-pad') || ' ').replace(rxEsc, '\\$1') + ')+', 'm'),
          options = {
            "maxDepth": 1,
            "maxStringLength": 160,
            "fileLinkFormat": false
          },
          elt = root.getElementsByTagName('A'),
          len = elt.length,
          i = 0,
          s, h, t = [];
        while (i < len) t.push(elt[i++]);
        for (i in x) {
          options[i] = x[i];
        }

        function a(e, f) {
          addEventListener(root, e, function(e, n) {
            if ('A' == e.target.tagName) {
              f(e.target, e);
            } else if ('A' == e.target.parentNode.tagName) {
              f(e.target.parentNode, e);
            } else {
              n = /\bsf-dump-ellipsis\b/.test(e.target.className) ? e.target.parentNode : e.target;
              if ((n = n.nextElementSibling) && 'A' == n.tagName) {
                if (!/\bsf-dump-toggle\b/.test(n.className)) {
                  n = n.nextElementSibling || n;
                }
                f(n, e, true);
              }
            }
          });
        };

        function isCtrlKey(e) {
          return e.ctrlKey || e.metaKey;
        }

        function xpathString(str) {
          var parts = str.match(/[^'"]+|['"]/g).map(function(part) {
            if ("'" == part) {
              return '"\'"';
            }
            if ('"' == part) {
              return "'\"'";
            }
            return "'" + part + "'";
          });
          return "concat(" + parts.join(",") + ", '')";
        }

        function xpathHasClass(className) {
          return "contains(concat(' ', normalize-space(@class), ' '), ' " + className + " ')";
        }
        addEventListener(root, 'mouseover', function(e) {
          if ('' != refStyle.innerHTML) {
            refStyle.innerHTML = '';
          }
        });
        a('mouseover', function(a, e, c) {
          if (c) {
            e.target.style.cursor = "pointer";
          } else if (a = idRx.exec(a.className)) {
            try {
              refStyle.innerHTML = '.phpdebugbar pre.sf-dump .' + a[0] + '{background-color: #B729D9; color: #FFF !important; border-radius: 2px}';
            } catch (e) {}
          }
        });
        a('click', function(a, e, c) {
          if (/\bsf-dump-toggle\b/.test(a.className)) {
            e.preventDefault();
            if (!toggle(a, isCtrlKey(e))) {
              var r = doc.getElementById(a.getAttribute('href').slice(1)),
                s = r.previousSibling,
                f = r.parentNode,
                t = a.parentNode;
              t.replaceChild(r, a);
              f.replaceChild(a, s);
              t.insertBefore(s, r);
              f = f.firstChild.nodeValue.match(indentRx);
              t = t.firstChild.nodeValue.match(indentRx);
              if (f && t && f[0] !== t[0]) {
                r.innerHTML = r.innerHTML.replace(new RegExp('^' + f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]);
              }
              if (/\bsf-dump-compact\b/.test(r.className)) {
                toggle(s, isCtrlKey(e));
              }
            }
            if (c) {} else if (doc.getSelection) {
              try {
                doc.getSelection().removeAllRanges();
              } catch (e) {
                doc.getSelection().empty();
              }
            } else {
              doc.selection.empty();
            }
          } else if (/\bsf-dump-str-toggle\b/.test(a.className)) {
            e.preventDefault();
            e = a.parentNode.parentNode;
            e.className = e.className.replace(/\bsf-dump-str-(expand|collapse)\b/, a.parentNode.className);
          }
        });
        elt = root.getElementsByTagName('SAMP');
        len = elt.length;
        i = 0;
        while (i < len) t.push(elt[i++]);
        len = t.length;
        for (i = 0; i < len; ++i) {
          elt = t[i];
          if ('SAMP' == elt.tagName) {
            a = elt.previousSibling || {};
            if ('A' != a.tagName) {
              a = doc.createElement('A');
              a.className = 'sf-dump-ref';
              elt.parentNode.insertBefore(a, elt);
            } else {
              a.innerHTML += ' ';
            }
            a.title = (a.title ? a.title + '\n[' : '[') + keyHint + '+click] Expand all children';
            a.innerHTML += elt.className == 'sf-dump-compact' ? '<span>▶</span>' : '<span>▼</span>';
            a.className += ' sf-dump-toggle';
            x = 1;
            if ('sf-dump' != elt.parentNode.className) {
              x += elt.parentNode.getAttribute('data-depth') / 1;
            }
          } else if (/\bsf-dump-ref\b/.test(elt.className) && (a = elt.getAttribute('href'))) {
            a = a.slice(1);
            elt.className += ' ' + a;
            if (/[\[{]$/.test(elt.previousSibling.nodeValue)) {
              a = a != elt.nextSibling.id && doc.getElementById(a);
              try {
                s = a.nextSibling;
                elt.appendChild(a);
                s.parentNode.insertBefore(a, s);
                if (/^[@#]/.test(elt.innerHTML)) {
                  elt.innerHTML += ' <span>▶</span>';
                } else {
                  elt.innerHTML = '<span>▶</span>';
                  elt.className = 'sf-dump-ref';
                }
                elt.className += ' sf-dump-toggle';
              } catch (e) {
                if ('&' == elt.innerHTML.charAt(0)) {
                  elt.innerHTML = '…';
                  elt.className = 'sf-dump-ref';
                }
              }
            }
          }
        }
        if (doc.evaluate && Array.from && root.children.length > 1) {
          root.setAttribute('tabindex', 0);
          SearchState = function() {
            this.nodes = [];
            this.idx = 0;
          };
          SearchState.prototype = {
            next: function() {
              if (this.isEmpty()) {
                return this.current();
              }
              this.idx = this.idx < (this.nodes.length - 1) ? this.idx + 1 : 0;
              return this.current();
            },
            previous: function() {
              if (this.isEmpty()) {
                return this.current();
              }
              this.idx = this.idx > 0 ? this.idx - 1 : (this.nodes.length - 1);
              return this.current();
            },
            isEmpty: function() {
              return 0 === this.count();
            },
            current: function() {
              if (this.isEmpty()) {
                return null;
              }
              return this.nodes[this.idx];
            },
            reset: function() {
              this.nodes = [];
              this.idx = 0;
            },
            count: function() {
              return this.nodes.length;
            },
          };

          function showCurrent(state) {
            var currentNode = state.current(),
              currentRect, searchRect;
            if (currentNode) {
              reveal(currentNode);
              highlight(root, currentNode, state.nodes);
              if ('scrollIntoView' in currentNode) {
                currentNode.scrollIntoView(true);
                currentRect = currentNode.getBoundingClientRect();
                searchRect = search.getBoundingClientRect();
                if (currentRect.top < (searchRect.top + searchRect.height)) {
                  window.scrollBy(0, -(searchRect.top + searchRect.height + 5));
                }
              }
            }
            counter.textContent = (state.isEmpty() ? 0 : state.idx + 1) + ' of ' + state.count();
          }
          var search = doc.createElement('div');
          search.className = 'sf-dump-search-wrapper sf-dump-search-hidden';
          search.innerHTML = ' <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0<\/span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"\/><\/svg> <\/button> ';
          root.insertBefore(search, root.firstChild);
          var state = new SearchState();
          var searchInput = search.querySelector('.sf-dump-search-input');
          var counter = search.querySelector('.sf-dump-search-count');
          var searchInputTimer = 0;
          var previousSearchQuery = '';
          addEventListener(searchInput, 'keyup', function(e) {
            var searchQuery = e.target.value; /* Don't perform anything if the pressed key didn't change the query */
            if (searchQuery === previousSearchQuery) {
              return;
            }
            previousSearchQuery = searchQuery;
            clearTimeout(searchInputTimer);
            searchInputTimer = setTimeout(function() {
              state.reset();
              collapseAll(root);
              resetHighlightedNodes(root);
              if ('' === searchQuery) {
                counter.textContent = '0 of 0';
                return;
              }
              var classMatches = ["sf-dump-str", "sf-dump-key", "sf-dump-public", "sf-dump-protected", "sf-dump-private", ].map(xpathHasClass).join(' or ');
              var xpathResult = doc.evaluate('.//span[' + classMatches + '][contains(translate(child::text(), ' + xpathString(searchQuery.toUpperCase()) + ', ' + xpathString(searchQuery.toLowerCase()) + '), ' + xpathString(searchQuery.toLowerCase()) + ')]', root, null, XPathResult.ORDERED_NODE_ITERATOR_TYPE, null);
              while (node = xpathResult.iterateNext()) state.nodes.push(node);
              showCurrent(state);
            }, 400);
          });
          Array.from(search.querySelectorAll('.sf-dump-search-input-next, .sf-dump-search-input-previous')).forEach(function(btn) {
            addEventListener(btn, 'click', function(e) {
              e.preventDefault(); - 1 !== e.target.className.indexOf('next') ? state.next() : state.previous();
              searchInput.focus();
              collapseAll(root);
              showCurrent(state);
            })
          });
          addEventListener(root, 'keydown', function(e) {
            var isSearchActive = !/\bsf-dump-search-hidden\b/.test(search.className);
            if ((114 === e.keyCode && !isSearchActive) || (isCtrlKey(e) && 70 === e.keyCode)) {
              /* F3 or CMD/CTRL + F */
              if (70 === e.keyCode && document.activeElement === searchInput) {
                /* * If CMD/CTRL + F is hit while having focus on search input, * the user probably meant to trigger browser search instead. * Let the browser execute its behavior: */
                return;
              }
              e.preventDefault();
              search.className = search.className.replace(/\bsf-dump-search-hidden\b/, '');
              searchInput.focus();
            } else if (isSearchActive) {
              if (27 === e.keyCode) {
                /* ESC key */
                search.className += ' sf-dump-search-hidden';
                e.preventDefault();
                resetHighlightedNodes(root);
                searchInput.value = '';
              } else if ((isCtrlKey(e) && 71 === e.keyCode) /* CMD/CTRL + G */ || 13 === e.keyCode /* Enter */ || 114 === e.keyCode /* F3 */ ) {
                e.preventDefault();
                e.shiftKey ? state.previous() : state.next();
                collapseAll(root);
                showCurrent(state);
              }
            }
          });
        }
        if (0 >= options.maxStringLength) {
          return;
        }
        try {
          elt = root.querySelectorAll('.sf-dump-str');
          len = elt.length;
          i = 0;
          t = [];
          while (i < len) t.push(elt[i++]);
          len = t.length;
          for (i = 0; i < len; ++i) {
            elt = t[i];
            s = elt.innerText || elt.textContent;
            x = s.length - options.maxStringLength;
            if (0 < x) {
              h = elt.innerHTML;
              elt[elt.innerText ? 'innerText' : 'textContent'] = s.substring(0, options.maxStringLength);
              elt.className += ' sf-dump-str-collapse';
              elt.innerHTML = '<span class=sf-dump-str-collapse>' + h + '<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span>' + '<span class=sf-dump-str-expand>' + elt.innerHTML + '<a class="sf-dump-ref sf-dump-str-toggle" title="' + x + ' remaining characters"> ▶</a></span>';
            }
          }
        } catch (e) {}
      };
    })(document);
  </script>
  <style>
    .phpdebugbar pre.sf-dump {
      display: block;
      white-space: pre;
      padding: 5px;
      overflow: initial !important;
    }

    .phpdebugbar pre.sf-dump:after {
      content: "";
      visibility: hidden;
      display: block;
      height: 0;
      clear: both;
    }

    .phpdebugbar pre.sf-dump span {
      display: inline;
    }

    .phpdebugbar pre.sf-dump a {
      text-decoration: none;
      cursor: pointer;
      border: 0;
      outline: none;
      color: inherit;
    }

    .phpdebugbar pre.sf-dump img {
      max-width: 50em;
      max-height: 50em;
      margin: .5em 0 0 0;
      padding: 0;
      background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAAAAAA6mKC9AAAAHUlEQVQY02O8zAABilCaiQEN0EeA8QuUcX9g3QEAAjcC5piyhyEAAAAASUVORK5CYII=) #D3D3D3;
    }

    .phpdebugbar pre.sf-dump .sf-dump-ellipsis {
      display: inline-block;
      overflow: visible;
      text-overflow: ellipsis;
      max-width: 5em;
      white-space: nowrap;
      overflow: hidden;
      vertical-align: top;
    }

    .phpdebugbar pre.sf-dump .sf-dump-ellipsis+.sf-dump-ellipsis {
      max-width: none;
    }

    .phpdebugbar pre.sf-dump code {
      display: inline;
      padding: 0;
      background: none;
    }

    .sf-dump-public.sf-dump-highlight,
    .sf-dump-protected.sf-dump-highlight,
    .sf-dump-private.sf-dump-highlight,
    .sf-dump-str.sf-dump-highlight,
    .sf-dump-key.sf-dump-highlight {
      background: rgba(111, 172, 204, 0.3);
      border: 1px solid #7DA0B1;
      border-radius: 3px;
    }

    .sf-dump-public.sf-dump-highlight-active,
    .sf-dump-protected.sf-dump-highlight-active,
    .sf-dump-private.sf-dump-highlight-active,
    .sf-dump-str.sf-dump-highlight-active,
    .sf-dump-key.sf-dump-highlight-active {
      background: rgba(253, 175, 0, 0.4);
      border: 1px solid #ffa500;
      border-radius: 3px;
    }

    .phpdebugbar pre.sf-dump .sf-dump-search-hidden {
      display: none !important;
    }

    .phpdebugbar pre.sf-dump .sf-dump-search-wrapper {
      font-size: 0;
      white-space: nowrap;
      margin-bottom: 5px;
      display: flex;
      position: -webkit-sticky;
      position: sticky;
      top: 5px;
    }

    .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>* {
      vertical-align: top;
      box-sizing: border-box;
      height: 21px;
      font-weight: normal;
      border-radius: 0;
      background: #FFF;
      color: #757575;
      border: 1px solid #BBB;
    }

    .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>input.sf-dump-search-input {
      padding: 3px;
      height: 21px;
      font-size: 12px;
      border-right: none;
      border-top-left-radius: 3px;
      border-bottom-left-radius: 3px;
      color: #000;
      min-width: 15px;
      width: 100%;
    }

    .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-next,
    .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-previous {
      background: #F2F2F2;
      outline: none;
      border-left: none;
      font-size: 0;
      line-height: 0;
    }

    .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-next {
      border-top-right-radius: 3px;
      border-bottom-right-radius: 3px;
    }

    .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-next>svg,
    .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-input-previous>svg {
      pointer-events: none;
      width: 12px;
      height: 12px;
    }

    .phpdebugbar pre.sf-dump .sf-dump-search-wrapper>.sf-dump-search-count {
      display: inline-block;
      padding: 0 5px;
      margin: 0;
      border-left: none;
      line-height: 21px;
      font-size: 12px;
    }

    .phpdebugbar pre.sf-dump,
    .phpdebugbar pre.sf-dump .sf-dump-default {
      word-wrap: break-word;
      white-space: pre-wrap;
      word-break: normal
    }

    .phpdebugbar pre.sf-dump .sf-dump-num {
      font-weight: bold;
      color: #1299DA
    }

    .phpdebugbar pre.sf-dump .sf-dump-const {
      font-weight: bold
    }

    .phpdebugbar pre.sf-dump .sf-dump-str {
      font-weight: bold;
      color: #3A9B26
    }

    .phpdebugbar pre.sf-dump .sf-dump-note {
      color: #1299DA
    }

    .phpdebugbar pre.sf-dump .sf-dump-ref {
      color: #7B7B7B
    }

    .phpdebugbar pre.sf-dump .sf-dump-public {
      color: #000000
    }

    .phpdebugbar pre.sf-dump .sf-dump-protected {
      color: #000000
    }

    .phpdebugbar pre.sf-dump .sf-dump-private {
      color: #000000
    }

    .phpdebugbar pre.sf-dump .sf-dump-meta {
      color: #B729D9
    }

    .phpdebugbar pre.sf-dump .sf-dump-key {
      color: #3A9B26
    }

    .phpdebugbar pre.sf-dump .sf-dump-index {
      color: #1299DA
    }

    .phpdebugbar pre.sf-dump .sf-dump-ellipsis {
      color: #A0A000
    }

    .phpdebugbar pre.sf-dump .sf-dump-ns {
      user-select: none;
    }

    .phpdebugbar pre.sf-dump .sf-dump-ellipsis-note {
      color: #1299DA
    }
  </style> -->
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="http://127.0.0.1:8000">Интернет Магазин</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="http://127.0.0.1:8000">Все товары</a></li>
          <li><a href="http://127.0.0.1:8000/categories">Категории</a>
          </li>
          <li><a href="http://127.0.0.1:8000/basket">В корзину</a></li>
          <li><a href="http://127.0.0.1:8000/reset">Сбросить проект в начальное состояние</a></li>
          <li><a href="http://127.0.0.1:8000/locale/en">en</a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="http://127.0.0.1:8000/currency/RUB">₽</a></li>
              <li><a href="http://127.0.0.1:8000/currency/USD">$</a></li>
              <li><a href="http://127.0.0.1:8000/currency/EUR">€</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://127.0.0.1:8000/login">Войти</a></li>

        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="starter-template">
      <h1>iPhone XL</h1>
      <h2>{{ $product }}</h2>
      <h2>Мобильные телефоны</h2>
      <p>Цена: <b>20221 ₽</b></p>

      <h4>Цвет: Белый</h4>
      <h4>Внутренняя память: 128гб</h4>

      <img src="http://localhost/storage/products/iphone_x_silver.jpg">
      <p>Огромный продвинутый телефон</p>

      <form action="http://127.0.0.1:8000/basket/add/2" method="POST">
        <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>

        <input type="hidden" name="_token" value="gmkLC31KuTY3o6j67AXLd4VB3A813SGDmgr8d25Q">
      </form>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <p>Категории товаров</p>
          <ul>
            <li><a href="http://127.0.0.1:8000/mobiles">Мобильные телефоны</a></li>
            <li><a href="http://127.0.0.1:8000/portable">Портативная техника</a></li>
            <li><a href="http://127.0.0.1:8000/appliances">Бытовая техника</a></li>
          </ul>
        </div>
        <div class="col-lg-6">
          <p>Самые популярные товары</p>
          <ul>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  -->
</body>

</html>