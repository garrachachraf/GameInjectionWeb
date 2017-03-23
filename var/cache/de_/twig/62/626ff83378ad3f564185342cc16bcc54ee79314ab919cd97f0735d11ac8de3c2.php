<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_42ee6093573438f476bb43fe9c125525b115487e4e408bc0c9392570c84941e2 extends Twig_Template
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
        $__internal_699eb54479d0c085168d3e6d00a26a0683d1847686abc7dae9ca6f85ce43abb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699eb54479d0c085168d3e6d00a26a0683d1847686abc7dae9ca6f85ce43abb6->enter($__internal_699eb54479d0c085168d3e6d00a26a0683d1847686abc7dae9ca6f85ce43abb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_6aac6853b5cce9772c67b5ede3a46cd71b4356c6e5d2087c66cf37e856aaa4c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aac6853b5cce9772c67b5ede3a46cd71b4356c6e5d2087c66cf37e856aaa4c4->enter($__internal_6aac6853b5cce9772c67b5ede3a46cd71b4356c6e5d2087c66cf37e856aaa4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_699eb54479d0c085168d3e6d00a26a0683d1847686abc7dae9ca6f85ce43abb6->leave($__internal_699eb54479d0c085168d3e6d00a26a0683d1847686abc7dae9ca6f85ce43abb6_prof);

        
        $__internal_6aac6853b5cce9772c67b5ede3a46cd71b4356c6e5d2087c66cf37e856aaa4c4->leave($__internal_6aac6853b5cce9772c67b5ede3a46cd71b4356c6e5d2087c66cf37e856aaa4c4_prof);

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
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
