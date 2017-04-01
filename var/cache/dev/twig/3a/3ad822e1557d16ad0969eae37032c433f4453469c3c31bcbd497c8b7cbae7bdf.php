<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0bb7e6b8630edd06e7a98062ff4a9b607c09da7c736d116a38aad018ee9e694e extends Twig_Template
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
        $__internal_7025e67702dd4c5f8595bb60a8bff2338e6557cd8efa01857a0105a200e9658d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7025e67702dd4c5f8595bb60a8bff2338e6557cd8efa01857a0105a200e9658d->enter($__internal_7025e67702dd4c5f8595bb60a8bff2338e6557cd8efa01857a0105a200e9658d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_7689e95c1cf7f771981979e7ad17d20afb75721af258e1212429198b01ca2628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7689e95c1cf7f771981979e7ad17d20afb75721af258e1212429198b01ca2628->enter($__internal_7689e95c1cf7f771981979e7ad17d20afb75721af258e1212429198b01ca2628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7025e67702dd4c5f8595bb60a8bff2338e6557cd8efa01857a0105a200e9658d->leave($__internal_7025e67702dd4c5f8595bb60a8bff2338e6557cd8efa01857a0105a200e9658d_prof);

        
        $__internal_7689e95c1cf7f771981979e7ad17d20afb75721af258e1212429198b01ca2628->leave($__internal_7689e95c1cf7f771981979e7ad17d20afb75721af258e1212429198b01ca2628_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
