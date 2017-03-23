<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_679716c9e80d6c2699af82c06ce9294406e74065eb7d64031f63e7f704a4dddd extends Twig_Template
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
        $__internal_e235bfd39b8e2024c108e9690e8e9053807cdc9b6aad08076f29dd77eecb4e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e235bfd39b8e2024c108e9690e8e9053807cdc9b6aad08076f29dd77eecb4e06->enter($__internal_e235bfd39b8e2024c108e9690e8e9053807cdc9b6aad08076f29dd77eecb4e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_5a09f923c8b39f5c76fe0efadcce42d0fd6c3c7ba441d7c14bcb3879a0d09a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a09f923c8b39f5c76fe0efadcce42d0fd6c3c7ba441d7c14bcb3879a0d09a4b->enter($__internal_5a09f923c8b39f5c76fe0efadcce42d0fd6c3c7ba441d7c14bcb3879a0d09a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_e235bfd39b8e2024c108e9690e8e9053807cdc9b6aad08076f29dd77eecb4e06->leave($__internal_e235bfd39b8e2024c108e9690e8e9053807cdc9b6aad08076f29dd77eecb4e06_prof);

        
        $__internal_5a09f923c8b39f5c76fe0efadcce42d0fd6c3c7ba441d7c14bcb3879a0d09a4b->leave($__internal_5a09f923c8b39f5c76fe0efadcce42d0fd6c3c7ba441d7c14bcb3879a0d09a4b_prof);

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
