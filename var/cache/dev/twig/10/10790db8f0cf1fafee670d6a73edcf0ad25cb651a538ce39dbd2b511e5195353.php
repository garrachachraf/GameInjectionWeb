<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_940e9c3d6e86a3be5ebcab25238dd35fe890e187857561ab4b024f015557b481 extends Twig_Template
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
        $__internal_ffd70803f72c65de5f64e7f42298c4a40c81728b1c65eef1afd273e3b57f3d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd70803f72c65de5f64e7f42298c4a40c81728b1c65eef1afd273e3b57f3d7c->enter($__internal_ffd70803f72c65de5f64e7f42298c4a40c81728b1c65eef1afd273e3b57f3d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_02eb6d1dd31ea4ac3147949f6467835c4914749228df4190a63e08dccda42961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02eb6d1dd31ea4ac3147949f6467835c4914749228df4190a63e08dccda42961->enter($__internal_02eb6d1dd31ea4ac3147949f6467835c4914749228df4190a63e08dccda42961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ffd70803f72c65de5f64e7f42298c4a40c81728b1c65eef1afd273e3b57f3d7c->leave($__internal_ffd70803f72c65de5f64e7f42298c4a40c81728b1c65eef1afd273e3b57f3d7c_prof);

        
        $__internal_02eb6d1dd31ea4ac3147949f6467835c4914749228df4190a63e08dccda42961->leave($__internal_02eb6d1dd31ea4ac3147949f6467835c4914749228df4190a63e08dccda42961_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/nn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
