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
        $__internal_033c97e538217570d4079d1d17cb1e7eda8cf8f4bcaca2d4aca025e9add05e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_033c97e538217570d4079d1d17cb1e7eda8cf8f4bcaca2d4aca025e9add05e34->enter($__internal_033c97e538217570d4079d1d17cb1e7eda8cf8f4bcaca2d4aca025e9add05e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ea7e21015fe03ec14992903a44a8afebb1f13e7d00028dbd15b24482989bd43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7e21015fe03ec14992903a44a8afebb1f13e7d00028dbd15b24482989bd43d->enter($__internal_ea7e21015fe03ec14992903a44a8afebb1f13e7d00028dbd15b24482989bd43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_033c97e538217570d4079d1d17cb1e7eda8cf8f4bcaca2d4aca025e9add05e34->leave($__internal_033c97e538217570d4079d1d17cb1e7eda8cf8f4bcaca2d4aca025e9add05e34_prof);

        
        $__internal_ea7e21015fe03ec14992903a44a8afebb1f13e7d00028dbd15b24482989bd43d->leave($__internal_ea7e21015fe03ec14992903a44a8afebb1f13e7d00028dbd15b24482989bd43d_prof);

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
