<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c5e5c2011ac595a996c63e9a2066e1d57879e47deb8ed7a8f9f94978fa3cf48b extends Twig_Template
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
        $__internal_73fc2c072c6cd49b2383cd7547a321f969e4b430572e436358ff13eb1262acd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73fc2c072c6cd49b2383cd7547a321f969e4b430572e436358ff13eb1262acd9->enter($__internal_73fc2c072c6cd49b2383cd7547a321f969e4b430572e436358ff13eb1262acd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_debf0d391b7e35bc55540d3b7fced265f97f5d6f78e0c97192e2655ec35da0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_debf0d391b7e35bc55540d3b7fced265f97f5d6f78e0c97192e2655ec35da0bd->enter($__internal_debf0d391b7e35bc55540d3b7fced265f97f5d6f78e0c97192e2655ec35da0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_73fc2c072c6cd49b2383cd7547a321f969e4b430572e436358ff13eb1262acd9->leave($__internal_73fc2c072c6cd49b2383cd7547a321f969e4b430572e436358ff13eb1262acd9_prof);

        
        $__internal_debf0d391b7e35bc55540d3b7fced265f97f5d6f78e0c97192e2655ec35da0bd->leave($__internal_debf0d391b7e35bc55540d3b7fced265f97f5d6f78e0c97192e2655ec35da0bd_prof);

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
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
