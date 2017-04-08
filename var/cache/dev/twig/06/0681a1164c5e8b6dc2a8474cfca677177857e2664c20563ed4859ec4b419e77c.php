<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_65999e104256e2705bbee155d4652e853c33e1f4a2b5f3f3e3890e58b250a087 extends Twig_Template
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
        $__internal_34b79df472821102f23854d478f01c0d6c10f7a5e2bfc0fc84dcf325eae80626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b79df472821102f23854d478f01c0d6c10f7a5e2bfc0fc84dcf325eae80626->enter($__internal_34b79df472821102f23854d478f01c0d6c10f7a5e2bfc0fc84dcf325eae80626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_249c30970ab39b9a1499e2a62bd3bd280b9527318ea4b3653477e9e476814452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249c30970ab39b9a1499e2a62bd3bd280b9527318ea4b3653477e9e476814452->enter($__internal_249c30970ab39b9a1499e2a62bd3bd280b9527318ea4b3653477e9e476814452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_34b79df472821102f23854d478f01c0d6c10f7a5e2bfc0fc84dcf325eae80626->leave($__internal_34b79df472821102f23854d478f01c0d6c10f7a5e2bfc0fc84dcf325eae80626_prof);

        
        $__internal_249c30970ab39b9a1499e2a62bd3bd280b9527318ea4b3653477e9e476814452->leave($__internal_249c30970ab39b9a1499e2a62bd3bd280b9527318ea4b3653477e9e476814452_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
