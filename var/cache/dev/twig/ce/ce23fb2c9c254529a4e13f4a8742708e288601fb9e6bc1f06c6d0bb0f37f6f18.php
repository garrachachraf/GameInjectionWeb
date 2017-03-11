<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c3ad11703621a00b1b98ffd851127724a96c797605d851888aa7bb10e73ac38e extends Twig_Template
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
        $__internal_4d7787f079f82e38c855632990e2e06d0f9c6ebaef17c355186598ea34b76d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7787f079f82e38c855632990e2e06d0f9c6ebaef17c355186598ea34b76d09->enter($__internal_4d7787f079f82e38c855632990e2e06d0f9c6ebaef17c355186598ea34b76d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_2ef0f530e85a749f711739d4aee08e0c88d662eb8535e14aba394b3f59480c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef0f530e85a749f711739d4aee08e0c88d662eb8535e14aba394b3f59480c2e->enter($__internal_2ef0f530e85a749f711739d4aee08e0c88d662eb8535e14aba394b3f59480c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4d7787f079f82e38c855632990e2e06d0f9c6ebaef17c355186598ea34b76d09->leave($__internal_4d7787f079f82e38c855632990e2e06d0f9c6ebaef17c355186598ea34b76d09_prof);

        
        $__internal_2ef0f530e85a749f711739d4aee08e0c88d662eb8535e14aba394b3f59480c2e->leave($__internal_2ef0f530e85a749f711739d4aee08e0c88d662eb8535e14aba394b3f59480c2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Library/WebServer/Documents/sprintweb/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
