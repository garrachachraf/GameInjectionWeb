<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3006a7623bc0d3d900b89640a3eb95169bbf66e2dfa4c530611a78185adfe994 extends Twig_Template
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
        $__internal_d18a3ee591776462676e7b163acaac208091a1c0ee99737b8e53194c65c35560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18a3ee591776462676e7b163acaac208091a1c0ee99737b8e53194c65c35560->enter($__internal_d18a3ee591776462676e7b163acaac208091a1c0ee99737b8e53194c65c35560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_abde84e30cd2f4d1b5016989f1bb473f10dadefcaae5c84cf17c2afb40a1653c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abde84e30cd2f4d1b5016989f1bb473f10dadefcaae5c84cf17c2afb40a1653c->enter($__internal_abde84e30cd2f4d1b5016989f1bb473f10dadefcaae5c84cf17c2afb40a1653c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d18a3ee591776462676e7b163acaac208091a1c0ee99737b8e53194c65c35560->leave($__internal_d18a3ee591776462676e7b163acaac208091a1c0ee99737b8e53194c65c35560_prof);

        
        $__internal_abde84e30cd2f4d1b5016989f1bb473f10dadefcaae5c84cf17c2afb40a1653c->leave($__internal_abde84e30cd2f4d1b5016989f1bb473f10dadefcaae5c84cf17c2afb40a1653c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
