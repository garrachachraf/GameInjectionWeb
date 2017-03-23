<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_36fdb6866ae8a74578e27cae2f8b324358ddb8daa8a1da38827ab364bf799c46 extends Twig_Template
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
        $__internal_8ff7a215bff387930958d60013d8ad7173145235fa2b05a45555b7cb956e4ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff7a215bff387930958d60013d8ad7173145235fa2b05a45555b7cb956e4ac3->enter($__internal_8ff7a215bff387930958d60013d8ad7173145235fa2b05a45555b7cb956e4ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a91ece1d1c15d6c5945577ccd6d298a30800b76eb069761a30583db0dfbf20be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91ece1d1c15d6c5945577ccd6d298a30800b76eb069761a30583db0dfbf20be->enter($__internal_a91ece1d1c15d6c5945577ccd6d298a30800b76eb069761a30583db0dfbf20be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8ff7a215bff387930958d60013d8ad7173145235fa2b05a45555b7cb956e4ac3->leave($__internal_8ff7a215bff387930958d60013d8ad7173145235fa2b05a45555b7cb956e4ac3_prof);

        
        $__internal_a91ece1d1c15d6c5945577ccd6d298a30800b76eb069761a30583db0dfbf20be->leave($__internal_a91ece1d1c15d6c5945577ccd6d298a30800b76eb069761a30583db0dfbf20be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
