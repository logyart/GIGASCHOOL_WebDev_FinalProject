/******/ (function(modules) { // webpackBootstrap
/******/ 	// install a JSONP callback for chunk loading
/******/ 	function webpackJsonpCallback(data) {
/******/ 		var chunkIds = data[0];
/******/ 		var moreModules = data[1];
/******/ 		var executeModules = data[2];
/******/
/******/ 		// add "moreModules" to the modules object,
/******/ 		// then flag all "chunkIds" as loaded and fire callback
/******/ 		var moduleId, chunkId, i = 0, resolves = [];
/******/ 		for(;i < chunkIds.length; i++) {
/******/ 			chunkId = chunkIds[i];
/******/ 			if(Object.prototype.hasOwnProperty.call(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 				resolves.push(installedChunks[chunkId][0]);
/******/ 			}
/******/ 			installedChunks[chunkId] = 0;
/******/ 		}
/******/ 		for(moduleId in moreModules) {
/******/ 			if(Object.prototype.hasOwnProperty.call(moreModules, moduleId)) {
/******/ 				modules[moduleId] = moreModules[moduleId];
/******/ 			}
/******/ 		}
/******/ 		if(parentJsonpFunction) parentJsonpFunction(data);
/******/
/******/ 		while(resolves.length) {
/******/ 			resolves.shift()();
/******/ 		}
/******/
/******/ 		// add entry modules from loaded chunk to deferred list
/******/ 		deferredModules.push.apply(deferredModules, executeModules || []);
/******/
/******/ 		// run deferred modules when all chunks ready
/******/ 		return checkDeferredModules();
/******/ 	};
/******/ 	function checkDeferredModules() {
/******/ 		var result;
/******/ 		for(var i = 0; i < deferredModules.length; i++) {
/******/ 			var deferredModule = deferredModules[i];
/******/ 			var fulfilled = true;
/******/ 			for(var j = 1; j < deferredModule.length; j++) {
/******/ 				var depId = deferredModule[j];
/******/ 				if(installedChunks[depId] !== 0) fulfilled = false;
/******/ 			}
/******/ 			if(fulfilled) {
/******/ 				deferredModules.splice(i--, 1);
/******/ 				result = __webpack_require__(__webpack_require__.s = deferredModule[0]);
/******/ 			}
/******/ 		}
/******/
/******/ 		return result;
/******/ 	}
/******/
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// object to store loaded and loading chunks
/******/ 	// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 	// Promise = chunk loading, 0 = chunk loaded
/******/ 	var installedChunks = {
/******/ 		"common": 0
/******/ 	};
/******/
/******/ 	var deferredModules = [];
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	var jsonpArray = window["webpackJsonp"] = window["webpackJsonp"] || [];
/******/ 	var oldJsonpFunction = jsonpArray.push.bind(jsonpArray);
/******/ 	jsonpArray.push = webpackJsonpCallback;
/******/ 	jsonpArray = jsonpArray.slice();
/******/ 	for(var i = 0; i < jsonpArray.length; i++) webpackJsonpCallback(jsonpArray[i]);
/******/ 	var parentJsonpFunction = oldJsonpFunction;
/******/
/******/
/******/ 	// add entry module to deferred list
/******/ 	deferredModules.push(["./src/ts/common.ts","xpage"]);
/******/ 	// run deferred modules when ready
/******/ 	return checkDeferredModules();
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/ts/common.ts":
/*!**************************!*\
  !*** ./src/ts/common.ts ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;!(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__, exports, __webpack_require__(/*! ./xpage/select */ "./src/ts/xpage/select.ts"), __webpack_require__(/*! ./textPage/text-page.ts */ "./src/ts/textPage/text-page.ts"), __webpack_require__(/*! ./forms.ts */ "./src/ts/forms.ts"), __webpack_require__(/*! ./tabs.ts */ "./src/ts/tabs.ts")], __WEBPACK_AMD_DEFINE_RESULT__ = (function (require, exports, select_1) {
    "use strict";
    Object.defineProperty(exports, "__esModule", { value: true });
    window.selectInitial = function (targetSelect) { return new select_1.default(targetSelect); };
}).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));


/***/ }),

