<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_e6db0f05d6cecb8c94af4b0dd6575198d6a4708a85396fe67d027e6abd7705d1 extends Twig_Template
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
        $__internal_30affd69de2155e406490d7ba967008de39a2effceaef3f928c61e526d10b9e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30affd69de2155e406490d7ba967008de39a2effceaef3f928c61e526d10b9e0->enter($__internal_30affd69de2155e406490d7ba967008de39a2effceaef3f928c61e526d10b9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a4f9691c5c449dad278e433e2d4e6efcb4908689bff2d7809210c222879317df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f9691c5c449dad278e433e2d4e6efcb4908689bff2d7809210c222879317df->enter($__internal_a4f9691c5c449dad278e433e2d4e6efcb4908689bff2d7809210c222879317df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_30affd69de2155e406490d7ba967008de39a2effceaef3f928c61e526d10b9e0->leave($__internal_30affd69de2155e406490d7ba967008de39a2effceaef3f928c61e526d10b9e0_prof);

        
        $__internal_a4f9691c5c449dad278e433e2d4e6efcb4908689bff2d7809210c222879317df->leave($__internal_a4f9691c5c449dad278e433e2d4e6efcb4908689bff2d7809210c222879317df_prof);

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
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
