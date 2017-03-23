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
        $__internal_5fcd49cd757e020cac0be70bfd976b4cfb91da7080730b0462b27576b3b4c252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fcd49cd757e020cac0be70bfd976b4cfb91da7080730b0462b27576b3b4c252->enter($__internal_5fcd49cd757e020cac0be70bfd976b4cfb91da7080730b0462b27576b3b4c252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b5301184c4ef8e250c77e29d758bf71733cd2fb5e71b3f6b8a5a445a3ac8747b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5301184c4ef8e250c77e29d758bf71733cd2fb5e71b3f6b8a5a445a3ac8747b->enter($__internal_b5301184c4ef8e250c77e29d758bf71733cd2fb5e71b3f6b8a5a445a3ac8747b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5fcd49cd757e020cac0be70bfd976b4cfb91da7080730b0462b27576b3b4c252->leave($__internal_5fcd49cd757e020cac0be70bfd976b4cfb91da7080730b0462b27576b3b4c252_prof);

        
        $__internal_b5301184c4ef8e250c77e29d758bf71733cd2fb5e71b3f6b8a5a445a3ac8747b->leave($__internal_b5301184c4ef8e250c77e29d758bf71733cd2fb5e71b3f6b8a5a445a3ac8747b_prof);

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
