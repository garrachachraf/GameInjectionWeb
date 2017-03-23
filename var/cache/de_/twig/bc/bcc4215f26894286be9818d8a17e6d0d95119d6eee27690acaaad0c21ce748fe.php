<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e19ea76a60e5be49992480d2fd5ec599b27f3bc16dd6707048d906d597d9bd53 extends Twig_Template
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
        $__internal_b5129717f78e14f56b59d8fe74e2f4ceb26e75cfde216e59865490d1c5c44b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5129717f78e14f56b59d8fe74e2f4ceb26e75cfde216e59865490d1c5c44b5f->enter($__internal_b5129717f78e14f56b59d8fe74e2f4ceb26e75cfde216e59865490d1c5c44b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_1d92957ca048417e467632a941e4a720e0e7605daf14fd07968b6a1408f03427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d92957ca048417e467632a941e4a720e0e7605daf14fd07968b6a1408f03427->enter($__internal_1d92957ca048417e467632a941e4a720e0e7605daf14fd07968b6a1408f03427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b5129717f78e14f56b59d8fe74e2f4ceb26e75cfde216e59865490d1c5c44b5f->leave($__internal_b5129717f78e14f56b59d8fe74e2f4ceb26e75cfde216e59865490d1c5c44b5f_prof);

        
        $__internal_1d92957ca048417e467632a941e4a720e0e7605daf14fd07968b6a1408f03427->leave($__internal_1d92957ca048417e467632a941e4a720e0e7605daf14fd07968b6a1408f03427_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
