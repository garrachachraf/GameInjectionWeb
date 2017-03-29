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
        $__internal_9decd24617f7817d635ad3db17ceb3e0dca84ac62428d472e9f0fa556dc09461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9decd24617f7817d635ad3db17ceb3e0dca84ac62428d472e9f0fa556dc09461->enter($__internal_9decd24617f7817d635ad3db17ceb3e0dca84ac62428d472e9f0fa556dc09461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_444d411b9a970e677ab87c4a1509ed2cbb2e7b06da24aa9a103027074735d29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444d411b9a970e677ab87c4a1509ed2cbb2e7b06da24aa9a103027074735d29c->enter($__internal_444d411b9a970e677ab87c4a1509ed2cbb2e7b06da24aa9a103027074735d29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9decd24617f7817d635ad3db17ceb3e0dca84ac62428d472e9f0fa556dc09461->leave($__internal_9decd24617f7817d635ad3db17ceb3e0dca84ac62428d472e9f0fa556dc09461_prof);

        
        $__internal_444d411b9a970e677ab87c4a1509ed2cbb2e7b06da24aa9a103027074735d29c->leave($__internal_444d411b9a970e677ab87c4a1509ed2cbb2e7b06da24aa9a103027074735d29c_prof);

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
