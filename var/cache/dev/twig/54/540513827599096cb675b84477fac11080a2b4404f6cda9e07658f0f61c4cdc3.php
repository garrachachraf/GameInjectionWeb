<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_24463ec574760a3154e4b6f6933bae07c9c68ce4ba4c0a2afedd816775fe0756 extends Twig_Template
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
        $__internal_45e50788902b50140f01ad281ee28bd3ab0cba80ff4f2ada70917499a621d000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e50788902b50140f01ad281ee28bd3ab0cba80ff4f2ada70917499a621d000->enter($__internal_45e50788902b50140f01ad281ee28bd3ab0cba80ff4f2ada70917499a621d000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_f271a980e3a841e0c69a5a4bdabd8bccb5532d190a387619efe79d313550354b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f271a980e3a841e0c69a5a4bdabd8bccb5532d190a387619efe79d313550354b->enter($__internal_f271a980e3a841e0c69a5a4bdabd8bccb5532d190a387619efe79d313550354b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_45e50788902b50140f01ad281ee28bd3ab0cba80ff4f2ada70917499a621d000->leave($__internal_45e50788902b50140f01ad281ee28bd3ab0cba80ff4f2ada70917499a621d000_prof);

        
        $__internal_f271a980e3a841e0c69a5a4bdabd8bccb5532d190a387619efe79d313550354b->leave($__internal_f271a980e3a841e0c69a5a4bdabd8bccb5532d190a387619efe79d313550354b_prof);

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
", "@Framework/Form/button_row.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
