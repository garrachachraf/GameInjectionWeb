<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c9a117c0b140f92f427d6ae8d5f8ff246a253bdf3c82e35602e0dd5e9be33a1e extends Twig_Template
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
        $__internal_fdff2a0660b3711820f8ca110e0b8e7eb78dbe6f18d0d843a34a0fe338851fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdff2a0660b3711820f8ca110e0b8e7eb78dbe6f18d0d843a34a0fe338851fdf->enter($__internal_fdff2a0660b3711820f8ca110e0b8e7eb78dbe6f18d0d843a34a0fe338851fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_3592b3154e68793bfb9b99a71277e933cbc91f161bded5a6b084b7094109c60f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3592b3154e68793bfb9b99a71277e933cbc91f161bded5a6b084b7094109c60f->enter($__internal_3592b3154e68793bfb9b99a71277e933cbc91f161bded5a6b084b7094109c60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_fdff2a0660b3711820f8ca110e0b8e7eb78dbe6f18d0d843a34a0fe338851fdf->leave($__internal_fdff2a0660b3711820f8ca110e0b8e7eb78dbe6f18d0d843a34a0fe338851fdf_prof);

        
        $__internal_3592b3154e68793bfb9b99a71277e933cbc91f161bded5a6b084b7094109c60f->leave($__internal_3592b3154e68793bfb9b99a71277e933cbc91f161bded5a6b084b7094109c60f_prof);

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
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
