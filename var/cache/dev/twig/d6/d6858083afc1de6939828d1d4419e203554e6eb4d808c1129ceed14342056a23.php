<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3f7cc90ea24bfb0a67c31a8780d09bf4f7115fa089c8c230bca800e61beaf2d8 extends Twig_Template
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
        $__internal_9f877d30b557db32ad020588f0fcf16ff12443b14d108d528e2c730d09651367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f877d30b557db32ad020588f0fcf16ff12443b14d108d528e2c730d09651367->enter($__internal_9f877d30b557db32ad020588f0fcf16ff12443b14d108d528e2c730d09651367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_b9969de79cd855f3981aef9ea45392915ce91fae4e5da7175357f803c66e4395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9969de79cd855f3981aef9ea45392915ce91fae4e5da7175357f803c66e4395->enter($__internal_b9969de79cd855f3981aef9ea45392915ce91fae4e5da7175357f803c66e4395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_9f877d30b557db32ad020588f0fcf16ff12443b14d108d528e2c730d09651367->leave($__internal_9f877d30b557db32ad020588f0fcf16ff12443b14d108d528e2c730d09651367_prof);

        
        $__internal_b9969de79cd855f3981aef9ea45392915ce91fae4e5da7175357f803c66e4395->leave($__internal_b9969de79cd855f3981aef9ea45392915ce91fae4e5da7175357f803c66e4395_prof);

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
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
