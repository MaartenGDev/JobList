/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.l = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// identity function for calling harmory imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };

/******/ 	// define getter function for harmory exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		Object.defineProperty(exports, name, {
/******/ 			configurable: false,
/******/ 			enumerable: true,
/******/ 			get: getter
/******/ 		});
/******/ 	};

/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};

/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports) {

eval("var mobileNavigation = document.getElementById('mobile-nav');\nvar navigationIsShown = false;\n\nmobileNavigation.addEventListener(\"click\", function () {\n\n    var list = document.querySelectorAll('li.nav-item');\n\n    [].forEach.call(list, function (item) {\n        item.style.display = navigationIsShown ? 'none' : 'block';\n    });\n\n    navigationIsShown = !navigationIsShown;\n});\n\n\nwindow.onload = function () {\n    console.log('lets go');\n    var jobs = document.querySelectorAll('.job-list__item');\n    var height = 0;\n\n    jobs.forEach(function (job) {\n        if(job.offsetHeight > height){\n            height = job.offsetHeight;\n        }\n    });\n\n    jobs.forEach(function (job) {\n       job.style.height = (height + 50) + 'px';\n    });\n}//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMC5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL2FwcC5qcz84YjY3Iiwid2VicGFjazovLy8/ZDQxZCJdLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCBtb2JpbGVOYXZpZ2F0aW9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ21vYmlsZS1uYXYnKTtcbmxldCBuYXZpZ2F0aW9uSXNTaG93biA9IGZhbHNlO1xuXG5tb2JpbGVOYXZpZ2F0aW9uLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoKSA9PiB7XG5cbiAgICBsZXQgbGlzdCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ2xpLm5hdi1pdGVtJyk7XG5cbiAgICBbXS5mb3JFYWNoLmNhbGwobGlzdCwgKGl0ZW0pID0+IHtcbiAgICAgICAgaXRlbS5zdHlsZS5kaXNwbGF5ID0gbmF2aWdhdGlvbklzU2hvd24gPyAnbm9uZScgOiAnYmxvY2snO1xuICAgIH0pO1xuXG4gICAgbmF2aWdhdGlvbklzU2hvd24gPSAhbmF2aWdhdGlvbklzU2hvd247XG59KTtcblxuXG53aW5kb3cub25sb2FkID0gKCkgPT4ge1xuICAgIGNvbnNvbGUubG9nKCdsZXRzIGdvJyk7XG4gICAgY29uc3Qgam9icyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5qb2ItbGlzdF9faXRlbScpO1xuICAgIGxldCBoZWlnaHQgPSAwO1xuXG4gICAgam9icy5mb3JFYWNoKGpvYiA9PiB7XG4gICAgICAgIGlmKGpvYi5vZmZzZXRIZWlnaHQgPiBoZWlnaHQpe1xuICAgICAgICAgICAgaGVpZ2h0ID0gam9iLm9mZnNldEhlaWdodDtcbiAgICAgICAgfVxuICAgIH0pO1xuXG4gICAgam9icy5mb3JFYWNoKGpvYiA9PiB7XG4gICAgICAgam9iLnN0eWxlLmhlaWdodCA9IChoZWlnaHQgKyA1MCkgKyAncHgnO1xuICAgIH0pO1xufVxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyByZXNvdXJjZXMvYXNzZXRzL2pzL2FwcC5qcyIsInVuZGVmaW5lZFxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyAiXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQ0NBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBRENBO0FBQ0E7QUNDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7Iiwic291cmNlUm9vdCI6IiJ9");

/***/ }
/******/ ]);