/***/ "./src/ts/forms.ts":
/*!*************************!*\
  !*** ./src/ts/forms.ts ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;!(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__, exports, __webpack_require__(/*! ./xpage/ready */ "./src/ts/xpage/ready.ts"), __webpack_require__(/*! ./xpage/core */ "./src/ts/xpage/core.ts"), __webpack_require__(/*! ./xpage/Element */ "./src/ts/xpage/Element.ts"), __webpack_require__(/*! ./xpage/EventListener */ "./src/ts/xpage/EventListener.ts")], __WEBPACK_AMD_DEFINE_RESULT__ = (function (require, exports, ready_1, core_1, Element_1, EventListener_1) {
    "use strict";
    Object.defineProperty(exports, "__esModule", { value: true });
    ready_1.default(function () {
        core_1.default.each(".default-input__input--file", function (el) {
            var textInput = new Element_1.default(el).closest(".default-input")
                .find(".default-input__input[type='text']").getHTMLElement(0);
            new EventListener_1.default(textInput).add("click", function (input) {
                el.click();
            });
            new EventListener_1.default(el).add("change", function (el) {
                var files = [];
                for (var i = 0; i < el.files.length; i++)
                    files.push(el.files[i].name);
                if (!files.length)
                    textInput.value = "";
                else {
                    textInput.value = files.join(", ");
                }
            });
        });
    });
}).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));


/***/ }),

/***/ "./src/ts/tabs.ts":
/*!************************!*\
  !*** ./src/ts/tabs.ts ***!
  \************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
var __generator = (this && this.__generator) || function (thisArg, body) {
    var _ = { label: 0, sent: function() { if (t[0] & 1) throw t[1]; return t[1]; }, trys: [], ops: [] }, f, y, t, g;
    return g = { next: verb(0), "throw": verb(1), "return": verb(2) }, typeof Symbol === "function" && (g[Symbol.iterator] = function() { return this; }), g;
    function verb(n) { return function (v) { return step([n, v]); }; }
    function step(op) {
        if (f) throw new TypeError("Generator is already executing.");
        while (_) try {
            if (f = 1, y && (t = op[0] & 2 ? y["return"] : op[0] ? y["throw"] || ((t = y["return"]) && t.call(y), 0) : y.next) && !(t = t.call(y, op[1])).done) return t;
            if (y = 0, t) op = [op[0] & 2, t.value];
            switch (op[0]) {
                case 0: case 1: t = op; break;
                case 4: _.label++; return { value: op[1], done: false };
                case 5: _.label++; y = op[1]; op = [0]; continue;
                case 7: op = _.ops.pop(); _.trys.pop(); continue;
                default:
                    if (!(t = _.trys, t = t.length > 0 && t[t.length - 1]) && (op[0] === 6 || op[0] === 2)) { _ = 0; continue; }
                    if (op[0] === 3 && (!t || (op[1] > t[0] && op[1] < t[3]))) { _.label = op[1]; break; }
                    if (op[0] === 6 && _.label < t[1]) { _.label = t[1]; t = op; break; }
                    if (t && _.label < t[2]) { _.label = t[2]; _.ops.push(op); break; }
                    if (t[2]) _.ops.pop();
                    _.trys.pop(); continue;
            }
            op = body.call(thisArg, _);
        } catch (e) { op = [6, e]; y = 0; } finally { f = t = 0; }
        if (op[0] & 5) throw op[1]; return { value: op[0] ? op[1] : void 0, done: true };
    }
};
!(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__, exports, __webpack_require__(/*! ./xpage/index */ "./src/ts/xpage/index.ts")], __WEBPACK_AMD_DEFINE_RESULT__ = (function (require, exports, index_1) {
    "use strict";
    Object.defineProperty(exports, "__esModule", { value: true });
    index_1.domReady(function () {
    });
    window.tabInit = function () {
        function deactivateTab(tabElement, contentElement) {
            return __awaiter(this, void 0, void 0, function () {
                return __generator(this, function (_a) {
                    contentElement.style.display = "block";
                    tabElement
                        .classList
                        .remove("active");
                    contentElement
                        .classList
                        .remove("active");
                    return [2, new Promise(function (resolve) {
                            setTimeout(function () {
                                contentElement.style.display = "";
                                resolve();
                            }, 300);
                        })];
                });
            });
        }
        ;
        new index_1.EventListener(".tabs__tab").add("click", function (btn) { return __awaiter(void 0, void 0, void 0, function () {
            var curTabsBlock, currentBtn, curBtnIndex, targetContent;
            return __generator(this, function (_a) {
                switch (_a.label) {
                    case 0:
                        curTabsBlock = btn.closest(".tabs");
                        currentBtn = new index_1.Element(btn), curBtnIndex = currentBtn.attr("data-id"), targetContent = new index_1.Element(curTabsBlock)
                            .find(".tabs__content[data-id='" + curBtnIndex + "']");
                        if (currentBtn.hasClass("active"))
                            return [2];
                        return [4, deactivateTab(curTabsBlock.querySelector(".tabs__tab.active"), curTabsBlock.querySelector(".tabs__content.active"))];
                    case 1:
                        _a.sent();
                        currentBtn.addElement(targetContent).addClass("active");
                        return [2];
                }
            });
        }); });
    };
}).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));


