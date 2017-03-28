<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_62bacc5a0f9d3df79902b5e33fbbe19d48a29061758406b9db30598371b3c872 extends Twig_Template
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
        $__internal_22e9cef59991ba957a19cf94dd3917a2ee3d5b2d7665ae1a4b8c2f343acd94a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e9cef59991ba957a19cf94dd3917a2ee3d5b2d7665ae1a4b8c2f343acd94a7->enter($__internal_22e9cef59991ba957a19cf94dd3917a2ee3d5b2d7665ae1a4b8c2f343acd94a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c6a0fe4b574431d14c52e877f87acf3601e3d765514b6a55fba7f16aa08a286a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a0fe4b574431d14c52e877f87acf3601e3d765514b6a55fba7f16aa08a286a->enter($__internal_c6a0fe4b574431d14c52e877f87acf3601e3d765514b6a55fba7f16aa08a286a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_22e9cef59991ba957a19cf94dd3917a2ee3d5b2d7665ae1a4b8c2f343acd94a7->leave($__internal_22e9cef59991ba957a19cf94dd3917a2ee3d5b2d7665ae1a4b8c2f343acd94a7_prof);

        
        $__internal_c6a0fe4b574431d14c52e877f87acf3601e3d765514b6a55fba7f16aa08a286a->leave($__internal_c6a0fe4b574431d14c52e877f87acf3601e3d765514b6a55fba7f16aa08a286a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
