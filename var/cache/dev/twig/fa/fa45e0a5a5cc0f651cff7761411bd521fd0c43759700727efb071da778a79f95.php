<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_3f6414d6fae7dd933978d072ac91598a13f2bcc0288867f6c8b60ab7c1934b32 extends Twig_Template
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
        $__internal_7f5a53cdf2c71dc3013ad9621b8bd953226b3aa1164e58572e9261645b9c842d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5a53cdf2c71dc3013ad9621b8bd953226b3aa1164e58572e9261645b9c842d->enter($__internal_7f5a53cdf2c71dc3013ad9621b8bd953226b3aa1164e58572e9261645b9c842d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_3f489b76851de4985e9308daa85dc4256eaddf766ad7b89c4aba3c4c7e57cb60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f489b76851de4985e9308daa85dc4256eaddf766ad7b89c4aba3c4c7e57cb60->enter($__internal_3f489b76851de4985e9308daa85dc4256eaddf766ad7b89c4aba3c4c7e57cb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_7f5a53cdf2c71dc3013ad9621b8bd953226b3aa1164e58572e9261645b9c842d->leave($__internal_7f5a53cdf2c71dc3013ad9621b8bd953226b3aa1164e58572e9261645b9c842d_prof);

        
        $__internal_3f489b76851de4985e9308daa85dc4256eaddf766ad7b89c4aba3c4c7e57cb60->leave($__internal_3f489b76851de4985e9308daa85dc4256eaddf766ad7b89c4aba3c4c7e57cb60_prof);

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
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