/***/ }),

/***/ "./src/ts/textPage/text-page.ts":
/*!**************************************!*\
  !*** ./src/ts/textPage/text-page.ts ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;!(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__, exports, __webpack_require__(/*! ../xpage/ready */ "./src/ts/xpage/ready.ts"), __webpack_require__(/*! ../xpage/core */ "./src/ts/xpage/core.ts"), __webpack_require__(/*! ../xpage/EventListener */ "./src/ts/xpage/EventListener.ts")], __WEBPACK_AMD_DEFINE_RESULT__ = (function (require, exports, ready_1, core_1, EventListener_1) {
    "use strict";
    Object.defineProperty(exports, "__esModule", { value: true });
    ready_1.default(function () {
        var tableWrap = document.createElement("div"), tableWrapTrack = document.createElement("div"), shadows = {
            right: document.createElement("div"),
            left: document.createElement("div"),
        };
        shadows.right.classList.add("table-wrap__shadow");
        shadows.right.classList.add("table-wrap__shadow--right");
        shadows.left.classList.add("table-wrap__shadow");
        shadows.left.classList.add("table-wrap__shadow--left");
        tableWrap.classList.add("table-wrap");
        tableWrapTrack.classList.add("table-wrap__track");
        core_1.default.wrap(".standard-page table:not([class])", tableWrapTrack);
        core_1.default.wrap(".table-wrap__track", tableWrap);
        core_1.default.each(".table-wrap", function (el) {
            el.insertBefore(shadows.left, el.querySelector("*:first-child"));
            el.insertBefore(shadows.right, null);
        });
        core_1.default.each(".table-wrap__track", function (track) {
            if (track.scrollWidth > track.clientWidth) {
                var wrap = track.closest(".table-wrap");
                var shadows_1 = {
                    right: wrap.querySelector(".table-wrap__shadow--right")
                };
                setShadowOpacity(shadows_1.right, track.scrollWidth - track.clientWidth);
            }
            new EventListener_1.default(track).add("scroll", function (el) {
                var wrap = el.closest(".table-wrap");
                var shadows = {
                    left: wrap.querySelector(".table-wrap__shadow--left"),
                    right: wrap.querySelector(".table-wrap__shadow--right")
                };
                setShadowOpacity(shadows.right, el.scrollWidth - el.clientWidth - el.scrollLeft);
                setShadowOpacity(shadows.left, el.scrollLeft);
            });
        });
    });
    var setShadowOpacity = function (element, scrollWidth, offsetWidth) {
        if (offsetWidth === void 0) { offsetWidth = 80; }
        element.style.opacity = (scrollWidth / offsetWidth <= 1 ? scrollWidth / offsetWidth : 1).toString();
    };
}).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));


/***/ }),

