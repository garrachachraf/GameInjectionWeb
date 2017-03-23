<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_50aa3faeea5b7bbd50232f2531753e49f209d586b203e1c9e0f666967472826d extends Twig_Template
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
        $__internal_c219f0895fe9e53be1335e6fdc45092277b58a10efe7d8991b681d12dd212a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c219f0895fe9e53be1335e6fdc45092277b58a10efe7d8991b681d12dd212a91->enter($__internal_c219f0895fe9e53be1335e6fdc45092277b58a10efe7d8991b681d12dd212a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_5dc530a0b66d3e6c6d7edf1f9c71c55b671fc18304b895c679bfc39cedc277dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dc530a0b66d3e6c6d7edf1f9c71c55b671fc18304b895c679bfc39cedc277dc->enter($__internal_5dc530a0b66d3e6c6d7edf1f9c71c55b671fc18304b895c679bfc39cedc277dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c219f0895fe9e53be1335e6fdc45092277b58a10efe7d8991b681d12dd212a91->leave($__internal_c219f0895fe9e53be1335e6fdc45092277b58a10efe7d8991b681d12dd212a91_prof);

        
        $__internal_5dc530a0b66d3e6c6d7edf1f9c71c55b671fc18304b895c679bfc39cedc277dc->leave($__internal_5dc530a0b66d3e6c6d7edf1f9c71c55b671fc18304b895c679bfc39cedc277dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
