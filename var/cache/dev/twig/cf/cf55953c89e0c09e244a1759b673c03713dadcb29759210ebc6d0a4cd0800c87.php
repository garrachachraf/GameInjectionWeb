<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_3f3af8a4d7c61b7524b52901f407ab123a9c775b06da14eeb538bffae96d107e extends Twig_Template
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
        $__internal_a2b76fae53e1e0fc0a400005240010a6d3072913ebe6b169a7d2ed722c11158f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b76fae53e1e0fc0a400005240010a6d3072913ebe6b169a7d2ed722c11158f->enter($__internal_a2b76fae53e1e0fc0a400005240010a6d3072913ebe6b169a7d2ed722c11158f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_566bd119b1768ba41da99feb6d0a8cd7f5ac84d020223e6057cfdd99bc914e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566bd119b1768ba41da99feb6d0a8cd7f5ac84d020223e6057cfdd99bc914e0a->enter($__internal_566bd119b1768ba41da99feb6d0a8cd7f5ac84d020223e6057cfdd99bc914e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a2b76fae53e1e0fc0a400005240010a6d3072913ebe6b169a7d2ed722c11158f->leave($__internal_a2b76fae53e1e0fc0a400005240010a6d3072913ebe6b169a7d2ed722c11158f_prof);

        
        $__internal_566bd119b1768ba41da99feb6d0a8cd7f5ac84d020223e6057cfdd99bc914e0a->leave($__internal_566bd119b1768ba41da99feb6d0a8cd7f5ac84d020223e6057cfdd99bc914e0a_prof);

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
