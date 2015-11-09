<?php

/* partials/base.html.twig */
class __TwigTemplate_5c2c99ed7db677a4d60e682c1fd44c79ddf47a2475151dadea701b914f801434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'navigation' => array($this, 'block_navigation'),
            'analytics' => array($this, 'block_analytics'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 39
        echo "    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-1111124-2', 'auto');
      ga('send', 'pageview');
    
    </script>
    
    <script>
        \$(document).ready(function() {
    \t     
    \t     \$('#filterlist').quicksearch('#catlist li');
    \t     \$('#catlist li').css('display', '');
    \t});
           
    \t(function(\$, window, document, undefined) {
    \t\t\$.fn.quicksearch = function (target, opt) {
    \t\t\t
    \t\t\tvar timeout, cache, rowcache, jq_results, val = '', e = this, options = \$.extend({ 
    \t\t\t\tdelay: 100,
    \t\t\t\tselector: null,
    \t\t\t\tstripeRows: null,
    \t\t\t\tloader: null,
    \t\t\t\tnoResults: '',
    \t\t\t\tmatchedResultsCount: 0,
    \t\t\t\tbind: 'keyup',
    \t\t\t\tonBefore: function () { 
    \t\t\t\t\treturn;
    \t\t\t\t},
    \t\t\t\tonAfter: function () { 
    \t\t\t\t\treturn;
    \t\t\t\t},
    \t\t\t\tshow: function () {
    \t\t\t\t\tthis.style.display = \"\";
    \t\t\t\t},
    \t\t\t\thide: function () {
    \t\t\t\t\tthis.style.display = \"none\";
    \t\t\t\t},
    \t\t\t\tprepareQuery: function (val) {
    \t\t\t\t\treturn val.toLowerCase().split(' ');
    \t\t\t\t},
    \t\t\t\ttestQuery: function (query, txt, _row) {
    \t\t\t\t\tfor (var i = 0; i < query.length; i += 1) {
    \t\t\t\t\t\tif (txt.indexOf(query[i]) === -1) {
    \t\t\t\t\t\t\treturn false;
    \t\t\t\t\t\t}
    \t\t\t\t\t}
    \t\t\t\t\treturn true;
    \t\t\t\t}
    \t\t\t}, opt);
    \t\t\t
    \t\t\tthis.go = function () {
    \t\t\t\t
    \t\t\t\tvar i = 0,
    \t\t\t\t\tnumMatchedRows = 0,
    \t\t\t\t\tnoresults = true, 
    \t\t\t\t\tquery = options.prepareQuery(val),
    \t\t\t\t\tval_empty = (val.replace(' ', '').length === 0);
    \t\t\t\t
    \t\t\t\tfor (var i = 0, len = rowcache.length; i < len; i++) {
    \t\t\t\t\tif (val_empty || options.testQuery(query, cache[i], rowcache[i])) {
    \t\t\t\t\t\toptions.show.apply(rowcache[i]);
    \t\t\t\t\t\tnoresults = false;
    \t\t\t\t\t\tnumMatchedRows++;
    \t\t\t\t\t} else {
    \t\t\t\t\t\toptions.hide.apply(rowcache[i]);
    \t\t\t\t\t}
    \t\t\t\t}
    \t\t\t\t
    \t\t\t\tif (noresults) {
    \t\t\t\t\tthis.results(false);
    \t\t\t\t} else {
    \t\t\t\t\tthis.results(true);
    \t\t\t\t\tthis.stripe();
    \t\t\t\t}
    \t\t\t\t
    \t\t\t\tthis.matchedResultsCount = numMatchedRows;
    \t\t\t\tthis.loader(false);
    \t\t\t\toptions.onAfter();
    \t\t\t\t
    \t\t\t\treturn this;
    \t\t\t};
    \t\t\t
    \t\t\t/*
    \t\t\t * External API so that users can perform search programatically. 
    \t\t\t * */
    \t\t\tthis.search = function (submittedVal) {
    \t\t\t\tval = submittedVal;
    \t\t\t\te.trigger();
    \t\t\t};
    \t\t\t
    \t\t\t/*
    \t\t\t * External API to get the number of matched results as seen in 
    \t\t\t * https://github.com/ruiz107/quicksearch/commit/f78dc440b42d95ce9caed1d087174dd4359982d6
    \t\t\t * */
    \t\t\tthis.currentMatchedResults = function() {
    \t\t\t\treturn this.matchedResultsCount;
    \t\t\t};
    \t\t\t
    \t\t\tthis.stripe = function () {
    \t\t\t\t
    \t\t\t\tif (typeof options.stripeRows === \"object\" && options.stripeRows !== null)
    \t\t\t\t{
    \t\t\t\t\tvar joined = options.stripeRows.join(' ');
    \t\t\t\t\tvar stripeRows_length = options.stripeRows.length;
    \t\t\t\t\t
    \t\t\t\t\tjq_results.not(':hidden').each(function (i) {
    \t\t\t\t\t\t\$(this).removeClass(joined).addClass(options.stripeRows[i % stripeRows_length]);
    \t\t\t\t\t});
    \t\t\t\t}
    \t\t\t\t
    \t\t\t\treturn this;
    \t\t\t};
    \t\t\t
    \t\t\tthis.strip_html = function (input) {
    \t\t\t\tvar output = input.replace(new RegExp('<[^<]+\\>', 'g'), \"\");
    \t\t\t\toutput = \$.trim(output.toLowerCase());
    \t\t\t\treturn output;
    \t\t\t};
    \t\t\t
    \t\t\tthis.results = function (bool) {
    \t\t\t\tif (typeof options.noResults === \"string\" && options.noResults !== \"\") {
    \t\t\t\t\tif (bool) {
    \t\t\t\t\t\t\$(options.noResults).hide();
    \t\t\t\t\t} else {
    \t\t\t\t\t\t\$(options.noResults).show();
    \t\t\t\t\t}
    \t\t\t\t}
    \t\t\t\treturn this;
    \t\t\t};
    \t\t\t
    \t\t\tthis.loader = function (bool) {
    \t\t\t\tif (typeof options.loader === \"string\" && options.loader !== \"\") {
    \t\t\t\t\t (bool) ? \$(options.loader).show() : \$(options.loader).hide();
    \t\t\t\t}
    \t\t\t\treturn this;
    \t\t\t};
    \t\t\t
    \t\t\tthis.cache = function () {
    \t\t\t\t
    \t\t\t\tjq_results = \$(target);
    \t\t\t\t
    \t\t\t\tif (typeof options.noResults === \"string\" && options.noResults !== \"\") {
    \t\t\t\t\tjq_results = jq_results.not(options.noResults);
    \t\t\t\t}
    \t\t\t\t
    \t\t\t\tvar t = (typeof options.selector === \"string\") ? jq_results.find(options.selector) : \$(target).not(options.noResults);
    \t\t\t\tcache = t.map(function () {
    \t\t\t\t\treturn e.strip_html(this.innerHTML);
    \t\t\t\t});
    \t\t\t\t
    \t\t\t\trowcache = jq_results.map(function () {
    \t\t\t\t\treturn this;
    \t\t\t\t});
    \t
    \t\t\t\t/*
    \t\t\t\t * Modified fix for sync-ing \"val\". 
    \t\t\t\t * Original fix https://github.com/michaellwest/quicksearch/commit/4ace4008d079298a01f97f885ba8fa956a9703d1
    \t\t\t\t * */
    \t\t\t\tval = val || this.val() || \"\";
    \t\t\t\t
    \t\t\t\treturn this.go();
    \t\t\t};
    \t\t\t
    \t\t\tthis.trigger = function () {
    \t\t\t\tthis.loader(true);
    \t\t\t\toptions.onBefore();
    \t\t\t\t
    \t\t\t\twindow.clearTimeout(timeout);
    \t\t\t\ttimeout = window.setTimeout(function () {
    \t\t\t\t\te.go();
    \t\t\t\t}, options.delay);
    \t\t\t\t
    \t\t\t\treturn this;
    \t\t\t};
    \t\t\t
    \t\t\tthis.cache();
    \t\t\tthis.results(true);
    \t\t\tthis.stripe();
    \t\t\tthis.loader(false);
    \t\t\t
    \t\t\treturn this.each(function () {
    \t\t\t\t
    \t\t\t\t/*
    \t\t\t\t * Changed from .bind to .on.
    \t\t\t\t * */
    \t\t\t\t\$(this).on(options.bind, function () {
    \t\t\t\t\t
    \t\t\t\t\tval = \$(this).val();
    \t\t\t\t\te.trigger();
    \t\t\t\t});
    \t\t\t});
    \t\t\t
    \t\t};
    \t
    \t}(jQuery, this, document));       
    </script>
</head>
<body class=\"";
        // line 240
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\" data-url=\"";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "route", array());
        echo "\">
    <header id=\"header\" class=\"clearfix\">
    \t
    \t\t<div class=\"col\">
    \t\t\t<a href=\"http://www.joomlabamboo.com\"><img class=\"logo float-left\" style=\"width:45px\" src=\"http://docs.joomlabamboo.com/images/jblogo.png\"></a>
    \t\t\t<nav id=\"naviTop\">
    \t\t\t\t<ul>
    \t\t\t\t\t<li><a href=\"http://www.joomlabamboo.com/joomla-templates\">Templates</a></li>
        \t\t\t\t<li><a href=\"http://www.joomlabamboo.com/recent-topics/view-last-messages\">Forum</a></li>
        \t\t\t\t<li><a href=\"http://www.joomlabamboo.com/index.php?option=com_rsticketspro&amp;view=submit&amp;Itemid=42\">Tickets</a></li>
        \t\t\t\t<li><a href=\"http://www.joomlabamboo.com/downloads/template-downloads\">Downloads</a></li>
        \t\t\t\t<li><a href=\"http://www.joomlabamboo.com/blog\">Blog</a></li>\t
        \t\t\t\t<li style=\"float: right;\" ><a href=\"https://github.com/locii/Zen-Grid-Framework-v4-Docs\"><span style=\"margin-right: 10px;\" class=\"fa fa-github\"></span>Download Documentation</a></li>
        \t\t\t</ul>
    \t\t\t</nav>
    \t\t</div>
    \t
    </header>
    <div id=\"title\">       
    \t
       \t  <div class=\"row\">
          \t<div class=\"col title\">
          \t\t<h2 class=\"bold\"><a href=\"http://docs.joomlabamboo.com/\">Zen Grid Framework v4 Documentation</a></h2>
          \t\t
          \t\t<div class=\"searchbox\">
          \t\t    <label for=\"search-by\"><i class=\"fa fa-search\"></i></label>
          \t\t    <input id=\"search-by\" type=\"text\" placeholder=\"Search Documentation\" data-search-input=\"";
        // line 266
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/search.json/query\" />
          \t\t    <span data-search-clear><i class=\"fa fa-close\"></i></span>
          \t\t</div>
          \t</div>
       
       </div>
    </div>
    ";
        // line 273
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 274
            echo "    ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 274)->display($context);
            // line 275
            echo "    ";
        }
        // line 276
        echo "    ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 285
        echo "
    ";
        // line 286
        $this->displayBlock('body', $context, $blocks);
        // line 307
        echo "    ";
        $this->displayBlock('analytics', $context, $blocks);
        // line 308
        echo " </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 10
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/feed:atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        // line 11
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "/feed:rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\">

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "
    ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/nucleus.css", 1 => 102), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css-compiled/theme.css", 1 => 101), "method");
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/featherlight.min.css"), "method");
        // line 20
        echo "
        ";
        // line 21
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 22
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 23
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css"), "method");
            // line 24
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 25
            echo "        ";
        }
        // line 26
        echo "
        ";
        // line 27
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
    ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 32
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/featherlight.min.js"), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/learn.js"), "method");
        // line 35
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    ";
    }

    // line 276
    public function block_sidebar($context, array $blocks = array())
    {
        // line 277
        echo "   
    <nav id=\"sidebar\">
        
        <div class=\"padding highlightable\">
        ";
        // line 281
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 281)->display($context);
        // line 282
        echo "        </div>
    </nav>
    ";
    }

    // line 286
    public function block_body($context, array $blocks = array())
    {
        // line 287
        echo "    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            

            ";
        // line 295
        $this->displayBlock('content', $context, $blocks);
        // line 296
        echo "
            ";
        // line 297
        $this->displayBlock('footer', $context, $blocks);
        // line 302
        echo "
        </div>
        ";
        // line 304
        $this->displayBlock('navigation', $context, $blocks);
        // line 305
        echo "    </section>
    ";
    }

    // line 295
    public function block_content($context, array $blocks = array())
    {
    }

    // line 297
    public function block_footer($context, array $blocks = array())
    {
        // line 298
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "github", array()), "position", array()) == "bottom")) {
            // line 299
            echo "                ";
            $this->loadTemplate("partials/github_note.html.twig", "partials/base.html.twig", 299)->display($context);
            // line 300
            echo "                ";
        }
        // line 301
        echo "            ";
    }

    // line 304
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 307
    public function block_analytics($context, array $blocks = array())
    {
        $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 307)->display($context);
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 307,  485 => 304,  481 => 301,  478 => 300,  475 => 299,  472 => 298,  469 => 297,  464 => 295,  459 => 305,  457 => 304,  453 => 302,  451 => 297,  448 => 296,  446 => 295,  436 => 287,  433 => 286,  427 => 282,  425 => 281,  419 => 277,  416 => 276,  409 => 35,  406 => 34,  403 => 33,  400 => 32,  397 => 31,  394 => 30,  388 => 27,  385 => 26,  382 => 25,  379 => 24,  376 => 23,  373 => 22,  371 => 21,  368 => 20,  365 => 19,  362 => 18,  359 => 17,  356 => 16,  353 => 15,  350 => 14,  345 => 37,  343 => 30,  340 => 29,  338 => 14,  333 => 12,  329 => 11,  325 => 10,  322 => 9,  320 => 8,  312 => 7,  309 => 6,  306 => 5,  300 => 308,  297 => 307,  295 => 286,  292 => 285,  289 => 276,  286 => 275,  283 => 274,  281 => 273,  271 => 266,  240 => 240,  37 => 39,  35 => 5,  30 => 2,  28 => 1,);
    }
}
