<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_cd73fd6e7315c51a88286dd640f0e589b10c7c52cae7dc713be9406e064ac837 extends Twig_Template
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
        $__internal_6621ec460d3e06a482def581b1b614d91b0d2ca088b6cd18478dd7ca16f8a9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6621ec460d3e06a482def581b1b614d91b0d2ca088b6cd18478dd7ca16f8a9de->enter($__internal_6621ec460d3e06a482def581b1b614d91b0d2ca088b6cd18478dd7ca16f8a9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_926167ba49a30eddf3dd5d2928c28b7f0f09a22045ff3f84a72454455848f44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926167ba49a30eddf3dd5d2928c28b7f0f09a22045ff3f84a72454455848f44c->enter($__internal_926167ba49a30eddf3dd5d2928c28b7f0f09a22045ff3f84a72454455848f44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6621ec460d3e06a482def581b1b614d91b0d2ca088b6cd18478dd7ca16f8a9de->leave($__internal_6621ec460d3e06a482def581b1b614d91b0d2ca088b6cd18478dd7ca16f8a9de_prof);

        
        $__internal_926167ba49a30eddf3dd5d2928c28b7f0f09a22045ff3f84a72454455848f44c->leave($__internal_926167ba49a30eddf3dd5d2928c28b7f0f09a22045ff3f84a72454455848f44c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
