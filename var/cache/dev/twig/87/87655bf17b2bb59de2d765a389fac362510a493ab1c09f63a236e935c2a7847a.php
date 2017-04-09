<?php

/* EloboostedBackofficeBundle:Compte:AccountReports.html.twig */
class __TwigTemplate_9c247da704ff6b337c9404044b6f935f6aba78fa9825a6c8bc1c7419923d7397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:Compte:AccountReports.html.twig", 1);
        $this->blocks = array(
            'extrastyles' => array($this, 'block_extrastyles'),
            'extrascript' => array($this, 'block_extrascript'),
            'insiderowbottom' => array($this, 'block_insiderowbottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedBackofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_437049ba75f0e26b3c7ec6988443a1c949e4b3f39a56d1ace950346ab439bf73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437049ba75f0e26b3c7ec6988443a1c949e4b3f39a56d1ace950346ab439bf73->enter($__internal_437049ba75f0e26b3c7ec6988443a1c949e4b3f39a56d1ace950346ab439bf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Compte:AccountReports.html.twig"));

        $__internal_bdb964e1bb511a3c723c96415e40ff728d8924e768da2b72be1ebf5e80b061bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb964e1bb511a3c723c96415e40ff728d8924e768da2b72be1ebf5e80b061bb->enter($__internal_bdb964e1bb511a3c723c96415e40ff728d8924e768da2b72be1ebf5e80b061bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Compte:AccountReports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_437049ba75f0e26b3c7ec6988443a1c949e4b3f39a56d1ace950346ab439bf73->leave($__internal_437049ba75f0e26b3c7ec6988443a1c949e4b3f39a56d1ace950346ab439bf73_prof);

        
        $__internal_bdb964e1bb511a3c723c96415e40ff728d8924e768da2b72be1ebf5e80b061bb->leave($__internal_bdb964e1bb511a3c723c96415e40ff728d8924e768da2b72be1ebf5e80b061bb_prof);

    }

    // line 2
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_48ef1db71a13ccb3e5b23d73e0884906e36e0d2b4f2e4418b96312f8ea37ba8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ef1db71a13ccb3e5b23d73e0884906e36e0d2b4f2e4418b96312f8ea37ba8d->enter($__internal_48ef1db71a13ccb3e5b23d73e0884906e36e0d2b4f2e4418b96312f8ea37ba8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_47ccbbc3d86ad6e7f4d587b91587db3a60af477460fb34ed532cc9661953ffb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ccbbc3d86ad6e7f4d587b91587db3a60af477460fb34ed532cc9661953ffb2->enter($__internal_47ccbbc3d86ad6e7f4d587b91587db3a60af477460fb34ed532cc9661953ffb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        // line 3
        echo "
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-bs/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jquery/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <!-- blue theme stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/TableSorter/css/theme.blue.css"), "html", null, true);
        echo "\">
    <!-- tablesorter plugin -->
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/TableSorter/js/jquery.tablesorter.js"), "html", null, true);
        echo "\"></script>

    <!-- tablesorter widget file - loaded after the plugin -->
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/TableSorter/js/jquery.tablesorter.widgets.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(function() {

            // call the tablesorter plugin
            \$(\"#table\").tablesorter({
                theme: 'blue',

                // hidden filter input/selects will resize the columns, so try to minimize the change
                widthFixed : true,

                // initialize zebra striping and filter widgets
                widgets: [\"zebra\", \"filter\"],

                ignoreCase: false,

                widgetOptions : {

                    // filter_anyMatch options was removed in v2.15; it has been replaced by the filter_external option

                    // If there are child rows in the table (rows with class name from \"cssChildRow\" option)
                    // and this option is true and a match is found anywhere in the child row, then it will make that row
                    // visible; default is false
                    filter_childRows : true,

                    // if true, filter child row content by column; filter_childRows must also be true
                    filter_childByColumn : true,

                    // if true, include matching child row siblings
                    filter_childWithSibs : true,

                    // if true, a filter will be added to the top of each table column;
                    // disabled by using -> headers: { 1: { filter: false } } OR add class=\"filter-false\"
                    // if you set this to false, make sure you perform a search using the second method below
                    filter_columnFilters : true,

                    // if true, allows using \"#:{query}\" in AnyMatch searches (column:query; added v2.20.0)
                    filter_columnAnyMatch: true,

                    // extra css class name (string or array) added to the filter element (input or select)
                    filter_cellFilter : '',

                    // extra css class name(s) applied to the table row containing the filters & the inputs within that row
                    // this option can either be a string (class applied to all filters) or an array (class applied to indexed filter)
                    filter_cssFilter : '', // or []

                    // add a default column filter type \"~{query}\" to make fuzzy searches default;
                    // \"{q1} AND {q2}\" to make all searches use a logical AND.
                    filter_defaultFilter : {},

                    // filters to exclude, per column
                    filter_excludeFilter : {},

                    // jQuery selector (or object) pointing to an input to be used to match the contents of any column
                    // please refer to the filter-any-match demo for limitations - new in v2.15
                    filter_external : '',

                    // class added to filtered rows (rows that are not showing); needed by pager plugin
                    filter_filteredRow : 'filtered',

                    // add custom filter elements to the filter row
                    // see the filter formatter demos for more specifics
                    filter_formatter : null,

                    // add custom filter functions using this option
                    // see the filter widget custom demo for more specifics on how to use this option
                    filter_functions : null,

                    // hide filter row when table is empty
                    filter_hideEmpty : true,

                    // if true, filters are collapsed initially, but can be revealed by hovering over the grey bar immediately
                    // below the header row. Additionally, tabbing through the document will open the filter row when an input gets focus
                    // in v2.26.6, this option will also accept a function
                    filter_hideFilters : true,

                    // Set this option to false to make the searches case sensitive
                    filter_ignoreCase : true,

                    // if true, search column content while the user types (with a delay).
                    // In v2.27.3, this option can contain an
                    // object with column indexes or classnames; \"fallback\" is used
                    // for undefined columns
                    filter_liveSearch : true,

                    // global query settings ('exact' or 'match'); overridden by \"filter-match\" or \"filter-exact\" class
                    filter_matchType : { 'input': 'exact', 'select': 'exact' },

                    // a header with a select dropdown & this class name will only show available (visible) options within that drop down.
                    filter_onlyAvail : 'filter-onlyAvail',

                    // default placeholder text (overridden by any header \"data-placeholder\" setting)
                    filter_placeholder : { search : '', select : '' },

                    // jQuery selector string of an element used to reset the filters
                    filter_reset : 'button.reset',

                    // Reset filter input when the user presses escape - normalized across browsers
                    filter_resetOnEsc : true,

                    // Use the \$.tablesorter.storage utility to save the most recent filters (default setting is false)
                    filter_saveFilters : true,

                    // Delay in milliseconds before the filter widget starts searching; This option prevents searching for
                    // every character while typing and should make searching large tables faster.
                    filter_searchDelay : 300,

                    // allow searching through already filtered rows in special circumstances; will speed up searching in large tables if true
                    filter_searchFiltered: true,

                    // include a function to return an array of values to be added to the column filter select
                    filter_selectSource  : null,

                    // if true, server-side filtering should be performed because client-side filtering will be disabled, but
                    // the ui and events will still be used.
                    filter_serversideFiltering : false,

                    // Set this option to true to use the filter to find text from the start of the column
                    // So typing in \"a\" will find \"albert\" but not \"frank\", both have a's; default is false
                    filter_startsWith : false,

                    // Filter using parsed content for ALL columns
                    // be careful on using this on date columns as the date is parsed and stored as time in seconds
                    filter_useParsedData : false,

                    // data attribute in the header cell that contains the default filter value
                    filter_defaultAttrib : 'data-value',

                    // filter_selectSource array text left of the separator is added to the option value, right into the option text
                    filter_selectSourceSeparator : '|'

                }

            });

            // Clear stored filters - added v2.25.6
            \$('.resetsaved').click(function(){
                \$('#table').trigger('filterResetSaved');

                // show quick popup to indicate something happened
                var \$message = \$('<span class=\"results\"> Reset</span>').insertAfter(this);
                setTimeout(function(){
                    \$message.remove();
                }, 500);
                return false;
            });

            // External search
            // buttons set up like this:
            // <button type=\"button\" data-filter-column=\"4\" data-filter-text=\"2?%\">Saved Search</button>


        });
    </script>
";
        
        $__internal_47ccbbc3d86ad6e7f4d587b91587db3a60af477460fb34ed532cc9661953ffb2->leave($__internal_47ccbbc3d86ad6e7f4d587b91587db3a60af477460fb34ed532cc9661953ffb2_prof);

        
        $__internal_48ef1db71a13ccb3e5b23d73e0884906e36e0d2b4f2e4418b96312f8ea37ba8d->leave($__internal_48ef1db71a13ccb3e5b23d73e0884906e36e0d2b4f2e4418b96312f8ea37ba8d_prof);

    }

    // line 175
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_50335fb02fd4138904442f8d739ca9f3c8f9b8b89b31bfac90ffdaf0dd2cecad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50335fb02fd4138904442f8d739ca9f3c8f9b8b89b31bfac90ffdaf0dd2cecad->enter($__internal_50335fb02fd4138904442f8d739ca9f3c8f9b8b89b31bfac90ffdaf0dd2cecad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_a4b873bcfd1a1dfe9f924afc3a8648b9439ad8a0828f4a1ff0798299a8811afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b873bcfd1a1dfe9f924afc3a8648b9439ad8a0828f4a1ff0798299a8811afb->enter($__internal_a4b873bcfd1a1dfe9f924afc3a8648b9439ad8a0828f4a1ff0798299a8811afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        // line 176
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/BOassets/vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/jquery/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
    <!-- blue theme stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/TableSorter/css/theme.blue.css"), "html", null, true);
        echo "\">
    <!-- tablesorter plugin -->
    <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/TableSorter/js/jquery.tablesorter.js"), "html", null, true);
        echo "\"></script>

    <!-- tablesorter widget file - loaded after the plugin -->
    <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets/vendors/TableSorter/js/jquery.tablesorter.widgets.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_a4b873bcfd1a1dfe9f924afc3a8648b9439ad8a0828f4a1ff0798299a8811afb->leave($__internal_a4b873bcfd1a1dfe9f924afc3a8648b9439ad8a0828f4a1ff0798299a8811afb_prof);

        
        $__internal_50335fb02fd4138904442f8d739ca9f3c8f9b8b89b31bfac90ffdaf0dd2cecad->leave($__internal_50335fb02fd4138904442f8d739ca9f3c8f9b8b89b31bfac90ffdaf0dd2cecad_prof);

    }

    // line 203
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_a370e3bef49c56438a5be37ca54c7bd11d63072da88c907adce68d68e70b2f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a370e3bef49c56438a5be37ca54c7bd11d63072da88c907adce68d68e70b2f04->enter($__internal_a370e3bef49c56438a5be37ca54c7bd11d63072da88c907adce68d68e70b2f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_3b92d62c538eadf942770e80e0b1681a83dff0d08ada81695f6770e68959aff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b92d62c538eadf942770e80e0b1681a83dff0d08ada81695f6770e68959aff4->enter($__internal_3b92d62c538eadf942770e80e0b1681a83dff0d08ada81695f6770e68959aff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 204
        echo "

        <table id=\"table\" class=\"tablesorter\">
            <thead>
            <tr>
                <!-- you can also add a placeholder using script; \$('.tablesorter th:eq(0)').data('placeholder', 'hello') -->
                <th data-placeholder=\"\" class=\"filter-false\">Reports | Sender</th>
                <th data-placeholder=\"Try B*{space} or alex|br*|c\" class=\"filter-match\">Reports | Target </th>
                <th data-placeholder=\"Try <d\">Content</th>
                <th data-placeholder=\"Try >=33\">Links </th>
                <th data-placeholder=\"Try <9.99\">ok</th>

            </tr>
            </thead>
            <tbody>
            ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["reports"]);
        foreach ($context['_seq'] as $context["_key"] => $context["reports"]) {
            // line 220
            echo "                <tr>
                    <td> ";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reports"], "idCompteSng", array()), "nombreDeSignalisation", array()), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reports"], "idCompteSng", array()), "pseudo", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reports"], "idPostSng", array()), "idComptePost", array()), "nombreDeSignalisation", array()), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reports"], "idPostSng", array()), "idComptePost", array()), "pseudo", array()), "html", null, true);
            echo "</td>

                    ";
            // line 224
            if (($this->getAttribute($context["reports"], "idCommentaireSng", array()) == null)) {
                // line 225
                echo "                        <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("WarnTarget", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["reports"], "idPostSng", array()), "idComptePost", array()), "idCompte", array()), "idSignalisation" => $this->getAttribute($context["reports"], "idSignalisation", array()))), "html", null, true);
                echo "\"> Warn target </a></td>
                        <td><a href=\"";
                // line 226
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readPost", array("idPost" => $this->getAttribute($this->getAttribute($context["reports"], "idPostSng", array()), "idPost", array()))), "html", null, true);
                echo "\"> Link to post </a></td>

                    ";
            } else {
                // line 229
                echo "                        <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("WarnTarget", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["reports"], "idCommentaireSng", array()), "idCompteCp", array()), "idCompte", array()), "idSignalisation" => $this->getAttribute($context["reports"], "idSignalisation", array()))), "html", null, true);
                echo "\"> Warn target </a></td>
                        <td><a href=\"";
                // line 230
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("readPost", array("idPost" => $this->getAttribute($this->getAttribute($context["reports"], "idPostSng", array()), "idPost", array()))), "html", null, true);
                echo "\"> Link to the comment's post </a></td>

                    ";
            }
            // line 233
            echo "
                    <td><a href=\"";
            // line 234
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("WarnSender", array("id" => $this->getAttribute($this->getAttribute($context["reports"], "idCompteSng", array()), "idCompte", array()), "idSignalisation" => $this->getAttribute($context["reports"], "idSignalisation", array()))), "html", null, true);
            echo "\"> Warn Sender </a></td>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reports'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "            </tbody>
        </table>