/***/ "./src/ts/xpage/index.ts":
/*!*******************************!*\
  !*** ./src/ts/xpage/index.ts ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;!(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__, exports, __webpack_require__(/*! ./core */ "./src/ts/xpage/core.ts"), __webpack_require__(/*! ./Element */ "./src/ts/xpage/Element.ts"), __webpack_require__(/*! ./EventListener */ "./src/ts/xpage/EventListener.ts"), __webpack_require__(/*! ./ready */ "./src/ts/xpage/ready.ts"), __webpack_require__(/*! ./projectSettings */ "./src/ts/xpage/projectSettings.ts"), __webpack_require__(/*! ./sameHeights */ "./src/ts/xpage/sameHeights.ts"), __webpack_require__(/*! ./viewWatcher */ "./src/ts/xpage/viewWatcher.ts")], __WEBPACK_AMD_DEFINE_RESULT__ = (function (require, exports, core_1, Element_1, EventListener_1, ready_1, projectSettings_1, sameHeights_1, viewWatcher_1) {
    "use strict";
    Object.defineProperty(exports, "__esModule", { value: true });
    Object.defineProperty(exports, "App", { enumerable: true, get: function () { return core_1.default; } });
    Object.defineProperty(exports, "Element", { enumerable: true, get: function () { return Element_1.default; } });
    Object.defineProperty(exports, "EventListener", { enumerable: true, get: function () { return EventListener_1.default; } });
    Object.defineProperty(exports, "domReady", { enumerable: true, get: function () { return ready_1.default; } });
    Object.defineProperty(exports, "settings", { enumerable: true, get: function () { return projectSettings_1.default; } });
    Object.defineProperty(exports, "sameHeights", { enumerable: true, get: function () { return sameHeights_1.default; } });
    Object.defineProperty(exports, "viewWatcher", { enumerable: true, get: function () { return viewWatcher_1.default; } });
}).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));


/***/ }),

