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
        $__internal_e52f23154785da519a84bdd8807b5ce522a40c5f674b2ea62765060b26dd595b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e52f23154785da519a84bdd8807b5ce522a40c5f674b2ea62765060b26dd595b->enter($__internal_e52f23154785da519a84bdd8807b5ce522a40c5f674b2ea62765060b26dd595b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_20948ad5abdf474293543728187016136c9ed784849aa0677c87cb82e1ba84e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20948ad5abdf474293543728187016136c9ed784849aa0677c87cb82e1ba84e0->enter($__internal_20948ad5abdf474293543728187016136c9ed784849aa0677c87cb82e1ba84e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e52f23154785da519a84bdd8807b5ce522a40c5f674b2ea62765060b26dd595b->leave($__internal_e52f23154785da519a84bdd8807b5ce522a40c5f674b2ea62765060b26dd595b_prof);

        
        $__internal_20948ad5abdf474293543728187016136c9ed784849aa0677c87cb82e1ba84e0->leave($__internal_20948ad5abdf474293543728187016136c9ed784849aa0677c87cb82e1ba84e0_prof);

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
