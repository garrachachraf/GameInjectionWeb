<?php

/* EloboostedBackofficeBundle:Default:index.html.twig */
class __TwigTemplate_51478e54f980cdbed638e2fe5d59c0bf7f12ad476e76b85c304afde686721345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EloboostedBackofficeBundle:Default:Layout.html.twig", "EloboostedBackofficeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'extrastyles' => array($this, 'block_extrastyles'),
            'extrascript' => array($this, 'block_extrascript'),
            'sousmenu1' => array($this, 'block_sousmenu1'),
            'sousmenu2' => array($this, 'block_sousmenu2'),
            'sousmenu3' => array($this, 'block_sousmenu3'),
            'sousmenu4' => array($this, 'block_sousmenu4'),
            'sousmenu5' => array($this, 'block_sousmenu5'),
            'insiderowbottom' => array($this, 'block_insiderowbottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EloboostedBackofficeBundle:Default:Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1550f3adb54b02bf1465fac7b311efadacd854ade0f63afca6c46620698917e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1550f3adb54b02bf1465fac7b311efadacd854ade0f63afca6c46620698917e6->enter($__internal_1550f3adb54b02bf1465fac7b311efadacd854ade0f63afca6c46620698917e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $__internal_004890e3370b1cc1cb4c2abc62d5e7d433c0646f1d34c0a70a5c1e864ebe7ade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004890e3370b1cc1cb4c2abc62d5e7d433c0646f1d34c0a70a5c1e864ebe7ade->enter($__internal_004890e3370b1cc1cb4c2abc62d5e7d433c0646f1d34c0a70a5c1e864ebe7ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EloboostedBackofficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1550f3adb54b02bf1465fac7b311efadacd854ade0f63afca6c46620698917e6->leave($__internal_1550f3adb54b02bf1465fac7b311efadacd854ade0f63afca6c46620698917e6_prof);

        
        $__internal_004890e3370b1cc1cb4c2abc62d5e7d433c0646f1d34c0a70a5c1e864ebe7ade->leave($__internal_004890e3370b1cc1cb4c2abc62d5e7d433c0646f1d34c0a70a5c1e864ebe7ade_prof);

    }

    // line 3
    public function block_extrastyles($context, array $blocks = array())
    {
        $__internal_eac0e3b5149b917facc98ad12e49d86870dbcc8e55adc5168dcc903afe5708cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac0e3b5149b917facc98ad12e49d86870dbcc8e55adc5168dcc903afe5708cb->enter($__internal_eac0e3b5149b917facc98ad12e49d86870dbcc8e55adc5168dcc903afe5708cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        $__internal_57923cae3fe82f5083b4ea3d6343b159cb95864846522fc74f4baf4e24780da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57923cae3fe82f5083b4ea3d6343b159cb95864846522fc74f4baf4e24780da1->enter($__internal_57923cae3fe82f5083b4ea3d6343b159cb95864846522fc74f4baf4e24780da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrastyles"));

        // line 4
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net-bs/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


";
        
        $__internal_57923cae3fe82f5083b4ea3d6343b159cb95864846522fc74f4baf4e24780da1->leave($__internal_57923cae3fe82f5083b4ea3d6343b159cb95864846522fc74f4baf4e24780da1_prof);

        
        $__internal_eac0e3b5149b917facc98ad12e49d86870dbcc8e55adc5168dcc903afe5708cb->leave($__internal_eac0e3b5149b917facc98ad12e49d86870dbcc8e55adc5168dcc903afe5708cb_prof);

    }

    // line 14
    public function block_extrascript($context, array $blocks = array())
    {
        $__internal_cccb7010ba80c6e32bcd9ff227e62feb0432d49fd8b8d420c7083125184e43d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cccb7010ba80c6e32bcd9ff227e62feb0432d49fd8b8d420c7083125184e43d9->enter($__internal_cccb7010ba80c6e32bcd9ff227e62feb0432d49fd8b8d420c7083125184e43d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        $__internal_776b024d99a616e9af0c6e892fce72ccceb7b86097a7d871ac3ff6b63f6a8ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776b024d99a616e9af0c6e892fce72ccceb7b86097a7d871ac3ff6b63f6a8ef6->enter($__internal_776b024d99a616e9af0c6e892fce72ccceb7b86097a7d871ac3ff6b63f6a8ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extrascript"));

        // line 15
        echo "

    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net-buttons/js/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net-buttons/js/buttons.flash.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net-buttons/js/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net-buttons/js/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net-responsive/js/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/datatables.net-scroller/js/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/jszip/dist/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/pdfmake/build/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("BOassets//vendors/pdfmake/build/vfs_fonts.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/highcharts.js"), "html", null, true);
        echo "\">
    </script>

    <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/exporting.js"), "html", null, true);
        echo "\">
    </script>
    <script type=\"text/javascript\">
        ";
        // line 39
        echo $this->env->getExtension('Ob\HighchartsBundle\Twig\HighchartsExtension')->chart(($context["ob"] ?? $this->getContext($context, "ob")));
        echo "
    </script>

";
        
        $__internal_776b024d99a616e9af0c6e892fce72ccceb7b86097a7d871ac3ff6b63f6a8ef6->leave($__internal_776b024d99a616e9af0c6e892fce72ccceb7b86097a7d871ac3ff6b63f6a8ef6_prof);

        
        $__internal_cccb7010ba80c6e32bcd9ff227e62feb0432d49fd8b8d420c7083125184e43d9->leave($__internal_cccb7010ba80c6e32bcd9ff227e62feb0432d49fd8b8d420c7083125184e43d9_prof);

    }

    // line 43
    public function block_sousmenu1($context, array $blocks = array())
    {
        $__internal_4af7ed6e77d001f3febc18b31e689a5bdcbf5588a9da3411672ceeab028ca34d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af7ed6e77d001f3febc18b31e689a5bdcbf5588a9da3411672ceeab028ca34d->enter($__internal_4af7ed6e77d001f3febc18b31e689a5bdcbf5588a9da3411672ceeab028ca34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu1"));

        $__internal_729108ca3e6015224efa8d3823e9b5e67930b62bec22276a53a64cb30f891256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729108ca3e6015224efa8d3823e9b5e67930b62bec22276a53a64cb30f891256->enter($__internal_729108ca3e6015224efa8d3823e9b5e67930b62bec22276a53a64cb30f891256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu1"));

        // line 44
        echo "    <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Users</span>
    <div class=\"count\">";
        // line 45
        echo twig_escape_filter($this->env, ($context["compts"] ?? $this->getContext($context, "compts")), "html", null, true);
        echo "</div>
";
        
        $__internal_729108ca3e6015224efa8d3823e9b5e67930b62bec22276a53a64cb30f891256->leave($__internal_729108ca3e6015224efa8d3823e9b5e67930b62bec22276a53a64cb30f891256_prof);

        
        $__internal_4af7ed6e77d001f3febc18b31e689a5bdcbf5588a9da3411672ceeab028ca34d->leave($__internal_4af7ed6e77d001f3febc18b31e689a5bdcbf5588a9da3411672ceeab028ca34d_prof);

    }

    // line 47
    public function block_sousmenu2($context, array $blocks = array())
    {
        $__internal_a8479f6ccbbbfe212ca0203e6688fb9e8e3516d95e3b2fb70be090022b4d574a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8479f6ccbbbfe212ca0203e6688fb9e8e3516d95e3b2fb70be090022b4d574a->enter($__internal_a8479f6ccbbbfe212ca0203e6688fb9e8e3516d95e3b2fb70be090022b4d574a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu2"));

        $__internal_a49bf149d27233f31be733c7db98a751d5cc2d59eb681a4d33611b804e58d90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49bf149d27233f31be733c7db98a751d5cc2d59eb681a4d33611b804e58d90f->enter($__internal_a49bf149d27233f31be733c7db98a751d5cc2d59eb681a4d33611b804e58d90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu2"));

        // line 48
        echo "    <span class=\"count_top\"><i class=\"fa fa-gamepad\"></i> Total Games</span>
    <div class=\"count\">";
        // line 49
        echo twig_escape_filter($this->env, ($context["games"] ?? $this->getContext($context, "games")), "html", null, true);
        echo "</div>
";
        
        $__internal_a49bf149d27233f31be733c7db98a751d5cc2d59eb681a4d33611b804e58d90f->leave($__internal_a49bf149d27233f31be733c7db98a751d5cc2d59eb681a4d33611b804e58d90f_prof);

        
        $__internal_a8479f6ccbbbfe212ca0203e6688fb9e8e3516d95e3b2fb70be090022b4d574a->leave($__internal_a8479f6ccbbbfe212ca0203e6688fb9e8e3516d95e3b2fb70be090022b4d574a_prof);

    }

    // line 51
    public function block_sousmenu3($context, array $blocks = array())
    {
        $__internal_0ac22f7014a829138f183736e6573fd552ec944cadf38e99385ba18a325c8d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac22f7014a829138f183736e6573fd552ec944cadf38e99385ba18a325c8d83->enter($__internal_0ac22f7014a829138f183736e6573fd552ec944cadf38e99385ba18a325c8d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu3"));

        $__internal_4d852fff36fbd53792e12ed3fcd5d4960e7176780bdff5bee32645ae77b1ac93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d852fff36fbd53792e12ed3fcd5d4960e7176780bdff5bee32645ae77b1ac93->enter($__internal_4d852fff36fbd53792e12ed3fcd5d4960e7176780bdff5bee32645ae77b1ac93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu3"));

        // line 52
        echo "    <span class=\"count_top\"><i class=\"fa fa-trophy\"></i> Total Tournaments</span>
    <div class=\"count\">";
        // line 53
        echo twig_escape_filter($this->env, ($context["tournois"] ?? $this->getContext($context, "tournois")), "html", null, true);
        echo "</div>
";
        
        $__internal_4d852fff36fbd53792e12ed3fcd5d4960e7176780bdff5bee32645ae77b1ac93->leave($__internal_4d852fff36fbd53792e12ed3fcd5d4960e7176780bdff5bee32645ae77b1ac93_prof);

        
        $__internal_0ac22f7014a829138f183736e6573fd552ec944cadf38e99385ba18a325c8d83->leave($__internal_0ac22f7014a829138f183736e6573fd552ec944cadf38e99385ba18a325c8d83_prof);

    }

    // line 55
    public function block_sousmenu4($context, array $blocks = array())
    {
        $__internal_b86b5571a0b0ddd49501f059d423d4c0925058fc01457dfd9976f6d288d0fa7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86b5571a0b0ddd49501f059d423d4c0925058fc01457dfd9976f6d288d0fa7c->enter($__internal_b86b5571a0b0ddd49501f059d423d4c0925058fc01457dfd9976f6d288d0fa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu4"));

        $__internal_0103dd334fc1fe779d3877c8d416289b7f19119666f38e5abd339bfd02331f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0103dd334fc1fe779d3877c8d416289b7f19119666f38e5abd339bfd02331f4c->enter($__internal_0103dd334fc1fe779d3877c8d416289b7f19119666f38e5abd339bfd02331f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu4"));

        // line 56
        echo "    <span class=\"count_top\"><i class=\"fa fa-list\"></i> Total Posts</span>
    <div class=\"count\">";
        // line 57
        echo twig_escape_filter($this->env, ($context["posts"] ?? $this->getContext($context, "posts")), "html", null, true);
        echo "</div>
";
        
        $__internal_0103dd334fc1fe779d3877c8d416289b7f19119666f38e5abd339bfd02331f4c->leave($__internal_0103dd334fc1fe779d3877c8d416289b7f19119666f38e5abd339bfd02331f4c_prof);

        
        $__internal_b86b5571a0b0ddd49501f059d423d4c0925058fc01457dfd9976f6d288d0fa7c->leave($__internal_b86b5571a0b0ddd49501f059d423d4c0925058fc01457dfd9976f6d288d0fa7c_prof);

    }

    // line 59
    public function block_sousmenu5($context, array $blocks = array())
    {
        $__internal_64c305d4acbf145db38beba1881fb9f34627fccf0d1eb0741c2b8efdce2062a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c305d4acbf145db38beba1881fb9f34627fccf0d1eb0741c2b8efdce2062a9->enter($__internal_64c305d4acbf145db38beba1881fb9f34627fccf0d1eb0741c2b8efdce2062a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu5"));

        $__internal_1925d91572e6d1f085e52eb278eb62df75913358879377e30488f72f50114dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1925d91572e6d1f085e52eb278eb62df75913358879377e30488f72f50114dad->enter($__internal_1925d91572e6d1f085e52eb278eb62df75913358879377e30488f72f50114dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousmenu5"));

        // line 60
        echo "    <span class=\"count_top\"><i class=\"fa fa-product-hunt\"></i> Total Products</span>
    <div class=\"count\">";
        // line 61
        echo twig_escape_filter($this->env, ($context["prods"] ?? $this->getContext($context, "prods")), "html", null, true);
        echo "</div>
";
        
        $__internal_1925d91572e6d1f085e52eb278eb62df75913358879377e30488f72f50114dad->leave($__internal_1925d91572e6d1f085e52eb278eb62df75913358879377e30488f72f50114dad_prof);

        
        $__internal_64c305d4acbf145db38beba1881fb9f34627fccf0d1eb0741c2b8efdce2062a9->leave($__internal_64c305d4acbf145db38beba1881fb9f34627fccf0d1eb0741c2b8efdce2062a9_prof);

    }

    // line 63
    public function block_insiderowbottom($context, array $blocks = array())
    {
        $__internal_01a7ef467917b2f4a7936d1945fd357be5848b83a6ed2ced85cac6fd14b5d478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a7ef467917b2f4a7936d1945fd357be5848b83a6ed2ced85cac6fd14b5d478->enter($__internal_01a7ef467917b2f4a7936d1945fd357be5848b83a6ed2ced85cac6fd14b5d478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        $__internal_7494ff4c3ec25916f39a3a436020a09ecb07805866ab6a11e5f946db3612d093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7494ff4c3ec25916f39a3a436020a09ecb07805866ab6a11e5f946db3612d093->enter($__internal_7494ff4c3ec25916f39a3a436020a09ecb07805866ab6a11e5f946db3612d093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "insiderowbottom"));

        // line 64
        echo "
    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"dashboard_graph\">

            <div class=\"row x_title\">
                <div class=\"col-md-6\">
                    <h3>Tournaments Activities <small>fees/date</small></h3>
                </div>
            </div>

            <div class=\"col-md-9 col-sm-9 col-xs-12\">
                <div id=\"linechart\" style=\"min-width: 400px; height: 400px;\"></div>
            </div>
            <div class=\"col-md-3 col-sm-3 col-xs-12 bg-white\">

                <div>
                    <div class=\"x_title\">
                        <h2>Top Profiles</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li><a href=\"#\">Settings 1</a>
                                    </li>
                                    <li><a href=\"#\">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <ul class=\"list-unstyled top_profiles scroll-view\">
                        <li class=\"media event\">
                            <a class=\"pull-left border-aero profile_thumb\">
                                <i class=\"fa fa-user aero\"></i>
                            </a>
                            <div class=\"media-body\">
                                <a class=\"title\" href=\"#\">";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["top3"] ?? $this->getContext($context, "top3")), 0, array(), "array"), "pseudo", array()), "html", null, true);
        echo "</a>
                                <p><strong>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["top3"] ?? $this->getContext($context, "top3")), 0, array(), "array"), "points", array()), "html", null, true);
        echo "</strong> Points </p>
                                <p> <small>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["top3"] ?? $this->getContext($context, "top3")), 0, array(), "array"), "email", array()), "html", null, true);
        echo "</small>
                                </p>
                            </div>
                        </li>
                        <li class=\"media event\">
                            <a class=\"pull-left border-green profile_thumb\">
                                <i class=\"fa fa-user green\"></i>
                            </a>
                            <div class=\"media-body\">
                                <a class=\"title\" href=\"#\">";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["top3"] ?? $this->getContext($context, "top3")), 1, array(), "array"), "pseudo", array()), "html", null, true);
        echo "</a>
                                <p><strong>";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["top3"] ?? $this->getContext($context, "top3")), 1, array(), "array"), "points", array()), "html", null, true);
        echo "</strong> Points </p>
                                <p> <small>";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["top3"] ?? $this->getContext($context, "top3")), 1, array(), "array"), "email", array()), "html", null, true);
        echo "</small>
                                </p>
                            </div>
                        </li>
                        <li class=\"media event\">
                            <a class=\"pull-left border-blue profile_thumb\">
                                <i class=\"fa fa-user blue\"></i>
                            </a>
                            <div class=\"media-body\">
                                <a class=\"title\" href=\"#\">";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["top3"] ?? $this->getContext($context, "top3")), 2, array(), "array"), "pseudo", array()), "html", null, true);
        echo "</a>
                                <p><strong>";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["top3"] ?? $this->getContext($context, "top3")), 2, array(), "array"), "points", array()), "html", null, true);
        echo "</strong> Points </p>
                                <p> <small>";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["top3"] ?? $this->getContext($context, "top3")), 2, array(), "array"), "email", array()), "html", null, true);
        echo "</small>
                                </p>
                            </div>
                        </li>


                    </ul>
                </div>


            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_7494ff4c3ec25916f39a3a436020a09ecb07805866ab6a11e5f946db3612d093->leave($__internal_7494ff4c3ec25916f39a3a436020a09ecb07805866ab6a11e5f946db3612d093_prof);

        
        $__internal_01a7ef467917b2f4a7936d1945fd357be5848b83a6ed2ced85cac6fd14b5d478->leave($__internal_01a7ef467917b2f4a7936d1945fd357be5848b83a6ed2ced85cac6fd14b5d478_prof);

    }

    public function getTemplateName()
    {
        return "EloboostedBackofficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 129,  405 => 128,  401 => 127,  389 => 118,  385 => 117,  381 => 116,  369 => 107,  365 => 106,  361 => 105,  318 => 64,  309 => 63,  297 => 61,  294 => 60,  285 => 59,  273 => 57,  270 => 56,  261 => 55,  249 => 53,  246 => 52,  237 => 51,  225 => 49,  222 => 48,  213 => 47,  201 => 45,  198 => 44,  189 => 43,  175 => 39,  169 => 36,  163 => 33,  158 => 31,  154 => 30,  150 => 29,  146 => 28,  142 => 27,  138 => 26,  134 => 25,  130 => 24,  126 => 23,  122 => 22,  118 => 21,  114 => 20,  110 => 19,  106 => 18,  102 => 17,  98 => 15,  89 => 14,  75 => 9,  71 => 8,  67 => 7,  63 => 6,  59 => 5,  56 => 4,  47 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'EloboostedBackofficeBundle:Default:Layout.html.twig' %}

{% block extrastyles %}

    <link href=\"{{ asset('BOassets//vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('BOassets//vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('BOassets//vendors/datatables.net-bs/css/dataTables.bootstrap.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('BOassets//vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('BOassets//vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}\" rel=\"stylesheet\">


{% endblock %}

{% block extrascript %}


    <script src=\"{{ asset('BOassets//vendors/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets//vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets//vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets//vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets//vendors/datatables.net-buttons/js/buttons.flash.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets//vendors/datatables.net-buttons/js/buttons.html5.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets//vendors/datatables.net-buttons/js/buttons.print.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets//vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets//vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets//vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets//vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}\"></script>
    <script src=\"{{ asset('BOassets//vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets//vendors/jszip/dist/jszip.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets//vendors/pdfmake/build/pdfmake.min.js') }}\"></script>
    <script src=\"{{ asset('BOassets//vendors/pdfmake/build/vfs_fonts.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{ asset('js/highcharts.js') }}\">
    </script>

    <script type=\"text/javascript\" src=\"{{ asset('js/exporting.js') }}\">
    </script>
    <script type=\"text/javascript\">
        {{ chart(ob) }}
    </script>

{% endblock %}
{% block sousmenu1 %}
    <span class=\"count_top\"><i class=\"fa fa-user\"></i> Total Users</span>
    <div class=\"count\">{{ compts }}</div>
{% endblock %}
{% block sousmenu2 %}
    <span class=\"count_top\"><i class=\"fa fa-gamepad\"></i> Total Games</span>
    <div class=\"count\">{{ games }}</div>
{% endblock %}
{% block sousmenu3 %}
    <span class=\"count_top\"><i class=\"fa fa-trophy\"></i> Total Tournaments</span>
    <div class=\"count\">{{ tournois }}</div>
{% endblock %}
{% block sousmenu4 %}
    <span class=\"count_top\"><i class=\"fa fa-list\"></i> Total Posts</span>
    <div class=\"count\">{{ posts }}</div>
{% endblock %}
{% block sousmenu5 %}
    <span class=\"count_top\"><i class=\"fa fa-product-hunt\"></i> Total Products</span>
    <div class=\"count\">{{ prods }}</div>
{% endblock %}
{% block insiderowbottom %}

    <div class=\"col-md-12 col-sm-12 col-xs-12\">
        <div class=\"dashboard_graph\">

            <div class=\"row x_title\">
                <div class=\"col-md-6\">
                    <h3>Tournaments Activities <small>fees/date</small></h3>
                </div>
            </div>

            <div class=\"col-md-9 col-sm-9 col-xs-12\">
                <div id=\"linechart\" style=\"min-width: 400px; height: 400px;\"></div>
            </div>
            <div class=\"col-md-3 col-sm-3 col-xs-12 bg-white\">

                <div>
                    <div class=\"x_title\">
                        <h2>Top Profiles</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                            <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                                <ul class=\"dropdown-menu\" role=\"menu\">
                                    <li><a href=\"#\">Settings 1</a>
                                    </li>
                                    <li><a href=\"#\">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <ul class=\"list-unstyled top_profiles scroll-view\">
                        <li class=\"media event\">
                            <a class=\"pull-left border-aero profile_thumb\">
                                <i class=\"fa fa-user aero\"></i>
                            </a>
                            <div class=\"media-body\">
                                <a class=\"title\" href=\"#\">{{ top3[0].pseudo }}</a>
                                <p><strong>{{ top3[0].points }}</strong> Points </p>
                                <p> <small>{{ top3[0].email }}</small>
                                </p>
                            </div>
                        </li>
                        <li class=\"media event\">
                            <a class=\"pull-left border-green profile_thumb\">
                                <i class=\"fa fa-user green\"></i>
                            </a>
                            <div class=\"media-body\">
                                <a class=\"title\" href=\"#\">{{ top3[1].pseudo }}</a>
                                <p><strong>{{ top3[1].points }}</strong> Points </p>
                                <p> <small>{{ top3[1].email }}</small>
                                </p>
                            </div>
                        </li>
                        <li class=\"media event\">
                            <a class=\"pull-left border-blue profile_thumb\">
                                <i class=\"fa fa-user blue\"></i>
                            </a>
                            <div class=\"media-body\">
                                <a class=\"title\" href=\"#\">{{ top3[2].pseudo }}</a>
                                <p><strong>{{ top3[2].points }}</strong> Points </p>
                                <p> <small>{{ top3[2].email }}</small>
                                </p>
                            </div>
                        </li>


                    </ul>
                </div>


            </div>

            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}
", "EloboostedBackofficeBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/nn/src/Eloboosted/BackofficeBundle/Resources/views/Default/index.html.twig");
    }
}
