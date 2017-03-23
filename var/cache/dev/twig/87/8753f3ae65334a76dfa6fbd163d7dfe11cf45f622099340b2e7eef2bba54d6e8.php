<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_679716c9e80d6c2699af82c06ce9294406e74065eb7d64031f63e7f704a4dddd extends Twig_Template
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
        $__internal_4258d27bc8b74b61bde39273f31ffbbcbb4ec0b34ae8e9f5c4eef11d5b842bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4258d27bc8b74b61bde39273f31ffbbcbb4ec0b34ae8e9f5c4eef11d5b842bd0->enter($__internal_4258d27bc8b74b61bde39273f31ffbbcbb4ec0b34ae8e9f5c4eef11d5b842bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_6139d725bd0d8868d493e9420a3d051169741afc8b08110a0bc690eface78c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6139d725bd0d8868d493e9420a3d051169741afc8b08110a0bc690eface78c39->enter($__internal_6139d725bd0d8868d493e9420a3d051169741afc8b08110a0bc690eface78c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4258d27bc8b74b61bde39273f31ffbbcbb4ec0b34ae8e9f5c4eef11d5b842bd0->leave($__internal_4258d27bc8b74b61bde39273f31ffbbcbb4ec0b34ae8e9f5c4eef11d5b842bd0_prof);

        
        $__internal_6139d725bd0d8868d493e9420a3d051169741afc8b08110a0bc690eface78c39->leave($__internal_6139d725bd0d8868d493e9420a3d051169741afc8b08110a0bc690eface78c39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\sprintweb\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
