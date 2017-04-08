<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_66dee14a76d5f617f9a4023d52c6b99848c529604512d0df899df50c871a607d extends Twig_Template
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
        $__internal_51687f0757c1d859b47b5660857265cccac8297aa75586bf2747494b4d3d9dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51687f0757c1d859b47b5660857265cccac8297aa75586bf2747494b4d3d9dfe->enter($__internal_51687f0757c1d859b47b5660857265cccac8297aa75586bf2747494b4d3d9dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_12e13da12954000b39af94a77fd9b124c23b8a390bf0d22da9a0ffcd8092be8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e13da12954000b39af94a77fd9b124c23b8a390bf0d22da9a0ffcd8092be8e->enter($__internal_12e13da12954000b39af94a77fd9b124c23b8a390bf0d22da9a0ffcd8092be8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_51687f0757c1d859b47b5660857265cccac8297aa75586bf2747494b4d3d9dfe->leave($__internal_51687f0757c1d859b47b5660857265cccac8297aa75586bf2747494b4d3d9dfe_prof);

        
        $__internal_12e13da12954000b39af94a77fd9b124c23b8a390bf0d22da9a0ffcd8092be8e->leave($__internal_12e13da12954000b39af94a77fd9b124c23b8a390bf0d22da9a0ffcd8092be8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\testmerge\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
