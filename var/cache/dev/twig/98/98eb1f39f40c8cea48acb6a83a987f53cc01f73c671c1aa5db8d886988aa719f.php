<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c7b6b24dad2c3d09f0721cbbae4f095fbbe739271ec7e70aef6fd1ae7a24a029 extends Twig_Template
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
        $__internal_7d1e7d01671509a7f4c277e49d5eef7b3a2bb56a7b24e186fba35c11861a863f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1e7d01671509a7f4c277e49d5eef7b3a2bb56a7b24e186fba35c11861a863f->enter($__internal_7d1e7d01671509a7f4c277e49d5eef7b3a2bb56a7b24e186fba35c11861a863f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d7fecebba75cf8cafc9482aa4185aa1e3d1a8b3437d6b27ebf387dd56c56cc20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fecebba75cf8cafc9482aa4185aa1e3d1a8b3437d6b27ebf387dd56c56cc20->enter($__internal_d7fecebba75cf8cafc9482aa4185aa1e3d1a8b3437d6b27ebf387dd56c56cc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7d1e7d01671509a7f4c277e49d5eef7b3a2bb56a7b24e186fba35c11861a863f->leave($__internal_7d1e7d01671509a7f4c277e49d5eef7b3a2bb56a7b24e186fba35c11861a863f_prof);

        
        $__internal_d7fecebba75cf8cafc9482aa4185aa1e3d1a8b3437d6b27ebf387dd56c56cc20->leave($__internal_d7fecebba75cf8cafc9482aa4185aa1e3d1a8b3437d6b27ebf387dd56c56cc20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
