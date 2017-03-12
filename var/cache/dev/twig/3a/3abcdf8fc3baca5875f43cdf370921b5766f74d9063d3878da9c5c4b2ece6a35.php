<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5a192bfbb948dcc1f71e563f1f48886fbc332284c825ef373f17aa9d71d2dfec extends Twig_Template
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
        $__internal_10ed48f9474a42be94ba6f36173c4767181916a399e6ce98cce22a3cae7ec244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10ed48f9474a42be94ba6f36173c4767181916a399e6ce98cce22a3cae7ec244->enter($__internal_10ed48f9474a42be94ba6f36173c4767181916a399e6ce98cce22a3cae7ec244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_60b58f9e1da84a61796f495dc1000c49c2522c4499f97b33fc489572f6ea7a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b58f9e1da84a61796f495dc1000c49c2522c4499f97b33fc489572f6ea7a0b->enter($__internal_60b58f9e1da84a61796f495dc1000c49c2522c4499f97b33fc489572f6ea7a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_10ed48f9474a42be94ba6f36173c4767181916a399e6ce98cce22a3cae7ec244->leave($__internal_10ed48f9474a42be94ba6f36173c4767181916a399e6ce98cce22a3cae7ec244_prof);

        
        $__internal_60b58f9e1da84a61796f495dc1000c49c2522c4499f97b33fc489572f6ea7a0b->leave($__internal_60b58f9e1da84a61796f495dc1000c49c2522c4499f97b33fc489572f6ea7a0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
