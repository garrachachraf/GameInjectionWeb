<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_84958100f290a5a454edab71cb4a02313172609bb0cda7ccf01571f0f9b151de extends Twig_Template
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
        $__internal_5f519c6c3dd614b68c73986bcf32fce0648375cfec6122d304055d32bea40fb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f519c6c3dd614b68c73986bcf32fce0648375cfec6122d304055d32bea40fb6->enter($__internal_5f519c6c3dd614b68c73986bcf32fce0648375cfec6122d304055d32bea40fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1f1c2720bf65006f7d5bc5cbbfe5ec0711ca5eefe7116e90f560b601fd88e107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1c2720bf65006f7d5bc5cbbfe5ec0711ca5eefe7116e90f560b601fd88e107->enter($__internal_1f1c2720bf65006f7d5bc5cbbfe5ec0711ca5eefe7116e90f560b601fd88e107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5f519c6c3dd614b68c73986bcf32fce0648375cfec6122d304055d32bea40fb6->leave($__internal_5f519c6c3dd614b68c73986bcf32fce0648375cfec6122d304055d32bea40fb6_prof);

        
        $__internal_1f1c2720bf65006f7d5bc5cbbfe5ec0711ca5eefe7116e90f560b601fd88e107->leave($__internal_1f1c2720bf65006f7d5bc5cbbfe5ec0711ca5eefe7116e90f560b601fd88e107_prof);

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
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
