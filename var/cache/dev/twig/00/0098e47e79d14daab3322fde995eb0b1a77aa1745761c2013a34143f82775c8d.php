<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_a8f5fd32080338a828ceb5d6ecefb5ac71707d377d368cb0d0eaa0c1672ca12a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15b364f8327b749c2a568a9494b377807cdbb42a177943460948f689ba83bfe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b364f8327b749c2a568a9494b377807cdbb42a177943460948f689ba83bfe5->enter($__internal_15b364f8327b749c2a568a9494b377807cdbb42a177943460948f689ba83bfe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_68922e798a082f96075c1a9a77ffd6718045726a5f381b4c5dd72b6cc8c85edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68922e798a082f96075c1a9a77ffd6718045726a5f381b4c5dd72b6cc8c85edb->enter($__internal_68922e798a082f96075c1a9a77ffd6718045726a5f381b4c5dd72b6cc8c85edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_15b364f8327b749c2a568a9494b377807cdbb42a177943460948f689ba83bfe5->leave($__internal_15b364f8327b749c2a568a9494b377807cdbb42a177943460948f689ba83bfe5_prof);

        
        $__internal_68922e798a082f96075c1a9a77ffd6718045726a5f381b4c5dd72b6cc8c85edb->leave($__internal_68922e798a082f96075c1a9a77ffd6718045726a5f381b4c5dd72b6cc8c85edb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
