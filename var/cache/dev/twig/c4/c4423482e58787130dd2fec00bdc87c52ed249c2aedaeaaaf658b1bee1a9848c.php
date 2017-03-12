<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2cb1371feeba8ed1699bb22d0631c90b6324fcdcb002d06c6353e70521a4997c extends Twig_Template
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
        $__internal_881823115b65014f608897026513b81a3455624092d48f44bec604f6a4a00784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_881823115b65014f608897026513b81a3455624092d48f44bec604f6a4a00784->enter($__internal_881823115b65014f608897026513b81a3455624092d48f44bec604f6a4a00784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6beca8debfe8ed2c749d8aef383bef2d4030560fd2ed32904aada436c0969965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6beca8debfe8ed2c749d8aef383bef2d4030560fd2ed32904aada436c0969965->enter($__internal_6beca8debfe8ed2c749d8aef383bef2d4030560fd2ed32904aada436c0969965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_881823115b65014f608897026513b81a3455624092d48f44bec604f6a4a00784->leave($__internal_881823115b65014f608897026513b81a3455624092d48f44bec604f6a4a00784_prof);

        
        $__internal_6beca8debfe8ed2c749d8aef383bef2d4030560fd2ed32904aada436c0969965->leave($__internal_6beca8debfe8ed2c749d8aef383bef2d4030560fd2ed32904aada436c0969965_prof);

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
", "@Framework/Form/hidden_row.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
