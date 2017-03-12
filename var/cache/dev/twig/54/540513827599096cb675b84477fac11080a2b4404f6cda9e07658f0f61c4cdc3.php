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
        $__internal_ad4dc38952af0a8356d57eed6167497bbbe6972dba31507619cb4da22b8bd1a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad4dc38952af0a8356d57eed6167497bbbe6972dba31507619cb4da22b8bd1a2->enter($__internal_ad4dc38952af0a8356d57eed6167497bbbe6972dba31507619cb4da22b8bd1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_72f183a5c91df7f61468e2089d324a6ada0b72eda319d364b9eb9b73d04e548a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f183a5c91df7f61468e2089d324a6ada0b72eda319d364b9eb9b73d04e548a->enter($__internal_72f183a5c91df7f61468e2089d324a6ada0b72eda319d364b9eb9b73d04e548a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ad4dc38952af0a8356d57eed6167497bbbe6972dba31507619cb4da22b8bd1a2->leave($__internal_ad4dc38952af0a8356d57eed6167497bbbe6972dba31507619cb4da22b8bd1a2_prof);

        
        $__internal_72f183a5c91df7f61468e2089d324a6ada0b72eda319d364b9eb9b73d04e548a->leave($__internal_72f183a5c91df7f61468e2089d324a6ada0b72eda319d364b9eb9b73d04e548a_prof);

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
", "@Framework/Form/button_row.html.php", "/Library/WebServer/Documents/sprintweb3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