/***/ "./src/ts/xpage/select.ts":
/*!********************************!*\
  !*** ./src/ts/xpage/select.ts ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;!(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__, exports, __webpack_require__(/*! ./EventListener */ "./src/ts/xpage/EventListener.ts"), __webpack_require__(/*! ./core */ "./src/ts/xpage/core.ts"), __webpack_require__(/*! ./Element */ "./src/ts/xpage/Element.ts")], __WEBPACK_AMD_DEFINE_RESULT__ = (function (require, exports, EventListener_1, core_1, Element_1) {
    "use strict";
    Object.defineProperty(exports, "__esModule", { value: true });
    var selectType;
    (function (selectType) {
        selectType[selectType["Single"] = 0] = "Single";
        selectType[selectType["Mutiple"] = 1] = "Mutiple";
    })(selectType || (selectType = {}));
    var optionsState;
    (function (optionsState) {
        optionsState[optionsState["opened"] = 0] = "opened";
        optionsState[optionsState["closed"] = 1] = "closed";
    })(optionsState || (optionsState = {}));
    var select = (function () {
        function select(select, settings) {
            this._type = selectType.Single;
            if (typeof select == "string")
                this._el = core_1.default.elementsGetter(select) ? core_1.default.elementsGetter(select)[0] : document.createElement("select");
            else if (select instanceof HTMLSelectElement)
                this._el = select;
            else {
                throw Error(select + " is not a select.");
                return;
            }
            if (!this._el.options.length)
                return;
            this.options = this._el.options;
            this.createSelect();
        }
        Object.defineProperty(select.prototype, "el", {
            get: function () {
                return this._el;
            },
            set: function (el) {
                this._el = el;
            },
            enumerable: false,
            configurable: true
        });
        Object.defineProperty(select.prototype, "options", {
            set: function (options) {
                this._options = options;
                this._customOptions = new selectOptions(options);
            },
            enumerable: false,
            configurable: true
        });
        Object.defineProperty(select.prototype, "value", {
            set: function (newVal) {
                if (newVal == this.el.value)
                    return;
                this.el.value = newVal;
                new EventListener_1.default(this.el).trigger("change");
            },
            enumerable: false,
            configurable: true
        });
        select.prototype.createSelect = function () {
            var fakeDiv = document.createElement("div");
            fakeDiv.innerHTML = this._customOptions.render();
            this._el.parentNode.insertBefore(fakeDiv.querySelector(".my-select__list-cont"), this._el.nextSibling);
            this.el.MySelect = this;
            this.bindEvents();
        };
        select.prototype.bindEvents = function () {
            var _this = this;
            new EventListener_1.default(this.el).add("mousedown", function (el, e) {
                e.preventDefault();
                if (el.classList.contains("js__opened"))
                    el.classList.remove("js__opened");
                else
                    el.classList.add("js__opened");
            });
            new EventListener_1.default("body").add("click", function (el, event) {
                var target = new Element_1.default(event.target), parent = _this.el.closest("div").querySelector(".my-select__list");
                if (!target.is(_this.el)
                    && !new Element_1.default(_this.el).has(target)
                    && !target.is(parent)
                    && !new Element_1.default(parent).has(target))
                    _this.el.classList.remove("js__opened");
            });
            new EventListener_1.default(this.el).add("focus", function (el, e) {
                el.classList.add("js__opened");
            });
            new EventListener_1.default(this.el).add("blur", function (el, e) {
                el.classList.remove("js__opened");
            });
            var $options = new Element_1.default(this.el.closest("div").querySelectorAll(".my-select__list-option"));
            new EventListener_1.default($options).add("click", function (el) {
                $options.removeClass("selected");
                el.classList.add("selected");
                _this.value = el.getAttribute("value") || el.textContent || "0";
                new EventListener_1.default(el).trigger("change");
                _this.el.classList.remove("js__opened");
            });
        };
        return select;
    }());
    var selectOptions = (function () {
        function selectOptions(_options) {
            this._options = _options;
            this._template = "<div class='my-select__list-cont'><ul class='my-select__list'>%options%</ul></div>";
            this._state = optionsState.closed;
            this._optionsArray = [];
            this.length = 0;
            this.length = this._options.length;
            if (this.length == 0)
                return;
            for (var i = 0; i < this.length; i++) {
                this._optionsArray.push(new selectOption(this._options[i]));
            }
        }
        Object.defineProperty(selectOptions.prototype, "state", {
            get: function () {
                return this.state;
            },
            set: function (newState) {
                this.state = newState;
            },
            enumerable: false,
            configurable: true
        });
        Object.defineProperty(selectOptions.prototype, "renderedOptions", {
            get: function () {
                var optionsString = "";
                for (var _i = 0, _a = this._optionsArray; _i < _a.length; _i++) {
                    var option = _a[_i];
                    optionsString += " " + option.render();
                }
                return optionsString;
            },
            enumerable: false,
            configurable: true
        });
        Object.defineProperty(selectOptions.prototype, "options", {
            get: function () {
                return this._optionsArray;
            },
            enumerable: false,
            configurable: true
        });
        selectOptions.prototype.replaceTemplateMarks = function (template) {
            return template.replace("%options%", this.renderedOptions);
        };
        selectOptions.prototype.render = function (template) {
            if (!template)
                return this.replaceTemplateMarks(this._template);
            else
                return this.replaceTemplateMarks(template);
        };
        return selectOptions;
    }());
    var selectOption = (function () {
        function selectOption(_el) {
            this._el = _el;
            this._template = "<li %attrs% class='my-select__list-option %classes%'>%text%</li>";
            this._text = this._el.text;
            this._value = this._el.value;
            this._attributes = this._el.attributes;
        }
        Object.defineProperty(selectOption.prototype, "text", {
            get: function () {
                return this._text;
            },
            enumerable: false,
            configurable: true
        });
        Object.defineProperty(selectOption.prototype, "value", {
            get: function () {
                return this._value;
            },
            enumerable: false,
            configurable: true
        });
        Object.defineProperty(selectOption.prototype, "attributes", {
            get: function () {
                return this._attributes;
            },
            enumerable: false,
            configurable: true
        });
        selectOption.prototype.getAttrsString = function () {
            ;
            var attrsObject = [], attrsString = "";
            for (var i = 0; i < this.attributes.length; i++) {
                attrsObject.push({
                    name: this.attributes[i].localName,
                    value: this.attributes[i].textContent
                });
                attrsString += " " + attrsObject[i].name + "='" + attrsObject[i].value + "'";
            }
            return attrsString;
        };
        selectOption.prototype.replaceTemplateMarks = function (template) {
            return template.replace("%attrs%", this.getAttrsString()).replace("%text%", this.text);
        };
        selectOption.prototype.render = function (template) {
            if (!template)
                return this.replaceTemplateMarks(this._template);
            else
                return this.replaceTemplateMarks(template);
        };
        return selectOption;
    }());
    exports.default = select;
}).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));


/***/ })

/******/ });
//# sourceMappingURL=common.js.map