<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ffcc5bd22b3f2d946c45ce92fd0f2f6bebdbe04e0d4517d8bdaaafb5dfbe2f48 extends Twig_Template
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
        $__internal_e12ca9f3524607e06cd64d8ebbaff2519c700ecab847b316a29601eaeda7af95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e12ca9f3524607e06cd64d8ebbaff2519c700ecab847b316a29601eaeda7af95->enter($__internal_e12ca9f3524607e06cd64d8ebbaff2519c700ecab847b316a29601eaeda7af95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_084f9e63324a80e543acce091a78943cfde6a4c623c130d4bf5ca4e1ab78a2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084f9e63324a80e543acce091a78943cfde6a4c623c130d4bf5ca4e1ab78a2d2->enter($__internal_084f9e63324a80e543acce091a78943cfde6a4c623c130d4bf5ca4e1ab78a2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e12ca9f3524607e06cd64d8ebbaff2519c700ecab847b316a29601eaeda7af95->leave($__internal_e12ca9f3524607e06cd64d8ebbaff2519c700ecab847b316a29601eaeda7af95_prof);

        
        $__internal_084f9e63324a80e543acce091a78943cfde6a4c623c130d4bf5ca4e1ab78a2d2->leave($__internal_084f9e63324a80e543acce091a78943cfde6a4c623c130d4bf5ca4e1ab78a2d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
