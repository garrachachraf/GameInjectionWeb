<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8a06ca5f0b4b2ad6042f96f7fece8b7a603db5c99388f050616d7cdd868ad099 extends Twig_Template
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
        $__internal_a416777c949de997ce8ff846af24cbcd9503dc3a29ba375a517e210079d7f4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a416777c949de997ce8ff846af24cbcd9503dc3a29ba375a517e210079d7f4ff->enter($__internal_a416777c949de997ce8ff846af24cbcd9503dc3a29ba375a517e210079d7f4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_1ff41dab99ea4263ca6edbce5032ad74ed9ed5b057c144528c442d5c0c47e48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff41dab99ea4263ca6edbce5032ad74ed9ed5b057c144528c442d5c0c47e48c->enter($__internal_1ff41dab99ea4263ca6edbce5032ad74ed9ed5b057c144528c442d5c0c47e48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a416777c949de997ce8ff846af24cbcd9503dc3a29ba375a517e210079d7f4ff->leave($__internal_a416777c949de997ce8ff846af24cbcd9503dc3a29ba375a517e210079d7f4ff_prof);

        
        $__internal_1ff41dab99ea4263ca6edbce5032ad74ed9ed5b057c144528c442d5c0c47e48c->leave($__internal_1ff41dab99ea4263ca6edbce5032ad74ed9ed5b057c144528c442d5c0c47e48c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