";
        
        $__internal_3b92d62c538eadf942770e80e0b1681a83dff0d08ada81695f6770e68959aff4->leave($__internal_3b92d62c538eadf942770e80e0b1681a83dff0d08ada81695f6770e68959aff4_prof);

        
        $__internal_a370e3bef49c56438a5be37ca54c7bd11d63072da88c907adce68d68e70b2f04->leave($__internal_a370e3bef49c56438a5be37ca54c7bd11d63072da88c907adce68d68e70b2f04_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:Compte:AccountReports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 238,  431 => 234,  428 => 233,  422 => 230,  417 => 229,  411 => 226,  406 => 225,  404 => 224,  397 => 222,  391 => 221,  388 => 220,  384 => 219,  367 => 204,  358 => 203,  345 => 199,  339 => 196,  334 => 194,  329 => 192,  324 => 190,  320 => 189,  316 => 188,  312 => 187,  308 => 186,  304 => 185,  300 => 184,  296 => 183,  292 => 182,  288 => 181,  284 => 180,  280 => 179,  276 => 178,  272 => 177,  267 => 176,  258 => 175,  92 => 18,  86 => 15,  81 => 13,  76 => 11,  70 => 8,  66 => 7,  62 => 6,  58 => 5,  54 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"EloboostedBackofficeBundle:Default:Layout.html.twig\" %}
{% block extrastyles %}

    <link href=\"{{ asset('/BOassets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/BOassets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/BOassets/vendors/datatables.net-bs/css/dataTables.bootstrap.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/BOassets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('/BOassets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}\" rel=\"stylesheet\">


    <script type=\"text/javascript\" src=\"{{ asset('assets/jquery/jquery-1.9.1.js') }}\"></script>
    <!-- blue theme stylesheet -->
    <link rel=\"stylesheet\" href=\"{{ asset('BOassets/vendors/TableSorter/css/theme.blue.css') }}\">
    <!-- tablesorter plugin -->
    <script src=\"{{ asset('BOassets/vendors/TableSorter/js/jquery.tablesorter.js') }}\"></script>

    <!-- tablesorter widget file - loaded after the plugin -->
    <script src=\"{{ asset('BOassets/vendors/TableSorter/js/jquery.tablesorter.widgets.js') }}\"></script>

    <script>
        \$(function() {

            // call the tablesorter plugin
            \$(\"#table\").tablesorter({
                theme: 'blue',

                // hidden filter input/selects will resize the columns, so try to minimize the change
                widthFixed : true,

                // initialize zebra striping and filter widgets
                widgets: [\"zebra\", \"filter\"],

                ignoreCase: false,

                widgetOptions : {

                    // filter_anyMatch options was removed in v2.15; it has been replaced by the filter_external option

                    // If there are child rows in the table (rows with class name from \"cssChildRow\" option)
                    // and this option is true and a match is found anywhere in the child row, then it will make that row
                    // visible; default is false
                    filter_childRows : true,

                    // if true, filter child row content by column; filter_childRows must also be true
                    filter_childByColumn : true,

                    // if true, include matching child row siblings
                    filter_childWithSibs : true,

                    // if true, a filter will be added to the top of each table column;
                    // disabled by using -> headers: { 1: { filter: false } } OR add class=\"filter-false\"
                    // if you set this to false, make sure you perform a search using the second method below
                    filter_columnFilters : true,

                    // if true, allows using \"#:{query}\" in AnyMatch searches (column:query; added v2.20.0)
                    filter_columnAnyMatch: true,

                    // extra css class name (string or array) added to the filter element (input or select)
                    filter_cellFilter : '',

                    // extra css class name(s) applied to the table row containing the filters & the inputs within that row
                    // this option can either be a string (class applied to all filters) or an array (class applied to indexed filter)
                    filter_cssFilter : '', // or []

                    // add a default column filter type \"~{query}\" to make fuzzy searches default;
                    // \"{q1} AND {q2}\" to make all searches use a logical AND.
                    filter_defaultFilter : {},

                    // filters to exclude, per column
                    filter_excludeFilter : {},

                    // jQuery selector (or object) pointing to an input to be used to match the contents of any column
                    // please refer to the filter-any-match demo for limitations - new in v2.15
                    filter_external : '',

                    // class added to filtered rows (rows that are not showing); needed by pager plugin
                    filter_filteredRow : 'filtered',

                    // add custom filter elements to the filter row
                    // see the filter formatter demos for more specifics
                    filter_formatter : null,

                    // add custom filter functions using this option
                    // see the filter widget custom demo for more specifics on how to use this option
                    filter_functions : null,

                    // hide filter row when table is empty
                    filter_hideEmpty : true,

                    // if true, filters are collapsed initially, but can be revealed by hovering over the grey bar immediately
                    // below the header row. Additionally, tabbing through the document will open the filter row when an input gets focus
                    // in v2.26.6, this option will also accept a function
                    filter_hideFilters : true,

                    // Set this option to false to make the searches case sensitive
                    filter_ignoreCase : true,

                    // if true, search column content while the user types (with a delay).
                    // In v2.27.3, this option can contain an
                    // object with column indexes or classnames; \"fallback\" is used
                    // for undefined columns
                    filter_liveSearch : true,

                    // global query settings ('exact' or 'match'); overridden by \"filter-match\" or \"filter-exact\" class
                    filter_matchType : { 'input': 'exact', 'select': 'exact' },

                    // a header with a select dropdown & this class name will only show available (visible) options within that drop down.
                    filter_onlyAvail : 'filter-onlyAvail',

                    // default placeholder text (overridden by any header \"data-placeholder\" setting)
                    filter_placeholder : { search : '', select : '' },

                    // jQuery selector string of an element used to reset the filters
                    filter_reset : 'button.reset',

                    // Reset filter input when the user presses escape - normalized across browsers
                    filter_resetOnEsc : true,

                    // Use the \$.tablesorter.storage utility to save the most recent filters (default setting is false)
                    filter_saveFilters : true,

                    // Delay in milliseconds before the filter widget starts searching; This option prevents searching for
                    // every character while typing and should make searching large tables faster.
                    filter_searchDelay : 300,

                    // allow searching through already filtered rows in special circumstances; will speed up searching in large tables if true
                    filter_searchFiltered: true,

                    // include a function to return an array of values to be added to the column filter select
                    filter_selectSource  : null,

                    // if true, server-side filtering should be performed because client-side filtering will be disabled, but
                    // the ui and events will still be used.
                    filter_serversideFiltering : false,

                    // Set this option to true to use the filter to find text from the start of the column
                    // So typing in \"a\" will find \"albert\" but not \"frank\", both have a's; default is false
                    filter_startsWith : false,

                    // Filter using parsed content for ALL columns
                    // be careful on using this on date columns as the date is parsed and stored as time in seconds
                    filter_useParsedData : false,

                    // data attribute in the header cell that contains the default filter value
                    filter_defaultAttrib : 'data-value',

                    // filter_selectSource array text left of the separator is added to the option value, right into the option text
                    filter_selectSourceSeparator : '|'

                }

            });

            // Clear stored filters - added v2.25.6
            \$('.resetsaved').click(function(){
                \$('#table').trigger('filterResetSaved');

                // show quick popup to indicate something happened
                var \$message = \$('<span class=\"results\"> Reset</span>').insertAfter(this);
                setTimeout(function(){
                    \$message.remove();
                }, 500);
                return false;
            });

            // External search
            // buttons set up like this:
            // <button type=\"button\" data-filter-column=\"4\" data-filter-text=\"2?%\">Saved Search</button>


        });
    </script>
{% endblock %}

{% block extrascript %}
    <script src=\"{{ asset('/BOassets/vendors/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-buttons/js/buttons.print.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/jszip/dist/jszip.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/pdfmake/build/pdfmake.min.js') }}\"></script>
    <script src=\"{{ asset('/BOassets/vendors/pdfmake/build/vfs_fonts.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{ asset('assets/jquery/jquery-1.9.1.js') }}\"></script>
    <!-- blue theme stylesheet -->
    <link rel=\"stylesheet\" href=\"{{ asset('BOassets/vendors/TableSorter/css/theme.blue.css') }}\">
    <!-- tablesorter plugin -->
    <script src=\"{{ asset('BOassets/vendors/TableSorter/js/jquery.tablesorter.js') }}\"></script>

    <!-- tablesorter widget file - loaded after the plugin -->
    <script src=\"{{ asset('BOassets/vendors/TableSorter/js/jquery.tablesorter.widgets.js') }}\"></script>

{% endblock %}

{% block insiderowbottom %}


        <table id=\"table\" class=\"tablesorter\">
            <thead>
            <tr>
                <!-- you can also add a placeholder using script; \$('.tablesorter th:eq(0)').data('placeholder', 'hello') -->
                <th data-placeholder=\"\" class=\"filter-false\">Reports | Sender</th>
                <th data-placeholder=\"Try B*{space} or alex|br*|c\" class=\"filter-match\">Reports | Target </th>
                <th data-placeholder=\"Try <d\">Content</th>
                <th data-placeholder=\"Try >=33\">Links </th>
                <th data-placeholder=\"Try <9.99\">ok</th>

            </tr>
            </thead>
            <tbody>
            {% for reports in reports %}
                <tr>
                    <td> {{ reports.idCompteSng.nombreDeSignalisation }} | {{ reports.idCompteSng.pseudo }}</td>
                    <td>{{ reports.idPostSng.idComptePost.nombreDeSignalisation }} | {{ reports.idPostSng.idComptePost.pseudo }}</td>

                    {% if reports.idCommentaireSng == null %}
                        <td><a href=\"{{ path('WarnTarget',{'id' : reports.idPostSng.idComptePost.idCompte ,'idSignalisation' : reports.idSignalisation}) }}\"> Warn target </a></td>
                        <td><a href=\"{{ path('readPost',{'idPost' : reports.idPostSng.idPost}) }}\"> Link to post </a></td>

                    {% else %}
                        <td><a href=\"{{ path('WarnTarget',{'id' : reports.idCommentaireSng.idCompteCp.idCompte ,'idSignalisation' : reports.idSignalisation}) }}\"> Warn target </a></td>
                        <td><a href=\"{{ path('readPost',{'idPost' : reports.idPostSng.idPost}) }}\"> Link to the comment's post </a></td>

                    {% endif %}

                    <td><a href=\"{{ path('WarnSender',{'id' : reports.idCompteSng.idCompte ,'idSignalisation' : reports.idSignalisation}) }}\"> Warn Sender </a></td>


                    {% endfor %}
            </tbody>
        </table>


{% endblock %}", "EloboostedBackofficeBundle:Compte:AccountReports.html.twig", "C:\\wamp64\\www\\testmerge\\src\\Eloboosted\\BackofficeBundle/Resources/views/Compte/AccountReports.html.twig");
    }
}
